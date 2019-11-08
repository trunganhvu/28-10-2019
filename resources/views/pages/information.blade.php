@extends('layouts.frontLayouts.master')
@section('content')
@push('style')
    <link href="{{ asset('css/frontend_css/information.css') }}" rel="stylesheet">
    <div class="container mt-3">
        <div class="titlePage">
            <h3>Giới thiệu chung</h3>
            <img src="{{asset('images/imgTitle/info.png')}}" alt="">
        </div>
    </div>
    <div class="container">
    @foreach($gioithieu as $gt)
        <div class="row pt-5">
            <span class="text-info">
                {{$gt->content}}
            </span>
        </div>
        <div class="row images-double">
            <img src="{{asset($gt->photo)}}" class="img-thumbnail" alt="" width="600" height="300">
            <img src="{{asset($gt->photo2)}}" class="img-thumbnail" alt="" width="600" height="300">
             
        </div>
        <div class="row image">
            <img src="{{asset($gt->photo3)}}" class="img-thumbnail" alt="" width="1200" height="300">
        </div>
        <div class="row image">
            <img src="{{asset($gt->photo4)}}" class="img-thumbnail" alt="" width="1200" height="300">
        </div>
    @endforeach
    </div>

@endsection()