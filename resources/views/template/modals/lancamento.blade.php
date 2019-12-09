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
      <div id="form_result"></div>
       <form id="inserir_lancamento" method="post" action="{{route('inserir_lancamentos')}}">
          {{ csrf_field() }}
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputEmail4">Quantidade de Kits:</label>
                <input type="number" class="form-control" name="quantidade_kit" id="qunatidade_kit" placeholder="Ex: 0">
            </div>
          </div> 
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputEmail4">Unidade:</label>
                  <select name="unidade_id" id="unidade_id" class="form-control" readonly>
                    @foreach($unidades as $unidade)
                        <option value="{{$unidade->id}}">{{$unidade->nome_unidade}}</option>   
                    @endforeach 
                  </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputEmail4">Empresa:</label>
                  <select name="empresa_id" id="empresa_id" class="form-control" readonly>
                  @foreach($empresas as $empresa)
                        <option value="{{$empresa->id}}">{{$empresa->nome_empresa}}</option>   
                    @endforeach 
                  </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputEmail4">Número Ecommerce:</label>
                  <input type="text" name="n_ecomeerce" id="n_ecomeerce" class="form-control" id="inputEmail4" placeholder="Ex: ABC645F4545">
              </div>
            </div> 
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputEmail4">Selecione Kit:</label>
                  <select name="kits" id="kits" class="form-control">
                    @foreach($kits as $kit)
                        <option value="{{$kit->numero_kit}}">{{$kit->nome_kit}}</option>   
                    @endforeach 
                  </select>
              </div>
            </div> 
        </div>
        <div class="modal-footer">
              <input type="hidden" id="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="action" id="action" />
              <input type="hidden" name="id_empresa" id="id_empresa" value="{{auth()->user()->empresa_id}}" />
              <input type="hidden" name="hidden_id" id="hidden_id" />
              <input type="submit" name="action_button" id="action_button" class="btn btn-success" value="Adicionar Lançamento" />
        </div>
        </form>
      </div>
    </div>
  </div>