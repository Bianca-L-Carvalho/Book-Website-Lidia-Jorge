<?php

$query = 'SELECT * FROM posts where page="news"';
$sql = $pdo->prepare($query);


if ($sql->execute()) {

  $posts = $sql->fetchAll(PDO::FETCH_ASSOC);
} else {
  $posts = [];
}
?>

<div class="white-box author-white-box desktop-width-box">
  <div class="padding-35 desktop-padding-90">
    <h2 class=" menu-selected">Imprensa</h2>
    <h3 class="leter-type-t1">Últimas Notícias</h3>
  </div>
</div>
<?php for ($i = 0; $i < count($posts); $i++) {
            if ($i == 2) { ?>
    <div class=" white-box">
      <div class="padding-35 desktop-margin-90 desktop-padding-90 news-area d-flex flex-column">
        <h2 class="leter-type-t1"><?php echo $posts[$i]["title"] ?></h2>
        <div class="horizontal-line-news"></div>
        <h5 class="news-publication-date text-end"> Publicado a <?php echo $posts[$i]["created_at"] ?></h5>
        <img src="<?php echo $posts[$i]["picture"] ?>" alt="Imagem Notícia">
        <div class="leter-type-p">
        <?php echo $posts[$i]["content"] ?>
        <div class="post-update">
          <a class="category-font" href="<?php echo url_generate(['route' => 'post_update', 'id' => $posts[$i]['id']]); ?>">Editar</a>
          | <a class="category-font" onclick="return confirm('Tem certeza?');" href="<?php echo url_generate(['route' => 'post_delete', 'id' => $post[$i]['id']]); ?>">Apagar</a>
        </div>
      </div>
      </div>
    </div>
  <?php } else if ($i == 3) { ?>
    <div class="padding-35 desktop-margin-90 desktop-padding-90 news-area desktop-sec-news-area d-flex flex-column">
      <h2 class="leter-type-t1"> <?php echo $posts[$i]["title"] ?></h2>
      <div class="horizontal-line-news"></div>
      <h5 class="news-publication-date text-end"> Publicado a <?php echo $posts[$i]["created_at"] ?></h5>
      <img src="<?php echo $posts[$i]["picture"] ?>" alt="Imagem Notícia">
      <div class="leter-type-p">
        <?php echo $posts[$i]["content"] ?>
        <div class="post-update">
          <a class="category-font" href="<?php echo url_generate(['route' => 'post_update', 'id' => $posts[$i]['id']]); ?>">Editar</a>
          | <a class="category-font" onclick="return confirm('Tem certeza?');" href="<?php echo url_generate(['route' => 'post_delete', 'id' => $post[$i]['id']]); ?>">Apagar</a>
        </div>
      </div>
    </div>
<?php 
  }
} ?>

<div class="d-flex justify-content-center">
  <nav aria-label="Search results pages">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link seta" href="" aria-label="Previous">
          <span aria-hidden="true">
            <img class=" seta go-back-button buttonOrange " src="public/images_desktop/setaesquerda1.svg" alt="seta">
            <img class="seta go-back-button buttonGrey" src="public/images_desktop/setaesquerda2.svg" alt="seta"></span>
        </a>
      </li>
      <li class="page-item"><a class="page-link pagination-font-style" href="<?php echo url_generate(['route' => 'news']); ?>">1</a></li>
      <li class="page-item"><a class="page-link pagination-font-style" href="<?php echo url_generate(['route' => 'news1']); ?>">2</a></li>
      <li class="page-item"><a class="page-link pagination-font-style" href="">3</a></li>
      <li class="page-item">
        <a class="page-link seta" href="" aria-label="Next">
          <span aria-hidden="true"><img class=" seta go-back-button buttonOrange " src="public/images_desktop/setadireita1.svg" alt="seta">
            <img class="seta go-back-button buttonGrey" src="public/images_desktop/setadireita2.svg" alt="seta"></span>
        </a>
      </li>
    </ul>
  </nav>
</div>