@extends('layouts.main')
@section('title')

@section('content')

  <h1>Olá Muundo!</h1>
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    @foreach ($products as $product)
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('') }}" class="d-block w-100" alt="{{$product->name}}">
        </div>
      <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    @endforeach
  </div>

@endsection