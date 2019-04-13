@extends('adminlte::page')

@section('title', 'Cauldron VX')

@section('content_header')
    
    <br> 
    <br> 
@stop

@section('content')
    


<!DOCTYPE html>
<html>
	<head>
	
		<style type="text/css">
			body{
				background: #f6f6f6;
			}
			.container{
				background: #f6f6f6;
				position: absolute;
				top:50%;
				left:50%;
				transform: translateX(-50%) translateY(-50%);
				width: 600px;
				padding:70px;
				box-shadow: 0 0 10px 0 #ccc;
			}
			.container textarea{
				width: 500px;
				height: 100px;
				resize: none;
				outline: none;
				border: 1px solid #ccc;
			}
			.container label{
				display: block;
				width: 400px;
			}
			.container label span{
				width: 100px;
				margin-top: 20px;
				display: inline-block;
			}
			.container label select, .container label input{
				width: 290px;
			}
			.button{
				display: inline-block;
				background: #f6f6f6;
				padding: 10px 20px;
				color: #000;
				border: 1px solid #ccc;
				cursor: pointer;
				margin-top: 20px;
			}
			.button:hover{
				box-shadow: 4px 4px 10px 0 #ccc;
			}


		</style>
    </head>
    <br> 
    <br> <br> 
    <br> 
	<body>
		<div class="container">
			<h3>Bangla Text to Speech Converter </h3>
            <br>
            <br> 
            <input id="myFile" type="file"/>
           


			<input type ="text" name="text">
<a href="#" class="say">Say it! </a> 

<audio src ="" class ="speech" hidden > </audio> 
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" ></script> 

<script>
$(function() {
$('a.say').on('click',function(e){
e.preventDefault();
var text = $('input[name="text"]').val();
text = encodeURIComponent(text);
console.log(text);
var url = "http://translate.google.com/translate_tts?tl=bn&q=" + text +"&client=tw-ob" ;

$('audio').attr('src',url).get(0).play(); 
});
});

</script> 






		</div>
		<script type="text/javascript">

		
		
	</body>
</html>
@stop