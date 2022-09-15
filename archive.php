<?php
/*
Template Name: blog-page(news)
*/
?>


<!-- Header -->
<?php get_header(); ?>

<main>
    <!-- トップ（メイン） -->
    <div class="top-view">
        <div class="top-view-wrapper">
            <h1 class="top-view-title-box">
                <p class="h2-title top-view-title">NEWS</p>
                <p class="h2-subtitle top-view-subtitle ">お知らせ</p>
            </h1>
            <picture class="top-view-img">
                <source media="(max-width: 767px)" srcset="/img/Concept/img_firstview_news_sp.png">
                <img src="<?php echo get_template_directory_uri() ?>/img/News/img_firstview_news.png" alt="スライダー画像2">
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
                        ?> > お知らせ
                    </div><!-- /breadcrumb -->
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!----------------
            NEWS
    ------------------->
    <div class="l-news-wrapper">
        <!-- カテゴリー名 -->
        <div class="news-category-wrapper">
            <div class="news-category-box">
                <div class="news-item-other top-news-item-other">
                    <!-- ループ開始 -->
                    <?php if (have_posts()) : ?>
                        <?php
                        //記事数ループ
                        while (have_posts()) :
                            the_post();
                        ?>
                            <div class="news-item-others top-news-others">
                                <article class="news-card">
                                    <a href="<?php the_permalink(); //記事のリンクを表示
                                                ?>" class="news-item-link">
                                        <p class="p-tag2">
                                            <span class="p-tag_text2">カテゴリー</span>
                                        </p>
                                        <div class="news-card-img">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                echo '<img src="' . get_template_directory_uri() . '/img/TOP/img_card.png" alt="">';
                                            } ?>
                                        </div>
                                        <div class="news-card-body">
                                            <h3 class="news-item-title">
                                                <?php echo mb_substr($post->post_title, 0, 30) . '……'; ?>
                                            </h3>
                                            <time class="news-item-date"><?php the_time('Y-n-j'); ?></time>
                                        </div>
                                    </a>
                                </article>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <!-- 記事のボタン（ページネーション） -->
            <?php if (paginate_links()) : //ページが1ページ以上あれば以下を表示
            ?>
                <div class="l-pager">
                    <nav class="p-pager">
                        <?php
                        echo paginate_links(
                            array(
                                'end_size' => 1,
                                'mid_size' => 1,
                                'prev_next' => true,
                                'prev_text' => '<i class="fas fa-angle-left "></i>',
                                'next_text' => '<i class="fas fa-angle-right"></i>',
                            )
                        );
                        ?>
                    <?php endif; ?>
                    </nav>
                </div>
        </div>
        <!-- サイドバー-->
        <?php get_sidebar(); ?>
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