@extends('layouts.app')
@section('content')
    <div class ="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
        <div class="card">
            <div class="card-header">VER CLASE</div>
            <div class="card-header">ID</div>
            <div class="card-body">
            <h1>{{ $category->id }}</h1></div>
            <div class="card-header">CATEGORÍA</div>
            <div class="card-body">
            <h1>{{ $category->category_name }}<h1></div>
            <div class="card-header">Fecha Creado</div>
            <div class="card-body">
                <p>{{ $category->created_at }}<p></div>
                <div class="d-flex justify-content-end">
                <a action="{{ route('categories.edit', $category->id) }}" class="btn btn-primary mb-3">Editar</a>
                <form action="{{ route('categories.destroy', $category->id) }}" ></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3">Atras</a></div>
            </div>
        </div>
    </div>

@endsection
