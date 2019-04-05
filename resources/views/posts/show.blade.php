@extends('layout.app')

@section('content')
<h1> {{$post->title}}</h1> 

<div>
{!!$post->body!!}

</div> 

<hr> 
<small> Written on {{$post->created_at}}</small>  
<hr> 

@if(!Auth::guest())
<a href = "/lsapp/public/posts/{{$post->id }}/edit" class = "btn btn-default"> Edit </a> 


{{Form:: submit('Delete', ['class ' => 'btn btn-danger '])}}
{!!Form::close() !!}


@endif 
@endsection 