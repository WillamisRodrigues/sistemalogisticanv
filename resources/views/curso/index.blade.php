@extends('template.app')
 @section('titulo','Cursos : Logistica')
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
                                    <span class="c-grey-900 h4 mB-20">Curso
                                    @if(auth()->user()->nivel == 2)
                                        <button type="button" name="add_curso" id="add_curso" class="btn btn-dark btn-md pull-right" style="margin-bottom:20px;">
                                        <i class="fa fa-home"></i>    
                                        Adicionar Curso </button>
                                    @endif
                                    </span>
                                    <table class="table table-bordered mt-4" id="cursos_table" style="width:100%;">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Curso</th>
                                                <th scope="col">Qual Empresa</th>
                                                <th scope="col">Ação</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            @include('template.modals.curso')
        </main>
@endsection