<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\news;
use Illuminate\Support\Facades\DB;
use App\home;
use App\layvitri;
use App\orders;
use App\Events\FormSubmitted;

use Illuminate\Http\Request;    

class PageController extends Controller
{
    public function getIndex(){
        $home = DB::table('films')->get();
        return view('pages.index', compact('home'));
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
        ->groupBy('timetablefilm.film_id')
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
        $film = DB::table('timetablefilm')->where('timetablefilm_id', $id)
            ->join('films', 'timetablefilm.film_id', '=', 'films.film_id')
            ->first();
        $room = DB::table('timetablefilm')->where('timetablefilm_id', $id)
            ->join('rooms', 'rooms.room_id', '=', 'timetablefilm.room_id')
            ->first();
        $layvitri=DB::table('layvitri')->where('timetable_id',$id)->pluck('location')->toArray();
        $price;
        if(Auth::check()){
            $user=DB::table('users')->where('users.id',Auth::user()->id)->first();
            $price=DB::table('pricelist')->where('price_id',$user->price_id)->first();
        }
        else{
            $price=DB::table('pricelist')->where('price_id',1)->first();
        }
        return view('pages.booking', compact('film', 'room','layvitri','price'));
    }
    public function getLogin(){
        return view('pages.login');
    }
    public function getRegister(){
        return view('pages.register');
    }
    public function getbook(Request $re){
        if(Auth::check()){
            $request=$re->all();
            $seat=$re->seat;
            event(new FormSubmitted($seat));
            if ($seat==null){
                return redirect()->back();
            }
            else{
                foreach($seat as $s){
                    $layvitri=new layvitri;
                    $layvitri->timetable_id=$re->timetable_id;         
                    $layvitri->location=$s;
                    $layvitri->user_id=Auth::user()->id;
                    $layvitri->save();

                }
                $order=new orders;
                $order->user_id=Auth::user()->id;
                $order->timetable_id=$re->timetable_id;
                $order->quantity=count($seat);
                $order->price_id=Auth::user()->price_id;
                // $price=DB::table('pricelist')->where('pricelist.price_id',Auth::user()->price_id)->first();
                // $order->total=var_dump($price->price*count($seat));
                $order->save();

            }
            return redirect()->back();
        }
        else{
            return redirect('/login');
        }

    }
    public function getConfirm(){
        
        return view('pages.confirmBill');
    }
    
}
