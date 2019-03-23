@extends('adminlte::page')

@section('title', 'Cauldron VX')

@section('content_header')
    <h1>Set a Weekly  Reminder</h1>
@stop

@section('content')

{!! Form::open(['action'  =>  'WeeklyReminderController@store', 'method' =>  'POST']) !!}

<div class = "form-group" > 
        {{Form::text('whichday', '', ['class'  =>  'form-control', 'placeholder' => 'In which day is your event'])}}<br> 
{{Form::text('workday', '', ['class'  =>  'form-control', 'placeholder' => 'Is it a workday'])}}<br> 
{{Form::text('holiday', '', ['class'  =>  'form-control', 'placeholder' => 'Is it a holiday'])}}<br> 
{{Form::text('marrige', '', ['class'  =>  'form-control', 'placeholder' => 'Is It a Marrige Anniversary'])}}<br> 
{{Form::text('celebration', '', ['class'  =>  'form-control', 'placeholder' => 'Are you celebrating about something'])}}<br> 
{{Form::text('mourning', '', ['class'  =>  'form-control', 'placeholder' => 'Is It a day us to be sad of'])}}<br> 
{{Form::text('national', '', ['class'  =>  'form-control', 'placeholder' => 'Is it a national holiday'])}}<br> 
{{Form::text('other', '', ['class'  =>  'form-control', 'placeholder' => 'Is It something else '])}}<br> 
</div> 

<center> 
{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
</center>


<div style="text-align:center;padding:1em 0;"> <h2><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1185241"><span style="color:gray;"></span><br /></a></h2> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=large&timezone=Asia%2FDhaka" width="100%" height="140" frameborder="0" seamless></iframe> </div>
  
@stop 