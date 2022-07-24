@extends('layout.app')

@section('content')


<!-- <h1>Thank you for filling this form</h1> -->

<ul>
    @foreach($posts as $post)
        <div class="image-control">
            <!-- <img src="/images/{{$post->path}}" alt=""> -->

            <!-- with directory -->

            <img src="{{$post->path}}" alt="">
        </div>
       
         <li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></li>

    @endforeach

</ul>

@stop

@section('footer')

@stop