@extends('adminlte::page')

@section('title', 'Cauldron VX')

@section('content_header')
    <h1>View Your Weekly Reminders </h1>
@stop

@section('content')
<table class = "table table-bordered">
<tr> 
<th>Week Day </th>
<th>Workday  </th>
<th>Holiday</th>
<th>Marrige Anniversary</th>
<th>A celebration</th>
<th>Mourning Day</th>
<th>National Holiday</th>
<th>Something Else</th>



</tr> 



@foreach ($weeklyreminder as $row )
<tr> 
<td>{{$row['whichday']}} </td> 
<td>{{$row['workday']}} </td> 
<td>{{$row['holiday']}} </td> 
<td>{{$row['marrige']}} </td> 
<td>{{$row['celebration']}} </td> 
<td>{{$row['mourning']}} </td> 
<td>{{$row['national']}} </td> 
<td>{{$row['other']}} </td> 

</tr> 


@endforeach 



</table >






<div style="text-align:center;padding:1em 0;"> <h2><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1185241"><span style="color:gray;"></span><br /></a></h2> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=large&timezone=Asia%2FDhaka" width="100%" height="140" frameborder="0" seamless></iframe> </div>





@stop 