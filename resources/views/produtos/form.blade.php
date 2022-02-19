@extends('layout')

@section('title')
    @if (isset($produto->id))
        Editar Produto
    @else
        Adicionar Produto
    @endif
@endsection

@section('content')
    <div class="py-1">
        <form method="POST">
            @csrf
            @if (isset($produto->id))
                <div class="mb-3">
                    <label for="id" class="form-label">Id: </label>
                    <input type="number" class="form-control" id="id" name="id" aria-describedby="id"
                        value="{{ $produto->id }}" disabled>
                </div>
            @endif
            <div class="mb-3">
                <label for="name" class="form-label">Produto: </label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name"
                    value="{{ isset($produto->id) ? $produto->name : '' }}">
            </div>
            {{-- <div class="mb-3">
                <label for="tags" class="form-label">Tags: </label>
                <input type="text" class="form-control" id="tags" name="tags" aria-describedby="tags"
                    value="{{ isset($pessoa->id) ? $pessoa->tags : '' }}">
            </div> --}}
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="/produtos" class="btn btn-danger">Cancelar</a>

        </form>
    </div>
@endsection
