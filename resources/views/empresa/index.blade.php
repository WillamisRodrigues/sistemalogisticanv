@extends('template.app')
 @section('titulo','Empresas : Logistica')
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
                                    <span class="c-grey-900 h4 mB-20">Empresas
                                    <button type="button" name="add_empresa" id="add_empresa" class="btn btn-dark btn-md pull-right" style="margin-bottom:20px;">
                                    <i class="fa fa-home"></i>    
                                    Adicionar Empresa </button>
                                    </span>
                                    <table class="table table-bordered mt-4" id="empresas_table" style="width:100%!important;">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Escolha Empresa</th>
                                                <th scope="col">Nome Empresa</th>
                                                <th scope="col">Data Cadastro</th>
                                                <th scope="col">Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"  style="font-size:14pt;">Unidade Teste </th>
                                                <th scope="row"> 
                                                    <a href="" class="btn btn-outline-dark">
                                                        <i class="c-brown ti-pencil"></i>
                                                        Editar Empresa
                                                    </a>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            @include('template.modals.empresa') 
        </main>
@endsection