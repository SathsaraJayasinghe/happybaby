@extends('master')
@section('content')

<section class="singleproduct">
  <div class="container">
    <div class="row">
        <div class="col-md-5">
            <div id="productslider" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{$id['gallery']}}" alt="{{$id['gallery']}} class="d-block w-100" alt="c1" height="400px">
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>  
</section>


<!-- <div class="detail">
    <div class="detail-image">
    <img src="{{$id['gallery']}}" alt="{{$id['gallery']}}">
    </div>
    <div class="detailsdetails" style="border:solid">
        <div>
            <h1>{{$id['name']}}</h1>
            <p>{{$id['description']}}</p>
            <p>{{$id['price']}}</p>
        </div>
        
        <div>
           <form action="/addtocart/{{$id['id']}}" method="POST">
            @csrf
                <label for="">Quantity:</label>
                <input type="text" name="quantity" id="">
                <button type="submit">Add to Cart</button>
           </form> 
            
        </div>
        <button type="submit">Buy Now</button>
        <a href="/">Home</a>

        
    </div>  
</div> -->

@endsection('content')