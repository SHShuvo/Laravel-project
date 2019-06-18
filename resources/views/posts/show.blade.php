@extends('layouts.app')

@section('content')
<br>
<a href="/posts" class="btn btn-outline-secondary float-right">Go back</a> 

<div class="card bg-light p-3" style="margin:50px 0px 20px 0px ">
<h1>{{$post->title}}</h1>
<img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
<br>
{!!$post->body!!} 
<hr>
<small>Written On {{$post->created_at}} By {{$post->user->name}}</small>

</div>
@if (!Auth::guest() AND Auth::user()->id==$post->user_id)
    
<a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a> 

{!! Form::open(['action' => ['PostController@destroy',$post->id],'method'=>'Post','class'=>'float-right'])!!} 
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!! Form::close() !!}
@endif
@endsection