<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
// HEADER
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->
        <div class="main-content container-fluid Texto">
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10">

                    <!--CONTEUDO-->
                    <h2 class="Titulo"> Apresentação</h2>
                    <hr>

                    <br>
                    <p> Prezados cursistas, </p>
                    <p>Sejam todos bem-vindos ao nosso curso Básico de Processo Administrativo Disciplinar (PAD) e Sindicância. O nosso objetivo, com este curso, é dar aos servidores públicos, aos terceirizados que atuam na Administração Pública e também à sociedade, responsável por fazer o controle social dos serviços públicos prestados pelo Estado, uma base abrangente a respeito dos procedimentos referentes ao PAD e às sindicâncias. Trata-se, portanto, de um curso introdutório cujo objetivo é fornecer formação básica a quem tem pouca ou nenhuma informação sobre o assunto.</p>
                    <p>Sejam todos bem-vindos ao nosso curso Básico de Processo Administrativo Disciplinar (PAD) e Sindicância. O nosso objetivo, com este curso, é dar aos servidores públicos, aos terceirizados que atuam na Administração Pública e também à sociedade, responsável por fazer o controle social dos serviços públicos prestados pelo Estado, uma base abrangente a respeito dos procedimentos referentes ao PAD e às sindicâncias. Trata-se, portanto, de um curso introdutório cujo objetivo é fornecer formação básica a quem tem pouca ou nenhuma informação sobre o assunto.</p>
                    <p>Este curso foi montado com uma linguagem simples e direta, para que, mesmo na modalidade à distância, nossos cursistas possam ter uma experiência o mais próxima possível da sala de aula tradicional.</p>
                    <p>Esperamos que gostem do conteúdo e que, mais ainda, possam utilizá-lo em suas atividades cotidianas. </p>
                    <br>

                    

                    <!-- SCRIPT INTERAÇAO COM ALUNO-->
                    <ul class="none ">
                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i></i>
                            <h4>
                            <p>
                            Desejamos que você tenha uma experiência enriquecedora para o aprimoramento de seus conhecimentos.
                        <strong> Iniciaremos o Módulo I.
                            Bons estudos!</strong> 
                            </p>
                            </h4>
                        </li>
                    </ul>
                    <!-- FIM SCRIPT INTERAÇAO COM ALUNO-->


                    <!-- SCRIPT LIGHTBOX -->
                    <script>
                        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                            event.preventDefault();
                            $(this).ekkoLightbox();
                        });

                        $('#myModal').on('shown.bs.modal', function() {
                            $('#myInput').trigger('focus')
                        })
                    </script>
                    <!--  FIM SCRIPT LIGHTBOX -->
                    <!-- Botões de navegação -->
                    <div class="text-center">

                        <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                    </div>
                    <!--  Fim Botões de navegação -->

                    <!-- FIM DIV col-md-10 -->
                </div>
                <div class="col-md-1"></div>
                <!--  FIM DIV ROW -->
            </div>
            <!-- FIM DIV CONTEINER  -->
        </div>
        <!-- FIM DIV MAIN  -->
    </div>

    <!-- FOOTER -->
    <?php include('layout/footer.php') ?>

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>