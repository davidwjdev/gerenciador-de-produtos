@if(!empty($value))
<!-- Modal -->
<div class="modal fade" id="modalDelete" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deseja apagar o produto?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Você deseja realmente apagar o produto?</p>
                <table class="table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Tags</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{$value->id}}</th>
                            <td>{{$value->name}}</td>
                            <td>{{$value->tags}}</td>
                            <td>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                <a href="/produtos/apagar/id={{$value->id}}" class="btn btn-danger">Apagar</a>
            </div>
        </div>
    </div>
</div>
@endif
