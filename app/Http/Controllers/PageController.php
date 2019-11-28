<?php

namespace App\Http\Controllers;
use App\news;
use Illuminate\Support\Facades\DB;
use App\home;

use Illuminate\Http\Request;    

class PageController extends Controller
{
    public function getIndex(){
        $home = DB::table('films')->get();
        return view('pages.index', compact('home'));
    }
    public function getHome(){
        $home = DB::table('home')->get();
        return view('home', compact('home'));
    }
    public function getDetail($id){
        $detailphim = home::where('film_id', $id)->first();
        return view('pages.detail', compact('detailphim'));
    }
    public function getMovieSchedule(){
        $lichchieu = DB::table('timetablefilm')
        ->join('films', 'timetablefilm.film_id','=', 'films.film_id')
        ->join('rooms', 'timetablefilm.room_id','=', 'rooms.room_id')
        ->select('timetablefilm.*', 'rooms.*','films.*')
        ->get();
        // $slotfilm=DB::table('timetablefilm')
        // ->join('film', 'timetablefilm.film_id','=', 'films.film_id');
        // $arrTime;
        // foreach($lichchieu->film_id as $i){
            
        // }
        return view('pages.movieSchedule', compact('lichchieu'));
    }
    public function getInformation(){
        $gioithieu = DB::table('gioithieu')->get();
        return view('pages.information', compact('gioithieu'));
    }
    public function getNews(){
        $news=DB::table('films')->get();
        return view('pages.news', compact('news'));
    }
    public function getPromotion(){
        return view('pages.promotion');
    }
    public function getBooking($id){
        $bf=DB::table('films')->where('film_id', $id)->first();
        return view('pages.booking', compact('bf'));
    }
    public function getLogin(){
        return view('pages.login');
    }
    public function getRegister(){
        return view('pages.register');
    }
}
