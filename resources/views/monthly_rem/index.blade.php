@extends('adminlte::page')

@section('title', 'Cauldron VX')

@section('content_header')
    <h1>Make Your Monthly  Schedule</h1>
@stop

@section('content')

{!! Form::open(['action'  =>  'monthlyReminderController@store', 'method' =>  'POST']) !!}

<div class = "form-group" > 
        {{Form::text('whichmonth', '', ['class'  =>  'form-control', 'placeholder' => 'Schedule For Which Month'])}}<br> 
        {{Form::text('monthday', '', ['class'  =>  'form-control', 'placeholder' => 'Schedule For Which day of the month '])}}<br> 
{{Form::text('yourevent', '', ['class'  =>  'form-control', 'placeholder' => 'Schedule For Which event'])}}<br> 
{{Form::text('relatedtowork', '', ['class'  =>  'form-control', 'placeholder' => 'Is it something related with your work'])}}<br> 
{{Form::text('note', '', ['class'  =>  'form-control', 'placeholder' => 'Add your special note'])}}<br> 


</div> 

<center> 
{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
</center>


<div style="text-align:center;padding:1em 0;"> <h2><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1185241"><span style="color:gray;"></span><br /></a></h2> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=large&timezone=Asia%2FDhaka" width="100%" height="140" frameborder="0" seamless></iframe> </div>

@stop 