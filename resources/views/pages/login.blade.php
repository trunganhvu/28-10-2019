@extends('layouts.frontLayouts.master')
@section('content')
@push('style')
    <link href="{{ asset('css/frontend_css/login.css') }}" rel="stylesheet">
<div class="f-grid">
    <div class="f-grid-col">
        <p class="left-content">Trung tâm Chiếu Phim Quốc Gia - Địa chỉ quen thuộc và yêu mến đối với những người yêu điện ảnh Thủ Đô và Cả Nước.</p>
        <p> Tại các phòng chiếu của Trung tâm Chiếu phim Quốc Gia, khán giả có thể thưởng thức các tác phẩm điện ảnh với mọi thể loại, có cơ hội gặp gỡ với các đạo diễn, diễn viên điện ảnh qua các cuộc giao lưu, các buổi công chiếu phim mới, các Liên hoan phim quốc gia và quốc tế. Với công nghệ hiện đại và màn hình siêu rộng, phong cách phục vụ lịch sự, chương trình luôn mới và phong phú. Trung tâm Chiếu phim Quốc Gia luôn đem đến cho quý vị những giờ giải trí thoải mái và bổ ích</p>
        <p><a href=""> ĐẶT VÉ TRỰC TUYẾN</a> </p>
        <span><i>Đơn giản tiện lợi nhanh chóng</i> </span>
        <p><a href=""> BÌNH LUẬN PHIM</a> </p>
        <span><i>Cho phép tương tác trực quan, đơn giản, nhanh chóng. Bình luận bộ phim yêu thích.</i> </span>    
   </div>
   <div class="f-grid-col">
        <div class= "dangky">ĐĂNG NHẬP</div>
        <form action="/action_page.php">
        <div class="container">
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit" class="registerbtn">Login</button>
        </div>
    </form>
  </div>
@endsection()