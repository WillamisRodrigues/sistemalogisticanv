<div class="sidebar">
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
                <div class="peer peer-greed">
                    <a class="sidebar-link td-n" href="{{route('home')}}" class="td-n">
                        <div class="logo"><img src="{{asset('assets\static\images\logo.png')}}" alt=""></div>
                    </a>
                </div>
                <div class="peer">
                    <div class="mobile-toggle sidebar-toggle"><a href="" class="td-n"><i class="ti-arrow-circle-left"></i></a></div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu scrollable pos-r">
            <li class="nav-item mT-30 active"><a class="sidebar-link" href="{{route('home')}}" default=""><span class="icon-holder"><i class="c-brown ti-home"></i> </span><span class="title">Home</span></a></li>
            <li class="nav-item active"><a class="sidebar-link" href="{{route('lancamentos')}}" default=""><span class="icon-holder"><i class="c-brown ti-shopping-cart"></i> </span><span class="title">Lançamentos / Histórico</span></a></li>
            <li class="nav-item active"><a class="sidebar-link" href="{{route('entrada_saida')}}" default=""><span class="icon-holder"><i class="c-brown ti-reload"></i> </span><span class="title">Estoque por Unidade </span></a></li>
            <li class="nav-item active"><a class="sidebar-link" href="{{route('baixa')}}" default=""><span class="icon-holder"><i class="c-brown ti-bag"></i> </span><span class="title">Baixa de Materiais</span></a></li>
            <li class="nav-item active"><a class="sidebar-link" href="{{route('unidades')}}" default=""><span class="icon-holder"><i class="c-brown ti-location-pin"></i> </span><span class="title">Unidades</span></a></li>
            
            <li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-brown ti-settings"></i> </span><span class="title">Configurações</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
                <ul class="dropdown-menu">
                    @if(auth()->user()->nivel == 2)
                    <li><a href="{{route('usuarios')}}">Usuários</a></li>
                    @endif  
                    <!-- <li><a href="{{route('empresas')}}">Empresas</a></li> -->
                    <li><a href="{{route('kits')}}">kits</a></li>
                    <li><a href="{{route('curso')}}">Cursos</a></li>
                </ul>
            </li>
           
            <li class="nav-item active"> <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
             document.getElementById('logout-form').submit();"><span class="icon-holder"><i class="c-brown ti-power-off mR-10"></i> </span><span class="title">Sair</span></a></li>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
        </ul>
    </div>
</div>