<!-- Modal -->
<div id="kits" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
   <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal" id="close_kit">&times;</button>
         
        </div>
        <div class="modal-body">
         <span id="form_result"></span>
         <form id="inserir_kit"  class="form-horizontal">
          {{csrf_field()}}
          <div class="form-group">
            <label class="control-label col-md-4" >Nome Kit: </label>
            <div class="col-md-12">
             <input type="text" name="nome_kit" id="nome_kit" class="form-control" />
            </div>
           </div>
           <div class="form-group">
            <label class="control-label col-md-4">Selecione Empresa: </label>
            <div class="col-md-12">
             <select name="nome_empresa" id="nome_empresa" class="form-control">
                @foreach($empresas as $empresa)
                  <option value="{{$empresa->id}}">{{$empresa->nome_empresa}}</option>
                @endforeach;
              </select>
            </div>
           </div>
           <br />
           <div class="form-group col-md-12">
           <input type="hidden" id="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="action" id="action" />
            <input type="hidden" name="hidden_id" id="hidden_id" />
            <input type="submit" name="action_button" id="action_button" class="btn btn-success" value="Adicionar" />
           </div>
         </form>
        </div>
     </div>
    </div>
</div>
<!-- modal de excluir -->
<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h2 class="modal-title">Confirmação</h2>
                <button type="button" class="close"  data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h4 class="text-center">Você deseja realmente deletar este kit?</h4>
            </div>
            <div class="modal-footer">
             <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>