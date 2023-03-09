<?php
/*
Template Name: 2.0 template
*/
?>

<?php get_header(); ?>
<?php include('page_components/links.php') ?>
<?php include_once('page_components/menu.php'); ?>

<div class="wrapper doispntozero container">
    <div class="row" style="position: relative">
        <div class="col-12">
            <img class="sobre__img_top" src="<?= get_template_directory_uri(); ?>/assets/img/top20.png" alt="">
        </div>
        <div class="gradien">
            <div class="col-xl-7 col-lg-7 col-md-9 col-sm-12 col-12">
                <div class="text1">
                    <h1 class="blue"><?= __('OS CURSOS </br> DO ATELIÊ 2.0 ', 'atelie'); ?></h1>
                    <div class="text-2point">
                        <p><?= __('A ambição da nossa plataforma é permitir a todos que não tem a 
                        possibilidade se deslocar até nossa escola ter acesso ao conhecimento que 
                        oferecemos diariamente aos nossos alunos em São Paulo. Disponibilizamos 
                        cursos de níveis adaptados ao seu progresso', 'atelie'); ?></p>
                    </div>
                </div>
            </div>
            <div class="offset-xl-2 col-xl-3 offset-lg-2 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="bts">
                    <a target="_blanc" href="https://www.youtube.com/watch?v=pO6WmES0b-U&feature=youtu.be" class="button trailer red"><?= __('Assistir o Trailer', 'atelie'); ?></a>
                    <a href="https://ateliedoboulanger.club.hotmart.com/login" class="begin button red ancor">
                        <?= __('Espaço do Aluno', 'atelie'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <?php

    $queryPacotes = array(
        'posts_per_page'   => -1,
        'category'         => 10,
    );
    $postsPacotes = get_posts($queryPacotes);

    ?>
    <div class="row mar50" id="prices">
        <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12 col-12">
            <div class="iten__curso_2">
                <div class="nivel_curso">
                    <h2><?= __('Pacote Fundamental', 'atelie'); ?></h2>
                    <img src="<?= get_template_directory_uri() . '/assets/icons/onestar.svg' ?>" alt="">
                </div>
                <div class="text">

                    <ul>
                        <li><strong>Tema*</strong></li>
                        <?php foreach ($postsPacotes as $pacote) { ?>
                            <?php if ($pacote->post_name == 'pacote-fundamental') { ?>
                                <?= "<li>" . $pacote->post_content . "</li>" ?>
                            <?php } ?>
                        <?php } ?>
                    </ul>

                    <div class="h">
                        <hr>
                        <a style="text-decoration: none" href="#faq-footer" class="avaliation"><strong>Como funciona a plataforma?</strong></a>
                    </div>

                    <div class="h">
                        <hr>
                        <p class="avaliation"><strong>Acesso aula N1</strong></p>
                        <hr>
                    </div>

                    <span>Plano trimestral BRL 240,00 </br>
                        possibilidade de pagar mensalmente </br>
                        Assinatura renova automaticamente</span>

                    <a target="_blanc" href="https://pay.hotmart.com/N26580803X?off=xd6764p9&checkoutMode=10&bid=1591369459128" class="button red begin"><img src="<?= get_template_directory_uri() . '/assets/icons/cadeado.svg'; ?>" alt=""><?= __('Começar', 'atelie'); ?></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12 col-124">
            <div class="iten__curso_2">
                <div class="nivel_curso">
                    <h2><?= __('Pacote Intermediário', 'atelie'); ?></h2>
                    <img src="<?= get_template_directory_uri() . '/assets/icons/twostars.svg' ?>" alt="">
                </div>
                <div class="text">

                    <ul>
                        <li><strong>Tema*</strong></li>
                        <?php foreach ($postsPacotes as $pacote) { ?>
                            <?php if ($pacote->post_name == 'pacote-intermediario') { ?>
                                <?= "<li>" . $pacote->post_content . "</li>" ?>
                            <?php } ?>
                        <?php } ?>
                    </ul>

                    <div class="h">
                        <hr>
                        <a style="text-decoration: none" href="#faq-footer" class="avaliation"><strong>Como funciona a plataforma?</strong></a>
                    </div>

                    <div class="h">
                        <hr>
                        <p class="avaliation"><strong>Acesso aula N1 N2 </strong></p>
                        <hr>
                    </div>

                    <span>Plano trimestral BRL 450,00 </br>
                        possibilidade de pagar mensalmente </br>
                        Assinatura renova automaticamente</span>

                    <a target="_blanc" href="https://pay.hotmart.com/N26580803X?off=71rcq416&checkoutMode=10&bid=1591369550942" class="button red begin"><img src="<?= get_template_directory_uri() . '/assets/icons/cadeado.svg'; ?>" alt=""><?= __('Começar', 'atelie'); ?></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12 col-12">
            <div class="iten__curso_2">
                <div class="nivel_curso">
                    <h2><?= __('Pacote Integral', 'atelie'); ?></h2>
                    <img src="<?= get_template_directory_uri() . '/assets/icons/treestars.svg' ?>" alt="">
                </div>
                <div class="text">

                    <ul>
                        <li><strong>Tema*</strong></li>
                        <?php foreach ($postsPacotes as $pacote) { ?>
                            <?php if ($pacote->post_name == 'pacote-integral') { ?>
                                <?= "<li>" . $pacote->post_content . "</li>" ?>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    
                    <div class="h">
                        <hr>
                        <a style="text-decoration: none" href="#faq-footer" class="avaliation"><strong>Como funciona a plataforma?</strong></a>
                    </div>

                    <div class="h">
                        <hr>
                        <p class="avaliation"><strong>Acesso completo</strong></p>
                        <hr>
                    </div>

                    <span>Plano trimestral BRL 600,00 </br>
                        possibilidade de pagar mensalmente </br>
                        Assinatura renova automaticamente</span>

                    <a target="_blanc" href="https://pay.hotmart.com/N26580803X?off=xbfugnuu&checkoutMode=10&bid=1591369578886" class="button red begin"><img src="<?= get_template_directory_uri() . '/assets/icons/cadeado.svg'; ?>" alt=""><?= __('Começar', 'atelie'); ?></a>
                </div>
            </div>
        </div>
    </div>

    <div class="row white w_one">
        <div class="col-12">
            <p><?= __('*Só as Principais receitas são informadas, conteúdo constantemente alimentado', 'atelie'); ?></p>
        </div>
    </div>

    <!-- <div class="row white w_two">
        <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12 col-12">
            <div class="text blue">
                <p><strong><?= __('Cliente France Panificação e alunos do Ateliê', 'atelie'); ?></strong></p>
            </div>
        </div>
        <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12 col-12">
            <p class="blue text"><?= __('Entre em contato com a gente para benificiar do seu cupom de desconto', 'atelie'); ?></p>
        </div>
        <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12 col-12">
            <div class="bts">
                <a href="" class="button blue trailer"><?= __('Entre em contato', 'atelie'); ?></a>
            </div>
        </div>
    </div> -->

    <div class="row">
        <div class="col-12">
            <div class="image_static relative">
                <img src="<?= get_template_directory_uri() . '/assets/img/img-3.png'; ?>" alt="">
                <div class="text white">
                    <h1 class="white"><?= __('Prove 7 dias!', 'atelie'); ?></h1>
                    <p class="white"><?= __('Se você não ficar satisfeito nos primeiros 7 dias, </br>garantimos a devolução total do seu dinheiro', 'atelie'); ?></p>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12 col-12">
            <div class="iten_white">
                <div class="figure">
                    <img src="<?= get_template_directory_uri() . '/assets/icons/playnew.png'; ?>" alt="">
                    <h2 class="blue"><?= __('Constantemente </br> alimentado', 'atelie') ?></h2>
                </div>
                <div class="content">
                    <p class="blue"><?= __('No decorrer do seu plano você tem acesso a novo conteúdo.', 'atelie') ?></p>
                </div>

            </div>
        </div>

        <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12 col-12">
            <div class="iten_white">
                <div class="figure">
                    <img src="<?= get_template_directory_uri() . '/assets/icons/blue3stars.svg'; ?>" alt="">
                    <h2 class="blue"><?= __('3 niveis </br>de cursos', 'atelie') ?></h2>
                </div>
                <div class="content">
                    <p class="blue"><?= __('Adaptados ao seu aprendizado  e progresso.', 'atelie') ?></p>
                </div>

            </div>
        </div>

        <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12 col-12">
            <div class="iten_white">
                <div class="figure">
                    <img src="<?= get_template_directory_uri() . '/assets/icons/responsive.svg'; ?>" alt="">
                    <h2 class="blue"><?= __('De fácil <br> acesso', 'atelie') ?></h2>
                </div>
                <div class="content">
                    <p class="blue"><?= __('Através da plataforma Hotmart, você pode assistir os vídeos onde quizer, a qualquer momento.', 'atelie') ?></p>
                </div>

            </div>
        </div>
    </div>

    <div class="row gallery">
        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
            <img src="<?= get_template_directory_uri() . '/assets/img/cap1.png' ?>" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
            <img src="<?= get_template_directory_uri() . '/assets/img/cap2.png' ?>" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
            <img src="<?= get_template_directory_uri() . '/assets/img/cap3.png' ?>" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
            <img src="<?= get_template_directory_uri() . '/assets/img/cap4.png' ?>" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
            <img src="<?= get_template_directory_uri() . '/assets/img/cap5.png' ?>" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
            <img src="<?= get_template_directory_uri() . '/assets/img/cap6.png' ?>" alt="">
        </div>
    </div>

    <div id="faq-footer" class="row">
        <div class="col-12">
            <p class="faq"><strong>FAQ</strong></p>
        </div>
        <div class="col-12" id="accordion">
            <ul id="accordion-courses" class="row" style="padding-left: 0;">
                <li class="col-12">
                    <i class="close"></i>
                    <h2 class="blue product_section bloc_1" data-selected="bloc_1">Qual é nosso objetivo</h2>
                    <div class="bloc bloc_1">
                        <p>
                            Dar as chaves do entendimento da panificação para
                            se adaptar as condições que você tem na sua padaria, na sua casa... o
                            objetivo sendo de obter um produto de qualidade (sabor, visual).
                        </p>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <!--  -->
                <li class="col-12">
                    <i class="close"></i>
                    <h2 class="blue product_section bloc_2" data-selected="bloc_2">O que esperar das aulas ?</h2>
                    <div class="bloc bloc_2">
                        <p>
                            A melhor qualidade de um padeiro é saber se adaptar, e saber identificar os defeitos
                            de produtos para ajustar os processos e manter um padrão de qualidade a cada fornada.
                            E isso que vamos explicar ao longo das receitas.
                        </p>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <!--  -->
                <li class="col-12">
                    <i class="close"></i>
                    <h2 class="blue product_section bloc_3" data-selected="bloc_3">Qual é o conteúdo ?</h2>
                    <div class="bloc bloc_3">
                        <p>
                            Você terá acesso as receitas, processos e explicação do impacto do ambiente de trabalho em seu trabalho, com vídeo aulas gravadas com duração de 15 a 45 minutos
                            com um total de 12 h de filmagem, dividido em 120 vídeos, separados por receitas e etapas para facilitar o acesso ao conteúdo de necessidade imediata. ( podendo variar de acordo com os novos conteúdos que será inserido ao longo do tempo )
                        </p>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <!--  -->
                <li class="col-12">
                    <i class="close"></i>
                    <h2 class="blue product_section bloc_4" data-selected="bloc_4">Para quem são as aulas ?</h2>
                    <div class="bloc bloc_4">
                        <p>
                            Todos os perfis, todos que desejam abraçar uma carreira profissional ou amadora.
                        </p>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <!--  -->
                <li class="col-12">
                    <i class="close"></i>
                    <h2 class="blue product_section bloc_5" data-selected="bloc_5">Certificação</h2>
                    <div class="bloc bloc_5">
                        <p>
                            Após um ano de assinatura, com 100% de conclusão dos vídeos aulas
                        </p>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <li class="col-12">
                    <i class="close"></i>
                    <h2 class="blue product_section bloc_6" data-selected="bloc_6">Posso cancelar ?</h2>
                    <div class="bloc bloc_6">
                        <p>
                            Sim, o cancelamento deve ser feito pelo próprio assinante dentro da Plataforma Hotmart, após o cancelamento você perde o acesso imediato.
                            Em até 7 dias, ressarcimento é integral, após esse prazo não será possível o reembolso do trimestre.
                        </p>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <li class="col-12">
                    <i class="close"></i>
                    <h2 class="blue product_section bloc_7" data-selected="bloc_7">Fale conosco</h2>
                    <div class="bloc bloc_7">
                        <p>
                            cursoonline@ateliedoboulanger.com.br<br>
                            Whatapps: (11) 982460042<br>
                            Telefone: (11) 2369 0887<br>
                        </p>
                        <div class="clearfix"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<script scoped>
    var $doc = $('html, body');
    $('a.ancor').click(function() {
        $doc.animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
        return false;
    });
    //Product Tab
    $('.bloc').hide();
    $('.product_section').click(function() {
        let blocName = $(this).data('selected');
        $(this).toggleClass('less');
        $('div.' + blocName).slideToggle();

    })
</script>


<?php include_once('page_components/footer.php'); ?>

<!-- Latest compiled and minified JavaScript -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-4-grid@3.4.0/css/grid.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<?php get_footer(); ?>


<script src="//assets.adobedtm.com/7e3b3fa0902e/7ba12da1470f/launch-5de25e657d80.min.js" async></script>
<script src="//assets.adobedtm.com/7e3b3fa0902e/7ba12da1470f/launch-73c56043319a-staging.min.js" async></script>