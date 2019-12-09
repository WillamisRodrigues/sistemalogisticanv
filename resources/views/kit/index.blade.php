@extends('template.app')
 @section('titulo','Kits : Logistica')
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
                                    <span class="c-grey-900 h4 mB-20">Kits
                                    @if(auth()->user()->nivel == 2)
                                        <button type="button" name="add_kit" id="add_kit" class="btn btn-dark btn-md pull-right" style="margin-bottom:20px;">
                                        <i class="fa fa-book"></i>    
                                        Adicionar Kit </button>
                                    @endif
                                    </span>
                                    <table class="table table-bordered mt-4" id="kit_table" style="width:100%!important;">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Curso</th>
                                                <th scope="col">Qual Empresa</th>
                                                <th scope="col">Data Cadastro</th>
                                                <th scope="col">Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                @include('template.modals.kit') 
        </main>
@endsection