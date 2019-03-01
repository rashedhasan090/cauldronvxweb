@extends('adminlte::page')

@section('title', 'Cauldron VX')

@section('content_header')
    <h1>Estimate How Much calories you need </h1>
@stop

@section('content')
<table class = "table table-bordered">
<tr> 
<th>Your Sleephours</th>
<th>Your gender </th>
<th>Your Active Hours </th>
<th>Your Waterliter </th>
<th>Your Exercisehours</th>
<th>Medicine</th>
</tr> 



@foreach ($calorieestimation as $row )
<tr> 
<td>{{$row['sleephours']}} </td> 
<td>{{$row['gender']}} </td> 
<td>{{$row['activeworkhours']}} </td> 
<td>{{$row['waterliter']}} </td> 
<td>{{$row['exercisehours']}} </td> 
<td>{{$row['medicine']}} </td> 
</tr> 


@endforeach 



</table >










@stop 