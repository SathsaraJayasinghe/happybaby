@extends('master')
@section('content')

<?php
  use App\Http\Controllers\productController;
  $total = productController::viewCart();
?>

<div class="trending-products">
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
</div>
@endsection('content')

