<?php

    // declaração
    $query = 'DELETE FROM posts WHERE  id = ?';
    // preparação
    $sql = $pdo->prepare($query); 
    // execução
    if ($sql->execute([$_GET['id']])) { 
        $message="Publicação apagada com sucesso"; 
    } else {
        $message="Não foi possível apagar o registo, tente novamente";
    }
    set_flash_message($message);
    url_redirect(["route" => "home"]);

