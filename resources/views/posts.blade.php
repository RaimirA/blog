@extends('layout')

@section('content')
    @foreach ($posts as $post)
    <article>
        <h1>
            <a href="/posts/{{$post->url}}"><?=$post->title ?></a>
        </h1>
        <p>{{$post->excerpt}} </p>
    </article>
    @endforeach
@endsection
