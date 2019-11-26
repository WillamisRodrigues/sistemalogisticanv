<!-- Modal -->
<div class="modal fade" id="unidades" tabindex="-1" role="dialog" aria-labelledby="unidades" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titulo_unidade_imugi">Nova Unidade </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div id="form_result"></div>
      <form id="inserir_unidade_imugi">
      {{ csrf_field() }}
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Unidade:</label>
            <input type="text" class="form-control" name="nome_unidade" id="nome_unidade" placeholder="Ex: Imugi - Nome Cidade">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">UF </label>
            <input type="text" class="form-control" maxlength="2" name="uf" id="uf" placeholder="Ex: SP">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Cidade:</label>
            <input type="text" class="form-control" name="cidade" id="cidade" placeholder=" Ex: São Paulo">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Codigo Sophia:</label>
            <input type="number" class="form-control" name="cod_sophia" id="cod_sophia" placeholder=" Ex: 10">
          </div>
        </div>
      </div>
      <div class="modal-footer">
      <input type="hidden" id="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="action" id="action" />
              <input type="hidden" name="id_empresa" id="id_empresa" value="{{auth()->user()->empresa_id}}" />
              <input type="hidden" name="hidden_id" id="hidden_id" />
              <input type="submit" name="action_button" id="action_button" class="btn btn-success" value="Adicionar Unidade" />
      </div>
      </form>
    </div>
  </div>
</div>