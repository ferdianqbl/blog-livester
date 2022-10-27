@extends('frontend.layouts.main')

@section('container')
  <div class="author" id="author">
    <section class="author-selection" id="author-selection">
      <div class="container">
        <h2 class="author-title">All Authors</h2>
        <div class="row justify-content-center my-5">
          <div class="col-12">
            {{ $authors->links() }}
          </div>
        </div>
        <div class="row align-items-center row-cols-2 row-cols-lg-3 g-4">

          @if ($authors->count())
            @foreach ($authors as $author)
              <div class="col">
                <div class="card border-0 mb-3 card-post">
                  <div class="card-body card-post-body">
                    <h5 class="card-title">{{ $author->name }}</h5>
                    <p class="card-text"><small class="text-muted">{{ $author->username }}</small></p>
                    <p class="card-text">{{ $author->posts->count() }}</p>
                    <a href="/" class="nav-link card-post-link">More <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            @endforeach
          @else
            <div class="col">
              <div class="card border-0 mb-3 card-post">
                <div class="card-body card-post-body">
                  <h5 class="card-title">Alexandeer</h5>
                  <p class="card-text"><small class="text-muted">alxndr</small></p>
                  <p class="card-text">0 Posts</p>
                  <a href="/" class="nav-link card-post-link">More <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card border-0 mb-3 card-post">
                <div class="card-body card-post-body">
                  <h5 class="card-title">Alexandeer</h5>
                  <p class="card-text"><small class="text-muted">alxndr</small></p>
                  <p class="card-text">0 Posts</p>
                  <a href="/" class="nav-link card-post-link">More <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card border-0 mb-3 card-post">
                <div class="card-body card-post-body">
                  <h5 class="card-title">Alexandeer</h5>
                  <p class="card-text"><small class="text-muted">alxndr</small></p>
                  <p class="card-text">0 Posts</p>
                  <a href="/" class="nav-link card-post-link">More <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card border-0 mb-3 card-post">
                <div class="card-body card-post-body">
                  <h5 class="card-title">Alexandeer</h5>
                  <p class="card-text"><small class="text-muted">alxndr</small></p>
                  <p class="card-text">0 Posts</p>
                  <a href="/" class="nav-link card-post-link">More <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          @endif
        </div>
      </div>
    </section>
  </div>
@endsection
