<?php
include './function/protect.php';
protect();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Daniel S. Costa"/>
    <meta name="description" content="">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/estilo.css">
    <!--<link rel="stylesheet" href="css/estilo.css">-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Jaldi:400,700|Lobster|Montserrat:700|Rubik+Mono+One"
          rel="stylesheet">
    <title>Tela de Administração</title>
    <style>
        * {
            border-radius: 0px !important
        }
    </style>
</head>
<body>
<nav id="topo" class="navbar navbar-default menu">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand"><a href=""><i class="fa fa-eye" aria-hidden="true"></i> VISUALIZAR O SITE</a>
            </div>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                <li><a href="promocao.php"><i class="fa fa-cart-plus" aria-hidden="true"></i> Promoções</a></li>
                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Usuarios</a></li>
                <li><a href="#"><i class="fa fa-pencil-square" aria-hidden="true"></i> Artigos</a></li>
                <li><a href="function/logout.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Sair</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<main class="container">
    <?php
    include '../inc/conexao.php';
    $sql_codigo = "select * from pm limit 15";
    $sql_query = $mysqli->query($sql_codigo) or die($mysqli->error);
    $dado = $sql_query->fetch_assoc();
    $result = $sql_query->num_rows;

    // BREADCRUMB
    $caminho = pathinfo(__FILE__);
    $breadcrumb = explode("\\", $caminho['dirname']);
    $breadcrumb = array_reverse($breadcrumb);
    define("BASE", $_SERVER['SERVER_NAME']);

    var_dump(pathinfo(__FILE__));
    ?>
    <h2 class="text-center">Administração de Promoções</h2>
    <div class="alert text-info text-nowrap"><h4 class="breadcrumb"><i class="fa fa-home" aria-hidden="true"></i>
            <?php echo BASE . "/" . "<a href='#'>" . $breadcrumb['1'] . "</a>" . "/" . "<a href='#'>" . $breadcrumb['0'] . "</a>" . "/" . "<a href='#'>" . $caminho['filename'] . "</a>";
            ?></h4></div>
    <hr>
    <div class="row">
        <div class="col-lg-9 col-lg-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading text-center cor-manilla destaques"><h3>CADASTRO DE NOVA PROMOÇÃO</h3></div>
                <div class="panel-body">
                    <form id="cadPromo" name="cadPromo" method="post">
                        <div class="form-group">
                            <label for="promo_nome">Nome da Promoção</label>
                            <input type="text" class="form-control" name="nomePromo" id="promo_nome"
                                   placeholder="Digite o nome da promoção">
                        </div>
                        <div class="form-group">
                            <label for="promo_preco">Preço</label>
                            <input type="text" class="form-control" name="precoPromo" id="promo_preco"
                                   placeholder="Digite o nome da promoção">
                        </div>
                        <div class="form-group">
                            <label for="promo_dt_criaca">Data de Criação</label>
                            <input type="text" disabled value="<?php echo date('d/m/Y');
                            ?>" class="form-control" id="promo_dt_criacao">
                        </div>
                        <div class="form-group">
                            <label for="promo_dt_val">Data de Validade</label>
                            <input type="date" class="form-control" name="valPromo" id="promo_dt_val">
                        </div>
                        <div class="form-group">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="statusPromo" id="status1" value="ativo" checked>
                                    Ativo
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="statusPromo" id="status2" value="inativo">
                                    Inativo
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="promo_img">Imagem</label>
                            <input class="btn" type="file" name="imgPromo" id="promo_img">
                        </div>
                        <div class="form-group">
                            <label for="promo_desc">Descrição</label>
                            <textarea class="form-control" name="descPromo" id="promo_desc"
                                      placeholder="Digite o nome da promoção"></textarea>
                        </div>
                        <div class="resposta"></div>
                        <br>
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="container-fluid cor-manilla">
    <div class="container ">
        <p class="text-center">Desenvolvido por <a class="destaques" href="#">Docle</a></p>
    </div>
</footer>
<script src="js/jquery-2.1.4.js"></script>
<script src="js/jquery.form.js"></script>
<script src="tinymce/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea',
        content_css: "css/estilo.css",
        height: 280,
        fontsize_formats: "10pt 11pt 12pt 26pt 36pt",
        menubar: false,
        toolbar: 'styleselect | bold italic | fontselect | fontsizeselect | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'
    });
</script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script>
    $(function () {
        var sender = $('form[name="cadPromo"]');
        var loader = $('.resposta');
        sender.submit(function () {
            $(this).ajaxSubmit({
                url: "querys/cadPromo.php",
                success: function (retorno) {
                    loader.empty().html('<pre>' + retorno + '</pre>');
                }
            });
            return false;
        });
    });
</script>
<!--    <script>
      $(function () {
        enviar = $('#cadPromo');
        action = './querys/cadPromo.php';
        enviar.submit(function () {
          var nomePromo = $('#promo_nome').val();
          var descPromo = $('#promo_desc').val();
          var precoPromo = $('#promo_preco').val();
          var dtValPromo = $('#promo_dt_val').val();
          $.post(action, {nomePromocao: nomePromo, descricaoPromo: descPromo, precoPromo: precoPromo, validadePromo: dtValPromo},
                  function (dados) {
                    console.log(nomePromo);
                    $(".resposta").html(dados);
                  });
          return false;
        });
      });
    </script>-->
</body>
</html>
