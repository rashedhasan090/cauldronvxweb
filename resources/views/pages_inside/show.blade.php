@extends('adminlte::page')

@section('title', 'Cauldron VX')

@section('content_header')
    <h1>Your Personal Schedule </h1>
@stop

@section('content')
<table class = "table table-bordered">
<tr> 
<th>Weekday</th>
<th>Wakeup Time </th>
<th>Breakfast Time  </th>
<th>Exercise  </th>
<th>Working Hour</th>
<th>Start For Office</th>
<th>Return Home At</th>
<th>Evening Activity </th>
<th>Night TV</th>
<th>Bedtime</th>

</tr> 



@foreach ($personalschedule as $row )
<tr> 
<td>{{$row['weekday']}} </td> 
<td>{{$row['wakeuptime']}} </td> 
<td>{{$row['bfasttime']}} </td> 
<td>{{$row['exercise']}} </td> 
<td>{{$row['goingtowork']}} </td> 
<td>{{$row['startworkingat']}} </td> 
<td>{{$row['returnhome']}} </td> 
<td>{{$row['eveningactivity']}} </td> 
<td>{{$row['watchingtv']}} </td> 
<td>{{$row['bedtime']}} </td> 
</tr> 


@endforeach 



</table >





<div style="text-align:center;padding:1em 0;"> <h2><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1185241"><span style="color:gray;"></span><br /></a></h2> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=large&timezone=Asia%2FDhaka" width="100%" height="140" frameborder="0" seamless></iframe> </div>





@stop 