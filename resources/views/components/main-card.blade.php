<a href="/id" class='w-full'>
   <div class="card  cursor-pointer bg-base-100 image-full w-full h-full shadow-sm">
    <figure>
      <img
        src="{{ $article['image_url'] }}"
        alt="{{ $article['source_name'] }}" />
    </figure>
    <div class="mt-auto card-body pb-2 pr-2">
      
      <p class=" font-bold line-clamp-3">{{$article['title']}}</p>
        
         <p>{{$article['pubDate']}}</p>     
   
         <p>

         </p>
    </div>
  </div> 
</a>
