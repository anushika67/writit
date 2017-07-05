@extends('main')
@section('title','| create a post')

 @section('stylesheets')

   {!! Html::style('css/parsley.css')!!}

 @endsection
@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
    <h1>Create a New Post</h1>
    <hr>
      {!! Form::open(['route' => 'posts.store','data-parsley-validate' => '']) !!}
        {!! Form::label('title','Title') !!}
        {!! Form::text('title',null,array('class' => 'form-control','required' => '','max-length' => '255' )) !!}
        {!! Form::label('body','PostBody') !!}
        {!! Form::textarea('body',null,array('class' => 'form-control','required' => '')) !!}
        {!! Form::submit('Create Post',array('class' => 'btn btn-success btn-lg btn-block')) !!}
      {!! Form::close() !!}


   </div>
  </div>

@endsection

@section('scripts')
  {!! Html::script('js/parsley.min.js')!!}

@endsection
