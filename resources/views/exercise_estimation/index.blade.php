@extends('adminlte::page')

@section('title', 'Cauldron VX')

@section('content_header')
    <h1>How Long Should you exercise today </h1>
@stop

@section('content')

{!! Form::open(['action'  =>  'ExerciseEstimationController@store', 'method' =>  'POST']) !!}

<div class = "form-group" > 
{{Form::text('gender', '', ['class'  =>  'form-control', 'placeholder' => 'What is your Gender '])}}<br> 
{{Form::text('weight', '', ['class'  =>  'form-control', 'placeholder' => 'What is your weight '])}}<br> 
{{Form::text('height', '', ['class'  =>  'form-control', 'placeholder' => 'What is your height'])}}<br> 
{{Form::text('workhours', '', ['class'  =>  'form-control', 'placeholder' => 'For how long did you work yesterday'])}}<br> 






</div> 

<center> 
{{Form::submit('Calculate', ['class' => 'btn btn-primary'])}}
</center>

<br>



<center>
<!DOCTYPE html>
<html>
<body>

<h2>Live Estimation Result </h2>
<p> Please Only Give Input In Digits </p> 


<input id="gender" placeholder = "What is your Gender"><br><br> 
<input id="weight" placeholder = "What is your weight"><br><br> 
<input id="height" placeholder = "What is your height"><br><br> 
<input id="workhour" placeholder = "How many hours did you work "><br><br> 



<button type="button" onclick="myFunction()">Submit</button>

<p id="demo"></p>

<script>
function myFunction() {
  var x, text;

  // Get the value of the input field with id="numb"
  x = document.getElementById("gender").value;
  y = document.getElementById("weight").value;
  z = document.getElementById("height").value;
  p = document.getElementById("workhour").value;

 
  // If x is Not a Number or less than one or greater than 10
  if ( x = "male"  &&  y > 80 && z < 162  && p < 14) {
    text = "You need 2 hours of walking and need to drink fresh water";
  } else if ( x = "male"  &&  y < 80 && z > 162  && p > 14) {
    text = "You need to go to Gym";
  }
  else if (  x = "female"  &&  y > 120 && z < 160  && p > 10) {
    text = "You need to eat fresh food and walk every day";
  }
  else if ( x = "female"  &&  y < 120 && z > 160  && p < 10) {
    text = "You should drink fresh water and walk everyday";
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


{!! Form::close() !!}

<div style="text-align:center;padding:1em 0;"> <h2><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1185241"><span style="color:gray;"></span><br /></a></h2> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=large&timezone=Asia%2FDhaka" width="100%" height="140" frameborder="0" seamless></iframe> </div>

@stop 