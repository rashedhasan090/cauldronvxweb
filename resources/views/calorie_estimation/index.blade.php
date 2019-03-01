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


@stop 