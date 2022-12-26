<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico07';
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
                            <h2 class="Titulo">Expedientes Processuais</h2>
                            <hr>
                            <p>Os atos processuais são aqueles realizados no decorrer do processo. Resumidamente, são eles: </p>
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
                                            <strong>Citação: </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>é a comunicação, ao sindicado ou processado, de que está sendo acusado pelo Estado e que precisa apresentar defesa. Se o processo for uma sindicância investigativa, não há necessidade de citação, uma vez que não há parte adversa.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 01 -->
                                <!-- Accordion 02 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item02">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Intimação: </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>pode ser remetida ao sindicato / processado, a fim de que acompanhe a produção de provas no decorrer do processo, ou a testemunhas, peritos e outros especialistas convidados a depor. Se a comissão decidir, por exemplo, interrogar determinada testemunha, o sindicato/processado deverá ser intimado em tempo hábil a respeito de tal interrogatório, a fim de que possa exercer seus direitos de contraditório e ampla defesa na produção de tal prova. Vale ressaltar que, ao contrário do processo judicial, essas intimações não têm caráter compulsório, sendo facultado ao intimado o não comparecimento (a não ser em caso de servidor público, que tem dever funcional de comparecer);
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 02 -->
                                <!-- Accordion 03 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item03">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTree" aria-expanded="false" aria-controls="flush-collapseTree">
                                            <strong>Atas:</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p> todas as reuniões da comissão devem ser, obrigatoriamente, registradas em atas. A primeira ata - aquela que formaliza o início dos trabalhos da comissão - é chamada de ata de instalação.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 03 -->
                                <!-- Accordion 04 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item04">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                            <strong>Termos de depoimento:</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p> todas as testemunhas (ou mesmo os acusados) escutadas pela comissão devem, ao final de suas oitivas, assinar termo de depoimento lavrado por membro da comissão - preferencialmente o secretário - e assinado por todos os presentes. Uma via pertence à comissão, enquanto a outra, obrigatoriamente, deve ser entregue ao interrogado.
                                            </p>
                                        </div>
                                    </div>                       
                                </div>
                                <!-- Fim Accordion 04 -->
                                <!-- Accordion 05 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item05">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                            <strong>Solicitação de informações:</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>são os requerimentos de informações feitos a outras áreas ou instituições para sanar dúvidas referentes ao processo. Se internas, deverão ser feitas mediante comunicação interna (CI). Se externas, mediante ofício requerido pela comissão e assinado pela autoridade máxima do órgão.
                                            </p>
                                        </div>
                                    </div>                         
                                </div>
                                <!-- Fim Accordion 05 -->
                                <!-- Fim Accordion  -->
                            </div>
                            <br><br>
                            <!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>Lembre-se que as solicitações de informações, as citações e as intimações devem sempre estar acompanhadas de cópia da portaria de instauração.</p>
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
                                <a href="Topico06.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                                <a href="Topico08.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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