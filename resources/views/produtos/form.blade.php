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
      <input
        type="number"
        class="form-control"
        id="id"
        name="id"
        aria-describedby="id"
        value="{{ $produto->id }}"
        disabled
      />
    </div>
    @endif
    <div class="mb-3">
      <label for="name" class="form-label">Produto: </label>
      <input
        type="text"
        class="form-control"
        id="name"
        name="name"
        aria-describedby="name"
        value="{{ isset($produto->id) ? $produto->name : '' }}"
      />
    </div>

    <div class="mb-3">
      <div class="btn-group" role="group" aria-label="Tags">
        @foreach ($tags as $key => $value)
        <input
          type="checkbox"
          class="btn-check"
          id="{{ $value->name }}"
          name="tags[]"
          value="{{ $value->id }}"
          autocomplete="off"
        />
        <label class="btn btn-outline-success" for="{{ $value->name }}"
          >{{ $value->name }}</label
        >
        @endforeach
      </div>
    </div>

    <div class="py-5">
      <button
        type="submit"
        class="btn btn-success"
        data-bs-toggle="tooltip"
        data-bs-placement="top"
        title="Salvar"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          fill="#FFFFFF"
          class="bi bi-check-lg"
          viewBox="0 0 16 16"
        >
          <path
            d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"
          />
        </svg>
      </button>
      <a
        href="/produtos"
        class="btn btn-danger"
        data-bs-toggle="tooltip"
        data-bs-placement="top"
        title="Cancelar"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          fill="#FFFFFF"
          class="bi bi-x-lg"
          viewBox="0 0 16 16"
        >
          <path
            fill-rule="evenodd"
            d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"
          />
          <path
            fill-rule="evenodd"
            d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"
          />
        </svg>
      </a>
    </div>
  </form>
</div>
@endsection
