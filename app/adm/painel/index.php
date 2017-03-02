<?php
include './function/protect.php';
protect();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">        
    <meta name="author" content="Daniel S. Costa" />
    <meta name="description" content="">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/estilo.css">
    <!--<link rel="stylesheet" href="css/estilo.css">-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Jaldi:400,700|Lobster|Montserrat:700|Rubik+Mono+One" rel="stylesheet">
    <title>Tela de Administração</title>
  </head>
  <body>
    <nav id="topo" class="navbar navbar-default menu">
      <div class="container">
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-brand" ><a href=""><i class="fa fa-eye" aria-hidden="true"></i> VISUALIZAR O SITE</a></div>
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
$sql_consulta = "select * from pm";
$retorno = $mysqli->query($sql_consulta) or die($mysqli->error);
?>
      <h1 class="text-center">Promoções Recentes</h1>
      <table class="table table-striped table-bordered">
        <tr>
          <th class="text-center">ID</th>
          <th class="text-center">NOME</th>
          <th class="text-center">DESCRIÇÃO</th>
          <th class="text-center">PREÇO</th>
          <th class="text-center">IMAGEM</th>
          <th class="text-center">LINK</th>
          <th class="text-center">VALIDADE</th>
          <th class="text-center">CRIAÇÃO</th>
          <th class="text-center">STATUS</th>
          <th class="text-center">Editar</th>
          <th class="text-center">Apagar</th>
        </tr>
        <?php
        while ($dado = $retorno->fetch_array()) {
	?>
          <tr class="table-hover">
            <td class="text-center"><?php echo $dado['id'];?></td>
            <td class="text-center"><?php echo utf8_decode($dado['pmNome']);?></td>
            <td class="text-center"><?php echo utf8_decode($dado['pmDescricao']);?></td>
            <td class="text-center"><?php echo "R$" . $dado['pmPreco'];?></td>
            <td class="text-center">IMAGEM <img class="img-responsive" src="../../image/uploads/<?php echo $dado['pmImagem'];
?>"></td>
            <td class="text-center"><a target="blank" href="<?php echo $dado['pmLink'];
?>">Clique</a></td>
            <td class="text-center"><?php echo date("d/m/Y", strtotime($dado['pmValidade']));
?></td>
            <td class="text-center"><?php echo date("d/m/Y", strtotime($dado['pmDataCriacao']));
?></td>
            <td class="text-center"><?php echo $dado['status'];
?></td>
            <td class="text-center"><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
            <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
          </tr>
          <?php
}
?>
      </table>
    </main>
    <script src="js/jquery-2.1.4.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
