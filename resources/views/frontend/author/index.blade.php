@extends('frontend.layouts.main')

@section('container')
  <div class="author" id="author">
    <section class="author-selection" id="author-selection">
      <div class="container">
        <div class="row align-items-center row-cols-2 row-cols-lg-3 g-4">

          @if ($authors->count())
            @foreach ($authors as $author)
              <div class="col">
                <div class="card border-0 mb-3 card-post">
                  <div class="card-body card-post-body">
                    <h5 class="card-title">{{ $author->name }}</h5>
                    <p class="card-text"><small class="text-muted">{{ $author->username }}</small></p>
                    <p class="card-text">{{ $author->posts->count() }} Posts</p>
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
