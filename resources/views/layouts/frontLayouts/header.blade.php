
<div class= "container"></div>
<div class="header">
	<div class="logo">BOOKING FILM</div>
	<div class="right">
		<div class="login">
			<div><a href="">Đăng nhập</a></div>
			<div><a href="">Đăng kí</a></div>
		</div>
		<div class="sdt">Hotline:0123456789</div>
	</div>
</div>
<div class="nav-bar">
	<ul class="topnav">
	  <li><a class="active" href="/">Trang chủ</a></li>
	  <li><a href="{{url('info')}}"">Giới thiệu</a></li>
	  <li><a href="{{url('schedule')}}">Lịch chiếu</a></li>
	   <li><a href="{{url('news')}}">Tin tức</a></li>
	    <li><a href="{{url('promotion')}}">Khuyến mãi</a></li>
	  <li class="right"><a href="{{url('booking')}}">Đặt vé</a></li>
	</ul>
</div>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('images/slides/3.jpg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/slides/2.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/slides/3.jpg')}}" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/slides/4.jpg')}}" alt="Second slide">
    </div>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
