@extends('admin.layouts.app')

@section('title', $pageTitle)

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $pageTitle }} Settings</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.pages.update', $pageName) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                @foreach ($fields['text_fields'] as $field => $rules)
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            @if ($field === 'terms_content' || $field === 'privacy_content')
                                                <x-admin.ckeditor name="{{ $field }}" label="{{ Str::of($field)->replace('_', ' ')->title() }}" :value="old($field, $settings[$field] ?? '')" />
                                            @else
                                                <label for="{{ $field }}">{{ Str::of($field)->replace('_', ' ')->title() }}</label>
                                                @if (in_array($field, $fields['textarea_fields']))
                                                    <textarea name="{{ $field }}" id="{{ $field }}" class="form-control" rows="5">{{ old($field, $settings[$field] ?? '') }}</textarea>
                                                @else
                                                    <input type="text" name="{{ $field }}" id="{{ $field }}" class="form-control" value="{{ old($field, $settings[$field] ?? '') }}">
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                @endforeach

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="item_limit">Item Limit</label>
                                        <input type="number" name="item_limit" id="item_limit" class="form-control" value="{{ old('item_limit', $settings['item_limit'] ?? 8) }}">
                                    </div>
                                </div>

                                @foreach ($fields['image_fields'] as $field => $rules)
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="{{ $field }}">{{ Str::of($field)->replace('_', ' ')->title() }}</label>
                                            <input type="file" name="{{ $field }}" id="{{ $field }}" class="form-control">
                                            @if (isset($settings[$field]))
                                                <img src="{{ asset('storage/' . $settings[$field]) }}" alt="{{ $field }}" class="img-thumbnail mt-2" width="200">
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            @if (!empty($fields['checkbox_fields']))
                                <div class="row">
                                    <div class="col-12">
                                        <hr>
                                        <h4>Section Visibility</h4>
                                    </div>
                                    @foreach ($fields['checkbox_fields'] as $field => $rules)
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="{{ $field }}" name="{{ $field }}" value="1" {{ old($field, $settings[$field] ?? false) ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="{{ $field }}">{{ Str::of($field)->replace('_is_active', '')->replace('_', ' ')->title() }}</label>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                            <button type="submit" class="btn btn-primary">Update Settings</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
