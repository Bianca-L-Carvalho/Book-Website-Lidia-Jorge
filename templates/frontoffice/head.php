<?php

$query = 'SELECT * FROM posts where page="books"';
$sql = $pdo->prepare($query);


if ($sql->execute()) {

    $submenu = $sql->fetchAll(PDO::FETCH_ASSOC);
} else {
    $submenu = [];
}

// carosel 
$query = 'SELECT * FROM posts where page="home" and section="carosel" ';
$sql = $pdo->prepare($query);


if ($sql->execute()) {

    $carosel = $sql->fetchAll(PDO::FETCH_ASSOC);
} else {
    $carosel = [];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo PAGE_TITLE; ?>
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/sections.css">
    <link rel="stylesheet" href="public/css/colors.css">
    <link rel="stylesheet" href="public/css/fonts/fonts.css">
    <link rel="stylesheet" href="public/css/util.css">
    <link rel="stylesheet" href="public/css/buttons.css">
    <link rel="stylesheet" href="public/css/head.css">
    <link rel="stylesheet" href="public/css/home.css">
    <link rel="stylesheet" href="public/css/page_author.css">
    <link rel="stylesheet" href="public/css/page_book.css">
    <link rel="stylesheet" href="public/css/foot.css">
    <link rel="stylesheet" href="public/css/page_contacts.css">
    <link rel="stylesheet" href="public/css/page_news.css">
    <link rel="stylesheet" href="public/css/backoffice.css">

    <!-- -->
    <link rel="stylesheet" href="public/css/style.css">

</head>

<body>
    <header>
        <div class="">
            <div id="carouselExampleSlidesOnly" class="carousel slide p-0" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="public/images/cabecalho1.jpg" class="desktop-d-none w-100" alt="image 1">
                        <img src="public/images_desktop/cabecalho1.jpg" class="w-100 d-none desktop-d-block" alt="image 1">
                        <div class="desktop-carousel-text">
                            <h2 class="category-font"><?php echo $carosel[0]["category"]; ?></h2>
                            <h3 class="header-banner-title"><?php echo $carosel[0]["title"]; ?></h3>
                            <b class="header-banner-text"><?php echo $carosel[0]["content"]; ?></b>
                            <a href="<?php echo url_generate(['route' => 'book1']); ?>"><img class="banner-button-toKnowMore buttonOrange" src="public/images_desktop/sabermais1.svg" alt="buttonimage">
                                <img class="banner-button-toKnowMore buttonGrey" src="public/images_desktop/sabermais2.svg" alt="buttonimage">
                            </a>
                        </div>
                        <div></div>
                    </div>
                    <div class="carousel-item">
                        <img src="public/images/cabecalho2.jpg" class="desktop-d-none w-100" alt="image 1">
                        <img src="public/images_desktop/cabecalho2.jpg" class="w-100 d-none desktop-d-block" alt="image 2">
                        <div class="carousel-text desktop-carousel-text">
                            <h3 class="header-banner-title"><?php echo $carosel[1]["title"]; ?></h3>
                            <b class="header-banner-text"><?php echo $carosel[1]["content"]; ?></b>
                            <a href="<?php echo url_generate(['route' => 'book2']); ?>"> <img class="banner-button-toKnowMore buttonOrange" src="public/images_desktop/sabermais1.svg" alt="buttonimage">
                                <img class="banner-button-toKnowMore buttonGrey" src="public/images_desktop/sabermais2.svg" alt="buttonimage"></a>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="public/images/cabecalho3.jpg" class="desktop-d-none w-100" alt="image 3">
                        <img src="public/images_desktop/cabecalho3.jpg" class="w-100 d-none desktop-d-block" alt="image 3">
                        <div class="carousel-text desktop-carousel-text">
                            <h3 class="header-banner-title"><?php echo $carosel[2]["title"]; ?></h3>
                            <b class="header-banner-text"><?php echo $carosel[2]["content"]; ?></b>
                            <a href="<?php echo url_generate(['route' => 'book3']);?>"><img class="banner-button-toKnowMore buttonOrange" src="public/images_desktop/sabermais1.svg" alt="buttonimage">
                                <img class="banner-button-toKnowMore buttonGrey" src="public/images_desktop/sabermais2.svg" alt="buttonimage"></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="public/images/cabecalho4.jpg" class="desktop-d-none w-100" alt="image 4">
                        <img src="public/images_desktop/cabecalho4.jpg" class="w-100 d-none desktop-d-block" alt="image 4">
                        <div class="carousel-text desktop-carousel-text">
                            <h3 class="header-banner-title"><?php echo $carosel[3]["title"]; ?></h3>
                            <b class="header-banner-text"><?php echo $carosel[3]["content"]; ?></b>
                            <a href="<?php echo url_generate(['route' => 'book4']); ?>"><img class="banner-button-toKnowMore buttonOrange" src="public/images_desktop/sabermais1.svg" alt="buttonimage">
                                <img class="banner-button-toKnowMore buttonGrey" src="public/images_desktop/sabermais2.svg" alt="buttonimage"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" header-position white-box-header">
                <div class="d-flex margin-top-70 padding-35">
                    <div class="col-10 desktop-col-12 desktop-d-flex desktop-justify-center ">
                        <h1 class="leter-type-t1"><?php echo PAGE_TITLE; ?></h1>
                    </div>

                    <div class="col-2 menu-open-image desktop-d-none imageOpen">
                        <img src="public/images_desktop/menu.svg" alt="menu">
                    </div>
                    <div class="col-2 menu-close-image desktop-d-none imageClose">
                        <img src="public/images_desktop/fechar.svg" alt="menu">
                    </div>
                </div>
                <div class="horizontal-line"></div>
                <nav class="bg-color-white desktop-d-none">
                    <div class="menu-style col-12 menuList">
                        <ul class="padding-35">
                            <li>
                                <a class="menu" class="font-1" href="<?php echo url_generate(['route' => 'home']); ?>">HOME</a>
                            </li>
                            <li>
                                <a class="menu" href="<?php echo url_generate(['route' => 'author']); ?>">AUTOR</a>
                            </li>
                            <li class="menu ItemBooks">LIVROS
                                <ul class="submenu submenu-padding menu-border submenuItems ">
                                    <li>
                                        <a class="submenu submenu-padding" href="<?php echo url_generate(['route' => 'book1']); ?>"><?php echo $submenu[0]["title"]; ?></a>
                                    </li>
                                    <li>
                                        <a class="submenu submenu-padding" href="<?php echo url_generate(['route' => 'book2']); ?>"><?php echo $submenu[1]["title"]; ?></a>
                                    </li>
                                    <li>
                                        <a class="submenu submenu-padding" href="<?php echo url_generate(['route' => 'book3']); ?>"><?php echo $submenu[2]["title"]; ?></a>
                                    </li>
                                    <li>
                                        <a class="submenu submenu-padding" href="<?php echo url_generate(['route' => 'book4']); ?>"><?php echo $submenu[3]["title"]; ?></a>
                                    </li>
                                    <li>
                                        <a class="submenu submenu-padding" href="<?php echo url_generate(['route' => 'book5']); ?>"><?php echo $submenu[4]["title"]; ?></a>
                                    </li>
                                    <li>
                                        <a class="submenu submenu-padding" href="<?php echo url_generate(['route' => 'book6']); ?>"><?php echo $submenu[5]["title"]; ?></a>
                                    </li>
                                </ul>
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
                <!-- Desktop -->
                <nav class="d-none desktop-d-block" id="open-menu">
                    <div class="menu-style col-12" id="menuList">
                        <ul class="padding-35 desktop-d-flex desktop-justify-center">
                            <li>
                                <a class="menu" class="font-1" href="<?php echo url_generate(['route' => 'home']); ?>">HOME</a>
                            </li>
                            <li>
                                <a class="menu" href="<?php echo url_generate(['route' => 'author']); ?>">AUTOR</a>
                            </li>
                            <li class="menu ItemBooks">LIVROS
                            </li>
                            <li>
                                <a class="menu" href="<?php echo url_generate(['route' => 'news']); ?>">IMPRENSA</a>
                            </li>
                            <li>
                                <a class="menu" href="<?php echo url_generate(['route' => 'contacts']); ?>">CONTACTOS</a>
                            </li>
                        </ul>
                        <div class="submenu-container">
                            <ul class="submenu desktop-submenu-color submenu-padding menu-border submenuItems">
                                <li>
                                    <a class="submenu submenu-padding" href="<?php echo url_generate(['route' => 'book1']); ?>"><?php echo $submenu[0]["title"]; ?></a>
                                </li>
                                <li>
                                    <a class="submenu submenu-padding" href="<?php echo url_generate(['route' => 'book2']); ?>"><?php echo $submenu[1]["title"]; ?></a>
                                </li>
                                <li>
                                    <a class="submenu submenu-padding" href="<?php echo url_generate(['route' => 'book3']); ?>"><?php echo $submenu[2]["title"]; ?></a>
                                </li>
                                <li>
                                    <a class="submenu submenu-padding" href="<?php echo url_generate(['route' => 'book4']); ?>"><?php echo $submenu[3]["title"]; ?></a>
                                </li>
                                <li>
                                    <a class="submenu submenu-padding" href="<?php echo url_generate(['route' => 'book5']); ?>"><?php echo $submenu[4]["title"]; ?></a>
                                </li>
                                <li>
                                    <a class="submenu submenu-padding" href="<?php echo url_generate(['route' => 'book6']); ?>"><?php echo $submenu[5]["title"]; ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main>