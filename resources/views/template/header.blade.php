<div class="header navbar">
                <div class="header-container">
                    <ul class="nav-left">
                        <li><a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);"><i class="ti-menu"></i></a></li>
                        <li><p class="mt-3 text-center">
                            <strong> Empresa: 
                            @foreach($empresas as $empresa)
                            <a href="{{route('empresas')}}" class="active_unidade"> 
                                {{$empresa->nome_empresa}}
                             </a> 
                            @endforeach
                             </strong>
                            <strong> Unidade: 
                                @foreach($unidades as $unidade)
                                <a href="{{route('unidades')}}" class="active_unidade"> 
                                    {{Auth::user()->cod_sophia }} -
                                    {{$unidade->nome_unidade}}
                                </a> 
                                @endforeach 
                            </strong> </p></li>
                    </ul>
                    <ul class="nav-right">
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                                <div class="peer mR-10"><img class="w-2r bdrs-50p" src="{{asset('assets/images/user.jpg')}}" alt=""></div>
                                <div class="peer"><span class="fsz-sm c-grey-900"> {{ Auth::user()->name }}</span></div>
                            </a>
                            <ul class="dropdown-menu fsz-sm">
                                <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
             document.getElementById('logout-form').submit();"><span class="icon-holder"><i class="c-brown ti-power-off mR-10"></i> </span><span class="title">Sair</span></a></li>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>