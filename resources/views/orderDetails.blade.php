@extends('master')
@section('content')

<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Item</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orders as $o)
      <tr>
        <td><img src="{{$o['gallery']}}" alt="im" width="60px" height="60px">{{$o['name']}}</td>
        <td>{{$o['name']}}</td>
      </tr>
    @endforeach
  </tbody>
</table> 
</div>

@endsection('content')