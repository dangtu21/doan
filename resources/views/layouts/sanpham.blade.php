<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sixteen Clothing Products</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('public')}}/Frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{url('public')}}/Frontend/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{url('public')}}/Frontend/assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="{{url('public')}}/Frontend/assets/css/owl.css">
    <link rel="stylesheet" href="{{url('public')}}/Frontend/assets/fonts/themify-icons-font\themify-icons/themify-icons.css">
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @yield('style')
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Sixteen <em>Clothing</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href="{{route('products')}}">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
              <li class="nav-item">
              <div style="display: flex; color:blue">
                @guest
                            @if (Route::has('login'))
                            <a  class="nav-link" href="{{ route('SingIn') }}">Login</a>
                            @endif

                            @if (Route::has('register'))
                            <a  class="nav-link" href="{{ route('register') }}">/   Register</a>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item ">
                            <a href="{{route('giohang')}}" id="cart" class="cart scrollto d-none d-lg-flex nav-link" style=" display: flex; justify-content: center; align-items: center;">
                              <i class="fa fa-shopping-basket" aria-hidden="true" ></i>
                              <p style="margin-left:0.5rem ;">Cart</p>
                            </a>
                            </li>
                        @endguest
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>new arrivals</h4>
              <h2>sixteen products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="products">
      <div class="container-fluid">
      
        <div class="row">
          <div class="col-3 menu">
          <div class="col-md-12">
          <!--
          <div class="filters">
              <ul class="text-left" >
                  <li class="active" data-filter="*" style="text-decoration: underline;">All Products</li>
                  <li class="d-block" data-filter=".1" style="text-decoration: underline;">Featured</li>
                  <li class="d-block" data-filter=".2" style="text-decoration: underline;">Flash Deals</li>
                  <li class="d-block" data-filter=".3" style="text-decoration: underline;">Last Minute</li>
              </ul>
            </div>-->
            <div class="balo">
              <h6 class="header-title">DANH MỤC</h6>
              <br/>
              <ul class="nav2" >  
                <li class="drop1">
                  <a href="{{route('balo')}}" id="balo1">Balo</a>
                  
                  <span class="count">(88)</span>
                  <i class="ti-angle-down"></i>
                  <ul class="drop text-left Balo">
                    
                    <li class="d-block" data-filter=".2">
                      <a href="{{route('baloHocSinh')}}">Balo Hoc Sinh</a>
                    </li>
                    <li class="d-block" data-filter=".3">
                      <a href="">Balo Laptop</a>
                    </li>
                    <li class="d-block" data-filter=".6">
                      <a href="">Balo Nam</a>
                    </li>
                    <li class="d-block" data-filter=".7">
                      <a href="">Balo Nữ</a>
                    </li>
                    <li class="d-block" data-filter=".8">
                      <a href="">Balo Thể Thao</a>
                    </li>
                    <li class="d-block" data-filter=".9">
                      <a href="">Balo Thời Trang</a>
                    </li>
                    
                  </ul>
                </li>
                <li class="drop1">
                  <a>Phụ Kiện</a>
                  <i class="ti-angle-down"></i>
                  <span class="count">(88)</span>
                  <ul class="drop text-left">
                    <li>
                      <a href="">Clutch</a>
                    </li>
                    <li>
                      <a href="">Móc Khóa</a>
                    </li>
                    <li>
                      <a href="">Túi Chéo-Túi Bao Tử</a>
                    </li>
                    <li>
                      <a href="">Ví Nam</a>
                    </li>
                    <li>
                      <a href="">Ví nữ</a>
                    </li>
                  </ul>
                </li>
                <li class="drop1">
                  <a href="">SALE OFF 50%</a>
                </li>
                <li class="drop1">
                <a>
                  Túi Xách
                </a>
                <span class="count">(88)</span>
                <i class="ti-angle-down"></i>
              </li>
              <li class="drop1">
            <a>
              Uncategorized
            </a>
              </li>
            </ul>
            <br/>
          <h4 class="header-title">THƯƠNG HIỆU</h4>
          <br/>
          <ul class="thuonghieu">
          <li>
            <a href="">Marc Jacobs</a>
          </li>
          <li>
            <a href="">Octopus</a>
          </li>
          <li>
            <a href="">Samsonite</a>
          </li>
          <li>
            <a href="">Sandqvist</a>
          </li>
          <li>
            <a href="">Supreme</a>
          </li>
          <li>
            <a href="">The North Face</a>
          </li>
          <li>
            <a href="">5.11 Tactical</a>
          </li>
          <li>
            <a href="">Adidas</a>
          </li>
          <li>
            <a href="">Burton</a>
          </li>
          <li>
            <a href="">Carhartt Wip</a>
          </li>
          <li>
            <a href="">Coach</a>
          </li>
          <li>
            <a href="">Fjallraven</a>
          </li>
          <li>
            <a href="">Nike</a>
          </li>
          <li>
            <a href="">Puma</a>
          </li>
          <li>
            <a href="">Vans</a>
          </li>
        </ul>
        </div>
          </div>
          </div>
          <div class="col-9">
          <div class="col-md-12 search" style="display: flex">
          
          <form action="" class="form-inline">
            <div class="input-group">
              <input type="text" class="form-control mr-4" placeholder="Tìm kiếm" name="key">
              <button class="btn btn-outline-secondary" type="submit">Tìm kiếm</button>
            </div>
          </form>
          <div class="dropdown">
            <button class="btn  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            
            @foreach($category as $key => $cate)
              <label class= "checkbox-inline dropdown-item">
                <input type="checkbox"
                
                class="form-control-checkbox category-filter" data-filter="category" value="{{$cate->id}}" name = "category-filter">
                {{$cate->name}}
              </label>
            @endforeach
          </div>
          </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                    
                @yield('content')
                    
                </div>
            </div>
          </div>
          <div class="col-md-12 page">
           
            {!! $products->links() !!}
          </div>
          </div>
          
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="{{url('public')}}/Frontend/vendor/jquery/jquery.min.js"></script>
    <script src="{{url('public')}}/Frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="{{url('public')}}/Frontend/assets/js/custom.js"></script>
    <script src="{{url('public')}}/Frontend/assets/js/owl.js"></script>
    <script src="{{url('public')}}/Frontend/assets/js/slick.js"></script>
    <script src="{{url('public')}}/Frontend/assets/js/isotope.js"></script>
    <script src="/Frontend/assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
      
    </script>
    <script type="text/javascript">
  $('.category-filter').click(function(){
    

    var category=[], tempArray=  [];
    $.each($("[data-filter='category']:checked"), function(){
      tempArray.push($(this).val());
    });
    tempArray.reverse();

    if(tempArray.length !== 0){
      category.push('?cate=' + tempArray.toString());
    }
    
    window.location.href = window.location.href.split('?')[0] + category.join('');
  });
</script>
        @yield('script')

    <script>
		var dropdowns = document.getElementsByClassName("drop1");
      
      for (var i = 0; i < dropdowns.length; i++) {
        dropdowns[i].addEventListener("click", function() {
        var dropdownMenu = this.querySelector(".drop");
        if (dropdownMenu.style.display === "none") {
          dropdownMenu.style.display = "block";
        }else{
          dropdownMenu.style.display = "none";
        }
        });
      }
	</script>

  </body>

</html>
