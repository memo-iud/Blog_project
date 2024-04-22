@extends('layouts.app')
@section('content')

<div class="container">
        <div class="card">
        <div class="card-header">LISTADO DE POST</div>
        <div class="card-body">
            <h5>PUBLICACIONES</h5>
            <a href="{{ route('posts.create') }}" class="btn  btn-warning">Crear publicación</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Contenido</th>
                        <th>Categoría</th>
                        <th> </th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td> {!! html_entity_decode( $post->content ) !!} </td>
                        <td>{{ $post->category_id }}</td>
                        <td>
                            <div class="d-flex justify-content-end">
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-warning mb-3">Ver</a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary mb-3">Editar</a>
                            <form action="{{ route('posts.destroy', $post->id) }}"
                                method="POST" style=" display: inline ">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ">Eliminar</button>
                            </form>
                            <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3">Atras</a></div>
                            </tb>
                        </tr>
                        @endforeach
                    </tbody>
                </div>
            </div>
        </div>
    </div>
@endsection

