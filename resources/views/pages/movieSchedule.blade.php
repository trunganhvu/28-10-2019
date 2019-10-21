@extends('layouts.frontLayouts.master')
@section('content')
@push('styles')
    <link href="{{ asset('css/frontend_css/movieSchedule.css') }}" rel="stylesheet">
<ul class="list-movie">
    <li class="item-movie">
        <div class="movie-view">
            <div class="movie-frame">
                <div class="movie-content">
                    <img src="{{asset('images/movieSchedule/12.jpeg')}}" alt="movie-avatar">
                </div>
                <div class="movie-content">
                    <div class="">   
                        <h3>
                            <a href="#">
                                <b>Maleficent tiên hắc ám 2 ( 2D) - C13 </b>
                            </a>
                            <span>2D</span>
                        </h3>
                    </div>
                    <div class="movie-gallery">
                        <p>
                            <b>Thời lượng: </b>"100 phút"<br>
                            <b>Xuất xứ: </b>"Mỹ"<br>
                            <b>Khởi chiếu: </b>"17/10/2019"<br>
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
    <!-- li2 -->
    <li class="item-movie">
        <div class="movie-view">
            <div class="movie-frame">
                <div class="movie-content">
                    <img src="{{asset('images/movieSchedule/12.jpeg')}}" alt="movie-avatar">
                </div>
                <div class="movie-content">
                    <div class="">   
                        <h3>
                            <a href="#">
                                <b>Maleficent tiên hắc ám 2 ( 2D) - C13 </b>
                            </a>
                            <span>2D</span>
                        </h3>
                    </div>
                    <div class="movie-gallery">
                        <p>
                            <b>Thời lượng: </b>"100 phút"<br>
                            <b>Xuất xứ: </b>"Mỹ"<br>
                            <b>Khởi chiếu: </b>"17/10/2019"<br>
                            <b>Đối tượng: </b>"Cấm khán giả dưới 13 tuổi"<br>
                        </p>
                    </div>
                    <div class="movie-gallery">
                        <ul class="movie-times">
                            <li>
                                <a href="">09:00</a>
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
</ul>


@endsection()
