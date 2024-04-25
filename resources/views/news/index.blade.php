<x-layout>
    <x-header>

    </x-header>

    @foreach($news as $new)
        <x-news_card :title="$new->title"></x-news_card>
    @endforeach

</x-layout>
