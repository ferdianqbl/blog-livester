@extends('backend.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Posts</h1>
</div>

@if (session('success') && session('success') != '' && session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive justify-content-center mx-auto">
  <a href="/editor/posts/create" class="btn btn-primary mb-3"><span data-feather="plus"></span> Create New Post</a>

  @if ($posts->count())
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Time Added</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->category->category_name}}</td>
        <td>{{$post->created_at}}</td>
        <td>
          <a href="" class="badge bg-info"><span data-feather="zoom-in"></span></a>
          <a href="" class="badge bg-success"><span data-feather="edit"></span></a>
          <form action="" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="badge bg-danger d-inline border-0"
              onclick="return confirm('Are you sure?')"><span data-feather="trash-2"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else
  <div class="d-flex justify-content-center align-items-center">
    <p>Post not found</p>
  </div>
  @endif

</div>

@endsection