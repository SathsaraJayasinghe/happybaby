@extends('master')
@section('content')
<div class="addtocart">
    <h1>Cart Details</h1>

</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Item</th>
      <th scope="col">Price</th>
      <th scope="col">Qty</th>
      <th scope="col">Subtotal</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cart as $c)
    @php
      $sub = $c['price'] * $c['quantity'];
      $total = $c['price'] * $c['quantity'];
      $total += $total;
    @endphp
      <tr>
        <td><img src="{{$c['gallery']}}" alt="im" width="60px" height="60px">{{$c['name']}} <a href="/removecart/{{$c['id']}}"><button>Remove</button></a> </td>
        <td>{{$c['price']}}</td>
        <td>{{$c['quantity']}}</td>
        <td>{{$sub}}</td>
      </tr>
    @endforeach()

  </tbody>
</table>
<div>
  <label for="">Subtotal</label>
  <input type="text" value="{{$total}}">
  <a href="/order"><button>Order Now</button></a>
</div>
@endsection('content')