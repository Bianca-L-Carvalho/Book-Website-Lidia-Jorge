<?php

$query = 'SELECT * FROM posts where page="author"';
$sql = $pdo->prepare($query);


if ($sql->execute()) {

    $posts = $sql->fetchAll(PDO::FETCH_ASSOC);
} else {
    $posts = [];
}

?>

<div class="white-box author-white-box">
    <div class="padding-35 desktop-padding-90">
        <h2 class=" menu-selected">Autor</h2>
        <h3 class="leter-type-t1"><?php echo $posts[0]["title"] ?></h3>
    </div>
</div>
<div class="padding-35 desktop-margin-90 desktop-padding-90 d-flex flex-column align-items-center">
    <img class="author-image-area " src=" <?php echo $posts[0]["picture"] ?>" alt="Fotografia do Autor">
    <div class="over-flow author-text-area  leter-type-p d-flex flex-column align-self-start">
        <?php echo $posts[0]["content"] ?>
        <div class="post-update">
        <a class="category-font" href="<?php echo url_generate(['route' => 'post_update', 'id' => $posts[0]['id']]); ?>">Editar</a>
    </div>
    </div>
    <div class="author-buttons-area d-flex flex-column align-items-center">
        <div id="see-more" class="padding-top-20 desktop-d-none">
            <img id="see-more-orange" class="see-more-button buttonOrange" src="public/images_desktop/vermais.svg" alt="Botão Ver Mais">
            <img id="see-more-grey" class="see-more-button  buttonGrey" src="public/images_desktop/vermais-cinza.svg" alt="Botão Ver Mais">
        </div>
        <div id="go-back" class="padding-top-20 desktop-d-block">
            <img id="go-back-orange" class="go-back-button buttonOrange" src="public/images_desktop/voltar1.svg" alt="Botão Voltar Atrás">
            <img id="go-back-grey" class="go-back-button buttonGrey" src="public/images_desktop/voltar2.svg" alt="Botão Voltar Atrás">
        </div>
    </div>
    <div class="padding-top-20 desktop-d-flex d-none desktop-width-100 desktop-button">
        <a href="<?php echo url_generate(['route' => 'home']);?>"><img class="go-back-button buttonOrange" src="public/images_desktop/voltar1.svg" alt="Botão Voltar Atrás">
            <img class="go-back-button buttonGrey" src="public/images_desktop/voltar2.svg" alt="Botão Voltar Atrás"></a>

    </div>
</div>