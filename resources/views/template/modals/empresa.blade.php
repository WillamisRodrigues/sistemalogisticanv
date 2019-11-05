<!-- Modal -->
<div class="modal fade" id="empresa" tabindex="-1" role="dialog" aria-labelledby="empresa" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tituloEmpresa">Adicionar Empresa </h5>
        <button type="button" class="close" data-dismiss="modal" id="close_empresa" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <span id="form_result"></span>
         <form id="inserir_empresa" method="POST" class="form-horizontal">
         {{csrf_field()}}
          <div class="form-row">
              <div class="form-group col-md-12">
                <label for="nome_empresa">Nome da Empresa</label>
                <input type="text" class="form-control" name="nome_empresa" id="nome_empresa" placeholder="Nome Empresa">
              </div>
            </div>
      </div>
      <div class="form-group col-md-12">
           <input type="hidden" id="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="action" id="action" />
            <input type="hidden" name="hidden_id" id="hidden_id" />
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <input type="submit" name="action_button" id="action_button" class="btn btn-success" value="Adicionar" />
           </div>
           </form>
    </div>
  </div>
</div>
<!-- modal de excluir -->
<div id="confirmModalEmpresa" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h2 class="modal-title">Confirmação</h2>
                <button type="button" class="close"  data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h4 class="text-center">Você deseja realmente deletar esta Empresa?</h4>
            </div>
            <div class="modal-footer">
             <button type="button" name="ok_button" id="ok_button_empresa" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>