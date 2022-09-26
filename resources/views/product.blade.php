@extends('master')
@section('content')

<?php
  use App\Http\Controllers\productController;
  $total = productController::viewCart();
?>

<div class="featuredcatogeries">
  <div class="container">
    <div class="row">
    @foreach($product as $p)
      <div class="col-md-3">
        <img src="{{$p['gallery']}}" alt="im">
      </div>
    @endforeach
    </div>
  </div>
</div>

<!-- onsale -->
<section class="onsale">
  <div class="container">
    <div class="titlebox">
      <h2>On Sale</h2>     
    </div>   
    <div class="row">
    @foreach($product as $p)
      <div class="col-md-3">
        <div class="producttop">
          <img class="topimg" src="{{$p['gallery']}}" alt="im">
            <div class="overlayright">
              <button type="button" class="button btn-secondary" title="Quick Shop">
                  <img src="/images/purchase.png" class="d-block w-100" alt="c1" height="15px" width="15px">
              </button>
              <button type="button" class="button btn-secondary" title="Add to Wishlist">
                  <img src="/images/wishlist.png" class="d-block w-100" alt="c1" height="15px" width="15px">
              </button>
              <button type="button" class="button btn-secondary" title="Add to Cart">
                  <img src="/images/cart.png" class="d-block w-100" alt="c1" height="15px"  width="15px">
              </button>
            </div>
        </div>
        <div class="productbottom text-center">
            <img src="/images/star.png" class="d-block w-100" alt="c1" height="5px"  width="5px">
            <h3>{{$p['name']}}</h3>
            <h5>Rs. {{$p['price']}}</h5>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- newProducts -->
<section class="newproducts">
  <div class="container">
      <div class="titlebox">
        <h2>New Arrival</h2>     
      </div>   
      <div class="row">
      @foreach($product as $p)
      
        <div class="col-md-3">
        <a href="productdetails/{{$p['id']}}">
          <div class="producttop">
            <img class="topimg" src="{{$p['gallery']}}" alt="im">
              <div class="overlayright">
                <button type="button" class="button btn-secondary" title="Quick Shop">
                    <img src="/images/purchase.png" class="d-block w-100" alt="c1" height="15px" width="15px">
                </button>
                <button type="button" class="button btn-secondary" title="Add to Wishlist">
                    <img src="/images/wishlist.png" class="d-block w-100" alt="c1" height="15px" width="15px">
                </button>
                <button type="button" class="button btn-secondary" title="Add to Cart">
                    <img src="/images/cart.png" class="d-block w-100" alt="c1" height="15px"  width="15px">
                </button>
              </div>
          </div>
          <div class="productbottom text-center">
              <img src="/images/star.png" class="d-block w-100" alt="c1" height="5px"  width="5px">
              <h3>{{$p['name']}}</h3>
              <h5>Rs. {{$p['price']}}</h5>
          </div>
        </div>
       </a>
        @endforeach
      </div>
    </div>  
</section>

<!-- websitefeatures -->
<section class="websitefeatures">
  <div class="container">
    <div class="row">
      <div class="col-md-3 featurebox">
        <img src="/images/original.png" alt="original image">
        <div class="featuretext">
          <p><b>100% original items </b>are avilable at company</p>
        </div>
      </div>
      <div class="col-md-3 featurebox">
        <img src="/images/returns.png" alt="ruturns image">
        <div class="featuretext">
          <p><b>Return within 30 days </b>of receiving your order.</p>
        </div>
      </div>
      <div class="col-md-3 featurebox">
        <img src="/images/online pay.png" alt="online image">
        <div class="featuretext">
          <p><b>Pay Online through multiple </b>options (card payments/Net banking)</p>
        </div>
      </div>
      <div class="col-md-3 featurebox">
        <img src="/images/delivery.png" alt="delivery image">
        <div class="featuretext">
          <p><b>Get free delivery for every </b>order or more than price</p>
        </div>
      </div>
   </div>
  </div>  
</section>
<!-- footer -->
<section class="footer">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-3">
        <h1>Useful Links</h1>
        <p>Privacy Policy</p>
        <p>Terms of Use</p>
        <p>Return of Policy</p>
        <p>Discount Coupons</p>
      </div>
      <div class="col-md-3">
        <h1>Company</h1>
        <p>About Us</p>
        <p>Contact Us</p>
        <p>Career</p>
        <p>Affiliate</p>
      </div>
      <div class="col-md-3">
        <h1>Follow Us on</h1>
        <p>Facebook</p>
        <p>YouTube</p>
        <p>Linkedin</p>
        <p>Twitter</p>
      </div>
      <div class="col-md-3">
        <h1>Download App</h1>
      </div>
    </div>
    <hr>
    <p class="copyright">Made with by Easy Tutorials</p>
  </div>
</section>

<!-- <div class="trending-products">
 @foreach($product as $p)
 <a href="productdetails/{{$p['id']}}">
  <div class="galleri">
    <div>
        <img src="{{$p['gallery']}}" alt="im" style="width:100%; height: 150px">
    </div>  
    <div class="container">
        <p>{{$p['name']}}</p>
        <p>Rs.{{$p['price']}}</p>
    </div>
  </div>
 </a>
@endforeach
</div> -->
@endsection('content')
