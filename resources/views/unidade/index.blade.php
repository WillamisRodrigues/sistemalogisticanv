@extends('template.app')
 @section('titulo','Unidades : Logistica')
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
                                    <span class="c-grey-900 h4 mB-20">Unidades
                                    <a  href=""  data-toggle="modal" data-target="#unidades" class="btn btn-outline-dark pull-right">
                                        <i class="c-brown ti-location-pin"></i>
                                         Nova Unidade
                                    </a>
                                    </span>
                                    <table class="table table-bordered mt-4">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Admin</th>
                                                <th scope="col">Unidade</th>
                                                <th scope="col">Cidade</th>
                                                <th scope="col">UF</th>
                                                <th scope="col">Cod. Sophia </th>
                                                <th scope="col"> Empresa</th>
                                                <th scope="col">Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="" class="btn btn-outline-dark">
                                                        <i class="c-brown ti-home"></i>
                                                        Entrar
                                                    </a>
                                                </td>
                                                <td>Rio de Janeiro</td>
                                                <td>Rio</td>
                                                <td>RJ</td>
                                                <td>26</td>
                                                <td>Gracom</td>
                                                <td>
                                                <a href="" class="btn btn-outline-dark">
                                                        <i class="c-brown ti-pencil"></i>
                                                        Editar
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            @include('template.modals.unidade')
        </main>
@endsection