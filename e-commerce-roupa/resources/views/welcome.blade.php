@extends('layouts.main')
@section('title')

@section('content')

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center" id="container-principal">
    <div class="col p-2 mx-auto my-3">
      <h1 class="display-3 fw-bold">
        <img src="/img/tl_princ.jpeg" class="mx-1" width="50" alt="Logo da Loja">
        Gabaldi Mens Wear
        <img src="/img/tl_princ.jpeg" class="mx-1" width="50" alt="Logo da Loja">
      </h1>
      <h3 class="fw-normal text-muted mb-3">A qualidade que você precisa com a preço que cabe no seu bolso</h3>
    </div>  
</div>

  @foreach ($products as $product)
    <div class="col">
      <div class="card shadow">
        <img src="img/products/{{$product->image}}" alt="{{ $product->name }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
        <div class="card-body">
          <p class="card-text">{{ $product->description }}</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <a href="/products/{{ $product->id }}" class="btn btn-sm btn-outline-primary">View</a>
              <a href="/products/{{ $product->id }}/edit" class=" btn btn-sm btn-outline-warning">Edit</a>
            </div>
            <small class="text-body-secondary">{{ $product->created_at }}</small>
          </div>
        </div>
      </div>
    </div>  
  @endforeach
@endsection