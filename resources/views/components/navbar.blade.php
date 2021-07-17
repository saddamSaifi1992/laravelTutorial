<div class="w-screen flex flex-row items-center p-1 justify-between bg-green-200 shadow-xs ">
    <div class="ml-8 text-lg text-gray-700 hidden md:flex text-green-800 ">My Website</div>
    <span class="w-screen md:w-1/3 h-10 bg-gray-200 cursor-pointer border border-gray-300 text-sm rounded-full flex">
        <input type="search" name="serch" placeholder="Search"
            class="flex-grow px-4 rounded-l-full rounded-r-full text-sm focus:outline-none">
        <i class="fas fa-search m-3 mr-5 text-lg text-gray-700 w-4 h-4">
        </i>
    </span>
    <div class="flex flex-row-reverse mr-4 ml-4 md:hidden">
        <i class="fas fa-bars"></i>
    </div>
    <div class="flex flex-row-reverse mr-8 hidden md:flex">
        <a class="text-white text-center bg-green-400 px-4 py-2 m-2 rounded-2xl" href="{{url('/users') }}">User's</a>
        <a class="text-white text-center bg-green-500 px-4 py-2 m-2 rounded-2xl" href="{{url('/posts') }}">Post's</a>
    </div>
</div>
