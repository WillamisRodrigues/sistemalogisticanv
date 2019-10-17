<div class="header navbar">
                <div class="header-container">
                    <ul class="nav-left">
                        <li><a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);"><i class="ti-menu"></i></a></li>
                        <li><a class="search-toggle" href="javascript:void(0);"><i class="search-icon ti-home pdd-right-10"></i> Nome Unidade </a></li>
                    </ul>
                    <ul class="nav-right">
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                                <div class="peer mR-10"><img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/10.jpg" alt=""></div>
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