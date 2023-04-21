@extends('layouts.chitiet')
@section('style')
<link rel="stylesheet" href="{{url('public')}}/Frontend/assets/css/chitiet.css">
@endsection
@section('content')
<div id="noidung" class="container">
  <div class="title">
    <a href="">Trang Chu</a>
    /
    <a href="">Balo</a>
  </div>
  <div id="content" class="row">
    <div id="photo" class="col-md-6">
        <img src="{{ url('public') }}/img/balo/balo0/{{ $product->thumbnail }}" alt="IMG">
        

    </div>
    <div id="chitiet" class="col-md-6">
        <h1>{{$product->title}}</h1>
        <div class="is-divider small"></div>
        <span class="cart-price" style="font-size: 25px;">350.000đ</span>
        <form class="cart" action="" method="post" enctype="multipart/form-data">
		
			<div class="quantity buttons_added">
		        <input type="button" value="-" class="minus button is-form">		
		        <input type="number" id="quantity_6387668eae1bd" class="input-text qty text" step="1" min="1" max="9999" name="quantity" value="1" title="SL" size="4" inputmode="numeric">
		        <input type="button" value="+" class="plus button is-form">	
            </div>
		    <button type="submit" name="add-to-cart" value="27779" class="single_add_to_cart_button button alt">Thêm vào giỏ hàng</button>

		</form>
        <p>TAI SAO LAI CHON BALOSHOP</p>
        <ol class="lydo">
            <li>Đại lý chính hãng hơn 30 thương hiệu hàng đầu</li>
            <li>Đổi trả 30 ngày nếu không hài lòng</li>
            <li>Hoàn tiền nếu không hài lòng sản phẩm</li>
            <li>Bảo hành sản phẩm lên đến 01 năm</li>
            
        </ol>
        <div class="social-links mt-3 text-center">
          <a href="https://www.facebook.com/nong.than.944" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/nong.than.944" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.facebook.com/nong.than.944" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.facebook.com/nong.than.944" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="https://www.facebook.com/nong.than.944" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
  </div>
  <div id="info">
    <p>Thông tin</p>
    <table class="thongtin">      
      <tr>
        <th>
          TRỌNG LƯỢNG
        </th>
        <td>300 g<td>
      </tr>
      <tr>
        <th>
          THƯƠNG HIỆU
        </th>
        <td>NIKE<td>
      </tr>
      <tr>
        <th>
          MÀU SẮC
        </th>
        <td>green<td>
      </tr>
      <tr>
        <th>
          KÍCH THƯỚC
        </th>
        <td>400 x 400<td>
      </tr>
      <tr>
        <th>
          CHẤT LIỆU
        </th>
        <td>cotton<td>
      </tr>
    </table>
  </div>
  <div id="mota">
    <p>Mô Tả</p>
    <table>
      <tr>
        <th>

        </th>
      </tr>
    </table>
  </div>
  <div id="sanphamtuongtu">

  </div>
</div>
@endsection