<?php

include "../../inc/conexao.php";
include "../../painel/function/protect.php";

//$nomePromo = $_POST['nomePromo'];
//$descPromo = $_POST['descricaoPromo'];
//$precoPromo = $_POST['precoPromo'];
//$validPromo = $_POST['validadePromo'];

//print_r($_POST);
//print_r($_FILES);
//
//
//var_dump($_POST);
//var_dump($_FILES);

//IMAGEM e LINKS

$pmLink = "localhost/desales/index.php#promocao";
$pasta = "../../../image/uploads/";
$arquivo = $_FILES['imgPromo'];

if (!file_exists($pasta)) mkdir($pasta, 0755);

if ($arquivo['tmp_name']):
    $ext = strchr($arquivo['name'], ".");
    $nomeArquivo = date('dmY') . rand(0, 10000) . "-promocao-imagem" . $ext;

    if (move_uploaded_file($arquivo['tmp_name'], $pasta . $nomeArquivo)):
        $pmImagem = "$nomeArquivo";
    else:

    endif;

    echo $ext;


endif;

//DATA

$dtCriacao = date('Y/m/d H:i:s');
$desc = mysqli_real_escape_string($mysqli, $_POST['descPromo']);


//(null,'pmNome', 'pmDescricao', 'pmPreco', 'pmImagem', 'pmLink', 'pmValidade', 'pmDataCriacao')

if (!empty($desc)):

    $cadPromoQuery = "INSERT INTO pm VALUES (null,'" . $_POST['nomePromo'] . "', '" . $desc . "', '" . $_POST['precoPromo'] . "', '" . $pmImagem . "','" . $pmLink . "', '" . $_POST['valPromo'] . "', '" . $dtCriacao . "','" . $_POST['statusPromo'] . "')";
    echo $cadPromoQuery;
    $cadEnvioBd = $mysqli->query($cadPromoQuery) or die($mysqli->error);

    if ($cadEnvioBd):
        echo '<div class="alert alert-success">Cadastrado!</div>';
    else:
        echo '<div class="alert alert-danger">Erro no cadastro!</div>';

    endif;

else:
    echo "Por favor preencha a descrição";


endif;





