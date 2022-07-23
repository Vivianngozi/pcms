@extends('layout.app')

@section('content')

<!-- <form method="post" action="/posts"> -->

{!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\postcontroller@store', 'files'=> true]) !!}

      <div class="form-group">
          {!! Form::label('title', 'Title:') !!}

          {!! Form::text('title', null, ['class'=> 'form-control']) !!} <br><br>

          {!! Form::label('content', 'Content:') !!}

          {!! Form::textarea('content', null, ['class'=> 'form-control']) !!}
      </div>
    <!-- <input type="text" name="title" placeholder="Enter title"><br><br>
    
    <textarea name="content" id="" cols="30" rows="10" placeholder="Enter content"></textarea>
    {{csrf_field()}} -->
    <div class="form-group">
        {!! Form::file('file', ['class'=>'form-control']) !!}
    </div>
    {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
    <!-- <input type="submit" name="submit"> -->
<!-- </form> -->

    {!! Form::close() !!}

    @if(count($errors) > 0)

         <div class="alert alert-danger">

              <ul>
                  @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                  @endforeach
              </ul>
         </div>

    @endif




@stop
@section('footer')
@stop