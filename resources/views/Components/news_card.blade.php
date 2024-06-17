<div class="container mt-5 flex h-64 w-72 sm:justify-center sm:align-middle flex-col rounded-md border border-slate-600 border-opacity-50 bg-white bg-opacity-10 p-4 shadow-md backdrop-blur-sm">
    <div class="inline">
        <div
            class="mb-3 p-0.5 mr-2 break-words line-clamp-1 inline w-fit bg-blue-800 px-3 text-blue-400 shadow-md shadow-gray-900"
            id="category">{{$category}}
        </div>
        <div
            class="mb-3 p-0.5 break-words line-clamp-none inline w-fit bg-blue-800 px-3 text-blue-400 shadow-md shadow-gray-900"
            id="category">{{$author}}
        </div>
    </div>


    <h2 class="h-max pb-2 break-words text-xl leading-6 text-white line-clamp-3" id="title">{{$title}}</h2>
    <div class="flex h-full justify-between flex-col">
        <p class="text-white text-opacity-20 line-clamp-5">{{$content}}</p>
        <div class="container inline-flex flex-row justify-between">
            <p class="text-white self-center text-opacity-20">{{ date('d.m.Y', strtotime($created)) }}</p>

            <div class="flex justify-center" role="group">
                <a href="{{route('news.show', $news)}}" class="text-white cursor-pointer text-opacity-50 hover:text-opacity-90 bg-white p-2 px-3 rounded-l-md bg-opacity-0 hover:bg-opacity-10 border-white border-l border-t border-b border-opacity-10 hover:border-opacity-20">
                    Read
                </a>
                <a href="" class="text-whit cursor-pointer hover:opacity-100 opacity-50 text-opacity-50 bg-white p-2 px-3 rounded-r-md bg-opacity-0 hover:bg-opacity-10 border-white border-r border-t border-b border-opacity-20">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

</div>
