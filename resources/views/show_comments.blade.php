@extends('layouts.app')
@section('content')
    <div class="col-12 post-title pt-1">
        <a href="{{ $story_comments->url }}">
            {{ $story_comments->title }} (elronnd.net)</a>
    </div>
    <div class="col-12 post-details pb-1">
        {{ $story_comments->score }} points by {{ $story_comments->posted_by }} {{ 4 }} hours ago | hide |
        <a href="/comments/{{ $story_comments->story_id }}" class="post-details"> {{ count($story_comments->comments) }}
            comments</a>
    </div>

    <div class="col-12 post-details pb-1">
        <textarea cols="100" rows="5"></textarea>
    </div>
    <div class="col-12 pb-5">
        <button>add comment</button>
    </div>

    @foreach ($story_comments->comments as $comment)
        <div class="col-12 pb-1 post-details">
            {{ $comment->posted_by }} {{ 4 }} hours ago
        </div>
        <div class="col-12 pb-3 ">
            {{ $comment->comment }}
        </div>

    @endforeach
@endsection
