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
			<h3>Cauldron VX | Text to Speech Converter </h3>
            <input id="myFile" type="file"/>
            <textarea id="myText"></textarea>
			<label>
				<span>Voice</span>
				<select id="voiceOptions"></select>
			</label>
			<label>
				<span>Volume</span>
				<input type="range" id="volumeSlider" min="0" max="1" value="0.5" step="0.1" />
			</label>
			<label>
				<span>rate</span>
				<input type="range" id="rateSlider" min="0" max="1" value="0.5" step="0.1" />
			</label>
			<label>
				<span>Pitch</span>
				<input type="range" id="pitchSlider" min="0" max="2" value="0.5" step="0.1" />
			</label>
			<div class="button" onclick="speak();">Speak</div>
		</div>
		<script type="text/javascript">

			function checkCompatibilty () {
				if(!('speechSynthesis' in window)){
					alert('Your browser is not supported. If google chrome, please upgrade!!');
				}
			};

			checkCompatibilty();

			var voiceOptions = document.getElementById('voiceOptions');
			var volumeSlider = document.getElementById('volumeSlider');
			var rateSlider = document.getElementById('rateSlider');
			var pitchSlider = document.getElementById('pitchSlider');
			var myText = document.getElementById('myText');

			var voiceMap = [];

			function loadVoices () {
				var voices = speechSynthesis.getVoices();
				for (var i = 0; i < voices.length; i++) {
					var voice = voices[i];
					var option = document.createElement('option');
					option.value = voice.name;
					option.innerHTML = voice.name;
					voiceOptions.appendChild(option);
					voiceMap[voice.name] = voice;
				};
			};

			window.speechSynthesis.onvoiceschanged = function(e){
				loadVoices();
			};

			function speak () {
				var msg = new SpeechSynthesisUtterance();
				msg.volume = volumeSlider.value;
				msg.voice = voiceMap[voiceOptions.value];
				msg.rate = rateSlider.value;
				msg.Pitch = pitchSlider.value;
				msg.text = myText.value;
				window.speechSynthesis.speak(msg);
			};
		</script>
		
	</body>
</html>
@stop