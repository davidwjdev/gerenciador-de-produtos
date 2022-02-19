@extends('layout')

@section('title')
    Produtos
@endsection

@section('content')
    <div class="py-1">
        <a href="/produtos/adicionar" class="btn btn-success btn-lg px-4 gap-3">Adicionar</a>
    </div>
    <div class="py-5">

        <table class="table table-hover table-responsive">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Tags</th>
                </tr>
            </thead>
            <tbody>
                @if (count($produtos) == 0)
                    <tr>
                        <td colspan="6">Não existem produtos cadastrados!</td>
                    </tr>
                @else
                    @foreach ($produtos as $key => $value)
                        <tr>
                            <th scope="row">{{ $value->id }}</th>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->tags }}</td>

                            <td>
                                <a href="/produtos/editar/id={{ $value->id }}"
                                    class="btn btn-warning btn-lg px-4 gap-3">Editar</a>
                                <button data-bs-toggle="modal" data-bs-target="#modalDelete"
                                    class="btn btn-danger btn-lg px-4 gap-3">Apagar</button>
                                @extends('produtos.modal')
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.modal').modal('show');
        });
    </script>

@endsection
