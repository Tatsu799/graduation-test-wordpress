<?php get_header(); ?>
<body>
    <main>
        <section class="news-detail" id="news-detail">
            <div class="news-detail-wrapper">
                <div class="news-detail-wrapper__top __top-bg-text">
                    <h2 class="top-ttl">ニュース
                        <p>News</p>
                    </h2>
                    <div class="news-detail-wrapper__top__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/img-news.jpg" alt="オフィスの画像">
                    </div>
                </div>
            </div>
        </section>
        <section class="news-all" id="news-all">
            <div class="news-all-wrapper">
                <div class="news-all-wrapper__ttl fadeRightTrigger">
                    <h2 class="h2-ttl">ニュース一覧
                        <p>All News</p>
                    </h2>
                </div>
                <div class="news-all-wrapper__con">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $the_query = new WP_Query( array(
                    'post_status' => 'publish',
                    'paged' => $paged,
                    'category_name' => 'news',
                    'posts_per_page' => 5, 
                    'orderby'     => 'date',
                    'order' => 'DESC'
                ) );

                if ($the_query->have_posts()) :?><?php
                    while ($the_query->have_posts()) : $the_query->the_post();?>

                    <div class="news-all-wrapper__con__box">
                        <div class="news-all-wrapper__con__box__box1 fadeLeftTrigger">
                            <a href="<?php the_permalink(); ?>">
                                <p class="notice">お知らせ</p>
                                <p class="date"><?php the_time('Y.m.d'); ?></p>
                            </a>
                        </div>
                        <div class="news-all-wrapper__con__box__box2 fadeLeftTrigger">
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                                <P class="txt">
                                    <?php echo wp_trim_words(get_the_content(), 70, '...'); ?>
                                </P>
                            </a>
                        </div>
                    </div>
                <?php endwhile;?><?php endif; ?>
                <div class="pagination">
                    <?php //ページリスト表示処理
                    global $wp_rewrite;
                    $paginate_base = get_pagenum_link(1);
                    if(strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()){
                        $paginate_format = '';
                        $paginate_base = add_query_arg('paged','%#%');
                    }else{
                        $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
                        user_trailingslashit('page/%#%/','paged');
                        $paginate_base .= '%_%';
                    }
                    echo paginate_links(array(
                        'base' => $paginate_base,
                        'format' => $paginate_format,
                        'total' => $the_query->max_num_pages,
                        'mid_size' => 1,
                        'current' => ($paged ? $paged : 1),
                        'prev_text' => '<<',
                        'next_text' => '>>',
                    ));
                    ?>
                </div>
            </div>
        </section>   
    </main>
</body>
<?php get_footer(); ?>