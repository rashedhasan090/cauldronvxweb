@extends('adminlte::page')

@section('content')

<div class = "box-body"> 

<table class = "table table-striped table-hover" id="siswa-table" > 


    <thread> 
<th> # </th>
<th> Name </th>
<th> Email </th>
    </thread> 


    <tbody>
<?php 
$no = 1 ;

?> 
        @foreach ($users as $key => $value)


        <tr> 
                <th>{{$no++ }}</th > 
        <th>{{$value->name }}</th > 
            <th>{{$value->email }}</th > 
        </tr> 

    </tbody> 

</table> 


</div> 

@endsection 


 @section('css')

<link rel = "stylesheet " href = "/css/admin_costom.css" > 


 @endsection 