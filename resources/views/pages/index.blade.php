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
  @foreach($home as $h)
    <div class="column ">
      <div class="content">
        <a href="{{route('detail',$h->film_id)}}">
          <img src="{{asset($h->film_photo)}}" alt="Mountains" class="w-100">
        </a>
        <p>{{$h->film_name}}</p>
      </div>
    </div>
  @endforeach
  </div> 
  <!-- END GRID -->
</div>
@endsection()
