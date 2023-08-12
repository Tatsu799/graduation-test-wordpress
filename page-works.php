<?php get_header(); ?>
    <main>
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
        <section class="works-all" id="works-all">
            <div class="works-all-wrapper">
                <div class="works-all-wrapper__ttl fadeRightTrigger">
                    <h2 class="h2-ttl">作品一覧
                        <p>All Works</p>
                    </h2>
                </div>  
                <div class="works-all-wrapper__con">
                    
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $the_query = new WP_Query( array(
                            'post_status' => 'publish',
                            'paged' => $paged,
                            'category_name' => 'works',
                            'meta_key' => 'url',
                            'posts_per_page' => 6,
                            'orderby'     => 'date',
                            'order' => 'DESC'
                    ) );
                    if ($the_query->have_posts()) :?><?php
                        while ($the_query->have_posts()) : $the_query->the_post();?>
                        <div class="works-all-wrapper__con__box fadeUpTrigger">
                            <a href="<?php the_permalink(); ?>">
                                <div class="works-all-wrapper__con__box__img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="works-all-wrapper__con__box__txt">
                                    <p><?php the_title(); ?></p>
                                    <p><a href=""><?php the_meta(); ?></a></p>
                                </div>
                            </a>
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
            </div>
        </section>   
    </main>
<?php get_footer(); ?>