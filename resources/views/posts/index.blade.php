@extends('layout.app')

@section('content')


<!-- <h1>Thank you for filling this form</h1> -->

<ul>
    @foreach($posts as $post)
       
         <li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></li>

    @endforeach

</ul>

@stop

@section('footer')

@stop