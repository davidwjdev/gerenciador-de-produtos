@extends('layout')

@section('title')
    Produtos
@endsection

@section('content')
    <div class="py-1">
        <a href="/produtos/adicionar" class="btn btn-success"
         data-bs-toggle="tooltip" data-bs-placement="top" title="Adicionar" >
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFFFFF" class="bi bi-plus-lg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
              </svg>
        </a>
    </div>
    <div class="py-5">

        <table class="table table-hover table-responsive">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Produto</th>
                    <th scope="col" colspan="2">Tags</th>
                </tr>
            </thead>
            <tbody>
                @if (count($produtos) == 0)
                    <tr>
                        <td colspan="4">Não existem produtos cadastrados!</td>
                    </tr>
                @else
                    @foreach ($produtos as $key => $value)
                        <tr class="align-middle">
                            <th scope="row" class="col-1">{{ $value->id }}</th>
                            <td class="col-1">{{ $value->name }}</td>
                            <td class="col-5">{{ $value->tags }}</td>

                            <td class="col-1">
                                <a href="/produtos/editar/id={{ $value->id }}" class="btn btn-warning"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Editar">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFFFFF"
                                        class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                    </svg>
                                </a>
                                <span data-bs-toggle="modal" data-bs-target="#modalDelete">
                                    <a class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Apagar">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFFFFF"
                                            class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                        </svg>
                                    </a>
                                </span>
                                @extends('produtos.modal')
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>



@endsection
