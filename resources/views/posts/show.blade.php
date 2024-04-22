@extends('layouts.app')
@section('content')
    <div class ="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
        <div class="card">
            <div class="card-header">VER POST</div>
            <div class="card-body">
                <div class="card-header">Post</div>
                <h1>{{ $post->title }}</h1>
                <div class="card-header">Contenido</div>
                <p>{{ $post->content }}</p>
                <div class="card-header">Fecha Modificado</div>
                <p>{{ $post->updated_at }}</p>
            <div class="d-flex justify-content-end">
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary mb-3">Editar</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3">Atras</a></div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
