<?php

include './conexao.php';


if(isset($_POST['user']) && strlen($_POST['user']) > 0):

  if(!isset($_SESSION)):
    session_start();
    $_SESSION['email'] = $mysqli->escape_string($_POST['user']);
    $_SESSION['senha'] = md5(md5($_POST['senha']));

    echo $_SESSION['senha'];



    $sql_codigo = "select * from usuarios where email = '$_SESSION[email]' ";
    $sql_query = $mysqli->query($sql_codigo) or die($mysqli->error);
    $dado = $sql_query->fetch_assoc();
//    echo $_SESSION['senha']."<br>";
//    echo $dado['senha'] ."<br>";
    $result = $sql_query->num_rows;
    echo $result;

    if ($result == 0):
      echo "<div class='alert alert-danger'>Este email não pertence ao um usuario valido</div>";
    else:
      if ($dado['senha'] == $_SESSION['senha']):
        $_SESSION['usuario'] = $dado['id'];

        echo 'Login Efetuado';
        echo "<script>location.href='../../../index.php';</script>";
      else:
        echo "Senha incorreta!";
      endif;
    endif;
  endif;
endif;



