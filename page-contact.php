<?php get_header(); ?>
    <main>
        <section class="contact" id="contact">
            <div class="contact-wrapper">
                <div class="contact-wrapper__top __top-bg-text">
                    <h2 class="top-ttl">お問い合わせ
                        <p>Contact</p>
                    </h2>
                    <div class="contact-wrapper__top__img">
                        <img src="<?php echo get_template_directory_uri();?>/image/img-contact.jpg" alt="トップ画像">
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-form" id="contact-form">
            <div class="contact-form-wrapper">
                <div class="contact-form-wrapper__ttl fadeRightTrigger">
                    <h2 class="h2-ttl">お問い合わせフォーム
                        <p>Contact Form</p>
                    </h2>
                    <div class="contact-form-wrapper__ttl__txt">
                        <p>
                            制作に関するお問合せ、お見積もりを下記フォームよりお問合せください。<br>
                            お問合せの内容を確認後担当者よりご連絡させて頂きます。
                        </p>
                    </div>
                </div>
                <div class="contact-form-wrapper__con fadeUpTrigger">
                    <?php echo do_shortcode('
                            [contact-form-7 id="e64644d" title="無題"]
                        ')?>
                </div>
            </div>
            <div class="bg-footer"></div>
        </section>   
    </main>
<?php get_footer(); ?>