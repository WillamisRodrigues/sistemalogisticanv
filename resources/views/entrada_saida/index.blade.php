@extends('template.app')
 @section('titulo','Entrada / Saída : Logistica')
 @section('conteudo')   
    <div id="loader">
        <div class="spinner"></div>
    </div>
    <script type="b2b87a95708a162dfd393efc-text/javascript">
        window.addEventListener('load', () => {
                const loader = document.getElementById('loader');
                setTimeout(() => {
                  loader.classList.add('fadeOut');
                }, 300);
              });
    </script>
    <div>
        @include('template.menus.sidebar')
        <div class="page-container">
        @include('template.header')
        <main class="main-content bgc-grey-100">
        <div id="mainContent">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                                    <span class="c-grey-900 h4 mB-20">Entradas de materiais 
                                    </span>
                                    <table class="table table-bordered mt-4">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Unidade</th>
                                                <th scope="col">QTD.Und. <br> Impressa - Open CG</th>
                                                <th scope="col">QTD.Und. <br> Web - Open CG</th>
                                                <th scope="col">QTD.Und. <br> Vídeo - Open CG</th>
                                                <th scope="col">QTD.Und. <br> Game Art</th>
                                                <th scope="col"> QTD.Und. <br> Game Dev</th>
                                                <th scope="col">QTD.Und. <br> Game Unificado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" style="font-size:14pt;">Unidade Teste</th>
                                                <td><span class="badge bgc-green-50 c-green-700 p-15 lh-0 tt-c badge-pill" style="font-size:14pt; width:100px;" >10</span></td>
                                                <td><span class="badge bgc-yellow-50 c-yellow-700 p-15 lh-0 tt-c badge-pill" style="font-size:14pt; width:100px;" >6</span></td>
                                                <td><span class="badge bgc-green-50 c-green-700 p-15 lh-0 tt-c badge-pill" style="font-size:14pt; width:100px;" >10</span></td>
                                                <td><span class="badge bgc-green-50 c-green-700 p-15 lh-0 tt-c badge-pill" style="font-size:14pt; width:100px;" >2</span></td>
                                                <td><span class="badge bgc-red-50 c-red-700 p-15 lh-0 tt-c badge-pill" style="font-size:14pt; width:100px;" >10</span></td>
                                                <td><span class="badge bgc-green-50 c-green-700 p-15 lh-0 tt-c badge-pill" style="font-size:14pt; width:100px;" >10</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                                    <span class="c-grey-900 h4 mB-20">Saída de materiais 
                                    </span>
                                    <table class="table table-bordered mt-4">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Unidade</th>
                                                <th scope="col">QTD.Und. <br> Impressa - Open CG</th>
                                                <th scope="col">QTD.Und. <br> Web - Open CG</th>
                                                <th scope="col">QTD.Und. <br> Vídeo - Open CG</th>
                                                <th scope="col">QTD.Und. <br> Game Art</th>
                                                <th scope="col"> QTD.Und. <br> Game Dev</th>
                                                <th scope="col">QTD.Und. <br> Game Unificado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" style="font-size:14pt;">Unidade Teste</th>
                                                <td><span class="badge bgc-green-50 c-green-700 p-15 lh-0 tt-c badge-pill" style="font-size:14pt; width:100px;" >10</span></td>
                                                <td><span class="badge bgc-yellow-50 c-yellow-700 p-15 lh-0 tt-c badge-pill" style="font-size:14pt; width:100px;" >6</span></td>
                                                <td><span class="badge bgc-green-50 c-green-700 p-15 lh-0 tt-c badge-pill" style="font-size:14pt; width:100px;" >10</span></td>
                                                <td><span class="badge bgc-green-50 c-green-700 p-15 lh-0 tt-c badge-pill" style="font-size:14pt; width:100px;" >2</span></td>
                                                <td><span class="badge bgc-red-50 c-red-700 p-15 lh-0 tt-c badge-pill" style="font-size:14pt; width:100px;" >10</span></td>
                                                <td><span class="badge bgc-green-50 c-green-700 p-15 lh-0 tt-c badge-pill" style="font-size:14pt; width:100px;" >10</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="masonry-item col-md-6">
                            <div class="bgc-white p-20 bd">
        
                                <div class="">
                                    <span><strong> legenda: </strong> </span>
                                    <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title=";)">Estoque Dísponivel</button>
                                    <button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title=";|">Estoque Minimo</button>
                                    <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title=";("> Estoque Baixo</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div> 
        </main>
@endsection