<?php
/**
* Template Name: お食事のご案内
*/
get_header(); ?>
<!------------- HEADER ------------->

<body id="page-top">
    <!-- ↓↓↓　本番時コメントアウトを外す　↓↓↓ -->
    <!-- Google Tag Manager (noscript) -->
    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCVNXH8"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
    <!-- End Google Tag Manager (noscript) -->

    <!-- ↓↓↓ HEADER ↓↓↓ -->
    <header>
        <!-- main menu -->
        <?php get_sidebar('main_menu'); ?>

        <!-- fix menu -->
        <?php get_sidebar('flex_menu'); ?>    
    </header>
    <!-- ↑↑↑ HEADER ↑↑↑ -->

    <!-- ↓↓↓ MAIN ↓↓↓ -->
    <main id="cuisine" class="subpage">
        <!-- mv -->
        <div class="top_fv">
            <div class="top_fv_inner">
                <div class="top_fv_movie">
                    <div class="in"> 
                        <img src="<?php bloginfo('template_directory'); ?>/image/cuisine_mv.png" alt="" class="movie">
                    </div>
                </div>
                <!-- <div class="top_fv_text">
                    <p>お箸で気取らずに楽しめる</p>
                    <p>肉と魚Ｗメインの</p>
                    <p>カジュアルフレンチ</p>
                </div> -->
                <div class="fv_text fv_fadein">
                    <img src="<?php bloginfo('template_directory'); ?>/image/fv_text_cuisine.svg" alt="">
                </div>
                <div class="fv_menu pc fv_fadein">
                    <a href="https://www.instagram.com/hotel_fuka/?hl=ja" class="fv_menu_inner" target="_blank" rel="noopener">
                        <img class="fv_menu_icon" src="<?php bloginfo('template_directory'); ?>/image/icon_instagram_fv.svg" alt="">
                    </a>
                    <a href="<?php bloginfo('url'); ?>/access/" class="fv_menu_inner">
                        <img class="fv_menu_icon" src="<?php bloginfo('template_directory'); ?>/image/icon_map_fv.svg" alt="">
                    </a>
                </div>
            </div>
        </div>

        <!-- 導入文 -->
        <div class="pageinfo bg_b_c">
            <div class="c_info_bg inner">
                <div class="pageinfo_inner">
                    <h2 class="fv_fadein">
                        カジュアルフレンチと<br>オールインクルーシブ<br>ドリンクとのマリアージュ
                    </h2>
                    <p class="fadein">
                        ご夕食はお箸で食べるカジュアルフレンチです。<br class="pc">
                        山梨県産ワインを中心とした約50種類のフリードリンクとのマリアージュをご堪能ください。<br class="pc">
                        お子様連れでも気兼ねなくコース料理をお楽しみいただけます。
                    </p>
                </div>
            </div>
        </div>

        <?php
        if (have_posts()) : query_posts('post_type=cuisine_detail&posts_per_page=1&paged='.$paged);
        while (have_posts()) : the_post();
        ?>

        <!-- <?php the_field('c_title_img_name'); ?> -->
        <div class="content bg_wave">
            <div class="inner img_bg_1">
                <div class="menu_navi">
                    <img src="<?php the_field('c_title_img'); ?>" alt="<?php the_field('c_title_img_name'); ?>" class="cuisine_subtitle fadein">
                    <p class="fadein">
                        肉と魚Ｗメインのお箸で食べる<br class="sp">カジュアルフレンチ。<br>
                        この春は女性の方に喜んでいただけるよう<br class="pc">デザートに特に力をいれております。
                    </p>
                    <div class="menu_navi_inner fadein">
                        <div class="menu_navi_left">
                            <p class="menu_navi_title">&nbsp;&nbsp;<?php the_field('c_menu1_info_title'); ?></p>
                            <div class="menu_navi_line"></div>
                            <p class="menu_navi_info">
                                <?php the_field('c_menu1_info'); ?>
                            </p>
                            <a href="#menu1">
                                <p><span class="arrow"></span>メニューはこちら</p>
                            </a>
                        </div>
                        <div class="menu_navi_right">
                            <p class="menu_navi_title">&nbsp;&nbsp;<?php the_field('c_menu2_info_title'); ?></p>
                            <div class="menu_navi_line"></div>
                            <p class="menu_navi_info">
                                <?php the_field('c_menu2_info'); ?>
                            </p>
                            <a href="#menu2">
                                <p><span class="arrow"></span>メニューはこちら</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 風－かぜ－（春） -->
        <div class="content bg_b_c cuisine_content" id="menu1">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-r con_mv zoom">
                        <img src="<?php the_field('c_menu1_mv'); ?>" alt="">
                    </div>
                    <div class="float-l con_text-l">
                        <div class="con_title">
                            <p><?php the_field('c_menu1_midashi'); ?></p>
                            <h2><?php the_field('c_menu1_name'); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="float-l con_text-l fadein">
                    <p class="text">
                        <?php the_field('c_menu1_detail'); ?>
                    </p>
                    <a href="<?php the_field('c_menu1_plan_url'); ?>" class="flex">
                        <p class="btn"><span class="arrow"></span>このお料理のプランはこちら</p>
                    </a>
                    <ul class="slick">
                        <li><img src="<?php the_field('c_menu1_img1'); ?>"></li>
                        <li><img src="<?php the_field('c_menu1_img2'); ?>"></li>
                        <li><img src="<?php the_field('c_menu1_img3'); ?>"></li>
                    </ul>
                    <div class="accordion meal_menu fadein">
                        <div class="option">
                            <input type="checkbox" class="toggle" id="toggle1" >
                                <label class="accordion_title" for="toggle1">お品書き</label>
                            <div class="fs18 meal_menu_text accordion_content">
                                <?php the_field('c_menu1_menu'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- 香－かおり－（春） -->
        <div class="dinner content bg_wave cuisine_content" id="menu2">
            <div class="inner img_bg_2">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv zoom">
                        <img src="<?php the_field('c_menu2_mv'); ?>" alt="">
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <p><?php the_field('c_menu2_name'); ?></p>
                            <h2><?php the_field('c_menu2_midashi'); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        <?php the_field('c_menu2_detail'); ?>
                    </p>
                    <a href="<?php the_field('c_menu2_plan_url'); ?>" class="flex">
                        <p class="btn"><span class="arrow"></span>このお料理のプランはこちら</p>
                    </a>
                    <ul class="slick">
                        <li><img src="<?php the_field('c_menu2_img1'); ?>"></li>
                        <li><img src="<?php the_field('c_menu2_img2'); ?>"></li>
                        <li><img src="<?php the_field('c_menu2_img3'); ?>"></li>
                    </ul>
                    <div class="accordion meal_menu fadein">
                        <div class="option">
                            <input type="checkbox" class="toggle" id="toggle2" >
                                <label class="accordion_title" for="toggle2">お品書き</label>
                            <div class="fs18 meal_menu_text accordion_content">
                                <?php the_field('c_menu2_menu'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php endwhile; ?>
        <?php endif; ?>
        <?php
        wp_reset_query();
        ?>

        <!-- 特別な夜に　特別な人と　特別なお酒を -->
        <div class="content bg_b_c cuisine_content">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-r con_mv zoom">
                        <img src="<?php bloginfo('template_directory'); ?>/image/cuisine_photo_main3.png" alt="">
                    </div>
                    <div class="float-l con_text-l">
                        <div class="con_title">
                            <p>特別な夜に　特別な人と　<br class="sp">特別なお酒を</p>
                            <h2>贅沢が叶う、自由で快適な<br class="pc">オールインクルーシブステイ</h2>
                        </div>
                    </div>
                </div>
                <div class="float-l con_text-l fadein">
                    <p class="text">
                    ご夕食時は山梨県産ワインを中心とした約50種類のアルコール飲料、ソフトドリンクをご用意しています。もちろんフリードリンク（一部プレミアムワイン等除く）です。
                    </p>
                    <ul class="slick">
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/cuisine_photo_3_1.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/cuisine_photo_3_2.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/cuisine_photo_3_3.png"></li>
                    </ul>
                </div>
            </div>
        </div>

        <!--  -->
        <div class="content bg_wave cuisine_content">
            <div class="inner img_bg_3">
                <!-- アニメーション -->
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 500 500" width="100%" id="blobSvg" filter="blur(0px)" transform="rotate(0)" class="cuisine_mask cuisine_mask1">
                    <image x="0" y="0" width="100%" height="100%" clip-path="url(#shape)" href="<?php bloginfo('template_directory'); ?>/image/mask_cuisine1.png" preserveAspectRatio="none"/>
                    <defs>
                        <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" style="stop-color: rgb(238, 205, 163);"/>
                            <stop offset="100%" style="stop-color: rgb(239, 98, 159);"/>
                        </linearGradient>
                    </defs>
                    <clipPath id="shape">
                        <path id="blob" fill="url(#gradient)">
                            <animate attributeName="d" dur="9.5s" repeatCount="indefinite" values="M440.5,320.5Q418,391,355.5,442.5Q293,494,226,450.5Q159,407,99,367Q39,327,31.5,247.5Q24,168,89,125.5Q154,83,219.5,68Q285,53,335.5,94.5Q386,136,424.5,193Q463,250,440.5,320.5Z;M453.78747,319.98894Q416.97789,389.97789,353.96683,436.87838Q290.95577,483.77887,223.95577,447.43366Q156.95577,411.08845,105.64373,365.97789Q54.33169,320.86732,62.67444,252.61056Q71.01719,184.3538,113.01965,135.21007Q155.02211,86.06634,220.52211,66.46683Q286.02211,46.86732,335.5,91.94472Q384.97789,137.02211,437.78747,193.51106Q490.59704,250,453.78747,319.98894Z;M411.39826,313.90633Q402.59677,377.81265,342.92059,407.63957Q283.24442,437.46649,215.13648,432.5428Q147.02853,427.61911,82.23325,380.9572Q17.43796,334.29529,20.45223,250.83809Q23.46649,167.38089,82.5856,115.05707Q141.70471,62.73325,212.19045,63.73015Q282.67618,64.72705,352.67308,84.79839Q422.66998,104.86972,421.43486,177.43486Q420.19974,250,411.39826,313.90633Z;M440.5,320.5Q418,391,355.5,442.5Q293,494,226,450.5Q159,407,99,367Q39,327,31.5,247.5Q24,168,89,125.5Q154,83,219.5,68Q285,53,335.5,94.5Q386,136,424.5,193Q463,250,440.5,320.5Z;"/>
                        </path>
                    </clipPath>
                </svg>
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv zoom">
                        <img src="<?php bloginfo('template_directory'); ?>/image/cuisine_photo_main4.png" alt="">
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <!-- <p>美食フレンチ</p> -->
                            <h2>小人／幼児のご夕食</h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        小人（小学生）、幼児（未就学）のご夕食はそれぞれ専用のお料理となります。
                    </p>
                    <div class="cuisine_inline_menu">
                        <div class="float-l">
                            <p class="p1">小学生夕食（一例）</p>
                            <p>
                                【メインプレート】<br>
                                風かオリジナルミートパイ<br>
                                小海老とジャガイモのグラタン<br>
                                国産牛肉ロースステーキ<br>
                                ポテトフライ<br>
                                八ヶ岳産彩りサラダ<br>
                                【日替わりスープ】<br>
                                【日替わりパスタ】<br>
                                【デザート】
                            </p>
                        </div>
                        <div class="float-r">
                            <p class="p1">幼児夕食（一例）</p>
                            <p>
                                【メインプレート】<br>
                                風かオリジナルハンバーガー<br>
                                小海老とジャガイモのグラタン<br>
                                富士桜ポークとソーセージ<br>
                                ポテトフライ<br>
                                八ヶ岳産彩りサラダ<br>
                                【日替わりスープ】<br>
                                【デザート】
                            </p>
                        </div>
                    </div>
                    <p class="kome">※ 仕入れの都合により提供内容が変わる場合がございます。</p>
                    <p class="kome">※ お食事の補助器具として「Combiベビーラック」「ハイチェア」をご用意しております。</p>
                    <p class="kome">※大人の方がコース料理をゆったり楽しめるようお子様が時間をつぶせる玩具をご用意しております。</p>
                    <!-- <ul class="slick">
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/cuisine_photo_4_1.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/cuisine_photo_4_2.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/cuisine_photo_4_3.png"></li>
                    </ul> -->
                </div>
            </div>
        </div>

        <!--  -->
        <div class="content bg_b_c cuisine_content">
            <div class="inner">
                <!-- アニメーション -->
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 500 500" width="100%" id="blobSvg" filter="blur(0px)" transform="rotate(0)" class="cuisine_mask cuisine_mask2">
                    <image x="0" y="0" width="100%" height="100%" clip-path="url(#shape)" href="<?php bloginfo('template_directory'); ?>/image/mask_cuisine2.png" preserveAspectRatio="none"/>
                    <defs>
                        <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" style="stop-color: rgb(238, 205, 163);"/>
                            <stop offset="100%" style="stop-color: rgb(239, 98, 159);"/>
                        </linearGradient>
                    </defs>
                    <clipPath id="shape">
                        <path id="blob" fill="url(#gradient)">
                            <animate attributeName="d" dur="9.5s" repeatCount="indefinite" values="M440.5,320.5Q418,391,355.5,442.5Q293,494,226,450.5Q159,407,99,367Q39,327,31.5,247.5Q24,168,89,125.5Q154,83,219.5,68Q285,53,335.5,94.5Q386,136,424.5,193Q463,250,440.5,320.5Z;M453.78747,319.98894Q416.97789,389.97789,353.96683,436.87838Q290.95577,483.77887,223.95577,447.43366Q156.95577,411.08845,105.64373,365.97789Q54.33169,320.86732,62.67444,252.61056Q71.01719,184.3538,113.01965,135.21007Q155.02211,86.06634,220.52211,66.46683Q286.02211,46.86732,335.5,91.94472Q384.97789,137.02211,437.78747,193.51106Q490.59704,250,453.78747,319.98894Z;M411.39826,313.90633Q402.59677,377.81265,342.92059,407.63957Q283.24442,437.46649,215.13648,432.5428Q147.02853,427.61911,82.23325,380.9572Q17.43796,334.29529,20.45223,250.83809Q23.46649,167.38089,82.5856,115.05707Q141.70471,62.73325,212.19045,63.73015Q282.67618,64.72705,352.67308,84.79839Q422.66998,104.86972,421.43486,177.43486Q420.19974,250,411.39826,313.90633Z;M440.5,320.5Q418,391,355.5,442.5Q293,494,226,450.5Q159,407,99,367Q39,327,31.5,247.5Q24,168,89,125.5Q154,83,219.5,68Q285,53,335.5,94.5Q386,136,424.5,193Q463,250,440.5,320.5Z;"/>
                        </path>
                    </clipPath>
                </svg>
                <div class="con-sp-fv fadein">
                    <div class="float-r con_mv zoom">
                        <img src="<?php bloginfo('template_directory'); ?>/image/cuisine_photo_main5.png" alt="">
                    </div>
                    <div class="float-l con_text-l">
                        <div class="con_title">
                            <!-- <p>お部屋の中でも森林浴を</p> -->
                            <h2>ご朝食</h2>
                        </div>
                    </div>
                </div>
                <div class="float-l con_text-l fadein">
                    <p class="text">
                        ご朝食時間　7：30～9：00
                    </p>
                    <div class="cuisine_inline_menu">
                        <p class="p1">メインプレート</p>
                        <p>
                            スクランブルエッグ<br>
                            季節のフルーツ<br>
                            国産ポークウインナー<br>
                            ハッシュドポテト<br><br>
                        </p>
                        <p class="p1">ハーフビュッフェ</p>
                        <p>
                            高原野菜のサラダ<br>
                            国産牛の特製カレー<br>
                            安曇野産コシヒカリ<br>
                            本日のスープ<br>
                            八ヶ岳高原ヨーグルト<br>
                            モーニングドリンク
                        </p>
                    </div>
                    <p class="kome">※ 仕入れの都合により提供内容が変わる場合がございます。</p>
                    <p class="kome">※ 写真はイメージです。</p>
                    <ul class="slick">
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/cuisine_photo_5_1.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/cuisine_photo_5_2.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/cuisine_photo_5_3.png"></li>
                    </ul>
                </div>
            </div>
        </div>

    </main>
    <!-- ↑↑↑ MAIN ↑↑↑ -->

    <!-- ↓↓↓ FOOTER ↓↓↓ -->
    <?php get_footer(); ?>