<div class=" wrapper relative flex overflow-hidden h-10 bg-gray-200 items-center w-full border-b-2 border-gray-200">
    <div class=" my-slide-in  top-1/5 ">
        
    <div class="flex gap-2">
       @foreach ($items as $item )
            <p class="  w-52 mx-3 text-center hover:cursor-pointer">
                {{$item}}
            </p>
        @endforeach
        </div>

    </div>

</div>
