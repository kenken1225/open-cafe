<?php
/*
Template Name: page-complete
*/
?>

<!-- Header -->
<?php get_header(); ?>


<!----------------------------
         Contact
        -------------------------------->
<main>
    <!-- トップ（メイン） -->
    <div class="top-view">
        <div class="top-view-wrapper">
            <h1 class="top-view-title-box">
                <p class="h2-title top-view-title">CONTACT</p>
                <p class="h2-subtitle top-view-subtitle ">お問い合わせ</p>
            </h1>
            <picture class="top-view-img">
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() ?>/img/Contact/img_firstview_contact_sp.png">
                <img src="<?php echo get_template_directory_uri() ?> /img/Contact/img_firstview_contact.png" alt="スライダー画像2">
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
    <div class="l-contact-wrapper">
        <div class="l-contact-box">
            <h2 class="top-contact-title">送信が完了しました</h2>
            <p class="top-contact-text">お問い合わせありがとうございました。 <br> 3営業日以内に返信いたしますので、しばらくお待ちいただけますと幸いです。</p>
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