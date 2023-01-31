<?php


if (empty($_POST['username']) || empty($_POST['password'])) {
    
    set_flash_message("Todos os campos são de preenchimento obrigatório!");

    url_redirect(['route' => 'login']);
}

$login = "admin";
$password = "12345";

if ($_POST['username'] == $login  &&  $_POST['password'] == $password) {
    $_SESSION['is_authenticated'] = true;

    set_flash_message("Utilizador autenticado com sucesso!");

    url_redirect(['route' => 'home']);
} else {
    set_flash_message("Utilizador ou senha incorreta, tente novamente!");

    url_redirect(['route' => 'login']);
}
