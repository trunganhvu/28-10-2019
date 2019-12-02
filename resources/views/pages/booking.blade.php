@extends('layouts.frontLayouts.master')
@section('content')
@push('styles')
    <link href="{{ asset('css/frontend_css/booking.css') }}" rel="stylesheet">
    
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <div class="container">

<div class="w3ls-reg">
    <div class="he-ad">
                <h2>Bạn đã chọn : {{$film->film_name}}</h2>
                <h2>Xuất chiếu: {{$film->film_time}}</h2>
            </div>
            <div class="left">
                <img src="{{asset($film->film_photo)}}" alt="ảnh poster film" style="width:50px height:100px" >
            </div>
    </div>
    <ul class="seat_w3ls">
        <li class="smallBox greenBox">Selected Seat</li>

        <li class="smallBox redBox">Reserved Seat</li>

        <li class="smallBox emptyBox">Empty Seat</li>
    </ul>
    <form action="{!! url('create') !!}" method="POST" name="location">
        @csrf
        <div class="seatStructure txt-center" style="overflow-x:auto;">
            <table id="seatsBlock">
                <p id="notification"></p>
                
                @for($i=0;$i<$room->room_size;$i++)
                    @if($i%20==0) 
                    </tr><tr>
                    @endif
                    @if(in_array((string)$i, $layvitri))
                        <td><input name="seat[]" type="checkbox" class="seats" value="{{$i}}" disabled>{{$i}}</td>
                    @else
                        <td><input name="seat[]" type="checkbox" class="seats" value="{{$i}}">{{$i}}</td>
                    @endif
                    @if($i%20==19)
                    </tr><tr>
                    @endif
                @endfor
            </table>
            <input name="timetable_id" type="textbox" value="{{$film->timetablefilm_id}}" hidden>
            <input type="submit" name="Confirm">
            <!-- <button onclick="updateTextArea()">Confirm</button> -->
        </div>
    </form>
</div>
</div>

<script src="js/jquery-2.2.3.min.js"></script>

@endsection()