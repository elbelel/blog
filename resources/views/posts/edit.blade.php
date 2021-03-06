@extends('layouts.app')
@section('content')
 

 {!!Form::open(['action'=> ['PostsController@update', $post->id ], 'method'=>'POST','enctype' =>'multipart/form-data'])!!}
<div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$post->title ,['classs'=>'form-control','placeholder'=>'Title'])}}
</div>
<div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body', $post->body ,['classs'=>'form-control','placeholder'=>'Body Text'])}}
</div>
<div class="form-group">
                {{Form::file('cover_image')}}
</div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Update',['class'=>'btn btn primary'])}}
 
{!!Form::close()!!}
@endsection