@extends('layouts.master')
@section('title')
Royaltour | เกี่ยวกับเรา
@endsection
@section('meta')
Royaltour | เกี่ยวกับเรา
@endsection
@section('content')
<div class="jumbotron jumbotron-fluid" style="background:url('/assets/img/components/image_bg_9.jpg'); text-align:center; color:white;">
   <div class="container">
      <h1>เกี่ยวกับเรา</h1>
      <p>หน้าแรก > เกี่ยวกับเรา</p>
   </div>
</div>
<span>{!!$content->content!!}</span>
@endsection
