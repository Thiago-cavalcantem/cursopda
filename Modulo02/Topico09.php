<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico09';
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
                            <h2 class="Titulo">Relatório Final</h2>
                            <hr>
                            <p>O relatório final é a peça que deve ser entregue obrigatoriamente pela comissão à autoridade instauradora ao fim do prazo legal previsto para a realização dos trabalhos. Mesmo que a sindicância ou o PAD sejam inconclusivos ou tenham por recomendação o arquivamento, a comissão estará obrigada a apresentar o produto de seu trabalho, sob pena de responsabilização.</p>
                            <br>
                            <!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>Vale lembrar ainda que nessa esfera de investigação não existe aplicação do princípio de insignificância. Qual seja, o princípio que entende que o ilícito não teve importância pelo fato de que não trouxe grande vantagem a quem cometeu o ilícito ou grande prejuízo ao erário.</p>
                                </div>
                            </div><br>
                            <p>Por fim, o processo disciplinar é regulado por prazos estabelecidos em lei. No caso da lei estadual, esta deve ser concluída em até 180 dias. (Art. 221 do Estatuto dos Servidores Públicos do Estado do Ceará)</p>
                            <p class="wow fadeInLeft" data-wow-delay="0.3s">Embora não haja uma estrutura fixa para os relatórios, é frequente dividi-los nos seguintes tópicos:</p>
                            <br>
                            <!-- Marcadores -->
                            <ul class="none">
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Introdução e histórico:</strong>  deve conter uma narrativa de como o processo surgiu e dos principais fatos até a instauração.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Prescrição:</strong>  versa sobre a existência ou não da prescrição quinquenal e, caso exista, informar quanto tempo falta para a prescrição. Se o processo já estiver prescrito, deve ser recomendado o arquivamento para fins de sanção administrativa.  </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Medidas preliminares:</strong> a comissão deverá discriminar todas as providências que adotou desde o início dos trabalhos (quais documentos pediu, quais entidades oficiou, quais testemunhas selecionou, etc).</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Instrução processual e provas coletadas:</strong> é o principal ponto do relatório. Aqui deverão estar descritas, detalhadamente, todas as provas que a comissão obteve. É recomendável elencar subtópicos para cada tipo de prova (documental, testemunhal, etc).</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Conclusão:</strong> aqui a comissão deverá apresentar parecer conclusivo ou inconclusivo em relação ao binômio materialidade e autoria. A conclusão deverá estar embasada nas provas colhidas.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Recomendações:</strong> São as sugestões que a comissão apresentará à autoridade instauradora. Falaremos mais sobre elas no próximo tópico.</li>
                                
                            </ul>
                            <!-- FIM Marcadores -->
                            <br>

                            <br><br><br>


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
                                <a href="Topico07.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                                <a href="Topico09.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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