@extends('layouts.frontLayouts.master')
@section('content')
@push('styles')
    <link href="{{ asset('css/frontend_css/booking.css') }}" rel="stylesheet">
<head>
  <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('ac7564df71fbefaad71c', {
      cluster: 'ap1',
      forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('form-submitted', function(data) {
        console.log("Ket qua la:"+data.seat + typeof data.seat);
        console.log("Do dai: "+Object.keys(data.seat).length);
        var i;
        for (i = 0 ; i < Object.keys(data.seat).length; i++) {
            console.log("Ket qua lakkk:"+data.seat[i]);
            var h1=document.getElementById(data.seat[i]);
            var att = document.createAttribute("checked");
            att.value = "checked";
            var att1=document.createAttribute("disabled");
            h1.setAttributeNode(att);
            h1.setAttributeNode(att1);
        }

      });
  </script>
</head>


<div class="container">
    <div class="row">
        <div class="card text-center" style="width: 18rem;">
            <img class="card-img-top" src="{{asset($film->film_photo)}}" alt="avatar">
            <div class="card-body">
                <p class="card-title">{{$film->film_name}}.</p>
                <p class="card-text">Thời gian: {{$film->film_time}} phút.</p>
            </div>
        </div>
        <div class="card text-center" style="width: 50rem">
            <div class="card-header">
                <label>Số ghế: <input id="seat" type="text" name="seat" class="num" size="6" value="0" readonly="readonly" /></label><br>
                <label>Thành tiền: <input id="total" type="text" name="total" class="num" size="6" value="0" readonly="readonly" /></label>
            </div>
            <div class="card-body">
                <form action="{!! url('create') !!}" method="POST" name="location">
                    @csrf
                    <div class="seatStructure txt-center" >
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
                                        <input name="seat[]" type="checkbox" class="seats" value="{{$i}}" id="{{$i}}" >
                                        <span class="checkmark"></span>
                                    </label></td>

                                @endif
                                @if($i%18==17)
                                </tr><tr>
                                @endif
                            @endfor
                        </table>
                        <input name="timetable_id" type="textbox" value="{{$film->timetablefilm_id}}" hidden>
                        <!-- <input type="submit" name="Confirm"> -->
                        @if(Auth::check())
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Next</button>
                        <div class="modal " id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">{{$film->film_name}}</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <form action="{!! url('createroom') !!}" method="POST" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                                            <p>Thời gian: {{$film->timestart}}</p>
                                            <div class="form-inline">
                                                <div class="form-group col-md-6">
                                                    <label data-error="wrong" data-success="right" for="defaultForm-email">Họ và tên</label>
                                                    <input type="text" id="defaultForm-name" value="{{ Auth::user()->name }}" class="form-control validate" disabled>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label data-error="wrong" data-success="right" for="defaultForm-email">Email</label>
                                                    <input type="text" id="defaultForm-email" value="{{ Auth::user()->email }}" class="form-control validate" require>
                                                </div>
                                            </div>
                                            <div class="form-inline">
                                                <div class="md-form form-group col-md-6">
                                                    <label data-error="wrong" data-success="right" for="soghe">Số ghế đã chọn</label>
                                                    <input type="number" id="soghe" name="" class="form-control validate" require>
                                                </div>

                                                <div class="md-form form-group col-md-6">
                                                    <label data-error="wrong" data-success="right" for="tongtien">Tổng tiền</label>
                                                    <input type="number" id="tongtien" name="" class="form-control validate" require>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                        <input type="submit" value="Confirm">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @else
                        <input type="submit" class="btn btn-primary" name="Confirm" value="Thanh toán">
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    let price = {{$price->price}};
    function attachCheckboxHandlers(){
        let el = document.getElementById('checkboxFour');
        let tops = el.getElementsByTagName('input');
        for (let i = 0; i < tops.length; i++){
            if ( tops[i].type === 'checkbox' ) {
                tops[i].onclick = updateTotal;
            }
        }
    }
    function updateTotal(e) {
	    var val = parseInt(document.getElementById("seat").value);
        if ( this.checked ) {
            val +=1;
	    } else {
            val -=1;
	    }
	    document.getElementById("seat").value = document.getElementById("soghe").value = val;
        document.getElementById("total").value = document.getElementById("tongtien").value = val*price;

	}
    attachCheckboxHandlers();
</script>

@endsection()
