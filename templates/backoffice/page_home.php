<?php

$query = 'SELECT * FROM posts where page="home"';
$sql = $pdo->prepare($query);

if ($sql->execute()) {
    $posts = $sql->fetchAll(PDO::FETCH_ASSOC);
} else {
    $posts = [];
}

?>


<div class="desktop-home-container">
    <div class=" welcome-box padding-35 white-box d-flex flex-column flex-lg-row">
        <?php foreach ($posts as $post) {
            if ($post["section"] == "welcome") { ?>
                <div>
                    <div class="d-flex   justify-content-center">
                        <img class=" img-margin-top-73 white-box d-flex" src="<?php echo $post["picture"] ?>" alt="Author Photografy">
                    </div>
                    <div class="desktop-welcome-text desktop-marginR-55">
                        <h3 class="d-flex justify-content-start justify-content-sm-center justify-content-lg-start  leter-type-t1 "><?php echo $post["title"] ?></h3>
                        <div class="d-flex flex-column justify-content-start justify-content-sm-center leter-type-p">
                            <?php echo $post["content"] ?>
                        </div>
                        <div class="post-update">
                            <a class="category-font" href="<?php echo url_generate(['route' => 'post_update', 'id' => $post['id']]); ?>">Editar</a> | <a class="category-font" onclick="return confirm('Tem certeza?');" href="<?php echo url_generate(['route' => 'post_delete', 'id' => $post['id']]); ?>">Apagar</a>
                        </div>
                        <a href="<?php echo url_generate(['route' => 'news']); ?>" class="d-flex justify-content-center justify-content-md-center justify-content-lg-end"><img class="banner-button-toKnowMore buttonOrange" src="public/images_desktop/sabermais1.svg" alt="buttonimage">
                            <img class="banner-button-toKnowMore buttonGrey" src="public/images_desktop/sabermais2.svg" alt="button to Know More"></a>
                    </div>
                </div>
        <?php
            }
        } ?>
    </div>
    <div>
        <div class="padding-35 desktop-marginR-55 desktop-marginL-55">
            <div class="latest-books-box ">
                <?php foreach ($posts as $post) {
                    if ($post["section"] == "lastbooks" && $post["id"] == 2) { ?>
                        <h3 class="d-flex justify-content-start leter-type-t1"><?php echo $post["title"] ?></h3>
                        <div class="d-flex flex-column  justify-content-start leter-type-p">
                            <?php echo $post["content"] ?>
                        </div>
                        <div class="post-update">
                            <a class="category-font" href="<?php echo url_generate(['route' => 'post_update', 'id' => $post['id']]); ?>">Editar</a> | <a class="category-font" onclick="return confirm('Tem certeza?');" href="<?php echo url_generate(['route' => 'post_delete', 'id' => $post['id']]); ?>">Apagar</a>
                        </div>
                <?php }
                } ?>
            </div>
            <div class=" d-flex flex-column align-items-center flex-md-row align-items-md-stretch">
                <?php for ($i = 0; $i < count($posts); $i++) {
                    if ($posts[$i]["section"] == "lastbooks" && $posts[$i]["id"] != 2) { ?>
                        <div class="featured-book white-box ">
                            <img src=" <?php echo $posts[$i]["picture"] ?>" alt="Livro 1">
                            <div class="featured-book-text-box padding-25">
                                <h4 class="home-contrast"><?php echo $posts[$i]["title"] ?></h4>
                                <h5 class="category-font  d-flex justify-content-start"> <?php echo $posts[$i]["category"] ?></h5>
                                <div class=" leter-type-p d-flex justify-content-start"> <?php echo $posts[$i]["content"] ?></div>
                                <div class="post-update">
                                    <a class="category-font" href="<?php echo url_generate(['route' => 'post_update', 'id' => $posts[$i]["id"]]); ?>">Editar</a> | <a class="category-font" onclick="return confirm('Tem certeza?');" href="<?php echo url_generate(['route' => 'post_delete', 'id' => $posts[$i]["id"]]); ?>">Apagar</a>
                                </div>
                                <a href="                                
                                <?php if ($posts[$i]["id"] == 3) { ?>
                                <?php echo url_generate(['route' => 'book1']); ?>
                                <?php } else if ($posts[$i]["id"] == 4) { ?>
                                <?php echo url_generate(['route' => 'book4']); ?>
                                <?php } else { ?> 
                                <?php echo url_generate(['route' => 'book3']); ?> <?php } ?> " class="d-flex justify-content-end"><img class="banner-button-toKnowMore buttonOrange" src="public/images_desktop/sabermais1.svg" alt="buttonimage">
                                    <img class="banner-button-toKnowMore buttonGrey" src="public/images_desktop/sabermais2.svg" alt="buttonimage"></a>
                            </div>
                        </div>
                <?php
                    }
                } ?>
            </div>
        </div>
    </div>
</div>
