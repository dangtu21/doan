@extends('layouts.chitiet')
@section('style')
<link href="{{url('public')}}/Frontend/assets/css/giohang.css" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css" integrity="...">
<style>
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
          font-size: 1rem;
          line-height: 2.15;
          padding-left: .75em;
          padding-right: .75em;
        }

        .card-registration .select-arrow {
          top: 13px;
        }

        .bg-grey {
          background-color: #eae8e8;
        }

        @media (min-width: 992px) {
          .card-registration-2 .bg-grey {
            border-top-right-radius: 16px;
            border-bottom-right-radius: 16px;
          }
        }

        @media (max-width: 991px) {
          .card-registration-2 .bg-grey {
            border-bottom-left-radius: 16px;
            border-bottom-right-radius: 16px;
          }
        }
      </style>
@endsection
@section('content')
<section id="giohang" class="h-100 h-custom" style="background-color: #d2c9ff;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-8">
                <div class="p-5">
                  <div class="d-flex justify-content-between align-items-center mb-5">
                    <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                    <h6 class="mb-0 text-muted">3 items</h6>
                  </div>
                  <hr class="my-4">

                  <div class="row mb-4 d-flex justify-content-between align-items-center">
                    <div class="col-md-2 col-lg-2 col-xl-2">
                      <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img5.webp"
                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3">
                      <h6 class="text-muted">Shirt</h6>
                      <h6 class="text-black mb-0">Cotton T-shirt</h6>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                      <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                        <i class="fas fa-minus"></i>
                      </button>

                      <input id="form1" min="0" name="quantity" value="1" type="number"
                        class="form-control form-control-sm" />

                      <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                      <h6 class="mb-0">€ 44.00</h6>
                    </div>
                    
                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                      <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                    </div>
                  </div>

                  <hr class="my-4">

                  <div class="row mb-4 d-flex justify-content-between align-items-center">
                    <div class="col-md-2 col-lg-2 col-xl-2">
                      <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img6.webp"
                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3">
                      <h6 class="text-muted">Shirt</h6>
                      <h6 class="text-black mb-0">Cotton T-shirt</h6>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                      <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                        <i class="fas fa-minus"></i>
                      </button>

                      <input id="form1" min="0" name="quantity" value="1" type="number"
                        class="form-control form-control-sm" />

                      <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                      <h6 class="mb-0">€ 44.00</h6>
                    </div>
                    
                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                      <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                    </div>
                  </div>

                  <hr class="my-4">

                  <div class="row mb-4 d-flex justify-content-between align-items-center">
                    <div class="col-md-2 col-lg-2 col-xl-2">
                      <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img7.webp"
                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3">
                      <h6 class="text-muted">Shirt</h6>
                      <h6 class="text-black mb-0">Cotton T-shirt</h6>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                      <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                        <i class="fas fa-minus"></i>
                      </button>

                      <input id="form1" min="0" name="quantity" value="1" type="number"
                        class="form-control form-control-sm" />

                      <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                    
                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                      <h6 class="mb-0">€ 44.00</h6>
                    </div>
                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                      <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                    </div>
                  </div>

                  <hr class="my-4">

                  <div class="pt-5">
                    <h6 class="mb-0"><a href="#!" class="text-body"><i
                          class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 bg-grey">
                <div class="p-5">
                  <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                  <hr class="my-4">

                  <div class="d-flex justify-content-between mb-4">
                    <h5 class="text-uppercase">items 3</h5>
                    <h5>€ 132.00</h5>
                  </div>

                  <h5 class="text-uppercase mb-3">Address</h5>

                  <div class="mb-4 pb-2" id="diachi">
                      <h4 id="hoten">Quynh Như (+84) 916870128
                      <p id="address">1/20 Lê Ngọc Hân, Phường 1, Thành Phố Bảo Lộc, Lâm Đồng</p>
                      <div class="thongtin" >
                      <p id="trangthai">Mặc định</p>
                      <button id="show-overlay">Thay đổi</button>
                        <div id="overlay" class="overlay hidden" >
                          <div class="overlay-content">
                            <div class="order-md-1 ">
                              <h4 class="mb-3">Billing address</h4>
                              <form class="needs-validation row" novalidate="">
                                <div class="col-sm-6">
                                  <div class="row">
                                      <div class="col-md-6 mb-3" style="text-align: left;">
                                          <label for="firstName">First name</label>
                                          <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                                          <div class="invalid-feedback"> Valid first name is required. </div>
                                      </div>
                                      <div class="col-md-6 mb-3" style="text-align: left;">
                                          <label for="lastName">Last name</label>
                                          <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                                          <div class="invalid-feedback"> Valid last name is required. </div>
                                      </div>
                                  </div>
                                  
                                  <div class="mb-3"style="text-align: left;">
                                      <label for="email">Email <span class="text-muted">(Optional)</span></label>
                                      <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                      <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                                  </div>
                                  <div class="mb-3" style="text-align: left;">
                                      <label for="address">Address</label>
                                      <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                                      <div class="invalid-feedback"> Please enter your shipping address. </div>
                                  </div>
                                  
                                  <div class="row">
                                      <div class="col-md-5 mb-3" style="text-align: left;">
                                          <label for="country">Country</label>
                                          <select class="custom-select d-block w-100" id="country" required="">
                                              <option value="">Choose...</option>
                                              <option>United States</option>
                                          </select>
                                          <div class="invalid-feedback"> Please select a valid country. </div>
                                      </div>
                                      <div class="col-md-4 mb-3" style="text-align: left;">
                                          <label for="state">State</label>
                                          <select class="custom-select d-block w-100" id="state" required="">
                                              <option value="">Choose...</option>
                                              <option>California</option>
                                          </select>
                                          <div class="invalid-feedback"> Please provide a valid state. </div>
                                      </div>
                                      <div class="col-md-3 mb-3"style="text-align: left;">
                                          <label for="zip">Zip</label>
                                          <input type="text" class="form-control" id="zip" placeholder="" required="">
                                          <div class="invalid-feedback"> Zip code required. </div>
                                      </div>
                                  </div>
                                  <hr class="mb-4">
                                  <div class="custom-control custom-checkbox" style="text-align: left;">
                                      <input type="checkbox" class="custom-control-input" id="same-address">
                                      <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                                  </div>
                                  <div class="custom-control custom-checkbox" style="text-align: left;">
                                      <input type="checkbox" class="custom-control-input" id="save-info">
                                      <label class="custom-control-label" for="save-info">Save this information for next time</label>
                                  </div>
                                  </div>
                                  <div class="col-sm-6">
                                  
                                  <hr class="mb-4">
                                  <h4 class="mb-3">Payment</h4>
                                  <div class="d-block my-3 thanhtoan" >
                                      <div class="custom-control custom-radio" style="text-align: left;">
                                          <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                                          <label class="custom-control-label" for="credit" >Credit card</label>
                                      </div>
                                      <div class="custom-control custom-radio" style="text-align: left;">
                                          <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                          <label class="custom-control-label" for="debit">Debit card</label>
                                      </div>
                                      <div class="custom-control custom-radio" style="text-align: left;">
                                          <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                          <label class="custom-control-label" for="paypal">PayPal</label>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-6 mb-3" style="text-align: left;">
                                          <label for="cc-name">Name on card</label>
                                          <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                                          <small class="text-muted">Full name as displayed on card</small>
                                          <div class="invalid-feedback"> Name on card is required </div>
                                      </div>
                                      <div class="col-md-6 mb-3" style="text-align: left;">
                                          <label for="cc-number">Credit card number</label>
                                          <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                                          <div class="invalid-feedback"> Credit card number is required </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-3 mb-3" style="text-align: left;" >
                                          <label for="cc-expiration">Expiration</label>
                                          <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                                          <div class="invalid-feedback"> Expiration date required </div>
                                      </div>
                                      <div class="col-md-3 mb-3" style="text-align: left;">
                                          <label for="cc-cvv">CVV</label>
                                          <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                                          <div class="invalid-feedback"> Security code required </div>
                                      </div>
                                  </div>
                                  <hr class="mb-4">
                                  <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                                </div>
                              </form>
                          </div>
                          </div>
                        </div>
                      
                      </div>
                      
                      </h4>

                  </div>
                      
                    

                  <h5 class="text-uppercase mb-3">Give code</h5>

                  <div class="mb-5">
                      <div class="form-outline">
                        <input type="text" id="form3Examplea2" class="form-control form-control-lg">
                        <label class="form-label" for="form3Examplea2" style="margin-left: 0px;">Enter your code</label>
                      <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 96.8px;"></div><div class="form-notch-trailing"></div></div></div>
                    </div>

                  <hr class="my-4">

                  <div class="d-flex justify-content-between mb-5">
                    <h5 class="text-uppercase">Total price</h5>
                    <h5>€ 137.00</h5>
                  </div>

                  <button type="button" class="btn btn-dark btn-block btn-lg"
                    data-mdb-ripple-color="dark">Register</button>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('script')
<script>
  const showOverlayBtn = document.getElementById('show-overlay');
  const overlay = document.getElementById('overlay');

  showOverlayBtn.addEventListener('click', function() {
    overlay.classList.toggle('hidden'); 
    overlay.classList.remove('hidden');
    document.body.classList.add('overlay-shown');
  });
</script>
@endsection
