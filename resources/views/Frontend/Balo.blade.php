@extends('layouts.sanpham')
@section('style')
      <style>
        .drop1 > .Balo{
          display:block;
        } 
      
      </style>
@endsection('style')
@section('content')
@foreach ($products as $pro)
                    <div class="col-lg-4 col-md-4 all {{$pro->category_id}}">
                      <div class="product-item">
                      <a href="#"><img src="{{url('public')}}/Frontend/assets/images/product_01.jpg" alt=""></a>
                      <div class="down-content">
                        <a href="{{ route('hienthisanpham.hienthisanpham', $pro->id) }}"><h4>{{$pro->title}}</h4></a>
                        <h6>$32.50</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (36)</span>
                        </div>
                      </div>
                    </div>
                    
                
@endforeach
@endsection

@section('script')
<script>
  const anhtuLinks = document.querySelectorAll('a#balo1');

// Lặp qua danh sách các thẻ a và ngăn chặn sự kiện mặc định của chúng
anhtuLinks.forEach(link => {
  link.addEventListener('click', (event) => {
    event.preventDefault();
  });
});
</script>
@endsection
