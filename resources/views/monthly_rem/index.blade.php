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


@stop 