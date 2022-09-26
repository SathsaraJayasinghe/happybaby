@extends('master')
@section('content')

<div>
    <form action="/makeorder" method='post'>
        @csrf
        <label for="">Total</label>
        <input type="text" value="{{$total}}">
        <label for="">Address</label>
        <input type="text" name="address">
        <button type="submit">Buy Now</button>
    </form>

</div>

@endsection('content')