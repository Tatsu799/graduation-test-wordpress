<?php get_header(); ?>
    <main>
    <body>
        <section class="works-detail" id="works-detail">
            <div class="works-detail-wrapper">
                <div class="works-detail-wrapper__top __top-bg-text">
                    <h2 class="top-ttl">制作実績
                        <p>Works</p>
                    </h2>
                    <div class="works-detail-wrapper__top__img">
                        <img src="<?php echo get_template_directory_uri();?>/image/img-works.jpg" alt="オフィスの画像">
                    </div>
                </div>
            </div>
        </section>       
        <section class="works-page" id="works-page">
            <div class="works-page-wrapper">
                <div class="works-page-wrapper__ttl fadeRightTrigger">
                    <h2 class="h2-ttl">作品紹介
                        <p>Detail</p>
                    </h2>
                </div>
                <div class="works-page-wrapper__con">
                    <div class="works-page-wrapper__con__box">
                        <div class="works-page-wrapper__con__box__left fadeRightTrigger">
                            <div class="works-page-wrapper__con__box__left__img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </div>
                        <div class="works-page-wrapper__con__box__right fadeLeftTrigger">
                            <div class="works-page-wrapper__con__box__right__con">
                                <div class="works-page-wrapper__con__box__right__con__ttl">
                                    <h3><?php the_title(); ?></h3>
                                    <p><a href="#"><?php the_meta(); ?></p>
                                </div>
                                <div class="works-page-wrapper__con__box__right__con__txt">
                                    <p>
                                        <?php echo wp_trim_words(get_the_content(), 70, '...'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="works-page-wrapper__btn">
                    <?php if (!get_previous_post('works')->ID): ?>
                        <p class="works-page-wrapper__btn__prev"></p>
                    <?php else: ?>
                        <?php previous_post_link('%link', '前へ  ＜', TRUE); ?>
                    <?php endif;?>
                    <a href="<?php echo get_permalink(get_page_by_path('works')->ID); ?>"><p class="works-page-wrapper__btn__blog">一覧</p></a>
                    <?php if (!get_next_post('works')->ID): ?>
                        <p class="works-page-wrapper__btn__next"></p>
                    <?php else: ?>
                        <?php next_post_link('%link', '＞ 次へ', TRUE); ?>
                    <?php endif;?>
                </div>
            </div>
        </section>   
    </main>
</body>
<?php get_footer(); ?>