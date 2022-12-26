    <!-- PLUGIN DO FADE IN -->

    <style>
        .MenuTopico {
            color: #274F23 !important;
            font-weight: bold !important;
        }

        #menuNumero {
            color: #274F23;
            font-weight: bold !important;
            font-size: 1.2rem;
            padding-right: 0.3rem;
            margin-left: 0;
            margin-right: 0.4rem;
            font-family: "Raleway";
            right: 0.8rem;
            margin-top: -0.23rem;
        }

        .ativo {
            background-color: #e1ebe3;
        }
    </style>

    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active ps">
                <div class="m-4 mx-auto text-center">
                    <!-- <a href="index.php">
                    <img class="img-fluid" src="https://atilasilvalima.a2hosted.com/projects/EGPCE/Cedis/cdn/imagens/egpce.png" alt="Logo EGPCE">
                    </a> -->
                    <img class="img-fluid img-responsive" src="https://www.egp.ce.gov.br/wp-content/uploads/sites/8/2021/06/logo-egpce-250x170-1.png" height="140" width="140" alt="Logo EGPCE">
                </div>
                <div class="sidebar-menu">

                    <ul class="menu ms-3">

                        <li class="sidebar-item">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="index.php" class="MenuTopico sidebar-link <?php if($page=='index'){echo'ativo';}?>"><span id="menuNumero"> </span>Apresentação </a>
                            </div>
                        </li>

                        <li class="sidebar-item ">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Topico01.php" class="MenuTopico sidebar-link <?php if($page=='Topico01'){echo 'ativo';}?>">
                                    <div id="menuNumero">01 </div>Introdução
                                </a>

                                
                            </div>
                        </li>
                        <li class="sidebar-item ">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Topico02.php" class="MenuTopico sidebar-link <?php if($page=='Topico02'){echo 'ativo';}?>">
                                    <div id="menuNumero">02 </div>Noções de Direito Administrativo
                                </a>

                                
                            </div>
                        </li>
                        <li class="sidebar-item ">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Topico03.php" class="MenuTopico sidebar-link <?php if($page=='Topico03'){echo 'ativo';}?>">
                                    <div id="menuNumero">03 </div>Definição de Processo Administrativo
                                </a>

                                
                            </div>
                        </li>
                        <li class="sidebar-item ">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Topico04.php" class="MenuTopico sidebar-link <?php if($page=='Topico04'){echo 'ativo';}?>">
                                    <div id="menuNumero">04 </div>Definição de Processo Administrativo Disciplinar  
                                </a>

                                
                            </div>
                        </li>
                        <li class="sidebar-item ">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Topico05.php" class="MenuTopico sidebar-link <?php if($page=='Topico05'){echo 'ativo';}?>">
                                    <div id="menuNumero">05 </div>Definição de Sindicância
                                </a>                               

                                
                            </div>
                        </li>

                        <li class="sidebar-item ">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Topico06.php" class="MenuTopico sidebar-link <?php if($page=='Topico06'){echo 'ativo';}?>">
                                    <div id="menuNumero">06 </div>Tipo de Sindicância
                                </a>
                                
                            </div>
                        </li>
                        <li class="sidebar-item sidebar-item7 ">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Topico07.php" class="MenuTopico sidebar-link <?php if($page=='Topico07'){echo 'ativo';}?>">
                                    <div id="menuNumero">07 </div>Definição de Processo Administrativo Disciplinar em sentido estrito
                                </a>
                                <ul class="sublinks">
                                    <li><a href="#top7-one">7.1 Razões para Manter Estoques e quais os Tipos de Estoque</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-item ">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Topico08.php" class="MenuTopico sidebar-link <?php if($page=='Topico08'){echo 'ativo';}?>">
                                    <div id="menuNumero">08 </div>Legislação básica aplicável ao Processo Administrativo Disciplinar
                                </a>
                                
                            </div>
                        </li>

                        <li class="sidebar-item ">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Topico09.php" class="MenuTopico sidebar-link <?php if($page=='Topico09'){echo 'ativo';}?>">
                                    <div id="menuNumero">09 </div>Improbidade Administrativa
                                </a>
                                
                            </div>
                        </li>                      
                        
                        <li class="sidebar-item">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Referencias.php" class="MenuTopico sidebar-link <?php if($page=='Referencias'){echo 'ativo';}?>">Referências
                                </a>             
                            </div>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
    
    </div>
    <!-- SCRIPT - JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('ul li a').click(function() {
                $('li a').removeClass("ativo");
                $(this).addClass("ativo");
            });
        });
    </script>
