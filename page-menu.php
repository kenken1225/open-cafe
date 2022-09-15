<?php
/*
Template Name: page-menu（メニューページ）
*/
?>


<!-- Header -->
<?php get_header(); ?>

<!----------------------------
 Menu
-------------------------------->
<main>
    <!-- トップ（メイン） -->
    <div class="top-view">
        <div class="top-view-wrapper">
            <h1 class="top-view-title-box">
                <p class="h2-title top-view-title">MENU</p>
                <p class="h2-subtitle top-view-subtitle ">メニュー</p>
            </h1>
            <picture class="top-view-img">
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() ?>/img/Concept/img_firstview_menu_sp">
                <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_firstview_menu.png" alt="スライダー画像2">
            </picture>
        </div>
    </div>

    <!-- パンクズリスト -->
    <div class="l-breadcrumbs">
        <div clxass="p-breadcrumbs">
            <div class="p-breadcrumbs-container">
                <?php if (function_exists('bcn_display')) : ?>
                    <!-- breadcrumb -->
                    <div class="breadcrumb">
                        <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述
                        ?>
                    </div><!-- /breadcrumb -->
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!----------------
    Menu Tab
    ------------------->
    <div class="l-menus-tab-wrapper">
        <div class="l-menus-tab-box">
            <ul class="l-menus-tab-list" id="js-tab">
                <li class="l-menu-tabs active">
                    <div class="l-menu-tab">
                        <span class="l-menu-text">パスタ</span>
                    </div>
                </li>
                <li class="l-menu-tabs">
                    <div class="l-menu-tab">
                        <span class="l-menu-text">サラダ</span>
                    </div>
                </li>
                <li class="l-menu-tabs">
                    <div class="l-menu-tab">
                        <span class="l-menu-text">パン& <br>スイーツ </span>
                    </div>
                </li>
                <li class="l-menu-tabs">
                    <div class="l-menu-tab">
                        <span class="l-menu-text">ドリンク</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>

     <!----------------
    Menu List
    ------------------->

    <div class="l-menu-wrapper">
        <!-- Pasta -->
        <div class="l-menu-box active">
            <ul class="l-menu-list">
                <li class="l-menu-item">
                    <article class="l-menu-card">
                        <div class="l-menu-card-box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_pasta1.png" alt="" class="l-menu-card-img">
                        </div>
                        <div class="l-menu-card-body">
                            <p class="l-menu-card-text">1テキストテキストテキストの○○○○風パスタ</p>
                            <p class="l-menu-card-price">780 yen</p>
                        </div>
                    </article>
                </li>
                <li class="l-menu-item">
                    <article class="l-menu-card">
                        <div class="l-menu-card-box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_pasta2.png" alt="" class="l-menu-card-img">
                        </div>
                        <div class="l-menu-card-body">
                            <p class="l-menu-card-text">2テキストテキストテキストの○○○○風パスタ</p>
                            <p class="l-menu-card-price">780 yen</p>
                        </div>
                    </article>
                </li>
                <li class="l-menu-item">
                    <article class="l-menu-card">
                        <div class="l-menu-card-box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_pasta3.png" alt="" class="l-menu-card-img">
                        </div>
                        <div class="l-menu-card-body">
                            <p class="l-menu-card-text">3テキストテキストテキストの○○○○風パスタ</p>
                            <p class="l-menu-card-price">1000 yen</p>
                        </div>
                    </article>
                </li>
                <li class="l-menu-item">
                    <article class="l-menu-card">
                        <div class="l-menu-card-box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_pasta4.png" alt="" class="l-menu-card-img">
                        </div>
                        <div class="l-menu-card-body">
                            <p class="l-menu-card-text">4テキストテキストテキストの○○○○風パスタ</p>
                            <p class="l-menu-card-price">800 yen</p>
                        </div>
                    </article>
                </li>
                <li class="l-menu-item">
                    <article class="l-menu-card">
                        <div class="l-menu-card-box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_pasta5.png" alt="" class="l-menu-card-img">
                        </div>
                        <div class="l-menu-card-body">
                            <p class="l-menu-card-text">1○○○○風サラダ</p>
                            <p class="l-menu-card-price">800 yen</p>
                        </div>
                    </article>
                </li>
            </ul>
        </div>

        <!-- Salad -->
        <div class="l-menu-box" >
            <ul class="l-menu-list">
                <li class="l-menu-item">
                    <article class="l-menu-card">
                        <div class="l-menu-card-box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_salad1.png" alt="" class="l-menu-card-img">
                        </div>
                        <div class="l-menu-card-body">
                            <p class="l-menu-card-text">2○○○○風サラダ</p>
                            <p class="l-menu-card-price">780 yen</p>
                        </div>
                    </article>
                </li>
                <li class="l-menu-item">
                    <article class="l-menu-card">
                        <div class="l-menu-card-box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_salad2.png" alt="" class="l-menu-card-img">
                        </div>
                        <div class="l-menu-card-body">
                            <p class="l-menu-card-text">2テキストテキストテキストの○○○○風パスタ</p>
                            <p class="l-menu-card-price">780 yen</p>
                        </div>
                    </article>
                </li>
            </ul>
        </div>

        <!-- Bread & Desert -->
        <div class="l-menu-box" >
            <ul class="l-menu-list">
                <li class="l-menu-item">
                    <article class="l-menu-card">
                        <div class="l-menu-card-box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_sweets1.png" alt="" class="l-menu-card-img">
                        </div>
                        <div class="l-menu-card-body">
                            <p class="l-menu-card-text">チョコマカロン</p>
                            <p class="l-menu-card-price">220 yen</p>
                        </div>
                    </article>
                </li>
                <li class="l-menu-item">
                    <article class="l-menu-card">
                        <div class="l-menu-card-box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_sweets2.png" alt="" class="l-menu-card-img">
                        </div>
                        <div class="l-menu-card-body">
                            <p class="l-menu-card-text">チョコクロ</p>
                            <p class="l-menu-card-price">280 yen</p>
                        </div>
                    </article>
                </li>
                <li class="l-menu-item">
                    <article class="l-menu-card">
                        <div class="l-menu-card-box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_sweets3.png" alt="" class="l-menu-card-img">
                        </div>
                        <div class="l-menu-card-body">
                            <p class="l-menu-card-text">ホワイトチョコサンド</p>
                            <p class="l-menu-card-price">350 yen</p>
                        </div>
                    </article>
                </li>
                <li class="l-menu-item">
                    <article class="l-menu-card">
                        <div class="l-menu-card-box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_sweets4.png" alt="" class="l-menu-card-img">
                        </div>
                        <div class="l-menu-card-body">
                            <p class="l-menu-card-text">チョコサンド</p>
                            <p class="l-menu-card-price">300 yen</p>
                        </div>
                    </article>
                </li>
                <li class="l-menu-item">
                    <article class="l-menu-card">
                        <div class="l-menu-card-box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_sweets5.png" alt="" class="l-menu-card-img">
                        </div>
                        <div class="l-menu-card-body">
                            <p class="l-menu-card-text">ホワイトアイスサンド</p>
                            <p class="l-menu-card-price">780 yen</p>
                        </div>
                    </article>
                </li>

            </ul>
        </div>

        <!-- Drink -->
        <div class="l-menu-box">
            <ul class="l-menu-list">
                <li class="l-menu-item">
                    <article class="l-menu-card">
                        <div class="l-menu-card-box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_drink1.png" alt="" class="l-menu-card-img">
                        </div>
                        <div class="l-menu-card-body">
                            <p class="l-menu-card-text">ストレート</p>
                            <p class="l-menu-card-price">220 yen</p>
                        </div>
                    </article>
                </li>
                <li class="l-menu-item">
                    <article class="l-menu-card">
                        <div class="l-menu-card-box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_drink2.png" alt="" class="l-menu-card-img">
                        </div>
                        <div class="l-menu-card-body">
                            <p class="l-menu-card-text">アップル</p>
                            <p class="l-menu-card-price">280 yen</p>
                        </div>
                    </article>
                </li>
                <li class="l-menu-item">
                    <article class="l-menu-card">
                        <div class="l-menu-card-box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_drink3.jpg" alt="" class="l-menu-card-img">
                        </div>
                        <div class="l-menu-card-body">
                            <p class="l-menu-card-text">いちごミルク</p>
                            <p class="l-menu-card-price">280 yen</p>
                        </div>
                    </article>
                </li>
                <li class="l-menu-item">
                    <article class="l-menu-card">
                        <div class="l-menu-card-box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_drink4.png" alt="" class="l-menu-card-img">
                        </div>
                        <div class="l-menu-card-body">
                            <p class="l-menu-card-text">オレンジジュース</p>
                            <p class="l-menu-card-price">280 yen</p>
                        </div>
                    </article>
                </li>
                <li class="l-menu-item">
                    <article class="l-menu-card">
                        <div class="l-menu-card-box">
                            <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_drink5.png" alt="" class="l-menu-card-img">
                        </div>
                        <div class="l-menu-card-body">
                            <p class="l-menu-card-text">カフェオレ</p>
                            <p class="l-menu-card-price">280 yen</p>
                        </div>
                    </article>
                </li>
            </ul>
        </div>
    </div>


    <!-- アクセス -->
    <div class="access-lg-wrapper access-lg-wrapper-concept ">
        <section class="access">
            <div class="access-wrapper">
                <h2 class="h2-title access-title">ACCESS</h2>
                <p class="h2-subtitle">アクセス</p>
                <div class="access-bg-box">
                    <div class="access-sub-wrapper">
                        <div class="access-map">
                            <div class="access-map-container">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.037028863611!2d139.578023915201!3d35.70070638651103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018ee39b555205f%3A0xabb26a0a2fbda595!2z44CSMTgwLTAwMDMg5p2x5Lqs6YO95q2m6JS16YeO5biC5ZCJ56Wl5a-65Y2X55S677yR5LiB55uu!5e0!3m2!1sja!2sjp!4v1659531177336!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="access-tables">
                            <dl class="access-table-box">
                                <div class="access-table-item">
                                    <dt class="access-table-content">住所</dt>
                                    <dd class="access-table-description">〒000-0000 <br>
                                        東京都武蔵野市吉祥寺南町一丁目</dd>
                                </div>
                                <div class="access-table-item">
                                    <dt class="access-table-content">TEL</dt>
                                    <dd class="access-table-description">0123-456-789</dd>
                                </div>
                                <div class="access-table-item">
                                    <dt class="access-table-content">Mail</dt>
                                    <dd class="access-table-description">example@mail.com</dd>
                                </div>
                            </dl>
                            <dl class="access-table-box">
                                <div class="access-table-item">
                                    <dt class="access-table-content">営業時間</dt>
                                    <dd class="access-table-description">7:00〜21:00 <br>
                                        ※ラストオーダー 20:30</dd>
                                </div>
                                <div class="access-table-item">
                                    <dt class="access-table-content">定休日</dt>
                                    <dd class="access-table-description">水曜日</dd>
                                </div>
                                <div class="access-table-item">
                                    <dt class="access-table-content">座席</dt>
                                    <dd class="access-table-description">テーブル20席 ／ カウンター席6席</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
</main>

<!-- Footer -->
<?php get_footer(); ?>