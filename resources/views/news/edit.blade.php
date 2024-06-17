<x-layout>
    <x-header>

    </x-header>
    <form method="post" class="flex flex-col min-w-[300px] w-[40%]" action="{{route("news.update")}}">
        @method('PUT')
        @csrf
        <h1  class="self-center font-black text-4xl text-white mb-8">Edit post</h1>

        <label for="post_id">Post ID</label>
        @foreach($news as $new)
            <option value="{{$new->}}"></option>
        @endforeach

        <label data-tooltip-target="title-tooltip" class="w-fit text-white text-opacity-50" for="title">Title</label>
        <div id="title-tooltip" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Recommended amount of symbols: 20
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <input id="title" class="h-10 pl-3 mb-2 bg-white bg-opacity-10 border border-opacity-10 border-white
        rounded-md text-white outline-none" type="text">

        <label class="text-white text-opacity-50" for="content">Content</label>
        <textarea id="content" class="pl-3 h-20 mb-2 bg-white bg-opacity-10 border border-opacity-10 border-white
        rounded-md text-white outline-none"></textarea>

        <label class="text-white text-opacity-50" for="category">Category</label>
        <select name="category" id="" class="h-10 pl-3 mb-2 bg-white bg-opacity-10 border border-opacity-10 border-white
        rounded-md text-white outline-none appearance-none">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->category}}</option>
            @endforeach
        </select>
        <button type="submit" class="h-10 pl-3 mb-2 bg-white bg-opacity-10 border border-opacity-10 border-white
        rounded-md text-white outline-none">Create</button>
    </form>
</x-layout>
