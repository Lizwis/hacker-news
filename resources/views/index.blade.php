@extends('layouts.app')
@section('content')
    @php $count = 0 @endphp
    @foreach ($stories as $story)
        @php $count++ @endphp
        <div class="col-12 post-title pt-1">
            <span class="post-details post-title">{{ $count }}.</span> <a href="{{ $story->url }}">
                {{ $story->title }} (elronnd.net)</a>
        </div>
        <div class="col-12 post-details pb-1">
            {{ $story->score }} points by {{ $story->posted_by }} {{ 4 }} hours ago | hide |
            <a href="/" class="post-details"> {{ count($story->comments) }} comments</a>
        </div>
    @endforeach
@endsection
