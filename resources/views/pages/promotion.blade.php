@extends('layouts.frontLayouts.master')
@section('content')
@push('styles')
    <link href="{{ asset('css/frontend_css/promotion.css') }}" rel="stylesheet">
<div class="container">
    <div class="titlePage">
      <h3>Khuyến mãi</h3>
      <img src="img31.png" alt="">
    </div>
</div>
<div class="container">
    <div class="name-promotion">
        <div class="title">
            <h2><a href="#"> Khuyến mãi </a></h2>
        </div>
        <div class="row items-promotion">
        <ul class="list-items">
            <li>
                <a href="#">
                    <img src="{{asset('images/promotion/event/promotion1.jpg')}}" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{asset('images/promotion/event/promotion2.jpg')}}" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{asset('images/promotion/event/promotion3.jpg')}}" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{asset('images/promotion/event/promotion4.jpg')}}" alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="{{asset('images/promotion/event/promotion4.jpg')}}" alt="">
                </a>
            </li>
        </ul>
        </div>


        <div class="title">
            <h2><a href="#"> Đối tác </a></h2>
        </div>
        <div class="row items-promotion">
        <ul class="list-items">
            <li>
                <a href="">
                    <img src="{{asset('images/promotion/doiTac/doitac1.jpg')}}" alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="{{asset('images/promotion/doiTac/doitac2.png')}}" alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="{{asset('images/promotion/doiTac/doitac3.jpg')}}" alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="{{asset('images/promotion/doiTac/doitac4.png')}}" alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="{{asset('images/promotion/doiTac/doitac4.png')}}" alt="">
                </a>
            </li>        
        </ul>
        </div>
    </div>
</div>


@endsection()