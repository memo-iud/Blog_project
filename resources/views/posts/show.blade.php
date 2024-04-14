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
                <a href="{{ route('posts.edit', $post->id) }}"></a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                    @csrf
                    @method('DELETE')

                </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
