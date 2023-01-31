<?php

if (
    !empty($_POST['title'])    &&
    !empty($_POST['content'])
) {
    $updatedAt = date("d F Y");
    //declaração
    $query = "UPDATE posts SET title = ?, content = ?, category = ?, picture = ?, updated_at = ? WHERE id = ?"; // faz alteraçã nos dados existentes
    // preparação
    $sql = $pdo->prepare($query);
    // execução
    if ($sql->execute([
        $_POST['title'],
        $_POST['content'],
        $_POST['category'],
        $_POST['picture'],
        $updatedAt,
        $_GET['id']
    ])) {
        $message = "Registo atualizado com sucesso!";
    } else {
        $message = "Não foi possível atualizar o registo, tente novamente";
    }

    set_flash_message($message);
    url_redirect(['route' => 'post_update']);
    
} else { 
    //declaração
    $query = "SELECT * FROM posts WHERE id = ?";
    // preparação
    $sql = $pdo->prepare($query);
    // execução
    if ($sql->execute([$_GET['id']])) {
        $post = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        $post = [];
    }
}

?>



<div class="white-box author-white-box">
    <div class="padding-35 desktop-padding-90">
        <h2 class=" menu-selected">Publicações</h2>
        <h3 class="leter-type-t1">Atualizar</h3>
    </div>
</div>
<div>
    <div class="padding-35 desktop-padding-90 desktop-margin-90 d-flex flex-column align-items-center">
        <form class="form" method="POST" action="<?php echo url_generate(['route' => 'post_update']); ?>">
            <h3 class="leter-type-t1">Atualizar Publicação</h3>
            <div class="section label-font-style d-flex"> Página:
                <p class=""><?php echo $post["page"]; ?></p>
            </div>
            <div class="section label-font-style d-flex"> Sessão:
                <p class=""><?php echo $post["section"]; ?></p>
            </div>
            <div class="section">
                <label class="label-font-style" for="title">Título</label>
                <input class="input-width-50" type="text" name="title" value="<?php echo $post["title"]; ?>">
            </div>
            <div class="section">
                <label class="label-font-style" for="category">Categoria</label>
                <input type="text" name="category" value="<?php echo $post["category"]; ?>">
            </div>
            <div class="section">
                <label class="label-font-style" for="created_at">Imagem</label>
                <input class="input-width-50" id="piture" type="text" name="picture" value="<?php echo $post["picture"]; ?>">
            </div>
            <div class="section">
                <label class="label-font-style d-flex" for="content">Conteúdo</label>
                <div class="d-flex flex-column align-items-center"><textarea name="content"><?php echo $post["content"]; ?></textarea></div>
            </div>
            <div class="section  d-flex flex-column align-items-center">
                <button class="cor-laranja pagination-font-style" type="submit">Guardar</button>
            </div>
        </form>
    </div>