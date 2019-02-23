@extends('adminlte::page')

@section('title', 'Cauldron VX')

@section('content_header')
    <h1>Make a Work Schedule</h1>
@stop

@section('content')
  


{!! Form::open(['action'  =>  'WorkScheduleController@store', 'method' =>  'POST']) !!}

<div class = "form-group" > 
{{Form::text('weekday', '', ['class'  =>  'form-control', 'placeholder' => 'Schedule For Which Weekday '])}}<br> 
{{Form::text('signintime', '', ['class'  =>  'form-control', 'placeholder' => 'When will you sign into office '])}}<br> 
{{Form::text('makereport', '', ['class'  =>  'form-control', 'placeholder' => 'Do you need to make report for Clients / Boss'])}}<br> 
{{Form::text('filescheck', '', ['class'  =>  'form-control', 'placeholder' => 'Will you have to check files for other departments '])}}<br> 
{{Form::text('meetingtoday', '', ['class'  =>  'form-control', 'placeholder' => 'Do You have any meeting today '])}}<br> 
{{Form::text('customerservice', '', ['class'  =>  'form-control', 'placeholder' => 'Do you have customer service to provide'])}}<br> 
{{Form::text('pendingfile', '', ['class'  =>  'form-control', 'placeholder' => 'Do you have any pending files  '])}}<br> 
{{Form::text('project', '', ['class'  =>  'form-control', 'placeholder' => 'Are you working on any project'])}}<br> 
{{Form::text('signout', '', ['class'  =>  'form-control', 'placeholder' => 'When will signout from office '])}}<br> 
{{Form::text('addown', '', ['class'  =>  'form-control', 'placeholder' => 'You may add anything of your own  '])}}<br> 


</div> 

<center> 
{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
</center>
{!! Form::close() !!}










@stop