
@extends('layout.app')
@section('content')


<h1>{{$title}} </h1>

   @if (count($reminders) > 0)
<ul class = "list-group"> 
@foreach($reminders as $reminder)

<li class = "list-group-item">{{$reminder}}</li>

@endforeach 

</ul> 

   @endif
  @endsection