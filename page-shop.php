<?php
/*
Template Name: page-shop（店舗情報）
*/
?>

<!-- Header -->
<?php get_header(); ?>

<main>
    <!-- トップ（メイン） -->
    <div class="top-view">
        <div class="top-view-wrapper">
            <h1 class="top-view-title-box">
                <p class="h2-title top-view-title">SHOP</p>
                <p class="h2-subtitle top-view-subtitle ">店舗一覧</p>
            </h1>
            <picture class="top-view-img">
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() ?>/img/Shop/img_firstview_shop_sp.png">
                <img src="<?php echo get_template_directory_uri() ?>/img/Shop/img_firstview_shop.png" alt="スライダー画像2">
            </picture>
        </div>
    </div>

    <!-- パンクズリスト -->
    <div class="l-breadcrumbs">
        <div class="p-breadcrumbs">
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

    <!--ーーーーーー
            アクセス
            --------------->
    <section class="top-access-wrapper">
        <!-- 地図１ -->
        <div class="top-access-box">
            <div class="access-sub-wrapper">
                <div class="top-access-title-box">
                    <h2 class="top-access-title">OPEN CAFE　吉祥寺店</h2>
                </div>
                <div class="access-map">
                    <div class="access-map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.937612312156!2d139.57762001561252!3d35.70315283637605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018ee47f6226cc3%3A0x34e6b69989d52a4e!2z5ZCJ56Wl5a-66aeF!5e0!3m2!1sja!2sjp!4v1661579822692!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="access-tables">
                    <dl class="access-table-box">
                        <div class="access-table-item">
                            <dt class="access-table-content">住所</dt>
                            <dd class="access-table-description">〒000-0000 <br>
                                東京都杉並区高円寺0-0-0</dd>
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
        <!-- 地図２ -->
        <div class="top-access-box">
            <div class="access-sub-wrapper">
                <div class="top-access-title-box">
                    <h2 class="top-access-title">OPEN CAFE　吉祥寺店</h2>
                </div>
                <div class="access-map">
                    <div class="access-map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.866676953231!2d139.63379700081316!3d35.704898330091446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f2767eb9e92b%3A0xc2d0573363890acc!2z6Zi_5L2Q44O26LC36aeF!5e0!3m2!1sja!2sjp!4v1661579738988!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="access-tables">
                        <dl class="access-table-box">
                            <div class="access-table-item">
                                <dt class="access-table-content">住所</dt>
                                <dd class="access-table-description">〒000-0000 <br>
                                    東京都杉並区阿佐谷0-0-0</dd>
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
        <!-- 地図３ -->
        <div class="top-access-box">
            <div class="access-sub-wrapper">
                <div class="top-access-title-box">
                    <h2 class="top-access-title">OPEN CAFE　中野店</h2>
                </div>
                <div class="access-map">
                    <div class="access-map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.837905368863!2d139.66361286561255!3d35.705606286241576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f296b32f3571%3A0x568104f2ac34074e!2z5Lit6YeO6aeF!5e0!3m2!1sja!2sjp!4v1661581148639!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="access-tables">
                        <dl class="access-table-box">
                            <div class="access-table-item">
                                <dt class="access-table-content">住所</dt>
                                <dd class="access-table-description">〒000-0000 <br>
                                    東京都杉並区阿佐谷0-0-0</dd>
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

    <!-- アクセス -->
    <section class="top-access-second-wrapper">
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
</main>

<!-- Footer -->
<?php get_footer(); ?>