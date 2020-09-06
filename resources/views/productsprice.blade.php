@extends('layouts/home')

@section('title')
All| Products
@endsection

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">description</th>
      <th scope="col">price</th>
    </tr>
  </thead>
  <tbody>
  
    @foreach($products as $product)
    <tr>
      <th scope="row">{{$product->name}}</th>
      <td>{{$product->description}}</td>
      <td>{{$product->price}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection




