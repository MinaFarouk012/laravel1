

@extends('layouts/books_layout')

@section('title')
Create| Book
@endsection




@section('content')

@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger">{{$books}}
</div>
@endforeach

@endif





