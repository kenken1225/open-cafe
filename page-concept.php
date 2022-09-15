<?php
/*
Template Name: page-concept
*/
?>

<!------------------
        コンセプトページ(Concept.html)
        --------------------->

<!-- Header -->
<?php get_header(); ?>

<main>
    <!-- トップ（メイン） -->
    <div class="top-view">
        <div class="top-view-wrapper">
            <h1 class="top-view-title-box">
                <p class="h2-title top-view-title">CONCEPT</p>
                <p class="h2-subtitle top-view-subtitle ">当店のこだわり</p>
            </h1>
            <picture class="top-view-img">
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() ?>/img/Concept/img_firstview_concept_sp.png">
                <img src="<?php echo get_template_directory_uri() ?>/img/Concept/img_firstview_concept.png" alt="スライダー画像2">
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

    <!-- トップ （1st view）-->
    <div class="main-concept-lg-wrapper">
        <section class="main-concept">
            <div class="main-concept-wrapper">
                <div class="main-concept-box">
                    <h2 class="main-concept-title">美味しいコーヒーと食事で、 <br> 最高のひとときを。</h2>
                    <p class="main-concept-subtitle">国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br>
                        ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br>
                        ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br>
                        ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。</p>
                </div>
                <div class="main-concept-img">
                    <div class="main-concept-img-box">
                        <img src="<?php echo get_template_directory_uri() ?>/img/Concept/img_concept1.png" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- トップ （2nd view）-->
    <div class="main-concept-lg-wrapper">
        <section class="main-concept main2-concept">
            <div class="main-concept-wrapper main2-concept-wrapper">
                <div class="main-concept-box main2-concept-box">
                    <h2 class="main-concept-title">本場イタリアで培った <br> 自慢のパスタ</h2>
                    <p class="main-concept-subtitle">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br>
                        ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br>
                        ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。</p>
                </div>
                <div class="main-concept-img">
                    <div class="main-concept-img-box">
                        <img src="<?php echo get_template_directory_uri() ?>/img/Concept/img_concept2.png" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- トップ （3rd view）-->
    <div class="main-concept-lg-wrapper main3-concept-lg-wrapper">
        <section class="main-concept main3-concept ">
            <div class="main-concept-wrapper">
                <div class="main-concept-box main3-concept-box">
                    <h2 class="main-concept-title">ほどよい甘さの <br> 自家製こだわりクロワッサン</h2>
                    <p class="main-concept-subtitle">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。 <br>
                        ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。</p>
                </div>
                <div class="main-concept-img-box main3-concept-img-box">
                    <div class="main-concept-img-box main3-concept-img-box ">
                        <img src="<?php echo get_template_directory_uri() ?>/img/Concept/img_concept3.png" alt="">
                    </div>
                </div>
            </div>
        </section>
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
</main>

<!-- Footer -->
<?php get_footer(); ?>