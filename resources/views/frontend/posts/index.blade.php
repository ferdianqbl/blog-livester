@extends('frontend.layouts.main')

@section('container')
  <div class="posts" id="posts">
    <section class="posts-list" id="posts-list">
      <div class="container">
        <h2 class="posts-list-title">Posts List</h2>
        <div class="row justify-content-center">
          <div class="col-12">
            {{ $posts->links() }}
          </div>
        </div>
        <div class="row justify-content-start align-items-center row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
          @if ($posts->count())
            @foreach ($posts as $post)
              <div class="col">
                <div class="card h-100 card-post">
                  <img src="/storage/{{ $post->image }}" alt="card-post" class="card-post-img img-fluid">

                  <div class="card-post-body">
                    <p class="card-post-author">{{ $post->user->username }} | {{ $post->created_at->diffForHumans() }}</p>
                    <a href="/"
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
