@extends('adminlte::page')

@section('title', 'Cauldron VX')

@section('content_header')
    <h1>About Myself </h1>
@stop

@section('content')
<table class = "table table-bordered">
<tr> 
<th>My FirstName</th>
<th>My Lastname </th>
<th>My Phone Number </th>
<th>My Address </th>
<th>My Occupation</th>
<th>My Age</th>
</tr> 



@foreach ($_my_profile   as $row )
<tr> 
<td>{{$row['fname']}} </td> 
<td>{{$row['lname']}} </td> 
<td>{{$row['phone']}} </td> 
<td>{{$row['address']}} </td> 
<td>{{$row['occupation']}} </td> 
<td>{{$row['Age']}} </td> 

</tr> 


@endforeach 



</table >





<div style="text-align:center;padding:1em 0;"> <h2><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1185241"><span style="color:gray;"></span><br /></a></h2> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=large&timezone=Asia%2FDhaka" width="100%" height="140" frameborder="0" seamless></iframe> </div>





@stop 