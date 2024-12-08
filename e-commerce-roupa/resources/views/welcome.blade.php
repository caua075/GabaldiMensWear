@extends('layouts.main')
@section('title')

@section('content')

<div class="container">
    <h1>Olá Muundo!</h1>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('') }}" class="d-block w-100" alt="Banner 1">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('') }}" class="d-block w-100" alt="Banner 2">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('') }}" class="d-block w-100" alt="Banner 3">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('') }}" class="d-block w-100" alt="Banner 4">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
</div>

@endsection