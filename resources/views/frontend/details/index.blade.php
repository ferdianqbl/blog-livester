@extends('frontend.layouts.main')

@section('container')
  <div class="detail-post" id="detail-post">
    <section class="detail-post-content" id="detail-post-content">
      <div class="container">
        <h2 class="detail-post-title">Detail Post</h2>

        <div class="row justify-content-center align-items-center mx-auto">
          <div class="col-12">
            @if ($post->image)
              <img src="/storage/{{ $post->image }}" alt="{{ $post->title }}-img" class="img-fluid detail-post-img">
            @else
              <img src="/images/detail/detail-img.png" alt="{{ $post->title }}-img" class="img-fluid detail-post-img">
            @endif
          </div>
        </div>

        <div class="row justify-content-center align-items-center mx-auto">
          <div class="col-lg-8 col-md-10">
            <p class="detail-post-author text-center">{{ $post->user->username }} |
              {{ $post->created_at->diffForHumans() }}</p>
            <div class="detail-post-category-container text-center mx-auto">
              <p class="detail-post-category {{ Str::lower($post->category->name) }}-color">
                {{ Str::upper($post->category->name) }}</p>
            </div>
            <p class="detail-post-title text-center">{{ $post->title }}</p>

            <div class="detail-post-body">
              {!! $post->body !!}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
