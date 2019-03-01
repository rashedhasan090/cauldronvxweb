@extends('adminlte::page')

@section('title', 'Cauldron VX')

@section('content_header')
    <h1>Estimate How Much sleep you need </h1>
@stop

@section('content')
<table class = "table table-bordered">
<tr> 
<th>Miles You Traveled</th>
<th>Your Workhours </th>
<th>Your Exercisehours </th>
<th>Your Age </th>
<th>Your Calories</th>
</tr> 



@foreach ($sleepestimation as $row )
<tr> 
<td>{{$row['milestraveled']}} </td> 
<td>{{$row['workhours']}} </td> 
<td>{{$row['exercisehours']}} </td> 
<td>{{$row['age']}} </td> 
<td>{{$row['calories']}} </td> 
</tr> 


@endforeach 



</table >










@stop 