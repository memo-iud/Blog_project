@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear Nuevo Post</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('posts.store')}}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="title">Titulo:</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="content">Contenido</label>
                                <textarea name="content" id="content" cols="5"
                                rows="6" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="category">Categoria</label>
                                <select name="category_id" id="category" class="form-control" >
                                    <option value="">Seleccione una categoria</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id}}">{{ $category->category_name}}</option>
                                    @endforeach
                                </select>
                                <div class="d-flex justify-content-end">
                            </div>
                        <button type="submit" class="btn btn-danger mb-3">Guardar</button>

                        </form>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3">Atras</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
