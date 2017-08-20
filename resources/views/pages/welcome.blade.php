@extends('main')
@section('title','|homepage')
@section('content')
    <div class="row">
      <div class="col-md-12">
      <div class="jumbotron">
        <h1>Welcome</h1>
          <p class="lead">This is anushika anand's blogS</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">click for more post</a></p>
     </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <div class="post">
        @foreach ($post as $post)
        <h3>{{ $post->title}}</h3>
         <p>{{ $post->body}}</p1>
          <a href="readmore" class="btn btn-primary">read more</a>
        <hr>
      </div>
          @endforeach
    </div>
     <div class="col-md-3 col-md-offset-1">
       <h2>Sidebar</h2>
    </div>
@endsection
