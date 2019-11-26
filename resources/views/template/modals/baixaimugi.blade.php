<!-- Modal -->
<div id="baixaimugi" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
   <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal" id="close_kit">&times;</button>
         
        </div>
        <div class="modal-body">
         <span id="form_result"></span>
         <form id="baixa_imugi"  class="form-horizontal">
          {{csrf_field()}}
          <div class="form-group">
            <label class="control-label col-md-4" >Matricula: </label>
            <div class="col-md-12">
             <input type="text" readonly name="matricula" id="matricula" class="form-control" />
            </div>
           </div>
           <div class="form-group">
            <label class="control-label col-md-4">Selecione Kit: </label>
            <div class="col-md-12">
             <select name="nome_kit" id="nome_kit" class="form-control">
                @foreach($kits as $kit)
                  <option value="{{$kit->numero_kit}}">{{$kit->nome_kit}}</option>
                @endforeach
              </select>
            </div>
           </div>
           <br />
           <div class="form-group col-md-12">
           <input type="hidden" id="_token" value="{{ csrf_token() }}">
           <input type="hidden" name="empresa_id" id="empresa_id" value="{{ auth()->user()->empresa_id }}">
           <input type="hidden" name="unidade_id" id="unidade_id" value="{{ auth()->user()->unidade_id }}">
            <input type="hidden" name="action" value="Edit" id="action" />
            <input type="hidden" name="hidden_id" id="hidden_id" />
            <input type="submit" name="action_button" id="action_button" class="btn btn-success" value="Adicionar" />
           </div>
         </form>
        </div>
     </div>
    </div>
</div>