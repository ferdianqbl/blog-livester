@extends('frontend.layouts.main')

@section('container')

<div class="category" id="category">
  <section class="category-selection" id="category-selection">
    <div class="container">
      <div class="row justify-content-center align-items-center row-cols-2 row-cols-md-3 g-4">
        <div class="col">
          <div class="card category-card">
            <img src="/images/category/web.png" alt="" class="img-fluid">
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <a href="/" class="category-card-title">Web</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card category-card">
            <img src="/images/category/design.png" alt="" class="img-fluid">
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <a href="/" class="category-card-title">Design</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card category-card">
            <img src="/images/category/mobile.png" alt="" class="img-fluid">
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <a href="/" class="category-card-title">Mobile</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card category-card">
            <img src="/images/category/ai.png" alt="" class="img-fluid">
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <a href="/" class="category-card-title">AI</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card category-card">
            <img src="/images/category/data.png" alt="" class="img-fluid">
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <a href="/" class="category-card-title">Data</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card category-card">
            <img src="/images/category/tech.png" alt="" class="img-fluid">
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <a href="/" class="category-card-title">Tech</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

@endsection