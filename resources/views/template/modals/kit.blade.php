<!-- Modal -->
<div class="modal fade" id="kits" tabindex="-1" role="dialog" aria-labelledby="kits" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="kits">Lançamento de Kits </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="post" action="{{route('inserir_kit')}}">
          {{ csrf_field() }}
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputEmail4">Adicionar Kit:</label>
                <input type="text" class="form-control" name="nome_kit" placeholder="Ex: OPEN CG">
            </div>
          </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Adicionar Kit</button>
      </div>
      </form>
    </div>
  </div>
</div>