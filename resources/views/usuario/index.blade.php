@extends('template.app')
 @section('titulo','Usuários : Logistica')
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
                                    <span class="c-grey-900 h4 mB-20">Usuários 
                                    <a  href="/usuarios/inserir" class="btn btn-outline-dark pull-right">
                                        <i class="c-brown ti-user"></i>
                                         Adicionar Usuário
                                    </a>
                                    </span>
                                    <table class="table table-bordered mt-4">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Data Cadastro</th>
                                                <th scope="col">Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($usuarios as $user)
                                            <tr>
                                            <th scope="row"  style="font-size:14pt;">{{$user->name}}</th>
                                            <th scope="row"  style="font-size:14pt;">{{$user->email}}</th>
                                            <th scope="row"  style="font-size:14pt;">{{$user->email_verified_at}}</th>
                                            <th scope="row"  style="font-size:14pt;">
                                            <a href="/usuarios/editar/{{$user->id}}" class="btn btn-outline-dark">
                                                        <i class="c-brown ti-pencil"></i>
                                                        Editar
                                                    </a> 
                                            <a href="/usuarios/apagar/{{$user->id}}" class="btn btn-outline-dark">
                                                        <i class="c-brown ti-pencil"></i>
                                                        Apagar
                                                    </a>
                                                </th>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
        </main>
@endsection