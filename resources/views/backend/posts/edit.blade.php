@extends('backend.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Post</h1>
</div>
<div class="col-lg-8 mb-5">
  <form method="POST" action="/editor/posts/{{$post->id}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autofocus
        required value="{{old('title', $post->title)}}">

      @error('title')
      <div class="invalid-feedback mb-3">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="summary" class="form-label">Summary</label>
      <input type="text" class="form-control @error('summary') is-invalid @enderror" id="summary" name="summary"
        autofocus required value="{{old('summary', $post->summary)}}">

      @error('summary')
      <div class="invalid-feedback mb-3">
        {{ $message }}
      </div>
      @enderror

      <small>max 255 character</small>
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <select class="form-select" name="category_id">
        @foreach ($categories as $category)
        @if (old('category_id', $post->category_id) == $category->id)
        <option value="{{$category->id}}" selected>{{$category->name}}</option>
        @else
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endif
        @endforeach
      </select>
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Add Image</label>

      @if ($post->image)
      <img src="/storage/{{$post->image}}" class="img-preview img-fluid col-sm-5 d-block mb-3">
      @else

      <img class="img-preview img-fluid col-sm-5">
      @endif
      <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"
        onchange="previewImage()">

      @error('image')
      <div class="invalid-feedback mb-3">
        {{ $message }}
      </div>
      @enderror
    </div <div class="mb-3">
    <label for="body" class="form-label">Body</label>
    @error('body')
    <p class="text-danger">{{$message}}</p>
    @enderror
    <input id="body" value="{{old('body', $post->body)}}" type="hidden" name="body" required>
    <trix-editor input="body" class="trix-content"></trix-editor>

    @error('body')
    <div class="invalid-feedback mb-3">
      {{ $message }}
    </div>
    @enderror
</div>
<button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

<script>
  document.addEventListener('trix-file-accept', function(e) {
    e.preventDefault();
  });
  
  function previewImage() {
    const inputImage = document.getElementById('image');
    const imagePreview = document.querySelector('.img-preview');
    
    imagePreview.style.display = 'block';
    imagePreview.style.marginBottom = '3rem';
    
    const blob = URL.createObjectURL(inputImage.files[0]);
    imagePreview.src = blob;
  }
  
</script>
@endsection