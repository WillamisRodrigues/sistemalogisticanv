@extends('template.app')
 @section('titulo','Lançamentos : Logistica')
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
                                @if(auth()->user()->empresa_id == 1)
                                    @include('lancamentos.gracom.index')
                                @else
                                    @include('lancamentos.imugi.index')
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @include('template.modals.lancamento') 
        </main>
@endsection