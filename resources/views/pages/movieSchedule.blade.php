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
                    <img src="{{asset($lc->film_photo)}}" alt="movie-avatar">
                </div>
                <div class="movie-content col-9 pt-5">
                    <div class="d-flex justify-content-between align-items-baseline">   
                            <a href="{{route('detail',$lc->film_id)}}">
                                <h3>{{$lc->film_name}} </h3>
                            </a>
                            <span> 2D</span>
                    </div>
                    <div class="movie-gallery">
                        <p>
                            <b>Thời lượng: </b>{{$lc->film_time}}<br>
                            <b>Xuất xứ: </b>{{$lc->film_from}}<br>
                        </p>
                    </div>
                    <div class="movie-gallery">
                        <ul class="movie-times">
                            @php
                            $times = \App\timetablefilm::where(['film_id' => $lc->film_id])->get()
                            @endphp
                        @foreach($times as $ti)
                            <li>
                                <a href="{{route('booking',$ti->timetablefilm_id)}}">{{$ti->timestart}}</a>
                            </li>
                        @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </li>
    @endforeach


@endsection()
