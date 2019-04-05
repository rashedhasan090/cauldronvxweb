@extends('layout.app')

@section('content')
<h1> Cauldron VX Discussion </h1> 

<br> 
<br> 

@if(count($posts) > 0 )
@foreach($posts as $post )

<div class = "well"> 
<div class = "row" >
<div class="col-md-4 col-sm-4"> 
<img style = "width:100%" src = "/lsapp/public/storage/cover_images/{{$post->cover_image}}"> 
</div> 
<div class="col-md-4 col-sm-4"> 
<h3><a href = "/lsapp/public/posts/{{$post -> id}}"> {{$post->title}}</a></h3> 
<small> Written on {{$post->created_at}}</small> 
</div>
</div> 


</div> 





@endforeach 


{{$posts -> links() }}

@else

<p> Cauldron Users haven't started yet ;) </p> 

@endif 
@endsection 