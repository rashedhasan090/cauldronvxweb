@extends('adminlte::page')

@section('title', 'Cauldron VX')

@section('content_header')
    <h1>How Long Should you exercise today </h1>
@stop

@section('content')

{!! Form::open(['action'  =>  'ExerciseEstimationController@store', 'method' =>  'POST']) !!}

<div class = "form-group" > 
{{Form::text('gender', '', ['class'  =>  'form-control', 'placeholder' => 'What is your Gender '])}}<br> 
{{Form::text('weight', '', ['class'  =>  'form-control', 'placeholder' => 'What is your weight '])}}<br> 
{{Form::text('height', '', ['class'  =>  'form-control', 'placeholder' => 'What is your height'])}}<br> 
{{Form::text('workhours', '', ['class'  =>  'form-control', 'placeholder' => 'For how long did you work yesterday'])}}<br> 






</div> 

<center> 
{{Form::submit('Calculate', ['class' => 'btn btn-primary'])}}
</center>

<br>

{!! Form::close() !!}

<div style="text-align:center;padding:1em 0;"> <h2><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1185241"><span style="color:gray;"></span><br /></a></h2> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=large&timezone=Asia%2FDhaka" width="100%" height="140" frameborder="0" seamless></iframe> </div>

@stop 