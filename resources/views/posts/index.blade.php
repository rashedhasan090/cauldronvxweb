@extends('layout.app')

@section('content')
<h1> Cauldron VX Discussion </h1> 

<br> 
<br> 

@if(count($posts) > 0 )
@foreach($posts as $post )

<div class = "well"> 
<h3><a href = "/lsapp/public/posts/{{$post -> id}}"> {{$post->title}}</a></h3> 
<small> Written on {{$post->created_at}}</small> 

</div> 





@endforeach 


{{$posts -> links() }}

@else

<p> Cauldron Users haven't started yet ;) </p> 

@endif 
@endsection 