@extends('template.app')
 @section('titulo','Baixa de Alunos : Logistica')
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
                                    <span class="c-grey-900 h4 mB-20">Baixa de Alunos
                                    </span>
                                    <table class="table table-bordered mt-4">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Matricula</th>
                                                <th scope="col">Nome Completo</th>
                                                <th scope="col">Nível</th>
                                                <th scope="col">Modulo</th>
                                                <th scope="col">Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th style="font-size:14pt;">123456 </th>
                                                <th style="font-size:14pt;"> Willamis Rodrigues </th>
                                                <th style="font-size:14pt;"> kit. Unidade 1 Game Dev </th>
                                                <th style="font-size:14pt;"> 04. Adobe Illustrator </th>
                                                <th><a href="" data-toggle="modal" data-target="#baixamaterial" class="btn btn-outline-dark">
                                                    <i class="c-brown ti-book"></i>
                                                    Baixa Material
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
              @include('template.modals.baixa')
        </main>
@endsection