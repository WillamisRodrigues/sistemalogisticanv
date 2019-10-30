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
            <h2>Adicionar Usuário</h2>

            @if($errors->any())
            <h4>{{$errors->first()}}</h4>
            @endif

            <form method="post" action="/usuarios">
              @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input name="nome" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entre com o nome">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entre com o email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                </div>
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </form>

        </div>
        </main>
@endsection