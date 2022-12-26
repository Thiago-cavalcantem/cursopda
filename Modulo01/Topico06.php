<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico06';
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
                            <h2 class="Titulo">Tipo de Sindicância</h2>
                            <hr>
                            <p>O procedimento de sindicância pode ser classificado, de forma grosseira, entre meramente investigatório ou acusatório / contraditório. O primeiro visa a buscar informações relevantes para a Administração Pública, podendo ou não acarretar a recomendação de procedimento contraditório. O segundo se trata de devido processo legal com objetivo de apurar supostos ilícitos, podendo compor material necessário à instauração de Processo Administrativo, se for o caso. Vale lembrar que o devido processo legal supracitado é composto por ampla defesa, contraditório e da produção de todos os meios de provas admitidos em direito.</p>
                            <p>O <strong> art. 1º </strong>das Instruções e Orientações Normativas da Controladoria Geral da União nº 14/2018 trouxe o conceito de procedimentos correcionais, englobando os procedimentos disciplinares, referentes à apuração de irregularidades cometidas por servidores ou empregados públicos federais e os procedimentos de responsabilização de entes privados. Já os arts. 6º e 7º indicam quais procedimentos poderão ser utilizados no exercício da atividade correcional. Embora se trate de regramento federal, é interessante que saibamos a classificação - bastante didática - realizada pela CGU:</p>
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
                                            <strong>Art. 3 A </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>Art. 5º São procedimentos correcionais investigativos: <br>
                                            I - a investigação preliminar (IP);<br>
                                            II - a sindicância investigativa (SINVE); e <br>
                                            III - a sindicância patrimonial (SINPA). <br>
                                            Parágrafo único. Os órgãos e entidades do Poder Executivo federal poderão normatizar internamente procedimentos disciplinares de natureza investigativa, observada a Lei nº 9.784, de 29 de janeiro de 1999, e demais normas aplicáveis. <br>
                                            Art. 6° São procedimentos correcionais acusatórios: <br>
                                            I - a sindicância acusatória (SINAC); <br>
                                            II - o processo administrativo disciplinar (PAD); <br>
                                            III - o processo administrativo disciplinar sumário; <br>
                                            IV - a sindicância disciplinar para servidores temporários regidos pela Lei nº 8.745, de 9 de dezembro de 1993;<br>
                                            V - o procedimento disciplinar para empregados públicos regidos pela Lei nº 9.962, de 22 de fevereiro de 2000;<br>
                                            VI - o processo administrativo sancionador relativo aos empregados públicos das empresas públicas e sociedades de economia mista (PAS); e <br>
                                            VII - o processo administrativo de responsabilização (PAR).
                                            </p>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            <!-- Fim Accordion 01 -->
                            <br><br>
                            <p>Os procedimentos correcionais acima não estão todos previstos explicitamente no Estatuto dos Funcionários Públicos do Ceará, porém o Supremo Tribunal de Justiça - STJ em seu Compilado: Processo Administrativo Disciplinar, nº 154, esclarece que “A Lei n. 8.112/1990 pode ser aplicada de modo supletivo aos procedimentos administrativos disciplinares estaduais, nas hipóteses em que existam lacunas nas leis locais que regem os servidores públicos” (STJ, 2020). Ou seja, na hipótese de os estatutos estaduais ou municipais não especificarem procedimentos correcionais adequados, a legislação federal pode ser usada de forma subsidiária.</p>
                            <p>O Estatuto dos Servidores Públicos do Estado do Ceará prevê dois tipos de sindicância investigativa e a acusatória / contraditória. Ainda conforme o Art. 209 do estatuto:</p>
                            <br>
                            <!-- Início Accordion -->

                            <div class="accordion accordion-flush" id="AccordionFase02">
                                <center>
                                    <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </center><br>
                                <!-- Accordion 01 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item02">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetwo" aria-expanded="false" aria-controls="flush-collapsetwo">
                                            <strong>Art. 3 A </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapsetwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase02">
                                        <div class="accordion-body">
                                            <p>§ 4º - A sindicância precede o inquérito administrativo, quando for o caso, sendo-lhe anexada como peça informativa e preliminar. <br>
                                                § 5º - A sindicância será realizada no prazo máximo de 15 (quinze) dias, prorrogável por igual período, a pedido do sindicante, e a critério da autoridade que determinou a sua abertura. <br>
                                                § 6º - Havendo ostensividade ou indícios fortes de autoria do ilícito administrativo, o sindicante indiciará o funcionário, abrindo-lhe o prazo de 3 (três) dias para defesa prévia. A seguir, com o seu relatório, encaminhará o processo de sindicância à autoridade que determinou a sua abertura. <br>
                                                § 7º - O sindicante poderá ser assessorado por técnicos, de preferências pertencentes aos quadros funcionais, devendo todos os atos da sindicância serem reduzidos a termo por secretário designado pelo sindicante, dentre os funcionários do órgão a que pertencer. (CEARÁ, 1974, p. 45)

                                            </p>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            <!-- Fim Accordion 01 -->
                            <br><br><br>
                            <!-- Reflita -->
                            <div class="ReflitaCaixa">
                                <p class="ReflitaTitulo"> Reflita</p>
                                <div class="ReflitaTexto">
                                    <p><strong>Pergunta:</strong>  O secretário da comissão, conforme disposto no §7º, pode ser um terceirizado?<br>
                                    <strong> Resposta:</strong> O secretário da comissão poderá ser terceirizado, embora, preferencialmente, deva ser servidor. Porém, ainda que o secretário escolhido seja um terceirizado, deverá assinar termo de compromisso e de sigilo e confidencialidade. </p>
                                </div>
                            </div>
                            <br>
                            <p class="wow fadeInLeft" data-wow-delay="0.3s">Em resumo, a sindicância é procedimento administrativo com objetivo de meramente colher informações a respeito de uma ocorrência ou de apurar com objetivo de compor, sustentar, instaurar um PAD. Esses diferentes objetivos caracterizam ou tipificam a sindicância. De todo modo, sempre será procedimento para colher informações relevantes à Administração Pública e seus gestores. Caso nesse processo investigativo sejam encontradas provas de ilícitos, crimes e malfeitos contra a Administração Pública, aquelas deverão ser detalhadamente discriminadas em relatório, contendo provas e recomendações da comissão encarregada. </p>
                            <p>Por fim, vale lembrar que existem as sindicâncias acusatórias ou contraditórias. Particularmente, preferimos chamar esse tipo de procedimento de contraditório, já que o objetivo principal não é exatamente acusar ou sancionar um servidor, mas apenas esclarecer os fatos da maneira mais rígida possível, preservando os interesses da Administração Pública e os direitos e garantias fundamentais do servidor sindicado. A doutrina, contudo, se refere mais comumente a tais procedimentos como sindicâncias acusatórias. Independente do nome que se adote, são procedimentos mais céleres, utilizados para sancionar ilícitos administrativos cuja penalidade máxima não seja superior a trinta dias de suspensão.</p>
                            <p>Abaixo, segue um fluxograma dos procedimentos de sindicância investigativa:</p>
                            <br>
                             <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 01: </strong>Elaboração Mariana Oliveira do Rêgo</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong> </strong></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->
                            <br>
                            

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
                                <a href="Topico05.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                                <a href="Topico07.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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