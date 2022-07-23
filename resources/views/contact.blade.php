<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contact Page</h1>
</body>
</html> -->


@extends('layout/app')

@section('content')

<h1>Contact</h1>


@if(count($people))
     <ul>
         @foreach($people as $person)
             <li>{{$person}}</li>
         @endforeach
     </ul>

@endif

@stop
