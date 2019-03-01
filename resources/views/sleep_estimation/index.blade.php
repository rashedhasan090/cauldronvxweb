@extends('adminlte::page')

@section('title', 'Cauldron VX')

@section('content_header')
    <h1>Estimate How Much sleep you need </h1>
@stop

@section('content')

{!! Form::open(['action'  =>  'SleepEstimationController@store', 'method' =>  'POST']) !!}

<div class = "form-group" > 
{{Form::text('milestraveled', '', ['class'  =>  'form-control', 'placeholder' => 'How many miles did you travel today '])}}<br> 
{{Form::text('workhours', '', ['class'  =>  'form-control', 'placeholder' => 'How many hours did you work today '])}}<br> 
{{Form::text('exercisehours', '', ['class'  =>  'form-control', 'placeholder' => 'For How many hours did you exercise'])}}<br> 
{{Form::text('age', '', ['class'  =>  'form-control', 'placeholder' => 'what is your age'])}}<br> 
{{Form::text('calories', '', ['class'  =>  'form-control', 'placeholder' => 'How much calories you need everuday '])}}<br> 






</div> 

<center> 
{{Form::submit('Calculate', ['class' => 'btn btn-primary'])}}
</center>

<br>

{!! Form::close() !!}


@stop 