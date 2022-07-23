@extends('layout.app')

@section('content')
     <h1>This is rubbish page</h1>

@if(count($items))
<ul>
    @foreach($items as $things)
    <li>{{$things}}</li>
    @endforeach
</ul>

@endif
@stop