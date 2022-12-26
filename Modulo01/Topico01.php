<!--<php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>-->

<?php
$page = 'Topico01';
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
                            <h2 class="Titulo">Introdução</h2>
                            <hr>                            

                            <p>Nosso curso tem como objetivo oferecer a você, cursista, uma formação básica a respeito dos institutos do Processo Administrativo Disciplinar (PAD) e da Sindicância. Esses temas são, geralmente, relegados a segundo ou terceiro plano pelos servidores por vários motivos. O primeiro deles é que não se trata de temática de abordagem cotidiana nas repartições públicas (à exceção de unidades específicas, como corregedorias), o que leva muitos a acreditarem que, após a aprovação no concurso público, não precisarão se ater a essa área de estudo. O segundo é que muitos consideram que se trata de área exclusiva do campo jurídico, de forma que profissionais com outras formações não teriam necessidade de aprofundar suas habilidades na matéria. Por fim, a maior resistência de todas talvez seja a antipatia causada pelo tema. Em um sistema legal ainda permeado com ranço punitivista, o PAD e a sindicância não raro são vistos como ferramentas persecutórias ou instrumentos para punir indevidamente servidores, o que torna a ideia de compor uma comissão processante bastante antipática.</p>

                            
                            <p>De antemão, caro cursista, gostaríamos de tranquilizá-lo e afirmar, com segurança, que os procedimentos de PAD e sindicância não são operáveis apenas por profissionais da área jurídica. Ao contrário, um profissional de qualquer área de formação – desde que tenha um entendimento satisfatório da legislação que rege a matéria – é capaz de conduzir com higidez e correção os trabalhos referentes a uma comissão processante. Nossa intenção, com este curso, é justamente fazer com que vocês adquiram essa base e possam conduzir a contento eventuais trabalhos futuros em comissões processantes ou mesmo atuando na defesa de servidores acusados do cometimento de ilícitos administrativos.</p>

                            <p>Também pedimos licença para tentar desfazer a eventual noção corrompida que vocês possam ter a respeito do PAD e da sindicância. Esses tipos de processos são ferramentas próprias do Direito Administrativo Sancionador e, como qualquer ferramenta, podem ser utilizados para fins edificantes ou para propósitos escusos. Nossa intenção é ajudar na formação de servidores que utilizem o PAD e a sindicância não como ferramentas de perseguição, mas como instrumentos mantenedores das garantias não apenas da Administração Pública, mas também do servidor acusado.  </p><br>

                            <!-- Importante -->
                            <div class="ImportanteCaixa">
                                <p class="ImportanteTitulo"> Importante</p>
                                <div class="ImportanteTexto">
                                    <p>Lembrem-se sempre que a finalidade última do PAD e da sindicância não é encontrar e punir um culpado, mas apurar os fatos e garantir que a lei – incluindo os direitos e garantias fundamentais do acusado – seja cumprida. </p>
                                </div>
                            </div><br>

                            <p>Por fim, deixamos aqui a ressalva para que os processos administrativos disciplinares, assim como qualquer assunto afeto ao desempenho das funções públicas, sejam abordados com técnica e impessoalidade. Os servidores que compõem uma comissão processante e conduzem suas atividades de acordo com os fundamentos legais não devem ser tratados como inimigos, desafetos ou carrascos autoritários: como quaisquer outros servidores, eles estão ali apenas desempenhando uma função para a qual foram designados. Ao mesmo tempo, é bom destacar que o servidor acusado deve ser, sempre, tratado com o máximo respeito e cortesia pela comissão, independentemente da infração da qual esteja sendo acusado. O que está sendo avaliado é uma possível conduta ilícita, e não a simpatia ou antipatia que se possa nutrir pelo acusado. Da mesma forma, não custa repetir que quaisquer julgamentos morais que possam ser nutridos pelo servidor processado devem ficar completamente fora do processo. A comissão processante deverá – sob pena de ser responsabilizada ou de ter seu trabalho invalidado – elaborar pareceres e conclusões apenas com elementos informativos e provas acostadas aos autos do processo.</p>
                            <p>Agora, com todos esses preconceitos derrubados, daremos início ao nosso conteúdo.</p>

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
                                <a href="index.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                                <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                            </div>

                            <!-- Fim Botões de navegação -->


                        </div> <!-- FIM DIV col-md-10 -->
                        <div class="col-md-1"></div>
                    </div><!--  FIM ROW -->
                </div><!--  FIM PAGE TITULO -->


            </div> <!-- FIM DIV CONTEINE  -->

        </section>
        <!--FIM SELECTION-->





    </div> <!--  FIM DIV MAIN -->

    <!-- FOOTER -->
    <?php include('layout/footer.php') ?>

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

    <!-- BOTÃO BACK TO TOP -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>