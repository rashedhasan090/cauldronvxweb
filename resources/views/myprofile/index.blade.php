@extends('adminlte::page')

@section('title', 'Cauldron VX')

@section('content_header')
    <h1>Add Information Yourself</h1>
@stop

@section('content')

{!! Form::open(['action'  =>  'MyProfileController@store', 'method' =>  'POST']) !!}

<div class = "form-group" > 
        {{Form::text('fname', '', ['class'  =>  'form-control', 'placeholder' => 'Your First Name'])}}<br> 
        {{Form::text('lname', '', ['class'  =>  'form-control', 'placeholder' => 'Your Last Name  '])}}<br> 
{{Form::text('phone', '', ['class'  =>  'form-control', 'placeholder' => 'Your Phone Number'])}}<br> 
{{Form::text('address', '', ['class'  =>  'form-control', 'placeholder' => 'Your Address'])}}<br> 
{{Form::text('occupation', '', ['class'  =>  'form-control', 'placeholder' => 'Your Occupation'])}}<br> 
{{Form::text('Age', '', ['class'  =>  'form-control', 'placeholder' => 'Your Age'])}}<br> 

</div> 

<center> 
{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
</center>


<div style="text-align:center;padding:1em 0;"> <h2><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1185241"><span style="color:gray;"></span><br /></a></h2> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=large&timezone=Asia%2FDhaka" width="100%" height="140" frameborder="0" seamless></iframe> </div>

@stop 