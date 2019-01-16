@extends('backend.backend-layouts.admin-master')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <form  action="/admin-save-aboutus-page" method="post">
        <div class="panel-body">
          @if($content == null)
            <textarea class="mcetext" rows="20"  name="content"></textarea>
          @else
            <textarea class="mcetext" rows="20"  name="content">{{$content->content}}</textarea>
          @endif
        </div>
        @csrf
        <button class="btn btn-success form-control" type="submit" name="button">บันทึกเนื้อหา</button>
      </form>
    </div>
  </div>
</div>
@endsection
