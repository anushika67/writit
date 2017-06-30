@extends('main')
@section('title','| contact')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <h2>contact me</h2>
      <form>
        <div class="form-group">
          <label name="email" id="email">email</label>
          <input id="email" class="form-control">
        </div>
        <div class="form-group">
          <label name="subject" id="subject">subject</label>
          <input id="subject" class="form-control">
        </div>
        <div class="form-group">
          <label name="comments" id="comments">comments</label>
          <textarea id="comments" class="form-control">type your query here...</textarea>
        </div>
          <input id="submit" class="btn btn-success" type="submit">
      </form>
    </div>
  </div>
@endsection
