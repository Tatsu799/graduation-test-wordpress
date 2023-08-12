<?php get_header(); ?>
    <main>
        <section class="news-detail" id="news-detail">
            <div class="news-detail-wrapper">
                <div class="news-detail-wrapper__top __top-bg-text">
                    <h2 class="top-ttl">ニュース
                        <p>News</p>
                    </h2>
                    <div class="news-detail-wrapper__top__img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="news-article" id="news-article">
            <div class="news-article-wrapper__con">
            
                <div class="news-article-wrapper__con__box">
                    <div class="news-article-wrapper__con__box__box1">
                        <p class="notice">お知らせ</p>
                        <p class="date"><?php the_time('Y.m.d'); ?></p>
                    </div>
                    <div class="news-article-wrapper__con__box__box2">
                        <h3><?php the_title(); ?></h3>
                        <span></span>
                        <div class="news-article-wrapper__con__box__box2__txt">
                            <p>
                            <?php the_content(); ?>
                            </p>
                        </div>
                        <span></span> 
                    </div>
                </div>
                <div class="news-article-wrapper__con__btn">
                    <?php if (!get_previous_post('news')->ID): ?>
                        <p class="article-wrapper__btn__prev"></p>
                    <?php else: ?>
                        <?php previous_post_link('%link', '前へ  ＜', TRUE); ?>
                    <?php endif;?>
                    <a href="<?php echo get_permalink(get_page_by_path('news')->ID); ?>"><p class="article-wrapper__btn__blog">一覧</p></a>
                    <?php if (!get_next_post('news')->ID): ?>
                        <p class="article-wrapper__btn__next"></p>
                    <?php else: ?>
                        <?php next_post_link('%link', '＞ 次へ', TRUE); ?>
                    <?php endif;?>
                </div>
            </div>
            <div class="bg-footer"></div>
        </section>
    </main>
<?php get_footer(); ?>