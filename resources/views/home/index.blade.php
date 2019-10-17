 @extends('template.app')
 @section('titulo','Home : Logistica')
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
                    <div class="row gap-20 masonry pos-r">
                        <div class="masonry-sizer col-md-6"></div>
                        <div class="masonry-item w-100">
                            <div class="row gap-20">
                                <div class="col-md-4">
                                    <div class="layers bd bgc-white p-20">
                                        <div class="layer w-100 mB-10">
                                            <h6 class="lh-1">
                                            <i class="c-brown ti-user"></i>
                                            Total de Alunos</h6></div>
                                        <div class="layer w-100">
                                            <div class="peers ai-sb fxw-nw">
                                                <div class="peer peer-greed"><span id="sparklinedash"></span></div>
                                                <div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">+10%</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="layers bd bgc-white p-20">
                                        <div class="layer w-100 mB-10">
                                            <h6 class="lh-1">
                                            <i class="c-brown ti-user"></i>
                                            Alunos de Própria</h6></div>
                                        <div class="layer w-100">
                                            <div class="peers ai-sb fxw-nw">
                                                <div class="peer peer-greed"><span id="sparklinedash2"></span></div>
                                                <div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">-7%</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="layers bd bgc-white p-20">
                                        <div class="layer w-100 mB-10">
                                            <h6 class="lh-1">
                                            <i class="c-brown ti-user"></i>
                                            Alunos de franquia</h6></div>
                                        <div class="layer w-100">
                                            <div class="peers ai-sb fxw-nw">
                                                <div class="peer peer-greed"><span id="sparklinedash3"></span></div>
                                                <div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500">~12%</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="masonry-item col-md-6">
                            <div class="bd bgc-white">
                                <div class="layers">
                                    <div class="layer w-100 p-10">
                                        <h6 class="lh-1">
                                        <i class="c-brown ti-user"></i>
                                        Alunos Ativos Próprias</h6>
                                        <hr>
                                    
                                    </div>
                                    <div class="layer w-100">
                                        <div class="table-responsive p-20">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="bdwT-0">Unidade</th>
                                                        <th class="bdwT-0">Qtd. Alunos Ativos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="fw-600">Fortaleza</td>
                                                        <td>0</td>
                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item col-md-6">
                            <div class="bd bgc-white">
                                <div class="layers">
                                    <div class="layer w-100 p-10">
                                        <h6 class="lh-1">
                                        <i class="c-brown ti-user"></i>
                                        Alunos Ativos Franquia</h6>
                                        <hr>
                                    
                                    </div>
                                    <div class="layer w-100">
                                        <div class="table-responsive p-20">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="bdwT-0">Unidade</th>
                                                        <th class="bdwT-0">Qtd. Alunos Ativos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="fw-600">Campinas</td>
                                                        <td>0</td>
                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
@endsection