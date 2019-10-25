<!-- Modal -->
<div class="modal fade" id="lancamentos" tabindex="-1" role="dialog" aria-labelledby="lancamentos" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="lancamentos">Lançamento de Kits </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="post" action="{{route('inserir_lancamentos')}}">
          {{ csrf_field() }}
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputEmail4">Selecione Kit:</label>
                <select class="form-control">
                </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputEmail4">Número Ecommerce:</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Ex: ABC645F4545">
            </div>
          </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Salvar mudanças</button>
      </div>
      </form>
    </div>
  </div>
</div>