<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function getIndex(){
        return view('pages.index');
    }
    public function getDetail(){
        return view('pages.detail');
    }
    public function getMovieSchedule(){
        return view('pages.movieSchedule');
    }
    public function getInformation(){
        return view('pages.information');
    }
    public function getNews(){
        return view('pages.news');
    }
    public function getPromotion(){
        return view('pages.promotion');
    }
    public function getBooking(){
        return view('pages.booking');
    }
}
