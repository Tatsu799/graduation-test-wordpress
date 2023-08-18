<?php get_header(); ?>
<body>
    <main>
        <section class="company" id="company">
            <div class="company-wrapper">
                <div class="company-wrapper__top __top-bg-text">
                    <h2 class="top-ttl">会社概要
                        <p>Company</p>
                    </h2>
                    <div class="company-wrapper__top__img">
                        <img src="<?php echo get_template_directory_uri();?>/image/img-company.jpg" alt="オフィスの画像">
                    </div>
                </div>
            </div>
        </section>       
        <section class="message" id="message">
            <div class="message-wrapper">
                <div class="message-wrapper__left fadeRightTrigger">
                    <h2 class="h2-ttl">Message
                        <p>メッセージ</p>
                    </h2>
                </div>
                <div class="message-wrapper__right fadeLeftTrigger">
                    <h2>ビジネスに全力で取り組んでいただくために</h2>
                    <div class="message-wrapper__right__txt">
                        <p>
                            自身のビジネスに集中して取り組めるように、ホームページ制作・運用など全力でサポートさせて頂きます。
                            そして、ビジネスをさらに向上させるため今までに培ったWEBマーケティングのノウハウを元にウェブサイトを通して貢献させて頂きます。
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="outline" id="outline">
            <div class="outline-wrapper">
                <div class="outline-wrapper__left fadeRightTrigger">
                    <h2 class="h2-ttl">Outline
                        <p>会社概要</p>
                    </h2>
                </div>
                <div class="outline-wrapper__right fadeLeftTrigger">
                    <div class="outline-wrapper__right__con">
                        <h3>社名</h3>
                        <p>株式会社 WEBLab</p>
                    </div>
                    <div class="outline-wrapper__right__con">
                        <h3>設立</h3>
                        <p>2020年10月</p>
                    </div>
                    <div class="outline-wrapper__right__con">
                        <h3>資本金</h3>
                        <p>1,000万円</p>
                    </div>
                    <div class="outline-wrapper__right__con">
                        <h3>代表番号</h3>
                        <p>12-345-6789</p>
                    </div>
                    <div class="outline-wrapper__right__con">
                        <h3>所在地</h3>
                        <p class="ad">
                            〒111-111<br>
                            埼玉県さいたま市1-11-11 
                        </p>
                    </div>
                    <div class="outline-wrapper__right__con">
                        <h3>役員</h3>
                        <p class="bm">
                            代表取締役社長　山田　太郎<br>
                            取締役　　　　　佐藤　二郎
                        </p>
                    </div>
                    <div class="outline-wrapper__right__con">
                        <h3>従業員</h3>
                        <p>30名</p>
                    </div>
                </div>
            </div>
            <div class="bg-footer"></div> 
        </section>   
    </main>
</body>
<?php get_footer(); ?>