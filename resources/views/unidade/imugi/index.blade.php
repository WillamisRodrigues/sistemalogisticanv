<div class="bgc-white bd bdrs-3 p-20 mB-20">
                                    <span class="c-grey-900 h4 mB-20">Unidades
                                    @if(auth()->user()->nivel == 2)
                                        <button type="button" name="add_unidade_imugi" id="add_unidade_imugi" class="btn btn-dark btn-md pull-right" style="margin-bottom:20px;">
                                        <i class="ti ti-location-pin"></i>    
                                        Adicionar Unidade Imugi </button>
                                    @endif
                                    </span>
                                    <table class="table table-bordered mt-4" id="listaunidadesimugi" style="width:100%;">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Admin</th>
                                                <th scope="col">Unidade</th>
                                                <th scope="col">Cidade</th>
                                                <th scope="col">Cod. Sophia </th>
                                                <th scope="col">Ação</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>