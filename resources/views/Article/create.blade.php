@extends('layout.Layout.template')

@section('content')
  <div class="container">
    <form action="{{ url('article') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Enter article title" required>
      </div>
      <div class="form-group">
          <label for="content">Content</label>
          <input type="text" name="content" class="form-control" id="title" placeholder="Enter article content" required>
      </div>
      <div class="form-group">
          <label for="featured_image">Featured Image</label>
          <input type="file" name="image" class="form-control-file" id="featured_image" required>
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
  </form>
  </div>
@endsection