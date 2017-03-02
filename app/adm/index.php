<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">        
    <meta name="robots" content="index, follow">
    <meta name="author" content="Daniel S. Costa" />
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/estilo.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Jaldi:400,700|Lobster|Montserrat:700|Rubik+Mono+One" rel="stylesheet">
    <title>Tela de Administração</title>
  </head>
  <body style="background: #C84648">
    <?php
    // put your code here
    ?>
    <div class="container" style="padding-top: 18%">
      <div class="col-lg-offset-4 col-lg-4">
        <form id="login" class="panel panel-info" method="post">
          <div class="panel panel-heading text-center"><img src="../assets/image/logo-2.png" alt=""></div>
          <div class="panel panel-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Usuario / E-Mail</label>
              <input type="text" class="form-control" name="login" id="exampleInputEmail1" placeholder="Login">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Senha</label>
              <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-success">Login</button>
          </div>
          <div class="panel-warning resposta text-center"></div>
          <div class="panel-footer text-center"><small>Desenvolvido por Paceto Informatica</small></div>
        </form>
      </div>
    </div>
    <script src="../js/jquery-2.1.4.js"></script>
    <script>
      $(function () {
        debuga = $('.resposta');
        enviar = $('#login');
        action = 'inc/login.php';
        enviar.submit(function () {
          var login = $('input[name="login"]').val();
          var pass = $('input[name="senha"]').val();
          $.post(action, {user: login, senha: pass}, function (dados) {
            $(".resposta").html(dados);
//            function resposta(datas) {
//              alert(datas);
//              debuga.empty().html('<pre>' + datas + '</pre>');
//            }
          });
          return false;
        });
      });
    </script>
  </body>
</html>
