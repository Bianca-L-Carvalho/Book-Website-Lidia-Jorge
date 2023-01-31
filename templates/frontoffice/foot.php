<?php

$query = 'SELECT * FROM posts where page="contacts"';
$sql = $pdo->prepare($query);


if ($sql->execute()) {

    $posts = $sql->fetchAll(PDO::FETCH_ASSOC);
} else {
    $posts = [];
}
?>


</main>
<footer>
    <div class="padding-35">
        <div class="horizontal-line line-margin-60"></div>
        <!-- Desktop -->
        <nav class="d-none desktop-d-block">
            <div class="menu-style col-12" id="menuList">
                <ul class="padding-35 desktop-d-flex desktop-justify-center">
                    <li>
                        <a class="menu" href="<?php echo url_generate(['route' => 'home']); ?>">HOME</a>
                    </li>
                    <li>
                        <a class="menu" href="<?php echo url_generate(['route' => 'author']); ?>">AUTOR</a>
                    </li>
                    <li><a class="menu open" href="">LIVROS</a>
                    </li>
                    <li>
                        <a class="menu" href="<?php echo url_generate(['route' => 'news']); ?>">IMPRENSA</a>
                    </li>
                    <li>
                        <a class="menu" href="<?php echo url_generate(['route' => 'contacts']); ?>">CONTACTOS</a>
                    </li>
                </ul>
            </div>
        </nav>



        <div class="horizontal-line line-margin-60 d-none desktop-d-block"></div>
        <div class="desktop-d-flex desktop-justfy-space-ard desktop-foot-margin">
            <div class="contacts-footer d-flex flex-column align-items-center desktop-align-start padding-25">
                <h2 class="leter-type-t1">Contactos</h2>
                <div class="desktop-d-flex">
                    <?php foreach ($posts as  $post) {
                        if ($post["section"] != "timetable") { ?>
                            <div class="desktop-contacts desktop-d-flex desktop-flex-column desktop-align-start">
                                <h3 class="contacts-title"><?php echo $post["title"] ?></h3>
                                <div class="contacts-content"><?php echo $post["content"] ?></div>
                            </div>
                    <?php
                        }
                    } ?>
                </div>
            </div>
            <div>
                <div class="icons-footer">
                    <div class="d-flex flex-column align-items-center">
                        <h3 class="leter-type-t1">Siga-me nas redes sociais</h3>
                        <div class="social-media-icons">
                            <img class="buttonOrange" src="public/images_desktop/instagram1.svg" alt="Facebook icon">
                            <img class="buttonGrey" src="public/images_desktop/instagram2.svg" alt="Facebook icon">

                            <img class="buttonOrange " src="public/images_desktop/facebook1.svg" alt="Facebook icon">
                            <img class=" buttonGrey" src="public/images_desktop/facebook2.svg" alt="Facebook icon">

                            <img class="buttonOrange " src="public/images_desktop/linkedin1.svg" alt="Linkedin icon">
                            <img class=" buttonGrey" src="public/images_desktop/linkedin2.svg" alt="Linkedin icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" d-flex flex-column align-items-center desktop-flex-row desktop-justfy-space-ard ">
            <div class="icons-consumers">
                <img src="public/images_desktop/livroreclamacoes.svg" alt="Complaint Book icon">
                <img src="public/images_desktop/ralc.svg" alt="ralc icon">
            </div>
            <div class="pl-cookies-text padding-25 text-center">
                <p class="contacts-content">Política de Cookies</p>
                <p class="contacts-content ">Copyright © 2022 Grupo MediaMaster. Todos os direitos reservados.</p>
            </div>
        </div>
    </div>
    </div>
</footer>

<script src="public/js/frontoffice.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>