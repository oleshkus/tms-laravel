<x-layout>
    <x-header>
        <div class="flex items-center text-center">
            <a href="{{route('news.create')}}" class="text-white hover:text-opacity-90 text-opacity-50 bg-white mx-4 p-2 px-3 rounded-md
		bg-opacity-0 hover:bg-opacity-10 border-white border border-opacity-0 hover:border-opacity-10
		">Create news</a>
        </div>
    </x-header>
    <div class="container flex flex-row flex-wrap justify-between items-start">
        @foreach($news as $new)
            <x-news_card :title="$new->title" :created="$new->created_at" :content="$new->content" :author="$new->author" :category="$new->category">

            </x-news_card>
        @endforeach
    </div>


</x-layout>
