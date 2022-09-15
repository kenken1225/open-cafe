<!-- 右のボックス asideは、サイドバーで使われるx-->

<aside class="news-category-box-wrapper">
    <div class="news-articles-wrapper">
        <div class="news-articles-box">
            <div class="news-articles-title-box">
                <h2 class="news-articles-title">
                    最近の記事
                </h2>
            </div>
            <div class="news-articles-list">
            <?php query_posts('posts_per_page=5'); ?>
                <?php if (have_posts()) : ?>
                    <?php
                    //記事数ループ
                    while (have_posts()) :
                        the_post();
                    ?>
                        <div class="news-category-others">
                            <article class="main-visual-card">
                                <a href="<?php the_permalink(); //記事のリンクを表示
                                            ?>" class="main-visual-card-link top-menu-card-link">
                                    <div class="main-visual-card-link-img top-news-card-link-img">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            echo '<img src="' . get_template_directory_uri() . '/img/TOP/img_card.png" alt="">';
                                        } ?>
                                    </div>
                                    <div class="main-visual-card-link-content top-news-card-link-content">
                                        <h3 class="news-item-title news-item-subtitle">
                                            <?php echo mb_substr($post->post_title, 0, 20) . '……'; ?>
                                        </h3>
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
    </div>
    <!-- カテゴリー一覧 -->
    <div class="news-sm-category-wrapper">
        <div class="news-category-title-box">
            <h2 class="news-category-title">
                カテゴリ
            </h2>
        </div>
        <div class="news-sm-category-box">
            <div class="news-category-sm-list">
                <a href="" class="news-category-sm-link">
                    カテゴリ名
                </a>
            </div>
            <div class="news-category-sm-list">
                <a href="" class="news-category-sm-link">
                    カテゴリ名
                </a>
            </div>
            <div class="news-category-sm-list">
                <a href="" class="news-category-sm-link">
                    カテゴリ名
                </a>
            </div>
            <div class="news-category-sm-list">
                <a href="" class="news-category-sm-link">
                    カテゴリ名
                </a>
            </div>
            <div class="news-category-sm-list">
                <a href="" class="news-category-sm-link">
                    カテゴリ名
                </a>
            </div>
        </div>
    </div>
</aside>