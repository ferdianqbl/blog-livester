@extends('frontend.layouts.main')

@section('container')
  <div class="home" id="home">
    <section class="hero" id="hero">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <p class="text-quote text-center">
            ”Education is the most powerful weapon which you can use to change the world.”
            <br> <span> -Nelson Mandela</span>
          </p>
        </div>

        <div class="row justify-content-evenly align-items-start">
          <div class="col-lg-5">

            @if ($posts->count())
              <div class="big-content-card-hero mb-5">
                <img src="/storage/{{ $posts[0]->image }}" alt="" class="img-fluid">

                <div class="big-content-card-hero-body">
                  <p class="big-content-card-author">
                    {{ $posts[0]->user->username }} | {{ $posts[0]->created_at->diffForHumans() }}
                  </p>
                  <a href="/"
                    class="nav-link big-content-card-category {{ Str::lower($posts[0]->category->name) }}-color">
                    {{ Str::upper($posts[0]->category->name) }}
                  </a>
                  <p class="big-content-card-title">
                    {{ $posts[0]->title }}
                  </p>
                  <p class="big-content-card-text">
                    {{ $posts[0]->summary }}
                  </p>
                  <a href="/posts/{{ $posts[0]->id }}" class="nav-link big-content-card-link">Read More <i
                      class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            @else
              <div class="big-content-card-hero mb-5">
                <img src="/images/home/big-content.png" alt="" class="img-fluid">

                <div class="big-content-card-hero-body">
                  <p class="big-content-card-author">
                    Alexander Christopher | March 12, 2021
                  </p>
                  <a href="/" class="nav-link big-content-card-category design-color">
                    Design
                  </a>
                  <p class="big-content-card-title">
                    Seeking Experience in the Field of Data Visualization with Experienced Experts
                  </p>
                  <p class="big-content-card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lobortis vel odio amet,
                    aenean sed viverra
                    volutpat tortor elit.
                  </p>
                  <a href="#" class="nav-link big-content-card-link">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            @endif

          </div>
          <div class="col-lg-6">

            @if ($posts->count() > 1)
              @for ($i = 1; $i <= $posts->count() - 1; $i++)
                @if ($i < 4)
                  <div class="sub-content-card mb-5">
                    <div class="row align-items-start">
                      <div class="col-4">
                        <img src="/storage/{{ $posts[$i]->image }}" alt="" class="img-fluid sub-content-card-img">
                      </div>
                      <div class="col-8">
                        <p class="sub-content-card-author">
                          {{ $posts[$i]->user->username }} | {{ $posts[$i]->created_at->diffForHumans() }}
                        </p>
                        <a href="/"
                          class="nav-link sub-content-card-category {{ Str::lower($posts[$i]->category->name) }}-color">
                          {{ Str::upper($posts[$i]->category->name) }}
                        </a>
                        <p class="sub-content-card-title">{{ $posts[$i]->title }}</p>
                        <a href="/posts/{{ $posts[$i]->id }}" class="nav-link sub-content-card-link">Read More <i
                            class="bi bi-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                @else
                @break
              @endif
            @endfor
          @else
            <div class="sub-content-card mb-5">
              <div class="row align-items-start">
                <div class="col-4">
                  <img src="/images/home/sub-content.png" alt="" class="img-fluid sub-content-card-img">
                </div>
                <div class="col-8">
                  <p class="sub-content-card-author">
                    Alexander | March 12, 2021
                  </p>
                  <a href="/" class="nav-link sub-content-card-category web-color">
                    Web
                  </a>
                  <p class="sub-content-card-title">Seeking Experience in the Field of Data
                    Visualization
                    Experts</p>
                  <a href="#" class="nav-link sub-content-card-link">Read More <i
                      class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="sub-content-card mb-5">
              <div class="row align-items-start">
                <div class="col-4">
                  <img src="/images/home/sub-content (2).png" alt="" class="img-fluid sub-content-card-img">
                </div>
                <div class="col-8">
                  <p class="sub-content-card-author">
                    Alexander | March 12, 2021
                  </p>
                  <a href="/" class="nav-link sub-content-card-category mobile-color">
                    Mobile
                  </a>
                  <p class="sub-content-card-title">Seeking Experience in the Field of Data
                    Visualization
                    Experts</p>
                  <a href="#" class="nav-link sub-content-card-link">Read More <i
                      class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="sub-content-card">
              <div class="row align-items-start">
                <div class="col-4">
                  <img src="/images/home/sub-content (3).png" alt="" class="img-fluid sub-content-card-img">
                </div>
                <div class="col-8">
                  <p class="sub-content-card-author">
                    Alexander | March 12, 2021
                  </p>
                  <a href="/" class="nav-link sub-content-card-category ai-color">
                    AI
                  </a>
                  <p class="sub-content-card-title">Seeking Experience in the Field of Data
                    Visualization
                    Experts</p>
                  <a href="#" class="nav-link sub-content-card-link">Read More <i
                      class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          @endif

        </div>
      </div>
    </div>
  </section>

  <section class="author-choice" id="author-choice">
    <div class="container">
      <div class="home-header-section-group d-flex justify-content-between align-items-center">
        <h2 class="home-section-title">Author's Choice</h2>
        <a href="/author" class="btn-custom-primary">See All <i class="bi bi-arrow-right"></i></a>
      </div>
      <div class="row justify-content-center align-items-center row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

        @if ($posts->count())
          @for ($i = 0; $i <= $posts->count() - 1; $i++)
            @if ($i < 4)
              <div class="col">
                <div class="card h-100 card-post">
                  <img src="/images/home/sub-content (3).png" alt="card-post" class="card-post-img img-fluid">

                  <div class="card-post-body">
                    <p class="card-post-author">{{ $posts[0]->user->username }} |
                      {{ $posts[$i]->created_at->diffForHumans() }}</p>
                    <a href="/"
                      class="nav-link card-post-category {{ Str::lower($posts[$i]->category->name) }}-color">{{ Str::upper($posts[$i]->category->name) }}</a>
                    <p class="card-post-title">{{ $posts[$i]->title }}</p>
                    <p class="card-post-text">{{ $posts[$i]->summary }}</p>
                    <a href="/posts/{{ $posts[$i]->id }}" class="nav-link card-post-link">Read More <i
                        class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            @else
            @break
          @endif
        @endfor
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
              <p class="card-post-title">Seeking Experience in the Field of Data Visualization Experts
              </p>
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
              <p class="card-post-title">Seeking Experience in the Field of Data Visualization Experts
              </p>
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
              <p class="card-post-title">Seeking Experience in the Field of Data Visualization Experts
              </p>
              <p class="card-post-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <a href="#" class="nav-link card-post-link">Read More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      @endif

    </div>
  </div>
</section>

<section class="home-category" id="home-category">
  <div class="container">
    <div class="home-header-section-group d-flex justify-content-between align-items-center">
      <h2 class="home-section-title">By Categories</h2>
      <a href="/category" class="btn-custom-primary">See All <i class="bi bi-arrow-right"></i></a>
    </div>
    <div class="row justify-content-center align-items-center row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
      @if ($posts->count())
        @for ($i = 0; $i <= $posts->count() - 1; $i++)
          @if ($i < 4)
            <div class="col">
              <div class="card h-100 card-post">
                <img src="/images/home/sub-content (3).png" alt="card-post" class="card-post-img img-fluid">

                <div class="card-post-body">
                  <p class="card-post-author">{{ $posts[0]->user->username }} |
                    {{ $posts[$i]->created_at->diffForHumans() }}</p>
                  <a href="/"
                    class="nav-link card-post-category {{ Str::lower($posts[$i]->category->name) }}-color">{{ Str::upper($posts[$i]->category->name) }}</a>
                  <p class="card-post-title">{{ $posts[$i]->title }}</p>
                  <p class="card-post-text">{{ $posts[$i]->summary }}</p>
                  <a href="/posts/{{ $posts[$i]->id }}" class="nav-link card-post-link">Read More <i
                      class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          @else
          @break
        @endif
      @endfor
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
            <p class="card-post-title">Seeking Experience in the Field of Data Visualization Experts
            </p>
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
            <p class="card-post-title">Seeking Experience in the Field of Data Visualization Experts
            </p>
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
            <p class="card-post-title">Seeking Experience in the Field of Data Visualization Experts
            </p>
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
