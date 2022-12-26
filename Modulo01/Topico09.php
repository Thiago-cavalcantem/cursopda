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
                            <h2 class="Titulo">Improbidade Administrativa</h2>
                            <hr>
                            <p>A improbidade administrativa é todo ato que atente contra a higidez e a probidade do exercício administrativo. A lei de improbidade administrativa foi promulgada em 1992, mas sofreu consubstanciadas alterações em 2021 (Lei 14.230/2021).A nova redação define da seguinte forma os atos de improbidade:</p>
                            <p>Art. 1º O sistema de responsabilização por atos de improbidade administrativa tutelará a probidade na organização do Estado e no exercício de suas funções, como forma de assegurar a integridade do patrimônio público e social, nos termos desta Lei.</p>
                            <p>§ 1º Consideram-se atos de improbidade administrativa as condutas dolosas tipificadas nos arts. 9º, 10 e 11 desta Lei, ressalvados tipos previstos em leis especiais.</p>
                            <p>§ 2º Considera-se dolo a vontade livre e consciente de alcançar o resultado ilícito tipificado nos arts. 9º, 10 e 11 desta Lei, não bastando a voluntariedade do agente.</p>
                            <p>§ 3º O mero exercício da função ou desempenho de competências públicas, sem comprovação de ato doloso com fim ilícito, afasta a responsabilidade por ato de improbidade administrativa.</p>
                            <p>§ 4º Aplicam-se ao sistema da improbidade disciplinado nesta Lei os princípios constitucionais do direito administrativo sancionador.</p>
                            <p>§ 5º Os atos de improbidade violam a probidade na organização do Estado e no exercício de suas funções e a integridade do patrimônio público e social dos Poderes Executivo, Legislativo e Judiciário, bem como da administração direta e indireta, no âmbito da União, dos Estados, dos Municípios e do Distrito Federal.</p>
                            <p>§ 6º Estão sujeitos às sanções desta Lei os atos de improbidade praticados contra o patrimônio de entidade privada que receba subvenção, benefício ou incentivo, fiscal ou creditício, de entes públicos ou governamentais, previstos no § 5º deste artigo.</p>
                            <p>§ 7º Independentemente de integrar a administração indireta, estão sujeitos às sanções desta Lei os atos de improbidade praticados contra o patrimônio de entidade privada para cuja criação ou custeio o erário haja concorrido ou concorra no seu patrimônio ou receita atual, limitado o ressarcimento de prejuízos, nesse caso, à repercussão do ilícito sobre a contribuição dos cofres públicos.</p>
                            <p>§ 8º Não configura improbidade a ação ou omissão decorrente de divergência interpretativa da lei, baseada em jurisprudência, ainda que não pacificada, mesmo que não venha a ser posteriormente prevalecente nas decisões dos órgãos de controle ou dos tribunais do Poder Judiciário.</p><br>
                           <!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>Como podemos ver, as alterações legislativas trazem importantes alterações, como a exigência do dolo para que ocorra a incidência de improbidade administrativa, conforme deixam claro os parágrafos segundo e terceiro, mencionados acima. </p>
                                </div>
                            </div>
                            <br>
                            <p>Como podemos ver, as alterações legislativas trazem importantes alterações, como a exigência do dolo para que ocorra a incidência de improbidade administrativa, conforme deixam claro os parágrafos segundo e terceiro, mencionados acima. </p>
                            <p>Como podemos ver, as alterações legislativas trazem importantes alterações, como a exigência do dolo para que ocorra a incidência de improbidade administrativa, conforme deixam claro os parágrafos segundo e terceiro, mencionados acima. </p>
                            <p>Como podemos ver, as alterações legislativas trazem importantes alterações, como a exigência do dolo para que ocorra a incidência de improbidade administrativa, conforme deixam claro os parágrafos segundo e terceiro, mencionados acima. </p>
                            <br>
                            <!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <div class="SaibaMaisTexto">
                                    <p>Vale lembrar aos nossos cursistas que os atos de improbidade administrativa, quando cometidos, são puníveis com sanção civil, ou seja, estão fora do âmbito de atuação das autoridades administrativas. Ainda assim, se, no decurso de um procedimento disciplinar investigativo ou acusatório forem detectados indícios de irregularidade, é dever da autoridade competente remetê-los aos órgãos responsáveis (Ministério Público) por oferecimento de eventual ação civil pública de improbidade. Por fim, destaque-se que, ao contrário do que é muitas vezes difundido na imprensa, ações de improbidade não são ações penais e improbidade administrativa não é crime! </p>
                                </div>
                            </div>
                            <br>
                            <p>Parabéns! Você chegou ao final do Módulo 01 do curso Básico de Processo Administrativo Disciplinar (PAD) e Sindicância. Teste os seus conhecimentos respondendo a Avaliação do Módulo. <br>
                            Boa sorte e até o próximo Módulo!</p>



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