@extends('layout.app')

@section('content')
<h1> {{$post->title}}</h1> 
<br> 
<img style = "width:100%" src = "/lsapp/public/storage/cover_images/{{$post->cover_image}}"> 
<br> <br> <br> 
<div>
{!!$post->body!!}

</div> 

<hr> 
<small> Written on {{$post->created_at}}</small>  
<hr> 

@if(!Auth::guest())
@if (!Auth::user()->id == $post->user_id)
<a href = "/lsapp/public/posts/{{$post->id }}/edit" class = "btn btn-default"> Edit </a> 


{{Form:: submit('Delete', ['class ' => 'btn btn-danger '])}}
{!!Form::close() !!}

@endif 
@endif 
@endsection 