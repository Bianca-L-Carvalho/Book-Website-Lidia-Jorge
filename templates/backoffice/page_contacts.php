<?php

$query = 'SELECT * FROM posts where page="contacts"';
$sql = $pdo->prepare($query);


if ($sql->execute()) {

    $posts = $sql->fetchAll(PDO::FETCH_ASSOC);
} else {
    $posts = [];
}
?>

<div class="white-box author-white-box">
    <div class="padding-35 desktop-padding-90">
        <h2 class=" menu-selected">Contactos</h2>
        <h3 class="leter-type-t1">Pode Contactar-me Através do Email ou Telefone</h3>
    </div>
</div>
<div class="padding-35 d-flex flex-column align-items-center desktop-padding-90">
    <div class="contacts-area text-center padding-25 desktop-padding-90 d-lg-flex justify-content-lg-evenly">
        <?php foreach ($posts as  $post) {
            if ($post["section"] != "timetable") { ?>
                <div class="contacts-item">
                    <h3 class="contacts-title"><?php echo $post["title"] ?></h3>
                    <div class="contacts-content"><?php echo $post["content"] ?> <div class="post-update">
                            <a class="category-font" href="<?php echo url_generate(['route' => 'post_update', 'id' => $post['id']]); ?>">Editar</a> | <a class="category-font" onclick="return confirm('Tem certeza?');" href="<?php echo url_generate(['route' => 'post_delete', 'id' => $post['id']]); ?>">Apagar</a>
                        </div>
                    </div>

                </div>
        <?php
            }
        } ?>
    </div>
    <div class="horizontal-line line-width text-center"></div>
    <div class="time-area text-center">
        <?php foreach ($posts as  $post) {
            if ($post["section"] == "timetable") { ?>
                <h3 class="contacts-title"><?php echo $post["title"] ?></h3>
                <div class="contacts-content"><?php echo $post["content"] ?>
                    <div class="post-update">
                        <a class="category-font" href="<?php echo url_generate(['route' => 'post_update', 'id' => $post['id']]); ?>">Editar</a> | <a class="category-font" onclick="return confirm('Tem certeza?');" href="<?php echo url_generate(['route' => 'post_delete', 'id' => $post['id']]); ?>">Apagar</a>
                    </div>
                </div>
        <?php 
            }
        } ?>
    </div>
</div>