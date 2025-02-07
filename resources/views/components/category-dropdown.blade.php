<!--  Category -->
<div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
    <select name="category" class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
        @if(request('category'))
        <option value="">All</option>
        @else
        <option value="" selected>All</option>
        @endif
        @foreach($categories as $category)
        @if(request('category') == $category->slug)
        <option value="{{ $category->slug }}" selected>{{ $category->name }}</option>
        @else
        <option value="{{ $category->slug }}">{{ $category->name }}</option>
        @endif
        @endforeach
    </select>

    <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22" height="22" viewBox="0 0 22 22">
        <g fill="none" fill-rule="evenodd">
            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
            </path>
            <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
        </g>
    </svg>
</div>