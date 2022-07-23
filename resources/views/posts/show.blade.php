@extends('layout.app')

@section('content')


    <h1>{{$post->title}} <br> </h1>

    <p>{{$post->content}}</p>

    <p><a href="{{route('posts.edit', $post->id)}}">edit</a></p>

@stop