<?php
/*
Template Name: home-page
*/
?>


<?php
/*
Github- test
*/
?>


<?php get_header(); ?>

<main>
    <!-- トップ（メイン） -->
    <div class="main-lg-wrapper">
        <div class="main-menu">
            <div class="main-menu-container" id="js-main-menu">
                <h1 class="main-menu-logo">
                    <a href="#" class="main-menu-logo-link">
                        <img src="<?php echo get_template_directory_uri() ?>/img/logo_dark.png" alt="main-logo" lass="main-menu-logo-img">
                    </a>
                </h1>
                <div class="main-nav-menus">
                    <div class="main-menus-wrapper">
                        <div class="main-nav-menu">
                            <ul class="main-nav">
                                <li class="main-nav-item">
                                    <a href="<?php echo home_url('/'); ?>" class="main-nav-item-link">
                                        <span class="main-nav-item-en">TOP</span>
                                        <span class="main-nav-item-jp">トップ</span>
                                    </a>
                                </li>
                                <li class="main-nav-item">
                                    <a href="<?php echo home_url('/concept'); ?>" class="main-nav-item-link">
                                        <span class="main-nav-item-en">CONCEPT</span>
                                        <span class="main-nav-item-jp">コンセプト</span>
                                    </a>
                                </li>
                                <li class="main-nav-item">
                                    <a href="<?php echo home_url('/menu'); ?>" class="main-nav-item-link">
                                        <span class="main-nav-item-en">MENU</span>
                                        <span class="main-nav-item-jp">メニュー</span>
                                    </a>
                                </li>
                                <li class="main-nav-item">
                                    <a href="<?php echo home_url('/archive'); ?>" class="main-nav-item-link">
                                        <span class="main-nav-item-en">NEWS</span>
                                        <span class="main-nav-item-jp">ニュース</span>
                                    </a>
                                </li>
                                <li class="main-nav-item">
                                    <a href="<?php echo home_url('/shop'); ?>" class="main-nav-item-link">
                                        <span class="main-nav-item-en">SHOP</span>
                                        <span class="main-nav-item-jp">店舗情報</span>
                                    </a>
                                </li>
                                <li class="main-nav-item">
                                    <a href="<?php echo home_url('/gift'); ?>" class="main-nav-item-link">
                                        <span class="main-nav-item-en">GIFT</span>
                                        <span class="main-nav-item-jp">ギフト・贈り物</span>
                                    </a>
                                </li>
                                <li class="main-nav-item">
                                    <a href="<?php echo home_url('/contact'); ?>" class="main-nav-item-link">
                                        <span class="main-nav-item-en">CONTACT</span>
                                        <span class="main-nav-item-jp">お問い合わせ</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="main-sns">
                            <ul class="main-sns-list">
                                <li class="main-sns-item">
                                    <i class="fa-brands fa-twitter main-sns-item-link" aria-label="twitter"></i>
                                </li>
                                <li class="main-sns-item">
                                    <i class="fa-brands fa-instagram main-sns-item-link" aria-label="facebook"></i>
                                </li>
                                <li class="main-sns-item">
                                    <i class="fa-brands fa-youtube main-sns-item-link" aria-label="youtube"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- メインビジュアル -->
        <div class="main-visual">
            <!-- Swiper START -->
            <div class="wrap">
                <div class="swiper-container">
                    <!-- メイン表示部分 -->
                    <div class="swiper-wrapper">
                        <!-- 各スライド -->
                        <div class="swiper-slide">
                            <picture class="slide-img">
                                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() ?>/img/TOP/img_mainvisual1_sp.png">
                                <img src="<?php echo get_template_directory_uri() ?>/img/TOP/img_mainvisual1.png" alt="スライダー画像1">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture class="slide-img">
                                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() ?>/img/TOP/img_mainvisual2_sp.png">
                                <img src="<?php echo get_template_directory_uri() ?>/img/TOP/img_mainvisual2.png" alt="スライダー画像2">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture class="slide-img">
                                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() ?>/img/TOP/img_mainvisual3_sp.png">
                                <img src="<?php echo get_template_directory_uri() ?>/img/TOP/img_mainvisual3.png" alt="スライダー画像3">
                            </picture>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <!-- Swiper END -->
            <div class="main-visual-title">
                <p class="sub-visual-title">パスタとコーヒーが<br class=" only-pc only-tab">とってもおいしい、<br class="only-tab">ほっと落ち着くのんびり空間。</p>
            </div>
            <div class="main-visual-boxes">
                <div class="main-visual-box">
                    <?php query_posts('posts_per_page=1'); ?>
                    <?php if (have_posts()) : ?>
                        <?php
                        //記事数ループ
                        while (have_posts()) :
                            the_post();
                        ?>
                            <article class="main-visual-card">
                                <a href="<?php the_permalink(); //記事のリンクを表示
                                            ?>" class="main-visual-card-link">
                                    <p class="p-tag2">
                                        <span class="p-tag_text2">テスト</span>
                                    </p>
                                    <div class="main-visual-card-link-img">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            echo '<img src="' . get_template_directory_uri() . '/img/TOP/img_card.png" alt="">';
                                        } ?>
                                    </div>
                                    <div class="main-visual-card-link-content">
                                        <!-- /pickup-item-content -->
                                        <p class="main-visual-box-text"><?php echo wp_trim_words(get_the_content(), 40, '……'); ?>
                                        </p>
                                        <p class="main-visual-box-date"> <time datetime="2022-09-01"></time>2022-09-01
                                        </p>
                                    </div>
                                </a>
                            </article>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- コンセプト -->
    <div class="concept-lg-wrapper">
        <section class="concept" id="concept">
            <div class="concept-wrapper">
                <div class="concept-box">
                    <h2 class="h2-title h2-concept">CONCEPT</h2>
                    <p class="h2-subtitle h2-concept ">当店のこだわり</p>
                    <p class="concept-title">最高のコーヒーと、<br>時の流れを味わうことができる<br>手作りカフェ</p>
                    <p class="concept-subtitle">ダミー_国内外から賞賛を <br>
                        受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。 <br>
                        ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
                        <br>
                        <br>
                        ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
                    </p>
                    <div class="btn-common-box btn-common-box-right">
                        <a href="<?php echo home_url('/concept'); ?>" class="btn03 pushright"><span>詳しくはこちら</span></a>
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/img/TOP/img_concept.png" alt="" class="concept-img">
            </div>
        </section>
    </div>


    <!-- Special Set -->
    <div class="set-lg-wrapper">
        <section class="set" id="set">
            <div class="set-lg-container">
                <h2 class="h2-box">
                    <p class="h2-title">SPECIAL LUNCH SET</p>
                    <p class="h2-subtitle">今月のスペシャルランチセット</p>
                </h2>
                <div class="set-wrapper">
                    <div class="set-wrapper-box">
                        <p class="set-wrapper-ballon">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icons/img_balloon-special-lunch-set.png" alt="">
                        </p>
                        <picture class="set-wrapper-head">
                            <source media="(max-width: 767px)" srcset="/img/icons/img_ribbon-text_sp.png">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icons/img_ribbon-text.png" alt="">
                        </picture>
                        <div class="set-items-wrapper">
                            <ul class="set-items-list">
                                <li class="set-items">
                                    <div class="set-items-img">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_special_pasta1.png" alt="" class="set-item">
                                    </div>
                                    <div class="set-items-box">
                                        <p class="set-items-text-icon">A</p>
                                        <p class="set-items-text">テキストテキストの○○風パスタ</p>
                                    </div>
                                </li>
                                <li class="set-items">
                                    <div class="set-items-img">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_special_pasta2.png" alt="" class="set-item">
                                    </div>
                                    <div class="set-items-box">
                                        <p class="set-items-text-icon">B</p>
                                        <p class="set-items-text">テキストテキストの○○風パスタ</p>
                                    </div>
                                </li>
                                <li class="set-items">
                                    <div class="set-items-img">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_special_pasta3.png" alt="" class="set-item">
                                    </div>
                                    <div class="set-items-box">
                                        <p class="set-items-text-icon">C</p>
                                        <p class="set-items-text">テキストテキストの○○風パスタ</p>
                                    </div>
                                </li>
                                <li class="set-items">
                                    <div class="set-items-img">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_special_pasta4.png" alt="" class="set-item">
                                    </div>
                                    <div class="set-items-box">
                                        <p class="set-items-text-icon">D</p>
                                        <p class="set-items-text">テキストテキストの○○風パスタ</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="set-wrapper-menus">
                                <div class="set-wrapper-menu">
                                    <picture class="set-wrapper-img">
                                        <source media="(max-width: 767px)" srcset="/img/TOP/img_lunch-detail_sp.png">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/TOP/img_lunch-detail.png" alt="">
                                    </picture>
                                    <div class="set-wrapper-detail">
                                        <p class="set-wrapper-text">スペシャルランチセット <br> 【選べる3品】</p>
                                        <p class="set-wrapper-price">1,280 yen</p>
                                        <p class="set-wrapper-time">(11:00 AM〜14:00 PMまで)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Grand Menu -->
    <div class="menu-lg-wrapper">
        <section class="menu">
            <h2 class="h2-title">GRAND MENU</h2>
            <p class="h2-subtitle">今月のスペシャルランチセット</p>
            <div class="menu-wrapper inner">
                <div class="menu-box">
                    <h3 class="menu-items-title">パスタ</h3>
                    <div class="menu-wrapper-box">
                        <ul class="menu-wrapper-items">
                            <li class="menu-items">
                                <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_pasta1.png" alt="#" class="menu-item">
                                <p class="menu-items-text">テキストテキストテキストの○○○○風パスタ</p>
                                <p class="menu-items-price">780 yen </p>
                            </li>
                            <li class="menu-items">
                                <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_pasta2.png" alt="#" class="menu-item">
                                <p class="menu-items-text">テキストテキストテキストの○○○○風パスタ</p>
                                <p class="menu-items-price">780 yen </p>
                            </li>
                            <li class="menu-items">
                                <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_pasta3.png" alt="#" class="menu-item">
                                <p class="menu-items-text">テキストテキストテキストの○○○○風パスタ</p>
                                <p class="menu-items-price">780 yen </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="menu-box">
                    <h3 class="menu-items-title">サラダ</h3>
                    <div class="menu-wrapper-box">
                        <ul class="menu-wrapper-items">
                            <li class="menu-items">
                                <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_salad1.png" alt="#" class="menu-item">
                                <p class="menu-items-text">○○○○風サラダ</p>
                                <p class="menu-items-price">900 yen </p>
                            </li>
                            <li class="menu-items">
                                <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_salad2.png" alt="#" class="menu-item">
                                <p class="menu-items-text">○○○○風サラダ</p>
                                <p class="menu-items-price">900 yen </p>
                            </li>
                            <li class="menu-items">
                                <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_salad3.png" alt="#" class="menu-item">
                                <p class="menu-items-text">○○○○風サラダ</p>
                                <p class="menu-items-price">900 yen </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="menu-box">
                    <h3 class="menu-items-title">パン & スイーツ</h3>
                    <div class="menu-wrapper-box">
                        <ul class="menu-wrapper-items">
                            <li class="menu-items">
                                <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_sweets1.png" alt="#" class="menu-item">
                                <p class="menu-items-text">ホワイトマフィン</p>
                                <p class="menu-items-price">300 yen </p>
                            </li>
                            <li class="menu-items">
                                <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_sweets2.png" alt="#" class="menu-item">
                                <p class="menu-items-text">チョコサンド</p>
                                <p class="menu-items-price">550 yen </p>
                            </li>
                            <li class="menu-items">
                                <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_sweets3.png" alt="#" class="menu-item">
                                <p class="menu-items-text">チョコクリームサンド</p>
                                <p class="menu-items-price">700 yen </p>
                            </li>
                            <li class="menu-items">
                                <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_sweets4.png" alt="#" class="menu-item">
                                <p class="menu-items-text">ホワイトクロ</p>
                                <p class="menu-items-price">400 yen </p>
                            </li>
                            <li class="menu-items">
                                <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_sweets5.png" alt="#" class="menu-item">
                                <p class="menu-items-text">チョコマカロン</p>
                                <p class="menu-items-price">450 yen </p>
                            </li>
                            <li class="menu-items">
                                <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_drink.png" alt="#" class="menu-item">
                                <p class="menu-items-text">ストロベリークッキー</p>
                                <p class="menu-items-price">400 yen </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="menu-box">
                    <h3 class="menu-items-title">ドリンク</h3>
                    <div class="menu-drink-lg-wrapper">
                        <div class="menu-drink-wrapper">
                            <div class="menu-drink-img">
                                <img src="<?php echo get_template_directory_uri() ?>/img/menu/img_drink1.png" alt="" class="menu-drink">
                            </div>
                            <div class="menu-drink-wrapper">
                                <ul class="menu-drink-list-wrapper">
                                    <li class="menu-drink-list">
                                        <h4 class="menu-drink-cat">コーヒー</h4>
                                        <ul class="menu-drink-sublist">
                                            <li class="menu-drink-subitem">
                                                <p class="menu-drink-name">ブレンド</p>
                                                <p class="menu-drink-price">500 yen</p>
                                            </li>
                                        </ul>
                                        <ul class="menu-drink-sublist">
                                            <li class="menu-drink-subitem">
                                                <p class="menu-drink-name">カフェラテ</p>
                                                <p class="menu-drink-price">500 yen</p>
                                            </li>
                                        </ul>
                                        <ul class="menu-drink-sublist">
                                            <li class="menu-drink-subitem">
                                                <p class="menu-drink-name">豆乳ラテ</p>
                                                <p class="menu-drink-price">500 yen</p>
                                            </li>
                                        </ul>
                                        <ul class="menu-drink-sublist">
                                            <li class="menu-drink-subitem">
                                                <p class="menu-drink-name">カフェモカ</p>
                                                <p class="menu-drink-price">500 yen</p>
                                            </li>
                                        </ul>
                                        <ul class="menu-drink-sublist">
                                            <li class="menu-drink-subitem">
                                                <p class="menu-drink-name">キャラメルラテ</p>
                                                <p class="menu-drink-price">500 yen</p>
                                            </li>
                                        </ul>
                                        <ul class="menu-drink-sublist">
                                            <li class="menu-drink-subitem">
                                                <p class="menu-drink-name">バニララテ</p>
                                                <p class="menu-drink-price">500 yen</p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-drink-list">
                                        <h4 class="menu-drink-cat">紅茶</h4>
                                        <ul class="menu-drink-sublist">
                                            <li class="menu-drink-subitem">
                                                <p class="menu-drink-name">ストレート</p>
                                                <p class="menu-drink-price">500 yen</p>
                                            </li>
                                        </ul>
                                        <ul class="menu-drink-sublist">
                                            <li class="menu-drink-subitem">
                                                <p class="menu-drink-name">ミルク</p>
                                                <p class="menu-drink-price">500 yen</p>
                                            </li>
                                        </ul>
                                        <ul class="menu-drink-sublist">
                                            <li class="menu-drink-subitem">
                                                <p class="menu-drink-name">アップル</p>
                                                <p class="menu-drink-price">500 yen</p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-drink-list">
                                        <h4 class="menu-drink-cat">ソフトドリンク</h4>
                                        <ul class="menu-drink-sublist">
                                            <li class="menu-drink-subitem">
                                                <p class="menu-drink-name">バナナ</p>
                                                <p class="menu-drink-price">500 yen</p>
                                            </li>
                                        </ul>
                                        <ul class="menu-drink-sublist">
                                            <li class="menu-drink-subitem">
                                                <p class="menu-drink-name">オレンジ</p>
                                                <p class="menu-drink-price">500 yen</p>
                                            </li>
                                        </ul>
                                        <ul class="menu-drink-sublist">
                                            <li class="menu-drink-subitem">
                                                <p class="menu-drink-name">アップル</p>
                                                <p class="menu-drink-price">500 yen</p>
                                            </li>
                                        </ul>
                                        <ul class="menu-drink-sublist">
                                            <li class="menu-drink-subitem">
                                                <p class="menu-drink-name">マンゴー</p>
                                                <p class="menu-drink-price">500 yen</p>
                                            </li>
                                        </ul>
                                        <ul class="menu-drink-sublist">
                                            <li class="menu-drink-subitem">
                                                <p class="menu-drink-name">ミックス</p>
                                                <p class="menu-drink-price">500 yen</p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="btn-common-box">
                        <a href="<?php echo home_url('/menu'); ?>" class="btn03 pushright"><span>その他のメニュー</span></a>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <!-- ギャラリー -->
    <div class="gallery-lg-wrapper">
        <section class="gallery">
            <h2 class="h2-title gallery-title">GALLERY</h2>
            <p class="h2-subtitle">ギャラリー</p>
            <div class="gallery-bg-wrapper inner">
                <p class="gallery-wrapper-ballon">
                    <img src="<?php echo get_template_directory_uri() ?>/img/icons/img_balloon-gallery.png" alt="">
                </p>
                <div class="gallery-wrapper">
                    <img src="<?php echo get_template_directory_uri() ?>/img/TOP/img_gallery1.png" alt="" class="gallery-img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/TOP/img_gallery2.png" alt="" class="gallery-img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/TOP/img_gallery3.png" alt="" class="gallery-img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/TOP/img_gallery4.png" alt="" class="gallery-img">
                </div>
                <div class="btn-common-box">
                    <a href="#" class="btn03 pushright"><span>インスタグラムを見る</span></a>
                </div>

            </div>
        </section>
    </div>

    <!-- ニュース -->
    <div class="news-lg-wrapper">
        <section class="news">
            <h2 class="h2-title">NEWS</h2>
            <p class="h2-subtitle">お知らせ</p>
            <div class="news-wrapper inner">
                <div class="news-card-bigbox">
                    <div class="news-item-latest">
                        <?php query_posts('posts_per_page=1'); ?>
                        <?php if (have_posts()) : ?>
                            <?php
                            //記事数ループ
                            while (have_posts()) :
                                the_post();
                            ?>
                                <article class="news-card news-item-large">
                                    <a href="<?php the_permalink(); //記事のリンクを表示
                                                ?>" class="news-item-link">
                                        <p class="p-tag2">
                                            <span class="p-tag_text2">テスト</span>
                                        </p>
                                        <div class="news-card-img">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                echo '<img src="' . get_template_directory_uri() . '/img/TOP/img_card.png" alt="">';
                                            } ?>
                                        </div>
                                        <div class="news-card-body">
                                            <h3 class="news-item-title"> <?php echo mb_substr($post->post_title, 0, 50) . '……'; ?>
                                            </h3>
                                            <!-- /pickup-item-title -->
                                            <p class="news-item-text"><?php echo wp_trim_words(get_the_content(), 100, '……'); ?>
                                            </p>
                                            <p class="news-item-date"><?php the_time('Y-n-j'); ?>
                                                <!-- published date-->
                                            </p>
                                        </div>
                                    </a>
                                </article>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="news-item-other">
                        <?php query_posts('posts_per_page=4'); ?>
                        <?php if (have_posts()) : ?>
                            <?php
                            //記事数ループ
                            while (have_posts()) :
                                the_post();
                            ?>
                                <div class="news-item-others">
                                    <article class="news-card news-item-small">
                                        <a href="<?php the_permalink(); //記事のリンクを表示
                                                    ?>" class="news-item-link">
                                            <p class="p-tag2">
                                                <span class="p-tag_text2">テスト</span>
                                            </p>
                                            <div class="news-card-img">
                                                <?php
                                                if (has_post_thumbnail()) {
                                                    echo '<img src="' . get_template_directory_uri() . '/img/TOP/img_card.png" alt="">';
                                                } ?>
                                            </div>
                                            <div class="news-card-body">
                                                <h3 class="news-item-title news-item-subtitle"> <?php echo mb_substr($post->post_title, 0, 25) . '……'; ?>
                                                </h3>
                                                <p class="news-item-date"><?php the_time('Y-n-j'); ?>
                                                    <!-- published date-->
                                                </p>
                                            </div>
                                        </a>
                                    </article>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="btn-common-box">
                    <a href="<?php echo home_url('/archive'); ?>" class="btn03 pushright"><span>過去のお知らせ</span></a>
                </div>

        </section>
    </div>


    <!-- アクセス -->
    <div class="access-lg-wrapper">
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
</main>

<!-- Footer -->
<?php get_footer(); ?>
