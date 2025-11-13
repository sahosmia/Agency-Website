@props(['isActive'])

<span @class([ 'inline-flex items-center px-3 py-1 rounded-full text-xs font-medium' , $isActive
    ? 'bg-emerald-100 text-emerald-700 border border-emerald-200' : 'bg-rose-100 text-rose-700 border border-rose-200' ,
    ])>
    <span @class([ 'w-2 h-2 rounded-full mr-2' , $isActive ? 'bg-emerald-500' : 'bg-rose-500' , ])></span>
    {{ $isActive ? 'Active' : 'Inactive' }}
</span>