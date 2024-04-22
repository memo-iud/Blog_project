@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">LISTADO DE CATEGORÍAS</div>
            <div class="card-body">
            <h5>CATEGORIAS</h5>
            <a href="{{ route('categories.create') }}" class="btn  btn-primary">Crear publicación</a>
            <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Contenido</th>
                    <th></th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>{{ $category->active }}</td>
                        <td>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('categories.show', $category->id) }}"
                                    class="btn btn-warning mb-3">Ver</a>
                                <a href="{{ route('categories.edit', $category->id) }}"
                                    class="btn btn-primary mb-3">Editar</a>
                                <form action="{{ route('categories.destroy', $category->id) }}"
                                    method="POST" style=" display: inline ">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mb-3 ">Eliminar</button>
                                <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3">Atras</a></div>
                            </form>
                        </tb>
                    </tr>
                @endforeach
            </tbody>
        </div>
    </div>
</div>
</div>
@endsection
