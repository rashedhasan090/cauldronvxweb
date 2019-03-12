@extends('adminlte::page')

@section('title', 'Cauldron VX')

@section('content_header')
    <h1>Estimate How Much Calories You Need </h1>
@stop

@section('content')

{!! Form::open(['action'  =>  'CalorieEstimationController@store', 'method' =>  'POST']) !!}

<div class = "form-group" > 
{{Form::text('sleephours', '', ['class'  =>  'form-control', 'placeholder' => 'How many hours do you sleep '])}}<br> 
{{Form::text('gender', '', ['class'  =>  'form-control', 'placeholder' => 'What is your gender'])}}<br> 
{{Form::text('activeworkhours', '', ['class'  =>  'form-control', 'placeholder' => 'What is your active workhours'])}}<br> 
{{Form::text('waterliter', '', ['class'  =>  'form-control', 'placeholder' => 'How many liters of water you drink per day'])}}<br> 
{{Form::text('exercisehours', '', ['class'  =>  'form-control', 'placeholder' => 'For how many hours do you exercise '])}}<br> 
{{Form::text('medicine', '', ['class'  =>  'form-control', 'placeholder' => 'Do you take medicine '])}}<br> 





</div> 

<center> 
{{Form::submit('Calculate', ['class' => 'btn btn-primary'])}}
</center>

<br>

{!! Form::close() !!}


<div style="text-align:center;padding:1em 0;"> <h2><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1185241"><span style="color:gray;"></span><br /></a></h2> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=large&timezone=Asia%2FDhaka" width="100%" height="140" frameborder="0" seamless></iframe> </div>
@stop 