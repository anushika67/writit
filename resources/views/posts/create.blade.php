@extends('main')
@section('title','| create a post')
@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
    <h1>Create a New Post</h1>
    <hr>
      {!! Form::open(['route' => 'posts.store']) !!}
        {!! Form::label('title','Title') !!}
        {!! Form::text('title',null,array('class' => 'form-control')) !!}
        {!! Form::label('body','PostBody') !!}
        {!! Form::textarea('body',null,array('class' => 'form-control')) !!}
        {!! Form::submit('Create Post',array('class' => 'btn btn-success btn-lg btn-block')) !!}
      {!! Form::close() !!}


   </div>
  </div>

@endsection
