@extends('layouts.app')

@section('content') 
<h1>Edit Posts</h1>
{!! Form::open(['action' => ['PostController@update',$post->id],'method'=>'Post','enctype'=>'multipart/form-data'])!!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
    </div>

    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'BodyText'])}}
    </div>  

    <div class="form-group">
            {{Form::file('cover_image')}}
    </div>

    {{Form::hidden('_method','PUT')}}
    <div class="form-group">
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
@endsection
