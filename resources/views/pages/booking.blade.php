@extends('layouts.frontLayouts.master')
@section('content')
@push('styles')
    <link href="{{ asset('css/frontend_css/booking.css') }}" rel="stylesheet">
<div class="he-ad">
            <h1>2. Chọn ghế ngồi</h1>
            <h2>Bạn đã chọn : Má lệ phi sờn</h2>
            <h2>Xuất chiếu: 20:00 Thứ 3 22/10/2019</h2>
        </div>
        <div class="bookseat">
            <div>
                <div class="notice">
                    <h3>Vui lòng bấm chọn ghế !</h3>
                    <h3>Bấm vào ghế đã chọn lần nữa để hủy !</h3>
                </div>
                <div class="time">
                    <h1>TIME</h1>
                </div>
            </div>
            <div class="explain">
                <a><img src="{{asset('images/booking/gray.png')}}" style="width:55px; height: 30px;">Ghế thường</a>
                <a><img src="{{asset('images/booking/yellow.png')}}" style="width:55px; height: 30px;">Ghế V.I.P</a>
                <a><img src="{{asset('images/booking/pink.png')}}" style="width:55px; height: 30px;">Ghế đôi</a>
                <a><img src="{{asset('images/booking/green.png')}}" style="width:55px; height: 30px;">Ghế đã chọn</a>
                <a><img src="{{asset('images/booking/red.png')}}" style="width:55px; height: 30px;">Ghế đã đặt</a>
            </div>
            <table>
            <tr>
                <td>A</td>
                <td class="normal">2</td><td class="normal">4</td><td class="normal">6</td><td class="normal">8</td>
                <td class="normal">10</td><td class="normal">12</td><td class="normal">14</td><td class="normal">16</td>
                <td class="normal">18</td><td class="normal">20</td><td class="normal">22</td><td class="normal">24</td>
                <td class="normal">23</td><td class="normal">21</td><td class="normal">19</td><td class="normal">17</td>
                <td class="normal">15</td><td class="normal">13</td><td class="normal">11</td><td class="normal">9</td>
                <td class="normal">7</td><td class="normal">5</td><td class="normal">3</td><td class="normal">1</td>
                <td>A</td>
            </tr>
            <tr>
                <td>B</td>
                <td class="normal">2</td><td class="normal">4</td><td class="normal">6</td><td class="normal">8</td>
                <td class="normal">10</td><td class="normal">12</td><td class="normal">14</td><td class="normal">16</td>
                <td class="normal">18</td><td class="normal">20</td><td class="normal">22</td><td class="normal">24</td>
                <td class="normal">23</td><td class="normal">21</td><td class="normal">19</td><td class="normal">17</td>
                <td class="normal">15</td><td class="normal">13</td><td class="normal">11</td><td class="normal">9</td>
                <td class="normal">7</td><td class="normal">5</td><td class="normal">3</td><td class="normal">1</td>
                <td>B</td>
            </tr>
            <tr>
                <td>C</td>
                <td class="normal">2</td><td class="normal">4</td><td class="normal">6</td><td class="normal">8</td>
                <td class="normal">10</td><td class="normal">12</td><td class="normal">14</td><td class="normal">16</td>
                <td class="normal">18</td><td class="normal">20</td><td class="normal">22</td><td class="normal">24</td>
                <td class="normal">23</td><td class="normal">21</td><td class="normal">19</td><td class="normal">17</td>
                <td class="normal">15</td><td class="normal">13</td><td class="normal">11</td><td class="normal">9</td>
                <td class="normal">7</td><td class="normal">5</td><td class="normal">3</td><td class="normal">1</td>
                <td>C</td>
            </tr>
            <tr>
                <td>D</td>
                <td class="normal">2</td><td class="normal">4</td><td class="normal">6</td><td class="normal">8</td>
                <td class="vip">10</td><td class="vip">12</td><td class="vip">14</td><td class="vip">16</td>
                <td class="vip">18</td><td class="vip">20</td><td class="vip">22</td><td class="vip">24</td>
                <td class="vip">23</td><td class="vip">21</td><td class="vip">19</td><td class="vip">17</td>
                <td class="vip">15</td><td class="vip">13</td><td class="vip">11</td><td class="vip">9</td>
                <td class="normal">7</td><td class="normal">5</td><td class="normal">3</td><td class="normal">1</td>
                <td>D</td>
            </tr>
            <tr>
                <td>E</td>
                <td class="normal">2</td><td class="normal">4</td><td class="normal">6</td><td class="normal">8</td>
                <td class="vip">10</td><td class="vip">12</td><td class="vip">14</td><td class="vip">16</td>
                <td class="vip">18</td><td class="vip">20</td><td class="vip">22</td><td class="vip">24</td>
                <td class="vip">23</td><td class="vip">21</td><td class="vip">19</td><td class="vip">17</td>
                <td class="vip">15</td><td class="vip">13</td><td class="vip">11</td><td class="vip">9</td>
                <td class="normal">7</td><td class="normal">5</td><td class="normal">3</td><td class="normal">1</td>
                <td>E</td>
            </tr>
            <tr>
                <td>F</td>
                <td class="normal">2</td><td class="normal">4</td><td class="normal">6</td><td class="normal">8</td>
                <td class="vip">10</td><td class="vip">12</td><td class="vip">14</td><td class="vip">16</td>
                <td class="vip">18</td><td class="vip">20</td><td class="vip">22</td><td class="vip">24</td>
                <td class="vip">23</td><td class="vip">21</td><td class="vip">19</td><td class="vip">17</td>
                <td class="vip">15</td><td class="vip">13</td><td class="vip">11</td><td class="vip">9</td>
                <td class="normal">7</td><td class="normal">5</td><td class="normal">3</td><td class="normal">1</td>
                <td>F</td>
            </tr>
            <tr>
                <td>G</td>
                <td class="normal">2</td><td class="normal">4</td><td class="normal">6</td><td class="normal">8</td>
                <td class="vip">10</td><td class="vip">12</td><td class="vip">14</td><td class="vip">16</td>
                <td class="vip">18</td><td class="vip">20</td><td class="vip">22</td><td class="vip">24</td>
                <td class="vip">23</td><td class="vip">21</td><td class="vip">19</td><td class="vip">17</td>
                <td class="vip">15</td><td class="vip">13</td><td class="vip">11</td><td class="vip">9</td>
                <td class="normal">7</td><td class="normal">5</td><td class="normal">3</td><td class="normal">1</td>
                <td>G</td>
            </tr>
            <tr>
                <td>H</td>
                <td class="normal">2</td><td class="normal">4</td><td class="normal">6</td><td class="normal">8</td>
                <td class="vip">10</td><td class="vip">12</td><td class="vip">14</td><td class="vip">16</td>
                <td class="vip">18</td><td class="vip">20</td><td class="vip">22</td><td class="vip">24</td>
                <td class="vip">23</td><td class="vip">21</td><td class="vip">19</td><td class="vip">17</td>
                <td class="vip">15</td><td class="vip">13</td><td class="vip">11</td><td class="vip">9</td>
                <td class="normal">7</td><td class="normal">5</td><td class="normal">3</td><td class="normal">1</td>
                <td>H</td>
            </tr>
            <tr>
                <td>I</td>
                <td class="normal">2</td><td class="normal">4</td><td class="normal">6</td><td class="normal">8</td>
                <td class="vip">10</td><td class="vip">12</td><td class="vip">14</td><td class="vip">16</td>
                <td class="vip">18</td><td class="vip">20</td><td class="vip">22</td><td class="vip">24</td>
                <td class="vip">23</td><td class="vip">21</td><td class="vip">19</td><td class="vip">17</td>
                <td class="vip">15</td><td class="vip">13</td><td class="vip">11</td><td class="vip">9</td>
                <td class="normal">7</td><td class="normal">5</td><td class="normal">3</td><td class="normal">1</td>
                <td>I</td>
            </tr>
            <tr>
                <td>J</td>
                <td class="normal">2</td><td class="normal">4</td><td class="normal">6</td><td class="normal">8</td>
                <td class="vip">10</td><td class="vip">12</td><td class="vip">14</td><td class="vip">16</td>
                <td class="vip">18</td><td class="vip">20</td><td class="vip">22</td><td class="vip">24</td>
                <td class="vip">23</td><td class="vip">21</td><td class="vip">19</td><td class="vip">17</td>
                <td class="vip">15</td><td class="vip">13</td><td class="vip">11</td><td class="vip">9</td>
                <td class="normal">7</td><td class="normal">5</td><td class="normal">3</td><td class="normal">1</td>
                <td>J</td>
            </tr>
            <tr>
                <td>K</td>
                <td class="normal">2</td><td class="normal">4</td><td class="normal">6</td><td class="normal">8</td>
                <td class="normal">10</td><td class="normal">12</td><td class="normal">14</td><td class="normal">16</td>
                <td class="normal">18</td><td class="normal">20</td><td class="normal">22</td><td class="normal">24</td>
                <td class="normal">23</td><td class="normal">21</td><td class="normal">19</td><td class="normal">17</td>
                <td class="normal">15</td><td class="normal">13</td><td class="normal">11</td><td class="normal">9</td>
                <td class="normal">7</td><td class="normal">5</td><td class="normal">3</td><td class="normal">1</td>
                <td>K</td>
            </tr>
            <tr>
                <td>L</td>
                <td class="couple">2</td><td class="couple">4</td><td class="couple">6</td><td class="couple">8</td>
                <td class="couple">10</td><td class="couple">12</td><td class="couple">14</td><td class="couple">16</td>
                <td class="couple">18</td><td class="couple">20</td><td class="couple">22</td><td class="couple">24</td>
                <td class="couple">23</td><td class="couple">21</td><td class="couple">19</td><td class="couple">17</td>
                <td class="couple">15</td><td class="couple">13</td><td class="couple">11</td><td class="couple">9</td>
                <td class="couple">7</td><td class="couple">5</td><td class="couple">3</td><td class="couple">1</td>
                <td>L</td>
            </tr>
            </table>
        </div>
        <img class="niceday" src="{{asset('images/booking/haveaniceday.png')}}">
        <div class="left">
            <button>Chọn lại phim</button>
            <img src="{{asset('images/booking/malf.jpg')}}" alt="ảnh poster film" style="width:50px height:100px" >
            <h3>Ghế đã chọn :</h3>
            <h3>Số lượng :</h3>
            <hr style="color:white;margin-top:30px;">
            <h3>Số tiền:....</h3>
        </div>
@endsection()