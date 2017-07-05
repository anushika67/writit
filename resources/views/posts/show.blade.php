@extends('main')

@section('title','|store')

@section('content')

<div class="row">
  <div class="col-md-8">
    <h1>{{ $post-> title}} </h1>
    <p>{{ $post-> body}} </p>
  </div>
  <div class="col-md-4">
    <div class="well">
    <dl class="dl-horizontal">
      <dt>Create time:</dt>
      <dd>{{ date('M j,Y h:ia',strtotime($post -> created_at))}}</dd>
    </dl>
    <hr>
    <dl class="dl-horizontal">
      <dt>update time:</dt>
      <dd>{{ date('M j,Y h:ia',strtotime($post -> created_at))}}</dd>
    </dl>
    <hr>
    <div class="row">
      <div class="col-sm-6">
        {!! Html::linkRoute('posts.edit','Edit',array($post->id),array('class' =>"btn btn-primary btn-block"))!!}

      </div>
      <div class="col-sm-6">
        {!! Html::linkRoute('posts.delete','Edit',array($post->id),array('class' =>"btn btn-danger btn-block"))!!}
        </div>
       </div>
    </div>
  </div>
</div>

@endsection
