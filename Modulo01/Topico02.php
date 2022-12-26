<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02';
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
                            <h2 class="Titulo">Noções de Direito Administrativo</h2>
                            <hr>

                            <p>Noções de Direito Administrativo</p>
                            
                            <p>Desde os primórdios da humanidade, os humanos, para se organizarem em sociedade, se regulam por conjuntos de normas – escritas ou não – derivadas da estrutura social vigente. Passamos a chamar esse aglomerado de normas e suas ferramentas de interpretação e aplicação de Direito.</p>

                            <p>Uma das principais divisões didáticas do Direito data do Direito Romano, que tinha por costume dividir a área em Direito Público e Direito Privado. Em um pequeno resumo, o Direito Público trataria da relação entre o Estado e outros atores, enquanto o Direito Privado trataria da relação entre particulares. Essa divisão é mantida até hoje. Vejamos, esquematicamente:</p>
                            <br>
                            <!-- duas tabelas na mesma linha-->
                            <div class="row">
                                <div class="col-md-6 col-sm-12">

                                    <p><strong>DIREITO PÚBLICO</strong> </p>

                                    <table class="table table-bordered border-success">
                                        <tbody>
                                            <tr>
                                                <td colspan="4">Direito Constitucional</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">Direito Administrativo</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">Direito Processual Civil</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">Direito Penal</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">Direito Penal</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">Direito Penal</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">Direito Penal</td>
                                            </tr>

                                        </tbody>
                                    </table><br>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <p><strong>DIREITO PRIVADO</strong> </p>

                                    <table class="table table-bordered border-success">
                                        <tbody>
                                            <tr>
                                                <td colspan="4">Direito Civil</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">Direito Empresarial</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">Direito do Trabalho</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">Direito Agrário</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">Direito do Consumidor</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--Fim  Reducao de Coluna -->
                            <br>
                            <p>Cada sistema jurídico está estritamente vinculado a um modelo de Estado. O modelo de Estado brasileiro atual – bem como de nosso sistema jurídico vigente – foi (re)fundado por meio da Constituição da República Federativa do Brasil (CRFB) de 1988. Dessa forma, temos um sistema jurídico uno e subordinado à Constituição, ou seja: nenhuma lei ou norma infraconstitucional pode contrariar os mandamentos da Constituição. Mais que isso, não pode ser dada a nenhum normativo legal uma interpretação que seja contrária aos ditames constitucionais. Essa recomendação se aplica a todos os ramos do Direito, mas especialmente ao Direito Administrativo.</p>
                            <p class="wow fadeInLeft" data-wow-delay="0.3s">O Direito Administrativo surge como tal junto com os Estados-Nação e suas constituições. O regime anterior pode ser definido por monarquias absolutistas com os poderes centrados na figura do monarca. Com a Teoria da separação dos poderes proposta por Montesquieu, o Estado desenvolve normas próprias para regular seus poderes e a relação com a sociedade. </p>
                            <p>Daí surgem princípios e normas para a atuação do Estado e o Direito Administrativo se torna disciplina independente. Se antes esse campo jurídico se via atravessado por matérias de Direito Privado, agora passa a adotar normas próprias para resolver eventuais conflitos específicos entre o Estado e os administrados.</p>
                            <p>Carvalho Filho resume o conceito '‘como sendo o conjunto de normas e princípios que, visando sempre interesse público, regem as relações jurídicas entre as pessoas e órgãos do Estado e entre as coletividades a quem deve servir’' (Carvalho Filho, p. 8, 2019, 3ª Ed.).</p>
                            <p>Ainda sobre Direito Administrativo, Diez apud Carvalho Filho afirma que ele tem três características principais, quais sejam: constitui um direito novo já que trata de disciplina com sistematização científica recente; é um direito mutável porque ainda se encontra em transformação e por último é um direito em formação, até o momento, por não ter alcançado seus limites.</p>
                            <p>A relação de maior proximidade do Direito Administrativo se dá com o Direito Constitucional, pois é nesse que estão contidos seus princípios norteadores. É na Constituição que se encontram os princípios da Administração Pública, das normas sobre os servidores públicos e as competências do poder executivo. São mencionados ainda os institutos de desapropriação, das concessões e permissões de servidores públicos, dos contratos administrativos e licitações e da responsabilidade extracontratual do Estado.</p>
                            

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
                                <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                                <a href="Topico03.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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