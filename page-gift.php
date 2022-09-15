<?php
/*
Template Name: page-gift
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
                <p class="h2-title top-view-title">GIFT</p>
                <p class="h2-subtitle top-view-subtitle ">ギフト・贈り物</p>
            </h1>
            <picture class="top-view-img">
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() ?>/img/Gift/img_firstview_gift_sp.png">
                <img src="<?php echo get_template_directory_uri() ?>/img/Gift/img_firstview_gift.png" alt="スライダー画像2">
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
    <div class="l-product-wrapper">
        <ul class="product-box">
            <!-- 最初のボックス -->
            <li class="product-list">
                <div class="product-item">
                    <article class="product-card product-lg-card">
                        <div class="product-card-thumbnail">
                            <img src="<?php echo get_template_directory_uri() ?>/img/Gift/img_item1.png" alt="">
                        </div>
                        <div class="product-card-box">
                            <h3 class="product-card-bg-title">○○○○の詰め合わせギフト</h3>
                            <p class="product-card-price">3000 yen</p>
                            <div class="product-card-btn">
                                <a href="#" class="product-card-btn-link">ショップで確認する</a>
                            </div>
                        </div>
                    </article>
                </div>
                <ul class="product-sub-item">
                    <li class="product-sub-list">
                        <article class="product-card">
                            <div class="product-card-thumbnail">
                                <img src="<?php echo get_template_directory_uri() ?>/img/Gift/img_item2.png" alt="">
                            </div>
                            <div class="product-card-box">
                                <h3 class="product-card-title">○○○○の詰め合わせギフト</h3>
                                <p class="product-card-price">3000 yen</p>
                                <div class="product-card-btn">
                                    <a href="#" class="product-card-btn-link">ショップで確認する</a>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="product-sub-list">
                        <article class="product-card">
                            <div class="product-card-thumbnail">
                                <img src="<?php echo get_template_directory_uri() ?>/img/Gift/img_item3-1.png" alt="">
                            </div>
                            <div class="product-card-box">
                                <h3 class="product-card-title">○○○○の詰め合わせギフト</h3>
                                <p class="product-card-price">3000 yen</p>
                                <div class="product-card-btn">
                                    <a href="#" class="product-card-btn-link">ショップで確認する</a>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="product-sub-list">
                        <article class="product-card">
                            <div class="product-card-thumbnail">
                                <img src="<?php echo get_template_directory_uri() ?>/img/Gift/img_item3.png" alt="">
                            </div>
                            <div class="product-card-box">
                                <h3 class="product-card-title">○○○○の詰め合わせギフト</h3>
                                <p class="product-card-price">3000 yen</p>
                                <div class="product-card-btn">
                                    <a href="#" class="product-card-btn-link">ショップで確認する</a>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="product-sub-list">
                        <article class="product-card">
                            <div class="product-card-thumbnail">
                                <img src="<?php echo get_template_directory_uri() ?>/img/Gift/img_item4.png" alt="">
                            </div>
                            <div class="product-card-box">
                                <h3 class="product-card-title">○○○○の詰め合わせギフト</h3>
                                <p class="product-card-price">3000 yen</p>
                                <div class="product-card-btn">
                                    <a href="#" class="product-card-btn-link">ショップで確認する</a>
                                </div>
                            </div>
                        </article>
                    </li>
                </ul>
            </li>
            <!-- 二番目のボックス -->
            <li class="product-list">
                <ul class="product-sub-item product-sub-second-item">
                    <li class="product-sub-list">
                        <article class="product-card">
                            <div class="product-card-thumbnail">
                                <img src="<?php echo get_template_directory_uri() ?>/img/Gift/img_item5.png" alt="">
                            </div>
                            <div class="product-card-box">
                                <h3 class="product-card-title">○○○○の詰め合わせギフト</h3>
                                <p class="product-card-price">3000 yen</p>
                                <div class="product-card-btn">
                                    <a href="#" class="product-card-btn-link">ショップで確認する</a>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="product-sub-list">
                        <article class="product-card">
                            <div class="product-card-thumbnail">
                                <img src="<?php echo get_template_directory_uri() ?>/img/Gift/img_item6.png" alt="">
                            </div>
                            <div class="product-card-box">
                                <h3 class="product-card-title">○○○○の詰め合わせギフト</h3>
                                <p class="product-card-price">3000 yen</p>
                                <div class="product-card-btn">
                                    <a href="#" class="product-card-btn-link">ショップで確認する</a>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="product-sub-list">
                        <article class="product-card">
                            <div class="product-card-thumbnail">
                                <img src="<?php echo get_template_directory_uri() ?>/img/Gift/img_item7.png" alt="">
                            </div>
                            <div class="product-card-box">
                                <h3 class="product-card-title">○○○○の詰め合わせギフト</h3>
                                <p class="product-card-price">3000 yen</p>
                                <div class="product-card-btn">
                                    <a href="#" class="product-card-btn-link">ショップで確認する</a>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="product-sub-list">
                        <article class="product-card">
                            <div class="product-card-thumbnail">
                                <img src="<?php echo get_template_directory_uri() ?>/img/Gift/img_item8.png" alt="">
                            </div>
                            <div class="product-card-box">
                                <h3 class="product-card-title">○○○○の詰め合わせギフト</h3>
                                <p class="product-card-price">3000 yen</p>
                                <div class="product-card-btn">
                                    <a href="#" class="product-card-btn-link">ショップで確認する</a>
                                </div>
                            </div>
                        </article>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="l-product-second-wrapper">
            <div class="product-second-box">
                <div class="product-second-text-box">
                    <h2 class="product-second-title">ラッピングは無料でお付けいたします。<br> お気軽にご相談ください。</h2>
                    <p class="product-second-text">
                        テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。
                    </p>
                </div>
                <div class="product-second-img-box">
                    <img src="<?php echo get_template_directory_uri() ?>/img/Gift/img_wrapping.png" alt="">
                </div>
            </div>
        </div>
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