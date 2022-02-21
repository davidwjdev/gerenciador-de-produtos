@if (!empty($value))
<!-- Modal -->
<div class="modal fade" id="modalDelete" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Deseja apagar o tag?</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <p>Você deseja realmente apagar o tag?</p>
        <table
          class="table table-hover table-bordered border-secondary rounded-5"
          aria-label="Tags"
        >
          <thead>
            <tr class="table-danger">
              <th scope="col">#</th>
              <th scope="col">Tag</th>
            </tr>
          </thead>
          <tbody>
            <tr class="align-middle table-danger">
              <th scope="row" class="col-1">{{ $value->id }}</th>
              <td class="col-4">{{ $value->name }}</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <a
          type="button"
          class="btn btn-success"
          data-bs-dismiss="modal"
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
        <a
          href="/tags/apagar/id={{ $value->id }}"
          class="btn btn-danger"
          data-bs-toggle="tooltip"
          data-bs-placement="top"
          title="Apagar"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="#FFFFFF"
            class="bi bi-trash3-fill"
            viewBox="0 0 16 16"
          >
            <path
              d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"
            />
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>
@endif
