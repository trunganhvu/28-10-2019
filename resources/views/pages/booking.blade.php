@extends('layouts.frontLayouts.master')
@section('content')
@push('styles')
    <link href="{{ asset('css/frontend_css/booking.css') }}" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="card text-center" style="width: 18rem;">
            <img class="card-img-top" src="{{asset($film->film_photo)}}" alt="avatar">
            <div class="card-body">
                <p class="card-title">Bạn đã chọn: {{$film->film_name}}.</p>
                <p class="card-text">Thời gian: {{$film->film_time}} phút.</p>
            </div>
        </div>
        <div class="card text-center" style="width: 50rem">
        <div class="card-header">
            <ul class="seat_w3ls">
                <li class="smallBox greenBox" id='seatCount'>Ghế:</li>
                <li class="smallBox redBox">Tổng tiền:</li>
            </ul>
        </div>
        <div class="card-body">
            <form action="{!! url('create') !!}" method="POST" name="location">
                @csrf
                <div class="seatStructure txt-center" style="overflow-x:auto;">
                    <table id="checkboxFour">
                        @for($i=0;$i<$room->room_size;$i++)
                            @if($i%18==0) 
                            </tr><tr>
                            @endif
                            @if(in_array((string)$i, $layvitri))
                                    <td><label class="container_seat">{{$i}}
                                    <input name="seat[]" type="checkbox" class="seats" value="{{$i}}" checked="checked" disabled>
                                    <span class="checkmark" style="background-color:red"></span>
                                </label></td>
                                
                            @else
                                <td>
                                <label class="container_seat">{{$i}}
                                    <input name="seat[]" type="checkbox" class="seats" value="{{$i}}" >
                                    <span class="checkmark"></span>
                                </label></td>
                                
                            @endif
                            @if($i%18==17)
                            </tr><tr>
                            @endif
                        @endfor
                    </table>
                    <input name="timetable_id" type="textbox" value="{{$film->timetablefilm_id}}" hidden>
                    <input type="submit" name="Confirm">
                </div>
            </form>
        </div>
        <!-- <button id='countButton' onclick="checkboxes()">Click</button> -->
        </div>
    </div>
</div>
<!-- <script type="text/javascript">
     var countButton = document.getElementById("countButton");
     var inputElems = document.getElementsByTagName("input");
     var seatCount = document.getElementById('seatCount');

     countButton.addEventListener("click", checkboxes);
     //input.addEventListener("onchange",getCurrentSeats);

     function checkboxes(){
        var count = 0;
        for (var i=0; i<inputElems.length; i++) {       
            if (inputElems[i].type === "checkbox" && inputElems[i].checked == true){
            count++;
            }
        }
    seatCount.innerHTML = `${seatCount.textContent} ${count}`;
    }


</script> -->
  

@endsection()