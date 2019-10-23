@extends('layouts.frontLayouts.master')
@section('content')
@push('styles')
    <link href="{{ asset('css/frontend_css/news.css') }}" rel="stylesheet">
<div class="container mt-3">
    <div class="titlePage">
      <h3>Tin tức</h3>
      <img src="{{asset('images/imgTitle/news.png')}}" alt="">
    </div>
</div>

<div class="container">
    <ul class="list-posters">

        <li class="item-poster">
            <div class="news col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="poster col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <img src="{{asset('images/news/news1.jpeg')}}">
                </div>
                <div class="right-poster col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="row">
                    <p class="news-title">Chương trình phim đang chiếu (Từ 18/10 đến 24/10)</p>
                    <hr>
                    </div>
                    <div class="row">
                        <ul>
                        <li>Thời gian diễn ra: </li><span class="news-content">19 Tháng Mười 2019</span><br>
                        <li>Nội dung: </li><span class="news-content">Chương trình phim đang chiếu (Từ 18/10 đến 24/10)</span><br>
                        </ul>
                        <button type="button" class="btn btn-description">Xem chi tiết</button>
                    </div>
                </div>
            </div>
        </li>

        

        <li class="item-poster">
            <div class="news col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="poster col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <img src="{{asset('images/news/news1.jpeg')}}">
                </div>
                <div class="right-poster col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="row">
                    <p class="news-title">Chương trình phim đang chiếu (Từ 18/10 đến 24/10)</p>
                    <hr>
                    </div>
                    <div class="row">
                        <ul>
                        <li>Thời gian diễn ra: </li><span class="news-content">15 Tháng Mười 2019</span><br>
                        <li>Nội dung: </li><span class="news-content">Tuyển dụng cộng tác viên soát vé tại chỗ</span><br>
                        </ul>
                        <button type="button" class="btn btn-description">Xem chi tiết</button>
                    </div>
                </div>
            </div>
        </li>

        <li class="item-poster">
            <div class="news col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="poster col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <img src="{{asset('images/news/news2.jpeg')}}">
            </div>
            <div class="right-poster col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="row">
                <p class="news-title">Tuyển dụng cộng tác viên soát vé dẫn chỗ</p>
                <hr>
                </div>
                <div class="row">
                    <ul>
                    <li>Thời gian diễn ra: </li><span class="news-content">15 Tháng Mười 2019</span><br>
                    <li>Nội dung: </li><span class="news-content">Tuyển dụng cộng tác viên soát vé tại chỗ</span><br>
                    </ul>
                    <button type="button" class="btn btn-description">Xem chi tiết</button>
                </div>
            </div>
            </div>
        </li>

        <li class="item-poster">
        <div class="news col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="poster col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <img src="{{asset('images/news/news3.jpeg')}}">
        </div>
        <div class="right-poster col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="row">
            <p class="news-title">Chương trình Ưu đãi- Giảm giá</p>
            <hr>
            </div>
            <div class="row">
                <ul>
                <li>Thời gian diễn ra: </li><span class="news-content">Ngày thứ 2 cuối cùng mỗi tháng</span><br>
                <li>Nội dung: </li><span class="news-content">Ưu đãi giá vé 50.000đ/ Vé</span><br>
                </ul>
                <button type="button" class="btn btn-description">Xem chi tiết</button>
            </div>
        </div>
        </div>
        </li>

        <li class="item-poster">
        <div class="news col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="poster col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <img src="{{asset('images/news/news4.jpeg')}}">
        </div>
        <div class="right-poster col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="row">
            <p class="news-title">Suất chiếu sớm: Jocker</p>
            <hr>
            </div>
            <div class="row">
                <ul>
                <li>Thời gian diễn ra: </li><span class="news-content">30 Tháng Chín 2019</span><br>
                <li>Nội dung: </li><span class="news-content">KHỞI CHIẾU SIÊU PHẨM JOCKER</span><br>
                </ul>
                <button type="button" class="btn btn-description">Xem chi tiết</button>
            </div>
        </div>
        </div>
        </li>

        <li class="item-poster">
        <div class="news col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="poster col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <img src="{{asset('images/news/news5.jpeg')}}">
        </div>
        <div class="right-poster col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="row">
            <p class="news-title">Liên hoan phim Quốc tế Hà Nội</p>
            <hr>
            </div>
            <div class="row">
                <ul>
                <li>Thời gian diễn ra: </li><span class="news-content">23- 27 Tháng Mười Một 2019</span><br>
                <li>Nội dung: </li><span class="news-content">Tặng vé xem phim miễn phí</span><br>
                </ul>
                <button type="button" class="btn btn-description">Xem chi tiết</button>
            </div>
        </div>
        </div>
        </li>
    </ul>
</div>

@endsection()