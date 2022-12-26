<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03';
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
                            <h2 class="Titulo">Instauração do Processo Disciplinar (LATO SENSU)</h2>
                            <hr>

                            <P>Os procedimentos deverão ser, obrigatoriamente, instaurados com a devida justificativa legal e mediante publicação de portaria, na qual deverá constar, obrigatoriamente:</P>
                            <!-- Marcadores -->
                            <ul class="none">
                                
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-check-circle CorVerdeClaroEstado"></i>Nome da autoridade instauradora; ;</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Cargo da autoridade instauradora;</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Dispositivo legal que autoriza a autoridade a instaurar;</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Nome do servidor acusado (se for o caso de procedimento contraditório);</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Processos que deram origem ao procedimento;</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Composição da comissão, incluindo o secretário, se for o caso;</li>
                                <li class="wow fadeInLeft" data-wow-delay="2.3s"><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Poderes da comissão;</li>
                                <li class="wow fadeInLeft" data-wow-delay="2.6s"><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Prazos da comissão.</li>                                
                            </ul><br>
                            <p>Vejam, abaixo, exemplo de portaria de instauração de sindicância investigativa:</p>
                            <p><strong>PORTARIA NºXXX/2022 -</strong>  O SECRETÁRIO DA SECRETARIA X, no uso das atribuições legais conferidas pelo Art. 93, inciso III da Constituição Estadual e pelo Art. 209, inciso II, da Lei Estadual 9.826/74 (Estatuto dos Servidores Públicos do Estado do Ceará) RESOLVE instaurar sindicância para apurar possíveis irregularidades relatadas no escopo dos processos de número XXXXX. Determina, ainda, que a Comissão Sindicante seja composta pelos SERVIDORES FULANO 1 (Matrícula XXX), FULANO 2 (Matrícula XXXX) e FULANO 3 (Matrícula XXX), sob presidência do primeiro e tendo por Secretário o servidor FULANO 4 (Matrícula XXX), todos em regime de dedicação exclusiva até a data da entrega do relatório final. Os trabalhos deverão ser concluídos no prazo máximo de 15 dias, prorrogáveis por igual período a pedido da Comissão e com a anuência do Secretário, conforme disciplina o Art. 209, inciso II, § 5º da Lei 9.826/74. Fica a Comissão desde logo autorizada a emitir notificações, tomar depoimentos, solicitar documentos, pedir informações e praticar todos os atos necessários ao desempenho de suas atribuições legais. Esta Portaria entra em vigor na data de sua publicação.</p>
                            <p>SECRETÁRIO DA SECRETARIA X, em Fortaleza, 31 de dezembro de 2022. <br>FULANO 5, SECRETÁRIO DA SECRETARIA XXXX</p>
                            <p>Abaixo, exemplo de instauração de portaria de instauração de procedimento contraditório:</p>
                            <p><strong>PORTARIA NºXXX/2022 -</strong> O SECRETÁRIO DA SECRETARIA X, no uso das atribuições legais conferidas pelo Art. 93, inciso III da Constituição Estadual e pelo Art. 209, inciso II, da Lei Estadual 9.826/74 (Estatuto dos Servidores Públicos do Estado do Ceará) RESOLVE instaurar sindicância para apurar possíveis irregularidades cometidas pelo servidor BELTRANO relatadas no escopo dos processos de número XXXXX. Determina, ainda, que a Comissão Sindicante seja composta pelos SERVIDORES FULANO 1 (Matrícula XXX), FULANO 2 (Matrícula XXXX) e FULANO 3 (Matrícula XXX), sob presidência do primeiro e tendo por Secretário o servidor FULANO 4 (Matrícula XXX), todos em regime de dedicação exclusiva até a data da entrega do relatório final. Os trabalhos deverão ser concluídos no prazo máximo de 15 dias, prorrogáveis por igual período a pedido da Comissão e com a anuência do Secretário, conforme disciplina o Art. 209, inciso II, § 5º da Lei 9.826/74. Fica a Comissão desde logo autorizada a emitir notificações, tomar depoimentos, solicitar documentos, pedir informações e praticar todos os atos necessários ao desempenho de suas atribuições legais. Esta Portaria entra em vigor na data de sua publicação. <br>
                            SECRETÁRIO DA SECRETARIA X, em Fortaleza, 31 de dezembro de 2022. <br>FULANO 5, SECRETÁRIO DA SECRETARIA XXXX</p>
                            <br>
                            <!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>Os procedimentos disciplinares são sigilosos, ou seja, apenas têm acesso a ele as partes envolvidas. Caso seja negado ao sindicado/processado acesso aos autos, o processo ficará maculado, gerando nulidade por violação ao contraditório e à ampla defesa.</p>
                                </div>
                            </div>
                            <br>










                            
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
                                <a href="Topico04.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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