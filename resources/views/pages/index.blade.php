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
  <div class="column ">
    <div class="content">
      <a href="{{asset('detail')}}">
        <img src="{{asset('images/avaMovie/6.jpeg')}}" alt="Mountains" class="w-100">
      </a>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column ">
    <div class="content">
      <a href="{{asset('detail')}}">
        <img src="{{asset('images/avaMovie/6.jpeg')}}" alt="Lights" class="w-100">
      </a>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
      <a href="{{asset('detail')}}">
        <img src="{{asset('images/avaMovie/7.jpeg')}}"  style="width:100%">
      </a>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  
  <div class="column ">
    <div class="content">
      <a href="{{asset('detail')}}">
        <img src="{{asset('images/avaMovie/8.jpeg')}}"  style="width:100%">
      </a>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column ">
    <div class="content">
      <a href="{{asset('detail')}}">
        <img src="{{asset('images/avaMovie/9.jpeg')}}"  style="width:100%">
      </a>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column ">
    <div class="content">
      <a href="{{asset('detail')}}">
        <img src="{{asset('images/avaMovie/10.jpeg')}}" " style="width:100%">
      </a>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

  <div class="column p">
    <div class="content">
      <a href="{{asset('detail')}}">  
        <img src="{{asset('images/avaMovie/11.jpeg')}}"  style="width:100%">
      </a>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column people">
    <div class="content">
      <a href="{{asset('detail')}}">
        <img src="{{asset('images/avaMovie/12.jpeg')}}" style="width:100%">
      </a>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column people">
    <div class="content">
      <a href="{{asset('detail')}}">
        <img src="{{asset('images/avaMovie/13.jpeg')}}"  style="width:100%">
      </a>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>
@endsection()