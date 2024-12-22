@extends('layouts.main')
@section('title', 'Cadastrar Produtos')
@section('content')

<div id="form-products" style=" background-color: rgb(28,28,28,0.3); width: 75%; padding: 1%; border-radius: 1cap; margin-inline-start: 15%;" >
    <form action="" method="POST" enctype="multipart/form-data" class="mx-auto" style="max-width: 60%;">
        <h2 class="text-center mb-4">Cadastro de Produto</h2>
        @csrf
        <!-- Nome do Produto -->
        <div class="mb-3">
            <label for="name" class="form-label">Nome do Produto</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <!-- Descrição -->
        <div class="mb-3">
            <label for="description" class="form-label">Descrição</label>
            <textarea name="description" id="description" class="form-control" cols="30" rows="5" required></textarea>
        </div>
        <div class="row mb-3">
            <!-- Seleção de Categoria -->
            <div class="col-md-6">
                <label for="category_id" class="form-label">Categoria</label>
                <select name="category_id" id="category_id" class="form-select" required>
                    <option value="" disabled selected>-- Selecione a Categoria --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <!-- Preço -->
            <div class="col-md-6">
                <label for="price" class="form-label">Preço</label>
                <input type="number" name="price" id="price" class="form-control" step="0.01" required>
            </div>
        </div>
        <div class="row mb-3">
            <!-- Tamanho -->
            <div class="col-md-6">
                <label for="size" class="form-label">Tamanho</label>
                <input type="text" name="size" id="size" class="form-control" required>
            </div>
            <!-- Quantidade -->
            <div class="col-md-6">
                <label for="quantity" class="form-label">Quantidade</label>
                <input type="number" name="quantity" id="quantity" class="form-control" required>
            </div>
        </div>
        <!-- Imagem -->
        <div class="mb-3">
                <label for="image" class="form-label">Imagem</label>
                <input type="file" name="image" id="image" class="form-control" required>
            </div>
        <!-- Botão de Envio e Limpeza -->
        <div class="d-flex justify-content-start">
            <button type="submit" class="btn btn-warning">Salvar Produto</button>
            <button type="reset" class="btn btn-dark ms-2">Limpar</button>
        </div>
    </form>
</div>

@endsection