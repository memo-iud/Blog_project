@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Categoría</div>
                <div class="card-body">
                <form method="POST" action="{{ route('categories.store') }}">
                @csrf
                <div class="form-group mb-3">
                    <label for="category_name" class="form_label">Nombre Categoria</label>
                    <input type="text" name="category_name" id="category_name" class="form-control"
                    placeholder="Category Name">
                </div>

                <div class="form-group mb-3">
                <label for="active">Activa</label>
                <input class="form-check-input" type="checkbox" name="active" id="active" value="0">
                </div>
                </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-danger mb-3">Guardar</button>
        </form>
        <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3">Atras</a></div>
    </div>
</div>
</div>
@endsection
