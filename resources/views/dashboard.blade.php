@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3>Your Blog Posts</h3>
                    <table class="table table-striped">
                        
                        @if (count($posts)>0)
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                        @foreach ($posts as $post)
                            <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a></td>
                            <td> 
                                    {!! Form::open(['action' => ['PostController@destroy',$post->id],'method'=>'Post','class'=>'float-right'])!!} 
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                    {!! Form::close() !!}
                            </td>
                            </tr>
                        @endforeach
                            @else
                              <p>you have no post</p>
                            @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
