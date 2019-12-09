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
                                    @if(auth()->user()->empresa_id == 1)
                                    @include('entrada_saida.gracom.index')
                                    @else
                                        @include('entrada_saida.imugi.index')
                                    @endif
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                        <div class="masonry-item col-md-12">
                            <div class="bgc-white p-20 bd">
        
                                <div class="">
                                    <span><strong> legenda: </strong> </span>
                                    <span class="badge bgc-green-50 c-green-700 p-15 lh-0 tt-c badge-pill" style="font-size:10pt; width:200px;">Estoque Dísponivel</span>
                                    <span class="badge bgc-yellow-50 c-yellow-700 p-15 lh-0 tt-c badge-pill" style="font-size:10pt; width:200px;">Estoque Minimo </span>
                                    <span class="badge bgc-red-50 c-red-700 p-15 lh-0 tt-c badge-pill" style="font-size:10pt; width:200px;">Estoque Baixo </span>
                                    <span class="ml-4">A quantidade de estoque minimo é: <strong>  10 </strong> </span>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div> 
        </main>
@endsection