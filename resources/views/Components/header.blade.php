<div class="container z-10 sticky top-5 mt-5 flex h-14 w-full flex-row justify-between rounded-md border border-slate-600
border-opacity-50 bg-white bg-opacity-10 px-1.5 shadow-md backdrop-blur-sm">
    <div class="flex flex-row">
        <div class="mr-2 flex items-center text-center">
            <a href="./" class="text-white px-5 opacity-50 text-md">Logo</a>
        </div>
        <div class="flex items-center text-center">
            <a href="/news" class="text-white hover:text-opacity-90 bg-white mx-4 p-2 px-3 rounded-md bg-opacity-0 hover:bg-opacity-10 border-white border border-opacity-0 hover:border-opacity-10
               @if($_SERVER['REQUEST_URI'] == '/news')
                    text-opacity-100
               @else
                    text-opacity-50
               @endif
            ">News</a>
            <a href="/contacts" class="text-white hover:text-opacity-90 bg-white mx-4 p-2 px-3 rounded-md
                @if($_SERVER['REQUEST_URI'] == '/contacts')
                    text-opacity-100
                    @else
                    text-opacity-50
                @endif
                bg-opacity-0 hover:bg-opacity-10 border-white border border-opacity-0 hover:border-opacity-10 transition-all ease-in-out"
            >Contacts</a>
        </div>
    </div>
    <div class="flex flex-row">
        {{$slot}}
    </div>
</div>
