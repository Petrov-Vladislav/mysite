@extends('layouts/site_layout')

@section('title', 'Главная')
    
@section('content')
  <section>
    @foreach ($articles as $article)
      <div class="blog-entry ftco-animate d-md-flex fadeInUp ftco-animated">
        <img src="{{$article->img}}" width="200px" height="150px" alt="">
        <div class="ms-5 mb-5">
          <h3 class="mb-1"><a href="{{route('oneArticle', $article['id'])}}">{{$article->title}}</a></h3>
          <div class="meta-wrap">
          <p class="meta">
          <span><i class="bi bi-calendar3 me-2"></i>{{$article->created_at}}</span>
          <span><i class="bi bi-tag ms-4 me-2"></i><a href="single.html">{{$article->category['title']}}</a></span>
          {{-- <span><i class="icon-comment2 mr-2"></i>5 Comment</span> --}}
          </p>
          </div>
          <p class="mb-4">{!!$article->text!!}</p>
          <p><a href="{{route('oneArticle', $article['id'])}}" class="btn-custom">Читать дальше<span class="ion-ios-arrow-forward"></span></a></p>
        </div>
        </div>
      @endforeach
  </section>
@endsection
