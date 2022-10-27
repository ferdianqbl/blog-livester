@extends('frontend.layouts.main')

@section('container')
  <div class="posts" id="posts">
    <section class="posts-list" id="posts-list">
      <div class="container">
        <h2 class="posts-list-title">Posts List</h2>

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
            <div class="col">
              <div class="card h-100 card-post">
                <img src="/images/home/sub-content (3).png" alt="card-post" class="card-post-img img-fluid">

                <div class="card-post-body">
                  <p class="card-post-author">Alexander | March 12, 2021</p>
                  <a href="/" class="nav-link card-post-category ai-color">AI</a>
                  <p class="card-post-title">Seeking Experience in the Field of Data Visualization Experts</p>
                  <p class="card-post-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <a href="#" class="nav-link card-post-link">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 card-post">
                <img src="/images/home/sub-content (3).png" alt="card-post" class="card-post-img img-fluid">

                <div class="card-post-body">
                  <p class="card-post-author">Alexander | March 12, 2021</p>
                  <a href="/" class="nav-link card-post-category ai-color">AI</a>
                  <p class="card-post-title">Seeking Experience in the Field of Data Visualization Experts</p>
                  <p class="card-post-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <a href="#" class="nav-link card-post-link">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 card-post">
                <img src="/images/home/sub-content (3).png" alt="card-post" class="card-post-img img-fluid">

                <div class="card-post-body">
                  <p class="card-post-author">Alexander | March 12, 2021</p>
                  <a href="/" class="nav-link card-post-category ai-color">AI</a>
                  <p class="card-post-title">Seeking Experience in the Field of Data Visualization Experts</p>
                  <p class="card-post-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <a href="#" class="nav-link card-post-link">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 card-post">
                <img src="/images/home/sub-content (3).png" alt="card-post" class="card-post-img img-fluid">

                <div class="card-post-body">
                  <p class="card-post-author">Alexander | March 12, 2021</p>
                  <a href="/" class="nav-link card-post-category ai-color">AI</a>
                  <p class="card-post-title">Seeking Experience in the Field of Data Visualization Experts</p>
                  <p class="card-post-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <a href="#" class="nav-link card-post-link">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 card-post">
                <img src="/images/home/sub-content (3).png" alt="card-post" class="card-post-img img-fluid">

                <div class="card-post-body">
                  <p class="card-post-author">Alexander | March 12, 2021</p>
                  <a href="/" class="nav-link card-post-category ai-color">AI</a>
                  <p class="card-post-title">Seeking Experience in the Field of Data Visualization Experts</p>
                  <p class="card-post-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <a href="#" class="nav-link card-post-link">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 card-post">
                <img src="/images/home/sub-content (3).png" alt="card-post" class="card-post-img img-fluid">

                <div class="card-post-body">
                  <p class="card-post-author">Alexander | March 12, 2021</p>
                  <a href="/" class="nav-link card-post-category ai-color">AI</a>
                  <p class="card-post-title">Seeking Experience in the Field of Data Visualization Experts</p>
                  <p class="card-post-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <a href="#" class="nav-link card-post-link">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 card-post">
                <img src="/images/home/sub-content (3).png" alt="card-post" class="card-post-img img-fluid">

                <div class="card-post-body">
                  <p class="card-post-author">Alexander | March 12, 2021</p>
                  <a href="/" class="nav-link card-post-category ai-color">AI</a>
                  <p class="card-post-title">Seeking Experience in the Field of Data Visualization Experts</p>
                  <p class="card-post-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <a href="#" class="nav-link card-post-link">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 card-post">
                <img src="/images/home/sub-content (3).png" alt="card-post" class="card-post-img img-fluid">

                <div class="card-post-body">
                  <p class="card-post-author">Alexander | March 12, 2021</p>
                  <a href="/" class="nav-link card-post-category ai-color">AI</a>
                  <p class="card-post-title">Seeking Experience in the Field of Data Visualization Experts</p>
                  <p class="card-post-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <a href="#" class="nav-link card-post-link">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          @endif
        </div>
      </div>
    </section>
  </div>
@endsection
