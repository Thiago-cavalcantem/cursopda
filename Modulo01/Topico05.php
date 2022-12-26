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
                            <h2 class="Titulo">Definição de Sindicância</h2>
                            <hr>
                            <p>As sindicâncias são procedimentos investigativos ou punitivos / acusatórios cujo rito processual é mais célere que o de um processo administrativo disciplinar (PAD) em sentido estrito. Assim, as sindicâncias são processos muito versáteis, podendo se adaptar a vários tipos de necessidade da Administração Pública, desde apurar a existência de eventuais ilícitos até sancionar ilícitos menos gravosos de forma mais rápida (embora mantendo as garantias processuais do sindicato). Devem, obrigatoriamente, ser instauradas mediante portaria.</p>
                            <p>O Estatuto dos Servidores Públicos Civis do Estado do Ceará, em seu artigo 209, define a sindicância como um procedimento administrativo com o objetivo de investigar possíveis irregularidades de maneira a verificar se houve ilícito administrativo. Esse procedimento necessariamente será aberto pela autoridade de maior hierarquia do órgão onde ocorreu o suposto ilícito, ou a quem seja delegado tal poder, necessariamente mediante portaria.</p>
                            <br>
                            <!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <div class="SaibaMaisTexto">
                                    <p>Há também indicação de sindicância em casos de apuração de aptidões para funcionários em período de estágio probatório, para fins de demissão ou exoneração. Nesse caso em específico, os prazos ficam reduzidos à metade. Assegurada ao indiciado ampla defesa, nos termos dos artigos estatutários. A contagem de tempo do período de estágio probatório ficará suspensa. </p>
                                </div>
                            </div>
                            <br>
                            <p><strong>Art. 209 - </strong> A sindicância é o procedimento sumário através do qual o Estado ou suas autarquias reúnem elementos informativos para determinar a verdade em torno de possíveis irregularidades que possam configurar, ou não, ilícitos administrativos, aberta pela autoridade de maior hierarquia, no órgão em que ocorreu a irregularidade, ressalvadas em qualquer caso, permitida a delegação de competência:</p>
                            <p  class="wow fadeInLeft" data-wow-delay="0.3s">I - do Governador, em qualquer caso;</p>
                            <p  class="wow fadeInLeft" data-wow-delay="0.6s">II - dos Secretários de Estado, dos dirigentes autárquicos e dos Presidentes da Assembléia Legislativa, Tribunal de Contas e do Conselho de Contas dos Municípios, em suas respectivas áreas funcionais.</p>
                            <p  class="wow fadeInLeft" data-wow-delay="0.9s">§ 1º - Abrir-se-á, também, sindicância para apuração das aptidões do funcionário, no estágio probatório, para fins de demissão ou exoneração, quando for o caso, assegurada ao indiciado ampla defesa, nos termos dos artigos estatutários que disciplinam o inquérito administrativo, reduzidos os prazos neles estabelecidos, à metade.</p>
                            <br>
                            <!-- Reflita -->
                            <div class="ReflitaCaixa">
                                <p class="ReflitaTitulo"> Reflita</p>
                                <div class="ReflitaTexto">
                                    <p><strong>Pergunta:</strong>  Meu Coordenador ou Orientador de Célula / chefe imediato podem instaurar uma sindicância?<br>
                                    <strong>Resposta:</strong>  Conforme o Estatuto dos Servidores Públicos do Estado do Ceará, apenas a autoridade máxima do órgão poderá instaurar procedimento sindicante ou um PAD. No caso da administração direta estadual, tal autoridade é o Secretário de Estado responsável pela Pasta. Contudo, graças ao instituto da delegação de competência, a autoridade máxima poderá delegar a outra pessoa, mediante publicação oficial (portaria) o poder de instaurar. Nesse caso, Coordenadores e Orientadores de Célula, bem como quaisquer outros servidores, só poderão instaurar sindicâncias e PADs com delegação da autoridade máxima.</p>
                                </div>
                            </div>
                            <br>
                            <p>Depreende-se do caput do artigo supramencionado que é imprescindível que a sindicância seja instaurada pela autoridade competente ou por alguém a quem tenha delegado, na forma da lei, esse poder. Quando falamos em competência, não nos referimos à capacidade técnica ou intelectual, mas à competência administrativa:</p>
                            <p>No direito público, autoridade competente é aquela que tem investidura legal. Ou seja, o ato administrativo praticado pelo agente público só tem validade se ele estiver devidamente autorizado juridicamente. A competência da autoridade administrativa para deflagrar a seara disciplinar deve estar prevista nos estatutos ou regimentos internos de cada órgão público. (SOUSA, 2022, p. 42)</p>
                            <p>Sindicâncias ou mesmo PADs instaurados por autoridade sem competência para tal serão considerados juridicamente nulos. Por isso, é necessário cuidado adicional quando da elaboração e publicação da portaria.</p>
                            <br>
                            <!-- Reflita -->
                            <div class="ReflitaCaixa">
                                <p class="ReflitaTitulo"> Reflita</p>
                                <div class="ReflitaTexto">
                                    <p><strong>Pergunta:</strong>  Em que casos deve ser instaurada uma sindicância na Administração Pública? <br>
                                    <strong>Resposta:</strong> A autoridade competente tem o poder-dever de instaurar sindicância sempre que houver suspeitas a respeito do cometimento de algum ilícito ou quando houver indícios fortes de materialidade e autoria de infração leve cometida por servidor público.</p>
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