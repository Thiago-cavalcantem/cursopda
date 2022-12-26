<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico08';
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
                            <h2 class="Titulo">Legislação Básica Aplicável ao Processo Administrativo Disciplinar</h2>
                            <hr>
                            <p>Para que um servidor possa atuar com segurança no âmbito de comissões processantes, é preciso que tenha conhecimento de algumas legislações fundamentais, a fim de que possa não apenas conduzir seu trabalho com a maior correição possível, mas também para que possa detectar ilícitos de maneira eficiente e tenha capacidade de recomendar à autoridade instauradora os encaminhamentos necessários, se for o caso. No âmbito de um curso de 20h/a, não teremos condições de nos aprofundar sobre cada um desses dispositivos, mas deixamos ao nosso cursista as referências para que tenha sempre à mão para estudo e consulta:</p>
                            <br>
                            <!-- Início Accordion -->
                            <div class="accordion accordion-flush" id="AccordionFase01">
                                <center>
                                    <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </center><br>
                                <!-- Accordion 01 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Constituição da República Federativa do Brasil: </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>É o diploma legal mais importante do Brasil. Todas as leis, decretos, portarias e demais normas devem estar sujeitos aos ditames da Constituição Federal. Vale ressaltar a importância do Art. 5º, que versa sobre os direitos e garantias fundamentais, e o Art. 37, relacionado aos servidores públicos. De qualquer maneira，recomendamos ter uma boa noção de Direito Constitucional como um todo (a Escola de Gestão Pública frequentemente oferece cursos a respeito);</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 01 -->

                                <!-- Accordion 02 -->
                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item02">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Código Penal Brasileiro (CPB) </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>é o diploma legal que elenca as condutas passíveis de sanção penal. Para o âmbito administrativo, é importante se ater ao capítulo que versa sobre os crimes contra a administração pública (peculato, corrupção passiva, condescendência criminosa, entre outros). Também elenca as hipóteses excludentes de ilicitude; </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 02 -->
                                <!-- Accordion 03 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item03">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <strong>Código de Processo Penal (CPP)  </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>é o código que discrimina os passos a serem adotados na persecução penal. Subsidiariamente, os norteadores do CPP serão adotados no âmbito do processo administrativo disciplinar, principalmente no que diz respeito às garantias e direitos do sindicado / processado;</p>
                                        </div>
                                    </div>
                                </div>                            
                                <!-- Accordion 03 -->
                                <!-- Accordion 04 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item04">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                            <strong>Código de Processo Civil </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>é aplicado, subsidiariamente, aos processos administrativos;</p>
                                        </div>
                                    </div>
                                </div>                            
                                <!-- Accordion 04 -->
                                <!-- Accordion 05 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item05">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                            <strong>Lei do Processo Administrativo (Lei Federal 9.784/1999) </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>aplicada subsidiariamente ao processo administrativo estadual. Discrimina vários tópicos salutares, como os casos de impedimento e de suspeição, por exemplo;</p>
                                        </div>
                                    </div>
                                </div>                            
                                <!-- Accordion 05 -->
                                <!-- Accordion 06 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item06">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                            <strong>Estatuto dos Servidores Públicos do Estado do Ceará (Lei Estadual 9.826/74) </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>dispõe sobre os direitos e deveres os servidores públicos estaduais, bem como expõe as normas materiais e procedimentais referentes às sindicâncias e aos PADs.9</p>
                                        </div>
                                    </div>
                                </div>                            
                                <!-- Accordion 06 -->
                                <!-- Accordion 07 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item07">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                            <strong>Lei de Improbidade Administrativa - LIA (Lei Federal 8.429/92, com as alterações da Lei Federal 14.230/21)</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="Item07" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>Lei de Improbidade Administrativa - LIA (Lei Federal 8.429/92, com as alterações da Lei Federal 14.230/21)</p>
                                        </div>
                                    </div>
                                </div>                            
                                <!-- Accordion 07 -->
                                <!-- Accordion 08 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item08">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                            <strong>Lei Federal 8.666/93</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="Item08" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>lei de licitações e contratos. Ainda que, a partir de primeiro de abril de 2023, venha a ser totalmente substituída pela Lei 14.133/2021, continuará regendo os instrumentos celebrados com base nela. Por isso, é importante que o servidor tenha domínio para detectar eventuais irregularidades referentes a licitações e contratos;</p>
                                        </div>
                                    </div>
                                </div>                            
                                <!-- Accordion 08 -->
                                <!-- Accordion 09 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item09">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNeni" aria-expanded="false" aria-controls="flush-collapseNeni">
                                            <strong>Nova Lei de Licitações e Contratos (Lei Federal 14.133/2021)</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseNeni" class="accordion-collapse collapse" aria-labelledby="Item09" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>promulgada em 2021 e, atualmente, em vacatio legis que torna sua aplicação opcional. Regula atos referentes a licitações e contratos e realiza alterações nos dispositivos de crimes licitatórios. </p>
                                        </div>
                                    </div>
                                </div>                            
                                <!-- Accordion 09 -->
                                <!-- FIM Accordion -->                                
                            </div>
                            <br><br>
                            <p>Vale destacar que esses não são os únicos regulamentos aos quais o servidor deverá se reportar caso venha a compor uma comissão sindicante. A depender do assunto do processo, será necessário que se debruce sobre normativos específicos relacionados ao tema, incluindo Portarias, Boletins Internos, etc.</p>
                            <br>
                            <!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <div class="SaibaMaisTexto">
                                    <p>É importante que um servidor, sempre que ingressar em uma comissão, faça a avaliação do assunto para se remeter à legislação pertinente. </p>
                                </div>
                            </div>    



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