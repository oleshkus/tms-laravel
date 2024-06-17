<x-layout>
    <x-header>
        <a href="{{ url()->previous() }}" class="flex items-center text-center">Cancel</a>
    </x-header>
    <div class="container flex pt-60 justify-center h-[91.6vh]">
        <form method="post" class="flex flex-col min-w-[300px] w-[40%]" action="{{route("news.store")}}">
            @csrf
            <h1 class="self-center font-black text-4xl text-white mb-8">Create new post</h1>

            <label data-tooltip-target="title-tooltip" class="w-fit text-white text-opacity-50"
                   for="title">Title</label>
            <div id="title-tooltip" role="tooltip"
                 class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Recommended amount of symbols: 20
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <input id="title" name="title" class="h-10 pl-3 mb-2 bg-white bg-opacity-10 border border-opacity-10 border-white
        rounded-md text-white outline-none" type="text" value="{{ old('title') }}">
            @error('title')
            {{ $message }}
            @enderror

            <label class="text-white text-opacity-50" for="content">Content</label>
            <textarea name="content" id="content" class="pl-3 h-20 mb-2 bg-white bg-opacity-10 border border-opacity-10 border-white
        rounded-md text-white outline-none">{{ old('content') }}</textarea>
            @error('content')
            {{ $message }}
            @enderror

            <label class="text-white text-opacity-50" for="category">Category</label>
            <select name="category" id="" class="h-10 pl-3 mb-2 bg-white bg-opacity-10 border border-opacity-10 border-white
        rounded-md text-white outline-none appearance-none">
                @foreach($categories as $category)
                    <option>{{$category->category}}</option>
                @endforeach
            </select>
            @error('category')
            {{ $message }}
            @enderror

            <label class="text-white text-opacity-50" for="author">Author</label>
            <input id="author" class="h-10 pl-3 mb-2 bg-white bg-opacity-10 border border-opacity-10 border-white
        rounded-md text-white outline-none" name="author" type="text" value="{{ old('author') }}">
            @error('author')
            {{ $message }}
            @enderror

            <button type="submit" class="h-10 pl-3 mb-2 bg-white bg-opacity-10 border border-opacity-10 border-white
        rounded-md text-white outline-none">Create
            </button>
        </form>
    </div>

</x-layout>
