@extends('main')

@section('title','|All Post')



@section('content')

<div class="row">
  <div class="col-md-10">
          <h1>All post</h1>
   </div>
    <div class="col-md-2">
          <a href = "{{route('posts.create')}}" class="btn btn-primary btn-block btn-h1-spacing" >create a new post</a>
      </div>
      <div class="col-md-12">
        <hr>
      </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <th>#</th>
          <th>Title</th>
          <th>Body</th>
          <th>Created at</th>
          <th></th>
        </thead>
        <tbody>
          @foreach ($posts as $post)

          <tr>
          <th>{{ $post->id }}</th>
          <td>{{ $post->title }}</td>
          <td>{{ $post->body }}</td>
          <td>{{ $post->created_at }}</td>
          <td><a href="#" class="btn btn-default">view</a><a href="#" class="btn btn-default">edit</a>
          </tr>
        @endforeach
        </tbody>

      </table>
      <div class="text-center">
          {!!$posts->links()!!};
      </div>
    </div>
  </div>

@endsection
