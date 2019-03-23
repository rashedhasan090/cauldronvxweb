
@extends('adminlte::page')

@section('title', 'Cauldron VX')


@section('content')
<!doctype html>
<html lang="en">
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
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-4">
            <hr>
            
            <br>
            @if (session('alert'))
                <p class="alert alert-success">{{ session('alert') }}</p>
            @endif
            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                        <p class="text-center alert alert-danger">{{ $error }}</p>
                @endforeach
            @endif
            <form action="{{ url('apply-two') }}" method="post" class="form-inline">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Provide your Email To receive updates </label><br> 
                    <input type="email" name="email" class="form-control" placeholder="rashed@example.com">
                </div>
                <br>
                <br> 
             
                <button type="submit" class="btn btn-primary">Apply</button>
 
            </form>
        </div>
    </div>
</div>
</body>



</html>

@stop