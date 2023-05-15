@extends('layout.Layout.template')

@section('content')
  <div class="container">
    <form action="{{ url('/article') }}/{{ $article->id }}" method="post"enctype="multipart/form-data">
      @method('PUT')
      @csrf
      <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" id="title" value="{{$article->title}}" placeholder="Enter article title" required>
      </div>
      <div class="form-group">
          <label for="content">Content</label>
          <input type="text" name="content" class="form-control" id="title" value="{{$article->content}}" placeholder="Enter article content" required>
      </div>
      <div class="form-group">
          <label for="featured_image">Featured Image</label>
          <input type="file" name="image" class="form-control-file" id="featured_image"required>
          <img width="150px" src="{{asset('storage/'.$article->featured_image)}}">
      </div>
      <button type="submit" class="btn btn-primary">Ubah</button>
  </form>
  </div>
@endsection