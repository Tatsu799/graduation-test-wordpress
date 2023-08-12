<?php get_header(); ?>
<div class="spinner-box">
        <div class="pulse-container">
        <div class="pulse-bubble pulse-bubble-1"></div>
        <div class="pulse-bubble pulse-bubble-2"></div>
        <div class="pulse-bubble pulse-bubble-3"></div>
        </div>
</div>
    <main>
        <section class="top" id="top">
            <div class="top-wrapper">
                <div class="top-wrapper__ttl">
                    <h1>
                        ホームページから始まる<br>人との繋がり
                    </h1>
                    <p>
                        ビジネスに適したホームページを作成し<br class="__sp">さらにビジネスを加速させる。<br>
                        ホームページ作成、マーケティング、<br class="__sp">>運用全てお任せください。
                    </p>
                </div>
            </div>
            <div class="top-wrapper__img slider1">
                <img src="<?php echo get_template_directory_uri();?>/image/img-top1.jpg">
                <img src="<?php echo get_template_directory_uri();?>/image/img-top2.jpg">
                <img src="<?php echo get_template_directory_uri();?>/image/img-top3.jpg">
            </div>
        </section>
        <section class="about" id="about">
            <div class="about-wrapper">
                <div class="about-wrapper__con">
                    <div class="about-wrapper__con__left fadeRightTrigger">
                        <div class="about-wrapper__con__left__ttl">
                            <h2>人との繋がりを第一に考え、<br>
                                ウェブ制作をしております。
                            </h2>
                        </div>
                    </div>
                    <div class="about-wrapper__con__right fadeLeftTrigger">
                        <div class="about-wrapper__con__right__txt">
                            <p>
                                お客さまとの対話を何よりも大切にしご希望に沿ったウェブサイト作成を心がけております。<br>
                                <br>
                                「こんなこと聞いてもいいのかな？」と言うようなどんな些細なことにも耳を傾け、お客さまのビジネスを加速させるためにスタッフ一同努力を重ねております。<br>
                                <br>
                                ホームページ制作・保守・運用まで総合的なサービスをご提供。お客さまのビジネスを徹底的にサポート致します。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="works" id="works">
            <div class="works-wrapper">
                <div class="works-wrapper__ttl __bg-text fadeRightTrigger">
                    <h2 class="ttl">WORKS
                        <p>制作実績</p>
                    </h2>
                </div>
                <div class="works-wrapper__con slider arrows">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $the_query = new WP_Query( array(
                            'post_status' => 'publish',
                            'paged' => $paged,
                            'category_name' => 'works',
                            'meta_key' => 'url',
                            'posts_per_page' => 3, 
                            'orderby'     => 'date',
                            'order' => 'DESC'
                        ) );

                        if ($the_query->have_posts()) :?><?php
                            while ($the_query->have_posts()) : $the_query->the_post();?>


                        <div class="works-wrapper__con__box">
                            <a href="<?php the_permalink(); ?>">
                                <div class="works-wrapper__con__box__img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="works-wrapper__con__box__txt">
                                    <p><?php the_title(); ?></p><br>
                                    <p><a href="<?php the_permalink(); ?>"><?php the_meta(); ?></p>
                                </div>
                            </a>
                        </div>
                    <?php endwhile;?><?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
                <div class="works-wrapper__con__btn">
                    <a href="<?php echo get_permalink(get_page_by_path("works")->ID); ?>" class="btn">
                        <p>制作実績一覧</p>
                    </a>
                </div>
            </div>
        </section>

        <section class="service" id="service">
            <div class="service-wrapper fadeRightTrigger">
                <div class="service-wrapper__ttl __bg-text">
                    <h2 class="ttl">SERVICE
                        <p>サービス</p>
                    </h2>
                    <p class="txt">
                        洗礼されたホームページを作成するだけでなく、しっかりとビジネスで成果が出るウェブサイト制作をいたします。<br>
                        ウェブサイトの作成だけでなくアフタフォローもお任せください。
                    </p>
                </div>
                <div class="service-wrapper__con">
                    <div class="service-wrapper__con__box fadeUpTrigger">
                        <div class="service-wrapper__con__box__content">
                            <div class="service-wrapper__con__box__content__ttl">
                                <img src="<?php echo get_template_directory_uri();?>/image/icon-pc.png" alt="アイコン">
                                <h3>ホームページ制作</h3>
                            </div>
                            <div class="service-wrapper__con__box__content__txt">
                                <p class="text"><span></span>丁寧なヒアリングを元にお客さまのビジネスに沿ったホームページを作成。</p>
                                <p class="text"><span></span>集客を目的としたサイトデザインを考案・設計・構築させて頂き、集客効果の高いホームページを作成いたします。</p>
                            </div>
                        </div>
                    </div>
                    <div class="service-wrapper__con__box fadeUpTrigger">
                        <div class="service-wrapper__con__box__content">
                            <div class="service-wrapper__con__box__content__ttl">
                                <img src="<?php echo get_template_directory_uri();?>/image/icon-web.png" alt="アイコン">
                                <h3>Web マーケティング</h3>
                            </div>
                            <div class="service-wrapper__con__box__content__txt">
                                <p class="text"><span></span>これまでに培ったWeb広告運用のノウハウを元に費用対効果を重視した様々な集客対策をご提案いたします。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-wrapper__btn">
                    <a href="<?php echo get_permalink(get_page_by_path("service")->ID); ?>" class="btn">
                        <p>サービス紹介</p>
                    </a>
                </div>
            </div>
        </section>
        <section class="price" id="price">
            <div class="price-wrapper">
                <div class="price-wrapper__ttl __bg-text fadeRightTrigger">
                    <h2 class="ttl">PRICE
                        <p>制作料金</p>
                    </h2>
                </div>
                <div class="price-wrapper__con">
                    <div class="price-wrapper__con__table">
                        <table class="fadeUpTrigger">
                            <tr>
                                <th class="first-head" rowspan="2">LP制作プラン</th>
                                <th class="head">制作費用</th>
                                <th class="head">制作日数</th>
                                <th class="head">ページ数</th>
                            </tr>
                            <tr>
                                <td class="data">100,000円(税込)〜</td>
                                <td class="data">10日〜14日</td>
                                <td class="data">1ページ</td>
                            </tr>
                        </table>
                    </div>
                    <div class="price-wrapper__con__table">
                        <table class="fadeUpTrigger">
                            <tr>
                                <th class="first-head second" rowspan="2">ベーシック<br class="__pc __tab __sp">プラン</th>
                                <th class="head">制作費用</th>
                                <th class="head">制作日数</th>
                                <th class="head">一式</th>
                            </tr>
                            <tr>
                                <td class="data">150,000円(税込)〜</td>
                                <td class="data">30日〜45日</td>
                                <td class="data">一式</td>
                            </tr>
                        </table>
                    </div>
                    <div class="price-wrapper__con__table">
                        <table class="fadeUpTrigger">
                            <tr>
                                <th class="first-head third" rowspan="2">スタンダード<br class="__pc __tab __sp">プラン</th>
                                <th class="head">制作費用</th>
                                <th class="head">制作日数</th>
                                <th class="head">ページ数</th>
                            </tr>
                            <tr>
                                <td class="data">300,000円(税込)〜</td>
                                <td class="data">45日〜60日</td>
                                <td class="data">一式</td>
                            </tr>
                        </table>
                    </div>
                    <div class="price-wrapper__con__table">
                        <table class="fadeUpTrigger">
                            <tr>
                                <th class="first-head" rowspan="2">オールプラン</th>
                                <th class="head">制作費用</th>
                                <th class="head">制作日数</th>
                                <th class="head">ページ数</th>
                            </tr>
                            <tr>
                                <td class="data">500,000円(税込)〜</td>
                                <td class="data">90日〜120日</td>
                                <td class="data">一式</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="price-wrapper__btn">
                    <a href="<?php echo get_permalink(get_page_by_path("price")->ID); ?>" class="btn">
                        <p>制作料金一覧</p>
                    </a>
                </div>
            </div>
        </section>
        <section class="news" id="news">
            <div class="news-wrapper">
                <div class="news-wrapper__ttl __bg-text fadeRightTrigger">
                    <h2 class="ttl">NEWS
                        <p>ニュース</p>
                    </h2>
                </div>
                
                <div class="news-wrapper__con fadeLeftTrigger">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $the_query = new WP_Query( array(
                    'post_status' => 'publish',
                    'category_name' => 'news',
                    'paged' => $paged,
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
                <div class="news-wrapper__btn">
                    <a href="<?php echo get_permalink(get_page_by_path("news")->ID); ?>" class="btn">
                        <p>一覧表示</p>
                    </a>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>