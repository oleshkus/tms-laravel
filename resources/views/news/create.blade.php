<x-layout>
    <x-header>
        <div class="flex items-center text-center">Cancel</div>
    </x-header>
    <div class="container flex pt-60 justify-center h-[91.6vh]">
        <form method="post" class="flex flex-col min-w-[300px] w-[40%]" action="{{route("news.store")}}">
            @csrf
            <h1  class="self-center font-black text-4xl text-white mb-8">Create new post</h1>

            <label data-tooltip-target="title-tooltip" class="w-fit text-white text-opacity-50" for="title">Title</label>
            <div id="title-tooltip" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Recommended amount of symbols: 20
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <input id="title" class="h-10 pl-3 bg-white bg-opacity-10 border border-opacity-10 border-white
        rounded-md text-white outline-none" type="text">

            <label class="text-white text-opacity-50" for="content">Content</label>
            <textarea id="content" class="pl-3 h-20 bg-white bg-opacity-10 border border-opacity-10 border-white
        rounded-md text-white outline-none"></textarea>

            <label class="text-white text-opacity-50" for="content">Category</label>
            <button type="button" class="text-white" id="dropdown_button" aria-expanded="true">
                Categories
            </button>
            <ul class="" role="menu" aria-labelledby="dropdown_button" aria-orientation="vertical" tabindex="-1">
                {{dd($categories)}}
            </ul>



        </form>
    </div>

</x-layout>
