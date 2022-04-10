@extends('layouts.site_layout')

@section('title')
    {{$oneArticle->title}}
@endsection

@section('content')
    <h3>{{$oneArticle->title}}</h3>
    
    <p class="meta">
        <span><i class="bi bi-calendar3 me-2"></i>{{$oneArticle->created_at}}</span>
        <span><i class="bi bi-tag ms-4 me-2"></i><a href="single.html">{{$oneArticle->category['title']}}</a></span>
        {{-- <span><i class="icon-comment2 mr-2"></i>5 Comment</span> --}}
    </p>

    <img src="{{$oneArticle->img}}" width="200px" height="150px" alt="">

    <p class="mb-4">{!!$oneArticle->text!!}</p>

@endsection