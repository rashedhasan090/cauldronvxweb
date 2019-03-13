@extends('adminlte::page')

@section('title', 'Cauldron VX')

@section('content_header')
    <h1>Set a Yearly Reminder</h1>
@stop

@section('content')

{!! Form::open(['action'  =>  'YearlyReminderController@store', 'method' =>  'POST']) !!}

<div class = "form-group" > 
        {{Form::text('whichyear', '', ['class'  =>  'form-control', 'placeholder' => 'In which year is your event'])}}<br> 
        {{Form::text('whichmonth', '', ['class'  =>  'form-control', 'placeholder' => 'In which Month is the Event'])}}<br> 
        {{Form::text('monthday', '', ['class'  =>  'form-control', 'placeholder' => 'The Event is for Which day of the month '])}}<br> 
{{Form::text('yourevent', '', ['class'  =>  'form-control', 'placeholder' => 'What is Your Event'])}}<br> 
{{Form::text('birthday', '', ['class'  =>  'form-control', 'placeholder' => 'Is it someones Birthday'])}}<br> 
{{Form::text('marrige', '', ['class'  =>  'form-control', 'placeholder' => 'Is It a Marrige Anniversary'])}}<br> 
{{Form::text('celebration', '', ['class'  =>  'form-control', 'placeholder' => 'Are you celebrating about something'])}}<br> 
{{Form::text('mourning', '', ['class'  =>  'form-control', 'placeholder' => 'Is It a day us to be sad of'])}}<br> 
{{Form::text('national', '', ['class'  =>  'form-control', 'placeholder' => 'Is it a national holiday'])}}<br> 
{{Form::text('note', '', ['class'  =>  'form-control', 'placeholder' => 'Add Your Special Note'])}}<br> 
</div> 

<center> 
{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
</center>


<div style="text-align:center;padding:1em 0;"> <h2><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1185241"><span style="color:gray;"></span><br /></a></h2> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=large&timezone=Asia%2FDhaka" width="100%" height="140" frameborder="0" seamless></iframe> </div>
  
@stop 