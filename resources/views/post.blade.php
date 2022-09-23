@extends('layout')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>
        By <a href="/author/{{$post->author->username}}"> {{$post->author->name}}</a>
        in <a href="/categories/{{$post->category->slug}}"> {{$post->category->name}}</a>
    </p>
    <article style="padding-bottom: 20px;">
        <p>
            {!! $post->body !!}
        </p>
    </article>
    <a href="/">Go Back</a>
@endsection

