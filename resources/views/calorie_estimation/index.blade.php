@extends('adminlte::page')

@section('title', 'Cauldron VX')

@section('content_header')
    <h1>Store Your Health Information </h1>
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
{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
</center>

<br>

{!! Form::close() !!}

<center>
<!DOCTYPE html>
<html>
<body>

<h2>Live Estimation Result </h2>
<p> Please Only Give Input In Digits </p> 


<input id="sleephour" placeholder = "How many hours do you sleep"><br><br> 
<input id="gender" placeholder = "What is your Gender"><br><br> 
<input id="workhours" placeholder = "What is your active workhours"><br><br> 
<input id="waterlitre" placeholder = "How many liters of water you drink per day"><br><br> 
<input id="exercisehours" placeholder = "For how many hours do you exercise "><br><br> 
<input id="medicine" placeholder = "Do you take medicine"><br><br> 

<button type="button" onclick="myFunction()">Submit</button>

<p id="demo"></p>

<script>
function myFunction() {
  var x, text;

  // Get the value of the input field with id="numb"
  x = document.getElementById("sleephour").value;
  y = document.getElementById("gender").value;
  z = document.getElementById("workhours").value;
  p = document.getElementById("waterlitre").value;
  q = document.getElementById("exercisehours").value;
  r = document.getElementById("medicine").value;
  // If x is Not a Number or less than one or greater than 10
  if ( x < 5  &&  y == "female"&& z > 10 && p < 5 && q < 3 && r == 'yes') {
    text = "You need 1700 Kilo Calories Everyday With Protin and Fiber Food";
  } else if ( x > 5  &&  y == "female"&& z < 10 && p > 5 && q > 3 && r == 'no') {
    text = "You need 800 kilo calorie fresh food and need to drink fresh water";
  }
  else if ( x < 5  &&  y == "male"&& z < 12 && p > 5 && q > 1 && r == 'yes') {
    text = "You need 2000 kilo calorie protin and Gluten free food";
  }
  else if ( x > 5  &&  y == "male"&& z > 12 && p < 5 && q > 1 && r == 'no') {
    text = "You need 600 kilo calorie and soya food to stay healthy";
  }

  else {
    text = "Your Health is Fine"; 
  }
  document.getElementById("demo").innerHTML = text;
}
</script>

</body>
</html> 
</center>

<div style="text-align:center;padding:1em 0;"> <h2><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1185241"><span style="color:gray;"></span><br /></a></h2> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=large&timezone=Asia%2FDhaka" width="100%" height="140" frameborder="0" seamless></iframe> </div>
@stop 