<?php

$query = 'SELECT * FROM posts where page="books"';
$sql = $pdo->prepare($query); 


if ($sql->execute()) { 

    $posts = $sql->fetchAll(PDO::FETCH_ASSOC); 
} else {
    $posts = [];
}

?>

<div class="white-box author-white-box">
    <div class=" padding-35 desktop-padding-90">
        <h2 class=" menu-selected">Livros</h2>
        <?php for ($i = 0; $i < count($posts); $i++) {
            if ($i == 3) { ?>
                <h3 class="leter-type-t1"><?php echo  $posts[$i]["title"] ?></h3>
    </div>
</div>
<div class="padding-35 d-flex flex-column align-items-center flex-lg-row align-items-lg-start desktop-margin-90 desktop-padding-90">
    <img class="book-image-area" src="<?php echo  $posts[$i]["picture"] ?>" alt="Capa Livro">
    <div>
        <div class="book-text-area  leter-type-p d-flex flex-column align-self-start">
            <?php echo  $posts[$i]["content"] ?>
            <div class="post-update">
                <a class="category-font" href="<?php echo url_generate(['route' => 'post_update', 'id' => $posts[$i]['id']]); ?>">Editar</a>
                | <a class="category-font" onclick="return confirm('Tem certeza?');" href="<?php echo url_generate(['route' => 'post_delete', 'id' => $post[$i]['id']]); ?>">Apagar</a>
            </div>
        </div>
        <div class="book-button-area padding-top-20 d-sm-flex justify-content-sm-center justify-content-lg-end">
            <a href="<?php echo url_generate(['route' => 'home']); ?>
        "> <img class="go-back-button buttonOrange " src="public/images_desktop/voltar1.svg" alt="Botão Voltar Atrás">
                <img class="go-back-button buttonGrey" src="public/images_desktop/voltar2.svg" alt="Botão Voltar Atrás"></a>

        </div>
    </div>
<?php }
        } ?>
</div>