<x-layout>
    <x-header>
        <div class="flex items-center text-center">Cancel</div>
    </x-header>
    <form method="post" action="{{route("news.store")}}">
        @csrf
        <label for="">
            Title
            <input type="text">
        </label>
        <label for="">
            Content
            <textarea class=""></textarea>
        </label>
    </form>
    <div class="container flex flex-col">

    </div>
</x-layout>
