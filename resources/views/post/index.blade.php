@extends('layouts.home')
@section('content')
<div class="grid grid-cols-3 gap-4 m-12">
    @foreach ($users as $u )
        <x-User  :user="$u" />
    @endforeach
</div>
<div class="clear-both"></div>
{{ $users->links() }}

@endsection