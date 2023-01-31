<?php

if (
    !empty($_POST['page'])     &&
    !empty($_POST['title'])    &&
    !empty($_POST['content'])
) {
    // declaração
    $query = 'INSERT INTO posts (section, title, content, category, picture, page, created_at) VALUES (?, ?, ?, ?, ?, ?, ?)';

    // preparação do código SQL que está dentro da variável $query
    $sql = $pdo->prepare($query);
    // execução
    if ($sql->execute([
        $_POST['section'],
        $_POST['title'],
        $_POST['content'],
        $_POST['category'],
        $_POST['picture'],
        $_POST['page'],
        $_POST['created_at']
    ])) {
        $message = "Publicação criada com sucesso!";
    } else {
        $message = "Não foi possível criar a publicação. Tente novamente";
    }

    set_flash_message($message);
    url_redirect(["route" => "post_create"]);
}


?>
<div class="white-box author-white-box">
    <div class="padding-35 desktop-padding-90">
        <h2 class=" menu-selected">Publicações</h2>
        <h3 class="leter-type-t1">Criar</h3>
    </div>
</div>
<div class="padding-35 desktop-padding-90 desktop-margin-90 d-flex flex-column align-items-center">
        <form class="form" method="POST" action="<?php echo url_generate(['route' => 'post_create']); ?>">
            <h3 class="leter-type-t1">Criar Publicação</h3>
            <div class="section">
                <label class="label-font-style" for="page">Página <abbr title="campo obrigatório">*</abbr></label>
                <div>
                    <label for="home"><input type="radio" required name="page" value="home" id="home">Home</label>
                    <label for="author"><input type="radio" name="page" value="author" id="author">Autor</label>
                    <label for="books"><input type="radio" name="page" value="books" id="books">Livros</label>
                    <label for="news"><input type="radio" name="page" value="news" id="news">Imprensa</label>
                    <label for="contacts"><input type="radio" name="page" value="contacts" id="contacts">Contactos</label>
                </div>
            </div>
            <div class="section">
                <label class="label-font-style" for="section">Sessão</label>
                <div>
                    <label for="carosel"><input type="radio" name="section" value="carosel" id="carosel">Carossel</label>
                    <label for="welcome"><input type="radio" name="section" value="welcome" id="welcome">Bem-Vindo</label>
                    <label for="lastbooks"><input type="radio" name="section" value="lastbooks" id="lastbooks">Ultimos Livros</label>
                    <label for=""><input type="radio" name="section" value="">Não Atribuído</label>
                </div>
            </div>
            <div class="section">
                <label class="label-font-style" for="title">Título <abbr title="campo obrigatório">*</abbr></label>
                <input class="input-width-50" type="text" name="title" required>
            </div>
            <div class="section">
                <label class="label-font-style" for="category">Categoria</label>
                <div>
                    <label for="new"><input type="radio" name="category" value="Novidade" id="new">Novidade</label>
                    <label for="best sellers"><input type="radio" name="category" value="Mais Vendido" id="best sellers">Mais vendido</label>
                    <label for="on sale"><input type="radio" name="category" value="Em Promoção" id="on sale">Em Promoção</label>
                    <label><input type="radio" name="category" value="">Não Atribuído</label>
                </div>
            </div>
            <div class="section">
                <label class="label-font-style" for="created_at">Data<abbr title="campo obrigatório">*</abbr></label>
                <input class="" id="datepicker" type="text" name="created_at" required>
            </div>
            <div class="section">
                <label class="label-font-style" for="created_at">Imagem</label>
                <input class="input-width-50" id="piture" type="text" name="picture">
            </div>
            <div class="section">
                <label class="label-font-style d-flex" for="content">Conteúdo<abbr class="d-flex justify-content-end " title="campo obrigatório">*</abbr></label>
                <div class="d-flex flex-column align-items-center"><textarea name="content"></textarea></div>
            </div>
            <div class="section  d-flex flex-column align-items-center">
                <button class="cor-laranja pagination-font-style" type="submit">Guardar</button>
            </div>
        </form>