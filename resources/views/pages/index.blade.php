@extends('layouts.frontLayouts.master')
@section('content')
@push('styles')
    <link href="{{ asset('css/frontend_css/index.css') }}" rel="stylesheet">

<div class="main">
  <div class="phim">
    <div class="active"><a href="#">PHIM HAY ĐANG CHIẾU</a> </div>
    <div><a href="#"> PHIM HAY SẮP CHIẾU</a> </div>
  </div>

  <!-- Portfolio Gallery Grid -->
  <div class="row">
  @foreach($indexhome as $index)
    <div class="column ">
      <div class="content">
        <a href="{{asset('detail')}}">
          <img src="{{asset($index->photo)}}" alt="Mountains" class="w-100">
        </a>
        <p>{{$index->title}}</p>
      </div>
    </div>
  @endforeach
  </div> 
  <!-- END GRID -->
</div>
@endsection()
