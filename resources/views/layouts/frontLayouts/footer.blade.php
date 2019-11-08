@push('styles')
    <link href="{{ asset('css/frontend_css/footerstyle.css') }}" rel="stylesheet">
<div>
	<footer>
		<div class="menu">
			<div><a href="{{url('')}}" class="active">Trang chủ</a></div>
			<div><a href="{{url('schedule')}}">Lịch chiếu</a></div>
			<div><a href="{{url('news')}}">Tin tức</a></div>
			<div><a href="{{url('promotion')}}">Khuyến mãi</a></div>
			<div><a href="{{url('info')}}">Giới thiệu</a></div>	
		</div>
		<div class= content-container>
			<div class="content">
				<div>Cơ quan chủ quản: Đại học quốc gia </div>
			</div>
			<div class="content">
				<div>Năm anh em da vàng</div>
			</div>
			<div class="content">
				<div>Địa chỉ: Tp. Hà Nội - Điện thoại: 0123455678 </div>
			</div>
		</div>
		<i class="fa fa-facebook" aria-hidden="true"></i>
	</footer>
</div>
