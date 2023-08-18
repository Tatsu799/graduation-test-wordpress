<footer class="footer">
        <div class="footer-wrapper">
            <div class="footer-wrapper__top">
                <div class="footer-wrapper__top__logo">
                    <img src="<?php echo get_template_directory_uri();?>/image/logo.png" alt="logo">
                </div>
                <div class="footer-wrapper__top__icon">
                    <div class="tw">
                        <a href="https://twitter.com/?lang=ja"><img src="<?php echo get_template_directory_uri();?>/image/icon-tw.png" alt="icon"></a>
                    </div>
                    <div class="fb">
                        <a href="https://www.facebook.com/facebook/?locale=ja_JP"><img src="<?php echo get_template_directory_uri();?>/image/icon-fb.png" alt="icon"></a>
                    </div>
                </div>
            </div>
            <div class="footer-wrapper__con">
                <div class="footer-wrapper__con__left">
                    <p class="address">〒111-1111<br> 
                                        埼玉県さいたま市1-11-11
                    </p>
                    <p class="tel">
                        TEL 12-345-6789<br>
                        営業時間 9:00～17:00<br> 
                        定休日 土日祝<br>
                    </p>
                </div>
                <nav class="footer-wrapper__con__right">
                    <ul class="footer-wrapper__con__right__nav">
                        <li class="footer-wrapper__con__right__nav__item">
                            <a href="<?php echo home_url();?>"><p>HOME</p></a>
                            <a href="<?php echo get_permalink(get_page_by_path("company")->ID); ?>"><p>会社概要</p></a>
                            <a href="<?php echo get_permalink(get_page_by_path("works")->ID); ?>"><p>制作実績</p></a>
                        <li class="footer-wrapper__con__right__nav__item">
                            <a href="<?php echo get_permalink(get_page_by_path("service")->ID); ?>"><p>サービス紹介</p></a>
                            <a href="<?php echo get_permalink(get_page_by_path("price")->ID); ?>"><p>制作料金</p></a>
                            <a href="<?php echo get_permalink(get_page_by_path("news")->ID); ?>"><p>ニュース</p></a>
                        </li>
                        <li class="footer-wrapper__con__right__nav__item">
                            <a href="<?php echo get_permalink(get_page_by_path("contact")->ID); ?>"><p>お問い合わせ</p></a>
                            <a href="<?php echo home_url();?>"><p>サイトマップ</p></a>
                            <a href="<?php echo home_url();?>"><p>プライバシーポリシー</p></a>
                        </li>
                    </div>
                </nav>
            </div>
            <small>© WEBLab. All Rights Reserved.</small>
        </div>
    </footer>
    <div id="top-button" class="top-button">TOP</div>
    <?php wp_footer(); ?> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/anime.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
</body>
</html>