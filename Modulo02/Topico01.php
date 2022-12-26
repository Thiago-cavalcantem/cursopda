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
                            <h2 class="Titulo">Hipóteses de Instauraação do Procedimento Administrativo Disciplinar</h2>
                            <hr>                            

                            <p>Se você finalizou com sucesso o módulo 1 de nosso curso, certamente deve ter aprendido que a Administração Pública tem normas próprias de funcionamento, baseadas, majoritariamente, no Direito Administrativo. Também deve lembrar que essas normas têm o condão de permitir à Administração sancione legalmente todos aqueles submetidos diretamente a seus regramentos. Por fim, deve-se definir e diferenciar os processos de sindicância investigativa, sindicância punitiva e processo administrativo disciplinar propriamente dito (PAD). Se você ainda tem dúvida em algum desses assuntos, recomendamos ler novamente os conteúdos do módulo anterior.</p>                            
                            <p>Passemos, agora, a falar das hipóteses de instauração de cada um desses processos. Comecemos pela sindicância investigativa.</p>

                            <p class="wow fadeInLeft" data-wow-delay="0.3s">Conforme vimos anteriormente, a sindicância investigativa tem caráter inquisitorial (não contempla contraditório e ampla defesa) e é instaurada justamente quando há dúvidas quanto à ocorrência de algum ilícito ou quando não há indícios suficientes de autoria de algum ilícito materialmente provável. Em linguagem simples, instaura-se esse procedimento quando não se sabe exatamente o quê foi feito de errado ou quem cometeu um ato irregular. Por não ter como consequência direta a sanção de alguém e objetivar, principalmente, a coleta de informações, a sindicância investigativa pode ser instaurada inclusive com base em denúncia anônima. Assim como os demais processos disciplinares, também pode ser instaurada de ofício ou por provocação de terceiros - incluindo outros órgãos públicos.  </p>
                            <p>Ainda assim, a instauração indiscriminada de sindicâncias investigativas deve ser evitada. Antes de optar pela instauração desse tipo de procedimento, por exemplo, a autoridade competente pode solicitar, mediante meios simples como uma comunicação interna, a coleta de documentos ou informações já disponíveis para que, daí, possa avaliar por si só a necessidade de instauração de procedimento mais complexo.</p>
                            <br>
                            <!-- Importante -->
                            <div class="ImportanteCaixa">
                                <p class="ImportanteTitulo"> Importante</p>
                                <div class="ImportanteTexto">
                                    <p>A sindicância contraditória ou punitiva, por sua vez, deverá ser instaurada sempre que houver indícios suficientes de materialidade e de autoria de um ilícito administrativo cuja sanção máxima seja suspensão de até 30 dias. Nesse caso, será oferecida ao servidor toda a oportunidade de defesa que a lei prevê para que negue a existência, a irregularidade ou a autoria do ato a ele imputado. Na administração direta do Ceará, são instruídos nos próprios órgãos.</p>
                                </div>
                            </div><br>
                            <p>O processo administrativo disciplinar (PAD) será instaurado sempre que houver indícios suficientes de materialidade e autoria de ilícito administrativo cuja sanção seja maior que suspensão de 30 dias, incluindo aqui a sanção de demissão. Na administração direta do Ceará, são instruídos pela Procuradoria de Processo Administrativo Disciplinar da Procuradoria Geral do Estado (PGE), conforme disciplina a Lei Orgânica da Procuradoria Geral do Estado (Lei Complementar Estadual 58, de 2006).
                            </p><br>
                            <!-- Reflita -->
                            <div class="ReflitaCaixa">
                                <p class="ReflitaTitulo"> Reflita</p>
                                <div class="ReflitaTexto">
                                    <p><strong>Pergunta:</strong> Um suposto ato ilícito foi cometido por um terceirizado. A Administração pode instaurar uma sindicância nesse caso? <br>
                                    Resposta: Sim. A Administração não pode, como vimos, sancionar o terceirizado, já que ele está vinculado à empresa que o contratou, e não ao Estado. Contudo, o Estado tem o dever de apurar quaisquer ilícitos que ocorram em área de sua competência, para, se for o caso, encaminhar as informações colhidas às autoridades competentes. Lembrem-se de que os ilícitos também podem ter repercussões nas esferas civil e penal, nas quais um terceirizado não está isento de sanções.</p>
                                </div>
                            </div>
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