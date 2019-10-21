@extends('layouts.frontLayouts.master')
@section('content')
@push('style')
    <link href="{{ asset('css/frontend_css/information.css') }}" rel="stylesheet">
    <div class="container mt-3">
        <div class="titlePage">
            <h3>Giới thiệu chung</h3>
            <img src="img31.png" alt="">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <span class="text-info">
                Trung tâm Chiếu phim Quốc gia (tên giao dịch quốc tế là National Cinema Center) 
                là đơn vị sự nghiệp công lập, trực thuộc Bộ Văn hóa, Thể thao và Du lịch, được 
                thành lập vào ngày 29 tháng 12 năm 1997. Trung tâm Chiếu phim Quốc gia có chức 
                năng tổ chức chiếu phim phục vụ các nhiệm vụ chính trị, xã hội, hợp tác quốc tế; 
                điều tra xã hội học về nhu cầu khán giả để phục vụ cho công tác định hướng phát 
                triển ngành Điện ảnh; trưng bày điện ảnh và tổ chức các hoạt động biểu diễn nghệ thuật.
            </span>
        </div>
        <div class="row images-double">
            <!-- <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                <img src="{{asset('images/inforCinema/cgv_booking_box.jpeg')}}" alt="">
            </div> -->
            <img src="{{asset('images/inforCinema/info_lotte.jpeg')}}" class="img-thumbnail" alt="" width="600" height="300">
            <img src="{{asset('images/inforCinema/room_cgv.jpeg')}}" class="img-thumbnail" alt="" width="600" height="300">
             
        </div>
        <div class="row image">
            <img src="{{asset('images/inforCinema/cgv_booking_box.jpeg')}}" class="img-thumbnail" alt="" width="1200" height="300">
        </div>
        <div class="row image">
            <img src="{{asset('images/inforCinema/cafe_cgv.jpeg')}}" class="img-thumbnail" alt="" width="1200" height="300">
        </div>
    </div>
@endsection()