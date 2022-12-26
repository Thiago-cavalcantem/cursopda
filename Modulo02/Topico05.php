<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico05';
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
                            <h2 class="Titulo">Os Atores Processuais</h2>
                            <hr>
                            <!-- Marcadores -->
                            <ol class="1">
                                
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"></i> <strong> Autoridade instauradora e julgadora:</strong>é aquela autoridade responsável por iniciar o processo e por julgar os encaminhamentos e sanções adequados ao fim do procedimento. Poderá acatar ou divergir das recomendações da comissão, mas sempre justificando seus posicionamentos de acordo com os elementos probatórios apresentados e conforme a legislação vigente. A autoridade instauradora não pode realizar seu julgamento contrariando prova presente nos autos.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s"></i> <strong> Comissão processante:</strong></li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s"></i> <strong> tem como objetivo instruir o processo (produzir provas) e elaborar relatório final contendo todo o material produzido e as recomendações da comissão. As recomendações não são impositivas, cabendo à autoridade instauradora/julgadora decidir se acata ou não o que consta do relatório. O dever da comissão é trabalhar para que a legalidade seja devidamente aplicada, e não para sancionar o servidor a qualquer custo. Uma comissão competente e ética tem por dever, inclusive, recomendar arquivamento de processos nos quais não há provas suficientes para sancionar um servidor.</strong></li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s"></i> <strong>Sindicado / acusado:</strong> é o servidor acusado de ter cometido eventual ilícito administrativo e a quem se está conferindo o direito de se defender e de produzir provas em seu favor. Deve ser tratado com urbanidade e ter assegurada sua presunção de inocência.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s"></i> <strong>Advogado:</strong> é o profissional responsável pela defesa técnica do servidor acusado. Tem direito a ter acesso a todos os elementos dos autos, a apresentar questionamentos, pedir produção de provas, acompanhar os depoimentos e realizar os demais atos necessários para a efetiva defesa de seu cliente. Deverá ser constituído mediante procuração. Vale frisar que, segundo a Súmula Vinculante 5 do STF, publicada em 2008, a ausência de defesa técnica feita por advogado no processo administrativo disciplinar não ofende a Constituição.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.9s"></i> <strong>Testemunhas:</strong> são pessoas que presenciaram os supostos ilícitos ou que podem oferecer informações esclarecedoras para as comissões. Deverão prestar compromisso de dizer a verdade nas formas da lei. A oitiva de testemunhas poderá ser solicitada tanto pela comissão quanto pela defesa do servidor acusado.</li>
                                <li class="wow fadeInLeft" data-wow-delay="2.3s"></i> <strong>Especialista Técnico:</strong> é alguém não diretamente relacionado ao processo, mas que tem expertise em uma área referente ao que está sendo examinado e, por esse motivo, está em condições de municiar a comissão com dados técnicos relevantes. Exemplo: uma determinada comissão foi instaurada para apurar possíveis ilícitos funcionais cometidos por outra comissão de processo administrativo disciplinar. A comissão, então, decide chamar o servidor Alfa, membro de uma prestigiada corregedoria, para sanar dúvidas técnicas referentes a processos disciplinares. Nesse caso, o servidor Alfa seria um especialista técnico.</li>                          
                            </ol>
                            <!-- FIM Marcadores -->
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
                                <a href="Topico04.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                                <a href="Topico06.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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