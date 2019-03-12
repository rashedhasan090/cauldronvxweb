@extends('adminlte::page')

@section('title', 'Cauldron VX')

@section('content_header')
    <h1>Make Your Personal Schedule</h1>
@stop

@section('content')


{!! Form::open(['action'  =>  'PersonalScheduleMaintain@store', 'method' =>  'POST']) !!}

<div class = "form-group" > 
{{Form::text('weekday', '', ['class'  =>  'form-control', 'placeholder' => 'Schedule For Which Weekday '])}}<br> 
{{Form::text('wakeuptime', '', ['class'  =>  'form-control', 'placeholder' => 'When will you wake up '])}}<br> 
{{Form::text('bfasttime', '', ['class'  =>  'form-control', 'placeholder' => 'When You are going to have Breakfast '])}}<br> 
{{Form::text('exercise', '', ['class'  =>  'form-control', 'placeholder' => 'Will you have Exercise '])}}<br> 
{{Form::text('goingtowork', '', ['class'  =>  'form-control', 'placeholder' => 'When are you going to work '])}}<br> 
{{Form::text('startworkingat', '', ['class'  =>  'form-control', 'placeholder' => 'When You will start work at Office '])}}<br> 
{{Form::text('returnhome', '', ['class'  =>  'form-control', 'placeholder' => 'When will you return home  '])}}<br> 
{{Form::text('eveningactivity', '', ['class'  =>  'form-control', 'placeholder' => 'What are you doing in the Evening '])}}<br> 
{{Form::text('watchingtv', '', ['class'  =>  'form-control', 'placeholder' => 'Will you Watch tv at Night '])}}<br> 
{{Form::text('bedtime', '', ['class'  =>  'form-control', 'placeholder' => 'When are you going to Bed '])}}<br> 


</div> 

<center> 
{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
</center>
{!! Form::close() !!}

<div style="text-align:center;padding:1em 0;"> <h2><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1185241"><span style="color:gray;"></span><br /></a></h2> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=large&timezone=Asia%2FDhaka" width="100%" height="140" frameborder="0" seamless></iframe> </div>
@stop