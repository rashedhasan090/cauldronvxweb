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


<center>
<!DOCTYPE html>
<html>
<body>

<h2>Live Estimation Result </h2>
<p> Please Only Give Input In Digits </p> 


<input id="miles" placeholder = "How many miles you traveled"><br><br> 
<input id="workhours" placeholder = "How many hours did you work today"><br><br> 
<input id="exhours" placeholder = "How many hours did you exercise"><br><br> 
<input id="age" placeholder = "what is your age"><br><br> 
<input id="calorie" placeholder = "How much calories do you need everyday "><br><br> 


<button type="button" onclick="myFunction()">Submit</button>

<p id="demo"></p>

<script>
function myFunction() {
  var x, text;

  // Get the value of the input field with id="numb"
  x = document.getElementById("miles").value;
  y = document.getElementById("workhours").value;
  z = document.getElementById("exhours").value;
  p = document.getElementById("age").value;
  q = document.getElementById("calorie").value;
 
  // If x is Not a Number or less than one or greater than 10
  if ( x < 100  &&  y > 6 && z < 2  && p < 30 && q < 1700 ) {
    text = "You need 12 hours of Good Sleep";
  } else if ( x > 100  &&  y < 6 && z > 4  && p > 50 && q > 1700) {
    text = "You need 8 hours of Good Sleep";
  }
  else if (  x > 300  &&  y > 10 && z > 14  && p < 20 && q > 1000) {
    text = "You need 10 hours of Good Sleep";
  }
  else if (  x > 400  &&  y < 3 && z < 2  && p > 70 && q > 1500) {
    text = "You need 6 hours of Good Sleep";
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