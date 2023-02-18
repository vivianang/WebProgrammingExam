@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Hello {{ auth()->user()->name }}, Here is some News for you</h1>
    </div>
    <div class="card-body">
        @forelse($news as $news)
        <h2><b><u>{{ $news->title }}</u></b></h2>
        <p>{{ $news->content }}</p>
        @empty
        @endforelse
    </div>

</div>
@endsection