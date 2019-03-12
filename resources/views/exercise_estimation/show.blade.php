@extends('adminlte::page')

@section('title', 'Cauldron VX')

@section('content_header')
    <h1>How long should you Exercise </h1>
@stop

@section('content')
<table class = "table table-bordered">
<tr> 
<th>Your Gender</th>
<th>Your Height </th>
<th>Your Weight</th>
<th>Your Workhours</th>

</tr> 



@foreach ($exerciseestimation as $row )
<tr> 
<td>{{$row['gender']}} </td> 
<td>{{$row['height']}} </td> 
<td>{{$row['weight']}} </td> 
<td>{{$row['workhours']}} </td> 

</tr> 


@endforeach 



</table >










@stop 