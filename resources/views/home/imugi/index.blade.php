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
                                                <div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-10 pY-15 bgc-green-50 c-green-500" style=font-size:20pt;>
                                                 {{ $total_alunosImugi }}
                                                </span></div>
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
                                                <div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-10 pY-15 bgc-blue-50 c-blue-500" style=font-size:20pt;>
                                                {{$alunosAtivosProprias}}
                                                </span></div>
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
                                                <div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-10 pY-15 bgc-purple-50 c-purple-500" style=font-size:20pt;>
                                                {{$alunosAtivosFranquias}}
                                                </span></div>
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
                                            <table class="table" id="ativos_imugi">
                                                <thead>
                                                    <tr>
                                                        <th class="bdwT-0">Unidade</th>
                                                        <th class="bdwT-0">Qtd. Alunos Ativos</th>
                                                    </tr>
                                                </thead>
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
                                            <table class="table" id="ativos_imugi_franquia">
                                                <thead>
                                                    <tr>
                                                        <th class="bdwT-0">Unidade</th>
                                                        <th class="bdwT-0">Qtd. Alunos Ativos</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>