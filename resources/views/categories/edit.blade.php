@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Categoría</div>
                    <div class="card-body">
                        <form action="{{ route('categories.update', $category->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-goup">
                                @error('category_name')
                                    has-error
                                @enderror
                                <label for="category_name" class="form_label">Nombre Categoría</label>
                                <input type="text" name="category_name" id="category_name" class="form-control"
                                    value="{{ $category->category_name }}">
                                @error('category_name')
                                    <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-goup">
                                <label for="active">Estado</label>
                                <select name="active" id="active" class="form-control">
                                    <option value="1" {{ $category->active ? 'selected' : '' }}>Activa</option>
                                    <option value="0" {{ $category->active ? 'selected' : '' }}>Inactiva</option>
                                </select>
                            </div>
                            <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mb-3">Guardar</button>
                        
                        <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3">Atras</a></div>
                    </form>
                    </div>
                </div>
            </div>
        @endsection
