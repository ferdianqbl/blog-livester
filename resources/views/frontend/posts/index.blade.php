@extends('frontend.layouts.main')

@section('container')
  <div class="posts" id="posts">
    <section class="posts-list" id="posts-list">
      <div class="container">
        <h2 class="posts-list-title">
          {{ $titleHeader }}</h2>

        <div class="row justify-content-center mb-5">
          <div class="col-6">
            <form action="/posts">
              @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
              @endif
              @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
              @endif
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="search"
                  value="{{ request('search') }}">
                <button class="btn btn-outline-primary" type="submit">Search</button>
              </div>
            </form>
          </div>
        </div>

        <div class="row justify-content-center mb-5">
          <div class="col-12">
            {{ $posts->links() }}
          </div>
        </div>
        <div class="row justify-content-start align-items-center row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
          @if ($posts->count())
            @foreach ($posts as $post)
              <div class="col">
                <div class="card h-100 card-post">

                  @if ($post->image)
                    <img src="/storage/{{ $post->image }}" alt="card-post" class="card-post-img img-fluid">
                  @else
                    <img src="/images/home/sub-content.png" alt="{{ $post->title }}-img" class="card-post-img img-fluid">
                  @endif
                  <div class="card-post-body">
                    <p class="card-post-author">{{ $post->user->username }} | {{ $post->created_at->diffForHumans() }}</p>
                    <a href="/posts?category={{ $post->category->id }}"
                      class="nav-link card-post-category {{ Str::lower($post->category->name) }}-color">{{ Str::upper($post->category->name) }}</a>
                    <p class="card-post-title">{{ $post->title }}</p>
                    <p class="card-post-text">{{ $post->summary }}</p>
                    <a href="/posts/{{ $post->id }}" class="nav-link card-post-link">Read More <i
                        class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            @endforeach
          @else
            <p class="text-secondary">No Posts Found</p>

        </div>
        @endif
      </div>
  </div>
  </section>
  </div>
@endsection
