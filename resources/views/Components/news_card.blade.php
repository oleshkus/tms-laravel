<div class="container mt-5 flex h-64 w-72 sm:justify-center sm:align-middle flex-col rounded-md border border-slate-600
border-opacity-50 bg-white bg-opacity-10 p-4 shadow-md backdrop-blur-sm">
    <div class="inline">
        <div class="mb-3 p-0.5 mr-2 break-words line-clamp-1 inline w-fit bg-blue-800 px-3 text-blue-400 shadow-md shadow-gray-900"
             id="category">{{$category}}
        </div>
        <div class="mb-3 p-0.5 break-words line-clamp-none inline w-fit bg-blue-800 px-3 text-blue-400 shadow-md shadow-gray-900"
             id="category">{{$author}}
        </div>
    </div>


    <h2 class="h-max pb-2 break-words text-xl leading-6 text-white line-clamp-3" id="title">{{$title}}</h2>
    <div class="flex h-full justify-between flex-col">
        <p class="text-white text-opacity-20 line-clamp-5">{{$content}}</p>
        <div class="container inline-flex flex-row justify-between">
            <p class="text-white self-center text-opacity-20">{{ $created = date('d.m.Y')}}</p>
            <button class="text-white text-opacity-50 hover:text-opacity-90 bg-white mx-4 p-2 px-3 rounded-md
		bg-opacity-0 hover:bg-opacity-10 border-white border border-opacity-0 hover:border-opacity-10">Read</button>
        </div>
    </div>

</div>
