<?php
require __DIR__ . "/app/Model/UserBanco.php";
require __DIR__ . "/app/Controller/ValidarUsuario.php";
require __DIR__ . "/app/Controller/CadastrarUsuario.php";
require __DIR__ . "/app/Controller/ExibirUsuario.php";
require __DIR__ . "/header.php";

/*if (!isset($_POST['usuario']) || !isset($_POST['senha'])) {
    header("Location:./login.php");
}
*/

if (isset($_GET['acao'])) {

    if ($_GET['acao'] == "login") {
        (new ValidarUsuario)->retornar();
    }

    if ($_GET['acao'] == "cadastrar") {
       echo (new CadastrarUsuario)->retornar();
    }
    if ($_GET['acao'] == "consultar") {
        echo (new ExibirUsuario)->retornar();
     }
    require "./menu.php";

}

require __DIR__ . "/footer.php";