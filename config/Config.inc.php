<?php
/**
 * Created by PhpStorm.
 * User: danie
 * Date: 01/03/2017
 * Time: 14:31
 */
function __autoload($Class) {

    $dirName = "./app/classes";
    if (file_exists("{$dirName}/{$Class}.php")):
        require_once "{$dirName}/{$Class}.php";
    else:
        die("<b>Erro ao incluir {$dirName}/{$Class}.php<b>");

    endif;
}

//BANCO DE DADOS
define('HOST', $_SERVER['SERVER_NAME']);
define('USER', 'root');
define('PASS', '');
define('DB', 'planet_gym');

//CONFIGURAÇÃO DO SITE
define('HOME', $_SERVER['SERVER_NAME']);
define('TITLE', 'Planet Gym Academia, Venha Treinar Com Os Melhores');
define('DESCRIPTION', 'Melhor academia do grajaú, venha treinar com os melhores');
define('AUTHOR', 'Daniel S. Costa');

//CONFIGGURAÇÃO DO FACEBOOK ATRIBUTOS

define('OG-URL', $_SERVER['SERVER_NAME']);
define('0G-DESCRIPTION', 'Melhor academia do grajaú, venha treinar com os melhores');
define('OG-AUTHOR', 'Planet Gym Academia');