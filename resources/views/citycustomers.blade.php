@extends('layouts/home')

@section('title')
City| Customers
@endsection

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">City</th>
    </tr>
  </thead>
  <tbody>
  
    @foreach($customers as $customer)
    <tr>
      <th scope="row">{{$customer->customerName}}</th>
      <td>{{$customer->customerEmail}}</td>
      <td>{{$customer->customerPhone}}</td>
      <td>{{$customer->customerCity}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection




