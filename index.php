<?php
require_once('config/Config.inc.php');

$banco = new Conn(HOST, DB, USER, PASS);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="author" content="<?php echo AUTHOR; ?>"/>
    <meta name="description" content="">
    <meta property="og:url" content="http://www.desales.com.br/"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="D'Sales Tortas e Salgadinhos"/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content="http://www.your-domain.com/path/image.jpg"/>
    <title><?php echo TITLE; ?></title>
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Jaldi:400,700|Lobster|Montserrat:700|Rubik+Mono+One"
          rel="stylesheet">
</head>
<body>
<?php include './public/menu.php'; ?>
<div class="container-fluid text-center"
     style="min-height: 892px; margin: 0; padding: 0; vertical-align: central;
     background: url(assets/image/destaque/fitting-fitness-athletes.jpg) no-repeat">
    <div class="jumbotron" style="background-color: transparent; margin-top: 15% ">
        <h1 class="destaques">NÃO VAMOS TE DEIXAR PERDER O FOCO </h1>
        <p class="subdestaque">Venha treinar com os melhores</p>
        <p><a class="btn btn-danger btn-lg" href="#" role="button">SABER MAIS</a></p>
    </div>
</div>
<main class="container-fluid cor-manilla">
    <div class="container">
        <div class="separador"></div>
        <section class="row">
            <h1 class="text-center titulo">VEJA OS VALORES DOS NOSSO PLANOS</h1>
            <div class="separador"></div>

            <article class="col-lg-4 col-md-4 col-sm-6 text-center">
                <div class="thumbnail">
                    <img src="assets/image/artigos/party.png" alt="...">
                    <div class="caption">
                        <h3>KIT FESTA 1</h3>
                        <h5 class="text-info">15 Pessoas</h5>
                        <ul class="list-group">
                            <li class="list-group-item">1 Torta Média</li>
                            <li class="list-group-item">150 Salgados</li>
                            <li class="list-group-item">2 Refrigerante 2 Lts</li>
                            <li class="list-group-item">30 Docinhos</li>
                        </ul>
                        <h4><i class="fa fa-money" aria-hidden="true"></i> R$ - 170,00</h4>
                        <p><a href="#" class="btn btn-success" role="button"><i class="fa fa-shopping-cart"
                                                                                aria-hidden="true"></i> ENCOMENDAR</a>
                        </p>
                    </div>
                </div>
            </article>

            <article class="col-lg-4 col-md-4 col-sm-6 text-center">
                <div class="thumbnail">
                    <img src="assets/image/artigos/pie-mitilo.png" alt="...">
                    <div class="caption">
                        <h3>KIT FESTA INFANTIL</h3>
                        <h5 class="text-info">15 Crianças</h5>
                        <ul class="list-group">
                            <li class="list-group-item">1 Torta Média</li>
                            <li class="list-group-item">60 Salgados</li>
                            <li class="list-group-item">100 Lanches</li>
                            <li class="list-group-item">50 Docinhos</li>
                            <li class="list-group-item">2 Refrigerante 2 Lts e 1 Suco Del Vale 1Lt</li>
                        </ul>
                        <h4><i class="fa fa-money" aria-hidden="true"></i> R$ - 190,00</h4>
                        <p><a href="#" class="btn btn-success" role="button"><i class="fa fa-shopping-cart"
                                                                                aria-hidden="true"></i> ENCOMENDAR</a>
                        </p>
                    </div>
                </div>
            </article>

            <article class="col-lg-4 col-md-4 col-sm-6 text-center">
                <div class="thumbnail">
                    <img src="assets/image/artigos/party.png" alt="...">
                    <div class="caption">
                        <h3>KIT FESTA 1</h3>
                        <h5 class="text-info">15 Pessoas</h5>
                        <ul class="list-group">
                            <li class="list-group-item">1 Torta Média</li>
                            <li class="list-group-item">150 Salgados</li>
                            <li class="list-group-item">2 Refrigerante 2 Lts</li>
                            <li class="list-group-item">30 Docinhos</li>
                        </ul>
                        <h4><i class="fa fa-money" aria-hidden="true"></i> R$ - 170,00</h4>
                        <p><a href="#" class="btn btn-success" role="button"><i class="fa fa-shopping-cart"
                                                                                aria-hidden="true"></i> ENCOMENDAR</a>
                        </p>
                    </div>
                </div>
            </article>
        </section>
        <div class="separador"></div>
    </div>
    <section id="promocao" class="row promocao">
        <h1 class="text-center titulo">VEJA NOSSAS PROMOÇÕES</h1>
        <div class="separador"></div>
        <div class="container">
            <div class="row">
                <!--                <article class="col-lg-6">-->
                <!--                    <div class="thumbnail">-->
                <!--                        <div class="caption">-->
                <!--                            <h3 class="text-center"></h3>-->
                <!--                            <img class="img-responsive" src="image/uploads/-->
                <?php //echo $resultado['pmImagem']; ?><!--"-->
                <!--                                 alt="...">-->
                <!--                            <h4>--><?php //echo $resultado['pmPreco']; ?><!--</h4>-->
                <!--                            <hr>-->
                <!--                            <p>--><?php //echo $resultado['pmDescricao']; ?><!--</p>-->
                <!--                            <p class="text-center text-uppercase">Acaba em : -->
                <?php //echo $resultado['pmValidade']; ?><!--</p>-->
                <!--                            <p class="text-center"><a href="#" class="btn btn-primary" role="button">Button</a> <a-->
                <!--                                        href="#" class="btn btn-default" role="button">Button</a></p>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </article>-->


                <!--            <article class="col-lg-6">
                              <div class="thumbnail">
                                <div class="caption">
                                  <h3 class="text-center">[PROMOÇÃO DESCRIÇÃO]</h3>
                                  <img class="img-responsive" src="image/promocao/empada.jpg" alt="...">
                                  <h4>Onde posso conseguí-lo?</h4>
                                  <hr>
                                  <p> Existem muitas variações disponíveis de passagens de Lorem Ipsum, mas a maioria sofreu algum tipo de alteração, seja por inserção de passagens com humor, ou palavras aleatórias que não parecem nem um pouco convincentes. Se você pretende usar uma passagem de Lorem Ipsum, precisa ter certeza de que não há algo embaraçoso escrito escondido no meio do texto. Todos os geradores de Lorem Ipsum na internet tendem a repetir pedaços predefinidos conforme necessário, fazendo deste o primeiro gerador de Lorem Ipsum autêntico da internet. Ele usa um dicionário com mais de 200 palavras em Latim combinado com um punhado de modelos de estrutura de frases para gerar um Lorem Ipsum com aparência razoável, livre de repetições, inserções de humor, palavras não características, etc.</p>
                                  <p class="text-center"><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                                </div>
                              </div>
                            </article>-->
            </div>
        </div>
    </section>
    <section class="row">
        <div class="container">
            <h1 class="text-center titulo">SOBRE NÓS</h1>
            <div class="col-lg-12">
                <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius pellentesque hendrerit.
                    Etiam id massa dui. Aliquam eget fringilla nibh. Curabitur sollicitudin, ante id consectetur tempus,
                    arcu nunc condimentum ante, non posuere felis turpis ut neque. In vel erat sit amet mi feugiat
                    bibendum sed sed dui. Donec scelerisque velit id aliquam pretium. Aliquam non nulla nisl. Proin
                    neque nibh, molestie eget viverra id, maximus non lectus.</p>

                <p>Mauris commodo dui purus, sed cursus dui tincidunt vel. Vestibulum velit nunc, imperdiet eu lorem ut,
                    tincidunt commodo felis. Pellentesque pharetra rutrum lacus, et congue risus feugiat id. Sed vel
                    elit massa. Suspendisse at dolor nibh. Maecenas at euismod libero, non tempor tellus. Pellentesque
                    mi lorem, gravida fringilla sapien et, sollicitudin iaculis sapien. Pellentesque habitant morbi
                    tristique senectus et netus et malesuada fames ac turpis egestas. Sed eleifend gravida dolor vitae
                    placerat. Morbi pharetra faucibus purus, at porta leo tincidunt sollicitudin. Maecenas faucibus
                    porttitor vestibulum. Aenean rhoncus sapien sed neque vehicula, ac viverra mauris laoreet. Duis quis
                    semper dolor, id pellentesque urna. Mauris vel ex id nisl faucibus hendrerit ac in erat. Curabitur
                    et est a nisl porttitor aliquet. Aliquam a porta ipsum.</p>

                <p>Praesent malesuada et lectus nec rhoncus. Interdum et malesuada fames ac ante ipsum primis in
                    faucibus. Proin fringilla convallis magna, vel aliquet ligula feugiat a. Aliquam eleifend erat et
                    arcu faucibus consectetur. Cras enim elit, ornare at finibus interdum, sagittis ut elit. Praesent
                    sed laoreet tellus. Sed rutrum ligula in mollis ornare.</p></div>
        </div>
    </section>
    <section class="row text-center sec-rede-social">
        <div class="container">
            <h1 class="text-center titulo">SIGA NAS REDES SOCIAIS</h1>
            <div class="separador"></div>
            <article class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <button class="btn fb rede-social"><i class="fa fa-facebook-square" aria-hidden="true"></i> FACEBOOK
                </button>
            </article>
            <article class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <button class="btn  wp rede-social"><i class="fa fa-whatsapp" aria-hidden="true"></i> WHATSAPP</button>
            </article>
            <article class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <button class="btn  gplus rede-social"><i class="fa fa-google-plus" aria-hidden="true"></i> GOOGLE+
                </button>
            </article>
            <article class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <button class="btn insta rede-social"><i class="fa fa-instagram" aria-hidden="true"></i> INSTAGRAM
                </button>
            </article>
        </div>
        <div class="separador"></div>
    </section>

</main>
<?php include_once './public/footer.php'; ?>

<!--<div class="manutencao text-center alert-warning text-warning"><h1 class="alert alert-warning">Em Manutenção</h1></div>-->

<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!--    <script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
          return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
    -->
<script>
    $(function () {
        $("nav").css("padding-top", "60px");
        $(window).scroll(function () {
            var topo = $('#topo').height();
            var rodape = $('#rodape').height();
            var scrollTop = $(window).scrollTop();
            if (scrollTop > topo) {
                $("nav").removeClass("menu");
                $("nav").addClass("animated fadeInDown navbar-fixed-top menu2");
                $("nav").css("padding-top", "20px");
            } else {
                $("nav").addClass("menu");
                $("nav").removeClass("animated fadeInDown menu2");
                $("nav").css("padding-top", "60px");
            }
        });
    });
</script>
</body>
</html>
