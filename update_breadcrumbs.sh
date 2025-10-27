#!/bin/bash

echo "Starting to update breadcrumbs..."

find resources/views/admin -type f -name "*.blade.php" \
-not -path "*/layouts/*" \
-not -path "*/partials/*" | while read file; do

  DIR_NAME_RAW=$(dirname "$file" | xargs basename)
  DIR_NAME_TITLE=$(echo "$DIR_NAME_RAW" | sed -e 's/[-_]/ /g' | awk '{for(i=1;i<=NF;i++) $i=toupper(substr($i,1,1)) substr($i,2); print $0}')

  FILE_NAME_RAW=$(basename "$file" .blade.php)
  FILE_NAME_TITLE=$(echo "$FILE_NAME_RAW" | sed -e 's/[-_]/ /g' | awk '{for(i=1;i<=NF;i++) $i=toupper(substr($i,1,1)) substr($i,2); print $0}')

  # Remove old breadcrumbs section
  sed -i "/@section('breadcrumbs'/,/@endsection/d" "$file"

  BREADCRUMB_SECTION="@section('breadcrumbs')\n"

  if [[ "$DIR_NAME_RAW" != "admin" ]]; then
    ROUTE_INDEX="admin.$DIR_NAME_RAW.index"
    BREADCRUMB_SECTION+="    <span class=\"text-gray-500\">/</span>\n    <a href=\"{{ route('$ROUTE_INDEX') }}\" class=\"hover:underline\">$DIR_NAME_TITLE</a>\n"
  fi

  if [[ "$FILE_NAME_RAW" != "index" ]]; then
      BREADCRUMB_SECTION+="    <span class=\"text-gray-500\">/</span>\n    <a href=\"#\" class=\"hover:underline\">$FILE_NAME_TITLE</a>\n"
  fi

  BREADCRUMB_SECTION+="@endsection"

  # Add the new breadcrumbs section after the header-title section.
   awk -v breadcrumb="$BREADCRUMB_SECTION" '/@section\('\'header-title/ {print; print breadcrumb; next}1' "$file" > tmp && mv tmp "$file"

done

echo "Done updating breadcrumbs."
