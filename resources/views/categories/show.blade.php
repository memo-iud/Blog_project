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
                <a action="{{ route('categories.edit', $category->id) }}"></a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="CATEGORIES">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>

@endsection
