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
                                    <a  href="" class="btn btn-outline-dark pull-right">
                                        <i class="c-brown ti-home"></i>
                                         Adicionar Empresa
                                    </a>
                                    </span>
                                    <table class="table table-bordered mt-4">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Nome Empresa</th>
                                                <th scope="col">Data Criação</th>
                                                <th scope="col">Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"  style="font-size:14pt;">Unidade Teste </th>
                                                <th scope="row"  style="font-size:14pt;">00/00/0000 </th>
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
        </main>
@endsection