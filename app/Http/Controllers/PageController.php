<?php

namespace App\Http\Controllers;
use App\news;
use Illuminate\Support\Facades\DB;
use App\home;

use Illuminate\Http\Request;    

class PageController extends Controller
{
    public function getIndex(){
        $home = DB::table('home')->get();
        return view('pages.index', compact('home'));
    }
    public function getDetail($id){
        $detailphim = home::where('id', $id)->first();
        return view('pages.detail', compact('detailphim'));
    }
    public function getMovieSchedule(){
        $lichchieu = DB::table('lichchieu')->get();
        return view('pages.movieSchedule', compact('lichchieu'));
    }
    public function getInformation(){
        $gioithieu = DB::table('gioithieu')->get();
        return view('pages.information', compact('gioithieu'));
    }
    public function getNews(){
        $news=DB::table('news')->get();
        return view('pages.news', compact('news'));
    }
    public function getPromotion(){
        return view('pages.promotion');
    }
    public function getBooking(){
        return view('pages.booking');
    }
    public function getLogin(){
        return view('pages.login');
    }
    public function getRegister(){
        return view('pages.register');
    }
}
