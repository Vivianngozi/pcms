@extends('layout.app')

@section('content')


     <!-- <form method="post" action="/posts/{{$post->id}}"> -->

     <!-- {!! Form::open(['method'=>'PATCH', 'action'=>'App\Http\Controllers\postcontroller@update', 'route'=>['posts.update', $post->id]]) !!} -->
     {!! Form::model($post, ['method'=>'PATCH', 'route'=>['posts.update', $post->id]]) !!}
        
     <!--for update, laravel don't understand the method post. That is why we will use the PUT method -->
         {!! Form::label('title', 'Title: ') !!}

         {!! Form::text('title', null, ["class"=>'btn btn-success']) !!} <br> <br>

         {!! Form::label('content', 'Content: ') !!}

         {!! Form::text('content', null, ["class"=>'btn btn-success']) !!}


         {!! Form::submit('Update Post', ['class'=>'btn btn-primary']) !!}


         <!-- <input type="hidden" name="_method" value="PUT">

         <input type="text" name="title" placeholder="Enter title" value="{{$post->title}}"><br><br>
    
         <textarea name="content" id="" cols="30" rows="10" placeholder="Enter content">{{$post->content}}</textarea>
         
         <input type="submit" name="submit" value="edit"> -->
     <!-- </form> -->

     {!! Form::close() !!}

     <!-- <form method="post" action="/posts/{{$post->id}}">
         <input type="hidden" name="_method" value="DELETE">

         {{csrf_field()}}

         <input type="submit" name="delete" value="Delete">
     </form> -->


     <!-- delete  -->

     {!! Form::open(['method'=> 'DELETE', 'route'=>['posts.destroy', $post->id] ]) !!}

           {!! Form::submit('Delete', ['class'=>'btn btn-success']) !!}


     {!! Form::close() !!}

@stop