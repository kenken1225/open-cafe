<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"OPEN CAFE"</title>
    <meta name="open cafe" content="カフェ開業">
    <?php wp_head(); ?>
</head>

<body class="is-drawerActive">
    <div class="body-lg-wrapper">
        <!-- ドロワー -->
        <header id="js-header" class="header">
            <div id="js-drawer-bg" class="drawer-bg"></div>
            <div id="header" class="header-container">
                <p class="header-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo-link"></a>
                </p>
                <nav class="header-nav-menu" id="nav-active">
                    <?php
                    //.header-listを置き換えて、PC用メニューを動的に表示する
                    wp_nav_menu(
                        array(
                            'depth' => 1,
                            'theme_location' => 'global', //グローバルメニューをここに表示すると指定
                            'container' => 'false',
                            'menu_class' => 'header-list',
                        )
                    );
                    ?>
                    <ul class="header-nav">
                        <li class="header-nav-item">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="header-nav-item-link">
                                <span class="header-nav-item-en">TOP</span>
                                <span class="header-nav-item-jp">トップ</span>
                            </a>
                        </li>
                        <li class="header-nav-item">
                            <a href="<?php echo esc_url(home_url('/concept')); ?>" class="header-nav-item-link">
                                <span class="header-nav-item-en">CONCEPT</span>
                                <span class="header-nav-item-jp">コンセプト</span>
                            </a>
                        </li>
                        <li class="header-nav-item">
                            <a href="<?php echo esc_url(home_url('/menu')); ?>" class="header-nav-item-link">
                                <span class="header-nav-item-en">MENU</span>
                                <span class="header-nav-item-jp">メニュー</span>
                            </a>
                        </li>
                        <li class="header-nav-item">
                            <a href="<?php echo esc_url(home_url('/archive')); ?>" class="header-nav-item-link">
                                <span class="header-nav-item-en">NEWS</span>
                                <span class="header-nav-item-jp">ニュース</span>
                            </a>
                        </li>
                        <li class="header-nav-item">
                            <a href="<?php echo esc_url(home_url('/shop')); ?>" class="header-nav-item-link">
                                <span class="header-nav-item-en">SHOP</span>
                                <span class="header-nav-item-jp">ショップ</span>
                            </a>
                        </li>
                        <li class="header-nav-item">
                            <a href="<?php echo esc_url(home_url('/gift')); ?>" class="header-nav-item-link">
                                <span class="header-nav-item-en">GIFT</span>
                                <span class="header-nav-item-jp">ギフト</span>
                            </a>
                        </li>
                        <li class="header-nav-item">
                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="header-nav-item-link">
                                <span class="header-nav-item-en">CONTACT</span>
                                <span class="header-nav-item-jp">お問い合わせ</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="header-sns">
                    <ul class="header-sns-list">
                        <li class="header-sns-item">
                            <i class="fa-brands fa-twitter header-sns-item-link" aria-label="twitter"></i>
                        </li>
                        <li class="header-sns-item">
                            <i class="fa-brands fa-instagram header-sns-item-link" aria-label="facebook"></i>
                        </li>
                        <li class="header-sns-item">
                            <i class="fa-brands fa-youtube header-sns-item-link" aria-label="youtube"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <!-- ドロワーボタン -->
        <div id="toggle">
            <div id="toggle-box">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- ヘッダースマホ版 -->
        <div class="header-sp">
            <p href="#" class="header-sp-logo">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo_light.png" alt="header-sp-logo" class="header-sp-logo-img">
            </p>
        </div>