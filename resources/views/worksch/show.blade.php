@extends('adminlte::page')

@section('title', 'Cauldron VX')

@section('content_header')
    <h1>View Your Work Schedule  </h1>
@stop

@section('content')
<table class = "table table-bordered">
<tr> 
<th>Week Day </th>
<th>Office Sign In  </th>
<th>Making Report</th>
<th>Files To Check</th>
<th>Meeting Today</th>
<th>Customer Service</th>
<th>Project</th>
<th>Signout</th>
<th>File Pending</th>
<th>Add Own </th>


</tr> 



@foreach ($workschedule as $row )
<tr> 
<td>{{$row['weekday']}} </td> 
<td>{{$row['makereport']}} </td> 
<td>{{$row['filescheck']}} </td> 
<td>{{$row['meetingtoday']}} </td> 
<td>{{$row['signintime']}} </td> 
<td>{{$row['customerservice']}} </td> 
<td>{{$row['project']}} </td> 
<td>{{$row['signout']}} </td> 
<td>{{$row['pendingfile']}} </td> 
<td>{{$row['addown']}} </td> 
</tr> 


@endforeach 



</table >






<div style="text-align:center;padding:1em 0;"> <h2><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1185241"><span style="color:gray;"></span><br /></a></h2> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=large&timezone=Asia%2FDhaka" width="100%" height="140" frameborder="0" seamless></iframe> </div>





@stop 