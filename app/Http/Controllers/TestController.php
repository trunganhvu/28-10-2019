<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\room;
use App\pricelist;
use App\films;
use App\timetablefilm;
use App\orders;

class TestController extends Controller
{
    public function check(Request $request)
    {
        $data = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            //true
        } else {
            //false
        }
    }
    public function tableroom(){
        $rooms=DB::table('rooms')->get();
        return view('layouts.admin.rooms', compact('rooms'));
    }
    public function deleteroom($id){
        $room=DB::table('rooms')->where('room_id', $id);
        $room->delete();
        return redirect('/table-rooms');
    }
    public function editroom(Request $request){
        $re=$request->all();
        $room=DB::table('rooms')->where('room_id', $re['room_id'])->update(['room_name' => $re['room_name'], 'room_size' => $re['room_size']]);
        return redirect('/table-rooms');
    }
    public function createroom(Request $re){
        $room =new room;
        if ($re->room_name==""&&$re->room_size==""){
            return redirect('/table-rooms');
        }
        else{
            $room->room_name=$re->room_name;
            $room->room_size=$re->room_size;
            $room->save();    
        }
        return redirect('/admin/table-rooms');
    }
    public function tablepricelist(){
        $pricelist=DB::table('pricelist')->get();
        return view('layouts.admin.pricelist', compact('pricelist'));
    }
    public function editpricelist(Request $request){
        $re=$request->all();
        $pricelist=DB::table('pricelist')->where('price_id', $re['price_id'])->update(['price'=>$re['price'],'price_name'=>$re['price_name']]);
        return redirect('/table-pricelist');
    }
    public function deletepricelist($id){
        $pricelist=DB::table('pricelist')->where('price_id',$id);
        $pricelist->delete();
        return redirect('/table-pricelist');
    }
    public function createpricelist(Request $re){
        $pricelist=new pricelist;
        if ($re->price == ""){
            return redirect('/table-pricelist');
        }
        else{
            $pricelist->price_name=$re->price_name;
            $pricelist->price=$re->price;
            $pricelist->save();
        }
        return redirect('/table-pricelist');
    }
    public function listfilm(){
        $films=DB::table('films')->get();
        return view('layouts.admin.films', compact('films'));
    }
    public function createfilm(Request $re){
        $film = new films;
        //redirect('/table-orders');
        if ($re->film_name==""||$re->film_time==""||$re->film_desc=="||$re->film_from=="||$re->film_photo){
            return redirect('/table-films');
        }
        else{
            $image = $re->file('input_img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('images/avaMovie/');
            $image->move($destinationPath, $name);

            $film->film_name=$re->film_name;
            $film->film_time=$re->film_time;
            $film->film_desc=$re->film_desc;
            $film->film_from=$re->film_from;
            $film->film_photo='images/avaMovie/'.$name;
            $film->save();
            return redirect('/table-films');
        }
        
    }
    public function deletefilm($id){
        $film=DB::table('films')->where('film_id',$id);
        $film->delete();
        return redirect('/table-films');
    }
    public function editfilm(Request $request){
        $re=$request->all();
        $film=DB::table('films')->where('film_id', $re['film_id'])->update(['film_name'=>$re['film_name'], 'film_time'=>$re['film_time']
        ,'film_desc'=>$re['film_desc'], 'film_from'=>$re['film_from'], 'film_photo'=>$re['film_photo'] ]);
        return redirect('/table-films');
    }
    public function timetablefilm(){
        $timetablefilm=DB::table('timetablefilm')
            ->join('rooms','timetablefilm.room_id','=','rooms.room_id')
            ->join('films','timetablefilm.film_id','=','films.film_id')
            ->select('timetablefilm.*', 'rooms.*','films.*')
            ->get();
        $room=DB::table('rooms')->get();
        $films=DB::table('films')->get();
        return view('layouts.admin.timetablefilm', compact('timetablefilm','room','films'));
    }
    public function deletetimetablefilm($id){
        $timetablefilm=DB::table('timetablefilm')->where('timetablefilm_id', $id);
        $timetablefilm->delete();
        return redirect('/time-table-film');
    }
    public function edittimetablefilm(Request $request){
        $re=$request->all();
        $getTime=DB::table('films')->where('film_id',$re['film_id'])->select('film_time')->first();
        //$time = strtotime($re['timestart'].$getTime->film_time.'minutes');
        $timetablefilm=DB::table('timetablefilm')->where('timetablefilm_id',$re['timetablefilm_id'])
        ->update(['film_id'=>$re['film_id'], 'timestart'=>$re['timestart'],
        'timeend'=>date('Y-m-d H:i:s', strtotime($re['timestart'].$getTime->film_time.'minutes')), 
        'room_id'=>$re['room_id']]);
        return redirect('/time-table-film');
    }
    public function createtimetablefilm(Request $re){
        $getTime=DB::table('films')->where('film_id',$re['film_id'])->select('film_time')->first();
        $timetablefilm = new timetablefilm;
        if ($re->film_id==""||$re->timestart==""){
            return redirect('/time-table-film');
        }
        else{
            //$getId=DB::table('');
            $timetablefilm->film_id=$re->film_id;
            $timetablefilm->timestart=$re->timestart;
            $timetablefilm->timeend=date('Y-m-d H:i:s', strtotime($re['timestart'].$getTime->film_time.'minutes'));
            $timetablefilm->room_id=$re->room_id;
            $timetablefilm->save();
            return redirect('/time-table-film');
        }
        
    }
    public function updateordertable(){
        
    }
    public function ordertable(){
        $order=DB::table('orders')
        ->join('users','orders.user_id','=','users.id')
        ->select('orders.*', 'users.*')
        ->get();
        //$user=DB::table('users')->get();
        return view('layouts.admin.order', compact('order'));
    }
    public function deleteorder($id){
        $orders=DB::table('orders')->where('orders_id',$id);
        $orders->delete();
        return redirect('/table-orders');
    }
    public function editorder(Request $request){
        $re=$request->all();
        $order=DB::table('orders')->where('orders_id',$re['orders_id'])
            ->update(['user_id'=>$re['user_id'], 'timetable_id'=>$re['timetable_id'], 
            'price_id'=>$re['price_id']]);
        return redirect('/table-orders');
    }
    public function createorder(Request $re){
        $orders = new orders;
        if ($re->user_id==""||$re->timetable_id==""||$re->price_id==""){
            return redirect('/table-orders'); 
        }
        else{
            $orders->user_id=$re->user_id;
            $orders->timetable_id=$re->timetable_id;
            $orders->price_id=$re->price_id;
            $orders->save();
            return redirect('/table-orders');
        }
        
    }
}