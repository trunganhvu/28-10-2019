@extends('layouts.frontLayouts.master')
@section('content')
@push('styles')
    <link href="{{ asset('css/frontend_css/movieSchedule.css') }}" rel="stylesheet">
<ul class="list-movie">
    @foreach($lichchieu as $lc)
    <li class="item-movie">
        <div class="movie-view">
            <div class="movie-frame row">
                <div class="movie-content col-3 p-5">
                    <img src="{{asset($lc->avaphim)}}" alt="movie-avatar">
                </div>
                <div class="movie-content col-9 pt-5">
                    <div class="d-flex justify-content-between align-items-baseline">   
                        <h3>
                            <a href="{{url('detail')}}">
                                <b>{{$lc->title}} </b>
                            </a>
                            <span>2D</span>
                        </h3>
                    </div>
                    <div class="movie-gallery">
                        <p>
                            <b>Thời lượng: </b>{{$lc->time}}<br>
                            <b>Xuất xứ: </b>"Mỹ"<br>
                            <b>Khởi chiếu: </b>{{$lc->ngaychieu}}<br>
                            <b>Đối tượng: </b>"Cấm khán giả dưới 13 tuổi"<br>
                        </p>
                    </div>
                    <div class="movie-gallery">
                        <ul class="movie-times">
                            <li>
                                <a href="#">09:00</a>
                            </li>
                            <li>
                                <a href="#">10:00</a>
                            </li>
                            <li>
                                <a href="#">11:00</a>
                            </li>
                            <li>
                                <a href="#">12:00</a>
                            </li>
                            <li>
                                <a href="#">12:00</a>
                            </li>
                            <li>
                                <a href="#">12:00</a>
                            </li>
                            <li>
                                <a href="#">12:00</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </li>
    @endforeach


@endsection()
