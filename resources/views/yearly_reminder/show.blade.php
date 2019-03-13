@extends('adminlte::page')

@section('title', 'Cauldron VX')

@section('content_header')
    <h1>Check Your yearly Reminders </h1>
@stop

@section('content')
<table class = "table table-bordered">
<tr> 
<th>Year </th>
<th>Month  </th>
<th>Day</th>
<th>Event</th>
<th>Birthday</th>
<th>Marrige</th>
<th>Celebration</th>
<th>Mourning</th>
<th>National Day</th>
<th>Your Note  </th>


</tr> 



@foreach ($yearlyreminder as $row )
<tr> 
<td>{{$row['whichyear']}} </td> 
<td>{{$row['whichmonth']}} </td> 
<td>{{$row['monthday']}} </td> 
<td>{{$row['yourevent']}} </td> 
<td>{{$row['birthday']}} </td> 
<td>{{$row['marrige']}} </td> 
<td>{{$row['celebration']}} </td> 
<td>{{$row['mourning']}} </td> 
<td>{{$row['national']}} </td> 
<td>{{$row['note']}} </td> 
</tr> 


@endforeach 



</table >






<div style="text-align:center;padding:1em 0;"> <h2><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1185241"><span style="color:gray;"></span><br /></a></h2> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=large&timezone=Asia%2FDhaka" width="100%" height="140" frameborder="0" seamless></iframe> </div>





@stop 