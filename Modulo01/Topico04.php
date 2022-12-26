<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico04';
include('layout/header.php');
?>

<html>
<meta charset="utf-8">
<!-- PLUGIN DO FADE IN -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<body>
    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>

        <!--INÍCIO CONTEUDO PARTE 01-->
        <section id="pt01">
            <div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <!-- LINHA pt01 -->
                        <div class="col-md-1"></div>
                        <div class="col-md-10">


                            <!-- INICIO CONTEUDO -->

                            <!-- Título -->
                            <h2 class="Titulo">Definição de Processo Administrativo Disciplinar</h2>
                            <hr>

                            <p>Conforme vimos acima, o processo administrativo é um encadeamento ordenado de procedimentos e ações que têm por objetivo final realizar alguma das atividades típicas da Administração Pública.</p>
                            <p>O Processo Administrativo Disciplinar em sentido amplo nada mais é que um rito processual específico para averiguar a ocorrência ou sancionar possíveis ilícitos que tenham ocorrido no âmbito da Administração Pública.</p>
                            <p class="wow fadeInLeft" data-wow-delay="0.3s">O instrumento do processo administrativo disciplinar em sentido amplo será utilizado sempre que a Administração Pública tiver dúvidas em relação à ocorrência de algum fato ilícito ocorrido no âmbito de sua competência ou quando, já havendo indícios suficientes de materialidade e autoria do ilícito, quiser iniciar a persecução administrativa para sancionar o responsável. </p>
                            <p>O instrumento do processo administrativo disciplinar em sentido amplo será utilizado sempre que a Administração Pública tiver dúvidas em relação à ocorrência de algum fato ilícito ocorrido no âmbito de sua competência ou quando, já havendo indícios suficientes de materialidade e autoria do ilícito, quiser iniciar a persecução administrativa para sancionar o responsável. </p>
                            <br>
                            <!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>Por se tratar de processos que visam a investigar ou, em último caso, até mesmo a sancionar um servidor público, esses processos precisam seguir diretrizes mais rígidas que garantam à parte interessada todos os meios de defesa possíveis, a fim de evitar não apenas ações arbitrárias por parte do Estado, mas também sanções injustas. Falaremos mais sobre isso no módulo 2, que versa sobre os princípios processuais. </p>
                                </div>
                            </div>
                            <br>
                            <p>Por se tratar de processos que visam a investigar ou, em último caso, até mesmo a sancionar um servidor público, esses processos precisam seguir diretrizes mais rígidas que garantam à parte interessada todos os meios de defesa possíveis, a fim de evitar não apenas ações arbitrárias por parte do Estado, mas também sanções injustas. Falaremos mais sobre isso no módulo 2, que versa sobre os princípios processuais. </p>




                            <br><br>
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

                            <!-- FIM SCRIPT LIGHTBOX -->

                            <!-- Botões de navegação -->

                            <div class="text-center">
                                <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                                <a href="Topico05.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                            </div>

                            <!-- Fim Botões de navegação -->

                            <!-- FIM DIV col-md-10 -->
                        </div>
                        <div class="col-md-1"></div>
                    </div><!--  FIM ROW -->
                    <!--  FIM PAGE TITULO -->
                </div>
                <!-- FIM DIV CONTEINE  -->
            </div>
            <!--FIM SELECTION-->
        </section>





    </div> <!--  FIM DIV MAIN -->

    <!-- FOOTER -->
    <?php include('layout/footer.php') ?>

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

    <!-- BOTÃO BACK TO TOP -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>