<?php
include './includes/data.php';
include './includes/banco.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sistema Gerenciamento Financeiro</title>
        <link rel="stylesheet" href="css/estilo.css">
        <script src="js/alerta.js"></script>
        <link rel="stylesheet" href="css/alerta_css.css">
        <link rel="stylesheet" href="css/estilo_proprio.css">
    </head>
    <header>
        <div class="top-bar">
            <div class="top-bar-left">
                <p>
                    <strong>
                        <?php
                        echo dia_semana() . ", " . dia() . " " . mes_ano() . ", " . ano_completo();
                        ?>
                    </strong>
                </p>
            </div>
        </div>
        <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
            <button class="menu-icon" type="button" data-toggle></button>
            <div class="title-bar-title">Menu</div>
        </div>
        <div class="top-bar" id="main-menu">
            <ul class="menu vertical medium-horizontal expanded medium-text-center" data-responsive-menu="drilldown medium-dropdown">
                <li><a href="index.php">HOME</a></li>
                <li class="has-submenu"><a href="#">CONTAS</a>
                    <ul class="submenu menu vertical" data-submenu>
                        <li><a href="contas_cad.php">CADASTRAR</a></li>
                        <li><a href="#">PESQUISAR</a></li>
                    </ul>
                </li>
                <!--
                <li class="has-submenu"><a href="#">Tesla</a>
                    <ul class="submenu menu vertical" data-submenu>
                        <li><a href="#">One</a></li>
                        <li><a href="#">Two</a></li>
                        <li><a href="#">Three</a></li>
                    </ul>
                </li>-->
            </ul>
        </div>
    </header>
    <br>