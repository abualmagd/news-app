<a href="/id" class="flex flex-col w-full">
    <figure class=" h-52 w-full bg-gray-400">
        <img   src="{{ $article['image_url'] }}"
        class=" object-cover h-full w-full"
        alt="{{ $article['source_name'] }}">
    </figure>
    <p class=" line-clamp-3">
        {{ $article['description'] }}
    </p>
    <p class=" text-base-content/50 text-sm mt-1"> {{ $article['pubDate'] }} </p>     

</a>