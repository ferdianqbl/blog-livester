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
        <div class="col-md-5">
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
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lobortis vel odio amet, aenean sed viverra
                volutpat tortor elit.
              </p>
              <a href="#" class="nav-link big-content-card-link">Read More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
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
                <p class="sub-content-card-title">Seeking Experience in the Field of Data Visualization
                  Experts</p>
                <a href="#" class="nav-link sub-content-card-link">Read More <i class="bi bi-arrow-right"></i></a>
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
                <p class="sub-content-card-title">Seeking Experience in the Field of Data Visualization
                  Experts</p>
                <a href="#" class="nav-link sub-content-card-link">Read More <i class="bi bi-arrow-right"></i></a>
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
                <p class="sub-content-card-title">Seeking Experience in the Field of Data Visualization
                  Experts</p>
                <a href="#" class="nav-link sub-content-card-link">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <section class="author-choice" id="author-choice">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="home-header-section-group d-flex justify-content-between align-items-center">
          <h2 class="home-section-title">Author's Choice</h2>
          <a href="/" class="btn-custom-primary">See All <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="col-md-3">
          <div class="card-post">
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
        <div class="col-md-3">
          <div class="card-post">
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
        <div class="col-md-3">
          <div class="card-post">
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
        <div class="col-md-3">
          <div class="card-post">
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
      </div>
    </div>
  </section>

  <section class="home-category" id="home-category">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="home-header-section-group d-flex justify-content-between align-items-center">
          <h2 class="home-section-title">By Categories</h2>
          <a href="/" class="btn-custom-primary">See All <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="col-md-3">
          <div class="card-post">
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
        <div class="col-md-3">
          <div class="card-post">
            <img src="/images/home/sub-content (3).png" alt="card-post" class="card-post-img img-fluid">

            <div class="card-post-body">
              <p class="card-post-author">Alexander | March 12, 2021</p>
              <a href="/" class="nav-link card-post-category web-color">Web</a>
              <p class="card-post-title">Seeking Experience in the Field of Data Visualization Experts</p>
              <p class="card-post-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <a href="#" class="nav-link card-post-link">Read More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card-post">
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
        <div class="col-md-3">
          <div class="card-post">
            <img src="/images/home/sub-content (3).png" alt="card-post" class="card-post-img img-fluid">

            <div class="card-post-body">
              <p class="card-post-author">Alexander | March 12, 2021</p>
              <a href="/" class="nav-link card-post-category design-color">Design</a>
              <p class="card-post-title">Seeking Experience in the Field of Data Visualization Experts</p>
              <p class="card-post-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <a href="#" class="nav-link card-post-link">Read More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection