@extends('adminlte::page')


@section('title', 'Cauldron VX')

@section('content_header')
    <h1>Make Your Daily Reminder</h1>

@stop

@section('content')


{!! Form::open(['action'  =>  'dailyreminderController@store', 'method' =>  'POST']) !!}

<div class = "form-group" > 
{{Form::text('weekday', '', ['class'  =>  'form-control', 'placeholder' => 'Schedule For Which Weekday '])}}<br> 
{{Form::text('yourevent', '', ['class'  =>  'form-control', 'placeholder' => 'What Do you want to be reminded '])}}<br> 
{{Form::text('note', '', ['class'  =>  'form-control', 'placeholder' => 'Add your special note'])}}<br> 


</div> 

<center> 
{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
</center>
{!! Form::close() !!}    







@stop 