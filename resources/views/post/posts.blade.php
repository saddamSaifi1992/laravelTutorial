@extends('layouts.home')
@section('content')
<div class="p-16">
    <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-3 m-5 mb-10"> 
    @foreach ($posts as $post )
        <x-post  :post="$post" />
    @endforeach
    </div>
</div>
<div class="clear-both"></div>
<div class="container mx-auto">
    {{ $posts->links() }}
</div>

@endsection