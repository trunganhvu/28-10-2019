@extends('layouts.frontLayouts.master')
@section('content')
@push('styles')
    <link href="{{ asset('css/frontend_css/detailMovie.css') }}" rel="stylesheet">
<div class="container mt-3">
    <div class="titlePage">
      <h3>Chi tiết phim</h3>
      <img src="img31.png" alt="">
    </div>
</div>

<div class="container">
    <div class="row detail">
        <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
            <img src="{{asset('images/avaMovie/12.jpeg')}}">
        </div>
        <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
            <div class="row col-12">
            <p class="nameMovie">Maleficent tiên hắc ám 2 ( 2D) - C13</p>
            <hr>
            </div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
            <ul>
              <li>Loại phim: </li><span class="description">Hành động, Khoa học viễn tưởng</span><br>
              <li>Thời lượng: </li><span class="description">100 phút</span><br>
              <li>Diễn viên: </li><span class="description">Angelina Jolie, Elle Fanning</span><br>
              <li>Đạo diễn: </li><span class="description">Joachim Ronning</span><br>
              <li>Xuất xứ: </li><span class="description">Mỹ</span><br>
              <li>Khởi chiếu: </li><span class="description">17/10/2019</span><br>
              <li>Khuyến cáo: </li><span class="description">Phim cấm khán giả dưới 13 tuổi</span><br>
            </ul>


            <button type="button" class="btn btn-buy">Mua vé</button>
            <button type="button" class="btn btn-watch">Xem trailer</button>


          </div>
          <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
            <p class="description">Thời gian trôi qua thật bình yên với Maleficent và Aurora. Mặc dù mối quan hệ của cả hai được tạo dựng từ những tổn thương, thù hận rồi sau đó mới đến tình yêu thương nhưng cuối cùng thì
              nó cũng đã đơm hoa kết trái. Tuy vậy, xung đột giữa hai giới: loài người và tiên tộc vẫn vẫn luôn hiện hữu. Cuộc hôn nhân vốn bị trì hoãn giữa Aurora và Hoàng tử Phillips chính là cầu nối gắn kết Vương
              quốc Ulstead và nước láng giềng Moors lại với nhau. Bất ngờ thay, sự xuất hiện của một phe đồng minh hoàn toàn mới sẽ khiến Maleficent và Aurora bị chia cắt về hai chiến tuyến trong trận Đại Chiến. Trận
              chiến này sẽ thử thách lòng tin lẫn tình cảm của cả hai. Liệu rằng họ có thật sự trở thành một gia đình hay không? Tất cả sẽ được giải đáp trong Maleficent: Mistress of Evil/ Tiên Hắc Ám 2.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container movie-schedule">
    <div class="title">
      <a href="#">
        <img src="icon06.png" alt="">
        Lịch chiếu phim
      </a>
    </div>
    <div class="date">
      <div class="today">
        <p class="date-show">Thứ Hai, 21/10/2019</p>
        <div class="time-show">
          <ul class="date-time-list">
            <li class="time-item selected">10:00</li>
            <li class="time-item">11:00</li>
            <li class="time-item">12:00</li>
            <li class="time-item">13:00</li>
            <li class="time-item">14:00</li>
            <li class="time-item">15:00</li>
            <li class="time-item">16:00</li>
            <li class="time-item">17:00</li>
            <li class="time-item">18:00</li>
            <li class="time-item">19:00</li>
            <li class="time-item">20:00</li>
            <li class="time-item">21:00</li>
            <li class="time-item">22:00</li>
            <li class="time-item">23:00</li>
          </ul>
        </div>
      </div>
      <div class="tomorrow">
        <p class="date-show">Thứ Ba, 22/10/2019</p>
        <div class="time-show">
          <ul class="date-time-list">
            <li class="time-item">10:00</li>
            <li class="time-item">11:00</li>
            <li class="time-item">12:00</li>
            <li class="time-item">13:00</li>
            <li class="time-item">14:00</li>
            <li class="time-item">15:00</li>
            <li class="time-item">16:00</li>
            <li class="time-item selected">17:00</li>
            <li class="time-item">18:00</li>
            <li class="time-item">19:00</li>
            <li class="time-item">20:00</li>
            <li class="time-item">21:00</li>
            <li class="time-item">22:00</li>
            <li class="time-item">23:00</li>
          </ul>
        </div>
      </div>
      <div class="overmorrow">
        <p class="date-show">Thứ Tư, 23/10/2019</p>
        <div class="time-show">
          <ul class="date-time-list">
            <li class="time-item">10:00</li>
            <li class="time-item">11:00</li>
            <li class="time-item">12:00</li>
            <li class="time-item">13:00</li>
            <li class="time-item">14:00</li>
            <li class="time-item">15:00</li>
            <li class="time-item">16:00</li>
            <li class="time-item">17:00</li>
            <li class="time-item">18:00</li>
            <li class="time-item">19:00</li>
            <li class="time-item">20:00</li>
            <li class="time-item">21:00</li>
            <li class="time-item">22:00</li>
            <li class="time-item selected">23:00</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

@endsection()