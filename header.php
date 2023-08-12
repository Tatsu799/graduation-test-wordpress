<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="web制作、ホームページ、コーポレートサイト制作">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="#">
    <meta property="og:type" content="website">
    <meta property="og:title" content="WEBLab">
    <meta property="og:description"content="ビジネスに効果的なウェブサイトを作成いたします。">
    <meta property="og:site_name" content="WEBLab">
    <meta property="og:image" content="">
    <link rel="icon" href="favicon.ico">
    <link rel="apple-touch-icon" sizes="180×180" href="#">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css">
    <!-- jquery -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
</head>
<body>
    <header class="header" id="header">
        <div class="header-wrapper">
            <a href="<?php echo home_url();?>" class="header-wrapper__logo">
                <img src="<?php echo get_template_directory_uri();?>/image/logo.png" alt="ロゴ画像">
            </a>
            <nav class="header-wrapper__nav">
            <?php
                $args = array(
                'menu' => 'menu', // 管理画面で作成したメニュー名
                'menu_class' => 'header-wrapper__nav__list', // メニューを構成するulタグのクラス名
                'container' => false, // <ul>タグを囲んでいる<div>タグを削除
                );

                // カスタムメニューを表示
                wp_nav_menu($args);
                ?>
            </nav>
        </div>
        <div class="drawer"></div>
    </header>