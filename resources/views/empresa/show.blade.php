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
                        @foreach($empresas as $empresa)
                            <div class="col-md-4">
                                <div class="card">
                                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                                        <div class="card-body">
                                            <h5 class="card-title">{{$empresa->nome_empresa}}</h5>
                                            <p class="card-text">Clique abaixo para logar na empresa.</p>
                                            <a href="#" class="btn btn-success">
                                            <i class="ti-home"></i>
                                            Entrar</a>
                                        </div>
                                    </div>
                                </div>
                              @endforeach
                            </div>
                        </div>
                  
                    </div>
                </div> 
            @include('template.modals.empresa') 
        </main>
@endsection