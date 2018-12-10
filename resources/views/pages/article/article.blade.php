@extends('layouts.master')

@section('title')
Royaltour | บทความ
@endsection

@section('meta')
Royaltour | บทความ
@endsection

@section('content')
<div class="jumbotron jumbotron-fluid" style="background:url('/assets/img/components/image_bg_7.jpg'); text-align:center; color:white;">
  <div class="container">
    <h1>บทความ</h1>
    <p>หน้าแรก > บทความ</p>
  </div>
</div>
<div class="container mt-5">
  <div class="row">
    <div class="col-12" style="text-align:center;">
      <h1>หมวดหมู่บทความ</h1>
    </div>
  </div>
  <div class="row mt-3">
    @foreach($article_cat as $show_article_cat)
    <div class="col-md-3 article-category">
      <a href="/article/{{$show_article_cat->_id}}">
        <img class="article-category" src="/assets/img/upload/article/category/{{$show_article_cat->article_cat_img}}" alt="article-category">
      </a>
    </div>
    @endforeach
  </div>
</div>
@endsection