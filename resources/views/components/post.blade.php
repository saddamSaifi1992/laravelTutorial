 <div class="bg-white overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
     <div class="m-2 text-justify text-sm">
         <p class="text-left text-xs"> <i class="fa fa-user"></i> {{ $post->user->name }}</p>
         <p class="text-right text-xs">{{ $post->updated_at }}</p>
         <h2 class="font-bold text-lg  mb-8">{{ $post->title }}</h2>
         <p class="text-xs">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
             labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
             laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
             voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
             non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
         </p>
     </div>
     <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-2 ">
         <div class="w-full text-left mt-4"> 
             <a class="text-green-400 uppercase font-bold text-sm " href="{{ url('post/'.$post->id) }}">{{ $post->comment()->count() }} Total
                 Comment's</a>
         </div>
         <div class="w-full text-right mt-4"> 
             <a class="text-green-400 uppercase font-bold text-sm" href="{{ url('post/'.$post->id) }}">Read More</a>
         </div>
     </div>
 </div>
