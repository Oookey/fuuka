<?php
/**
* Template Name: お食事のご案内
*/
get_header(); ?>
<!------------- HEADER ------------->

<body>
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
                    <a href="<?php bloginfo('url'); ?>/#access" class="fv_menu_inner">
                        <img class="fv_menu_icon" src="<?php bloginfo('template_directory'); ?>/image/icon_map_fv.svg" alt="">
                    </a>
                </div>
            </div>
        </div>

        <!-- 導入文 -->
        <div class="pageinfo bg_b_c">
            <div class="c_info_bg inner">
                <div class="pageinfo_inner">
                    <h2 class="fv_fadein">美食フレンチと<br>
                        オールインクルーシブの<br>
                        マリアージュ
                    </h2>
                    <p class="fadein">
                        ご滞在は、美食オールインクルーシブをテーマにした自由で快適なステイ。<br class="pc">
                        夕食時、バータイムはアルコールを含む約80種のお飲み物がフリードリンク。<br class="pc">
                        お食事は、ここでしか味わえない逸品のフレンチでおもてなしいたします。
                    </p>
                </div>
            </div>
        </div>

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
                            <p><?php the_field('c_menu1_name'); ?></p>
                            <h2><?php the_field('c_menu1_midashi'); ?></h2>
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
                                <!-- <div class="meal_menu_text_inner">
                                    <p>＜冷前菜＞</p>
                                    <p class="pd-1">
                                        自家製八ヶ岳産野菜のキッシュ<br>
                                        大豆ムース<br>
                                        国産鶏のガランティーヌ<br>
                                        彩野菜のサラダ仕立て<br><br>
                                    </p>
                                </div>
                                <div class="meal_menu_text_inner">
                                    <p>＜温前菜＞</p>
                                    <p class="pd-1">
                                        ノルウェーサーモンの低温調理 <br>
                                        サフランソース<br><br>
                                    </p>
                                </div>
                                <div class="meal_menu_text_inner">
                                    <p>＜スープ＞</p>
                                    <p class="pd-1">
                                        八ヶ岳産牛乳とエンドウ豆のポタージュ<br><br>
                                    </p> 
                                </div>
                                <div class="meal_menu_text_inner">
                                    <p>＜魚メイン＞ </p>
                                    <p class="pd-1">
                                        帆立貝柱のプロヴァンス<br>
                                        ヴァンブランソース<br>
                                        ニンニククリームを添えて<br><br>
                                    </p> 
                                </div>
                                <div class="meal_menu_text_inner">
                                    <p>＜肉メイン＞</p>
                                    <p class="pd-1">
                                        特選黒毛和牛ロースのプランチャ<br>
                                        温野菜とジャガイモのポタジェ<br>
                                        マデラーワインの香るソース<br><br>
                                    </p>
                                </div>
                                <div class="meal_menu_text_inner">
                                    <p>＜デザート＞</p>
                                    <p class="pd-1">
                                        自家製ショコラブラウニー<br>
                                        季節のフルーツ盛り合わせ<br>
                                        アングレーズの香り<br><br>
                                    </p>
                                </div>
                                <div class="meal_menu_text_inner">
                                    <p>本日のパン</p>
                                    <p class="pd-1">
                                        安曇野産こしひかり　香の物</p> 
                                </div> -->
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
                            <p><?php the_field('c_menu2_midashi'); ?></p>
                            <h2><?php the_field('c_menu2_name'); ?></h2>
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
                                <!-- <div class="meal_menu_text_inner">
                                    <p>＜冷前菜＞</p>
                                    <p class="pd-1">
                                        自家製八ヶ岳産野菜のキッシュ<br>
                                        自家製大豆ムース<br>
                                        国産鶏のガランティーヌ<br>
                                        彩野菜のサラダ仕立て<br><br>
                                    </p>
                                </div>
                                <div class="meal_menu_text_inner">
                                    <p>＜温前菜＞</p>
                                    <p class="pd-1">
                                        ノルウェーサーモンの低温調理<br>
                                        サフランソース<br><br>
                                    </p>
                                </div>
                                <div class="meal_menu_text_inner">
                                    <p>＜スープ＞</p>
                                    <p class="pd-1">
                                        八ヶ岳産牛乳とエンドウ豆のポタージュ<br><br>
                                    </p> 
                                </div>
                                <div class="meal_menu_text_inner">
                                    <p>＜魚メイン＞ </p>
                                    <p class="pd-1">
                                        真鯛のポワレ<br>
                                        タプナードソース<br>
                                        マイクロハーブを添えて<br><br>
                                    </p> 
                                </div>
                                <div class="meal_menu_text_inner">
                                    <p>＜肉メイン＞</p>
                                    <p class="pd-1">
                                        国産牛ロースのプランチャ<br>
                                        温野菜とジャガイモのポタジェ<br>
                                        和風ペッパーソース<br><br>
                                    </p>
                                </div>
                                <div class="meal_menu_text_inner">
                                    <p>＜デザート＞</p>
                                    <p class="pd-1">
                                        自家製レアチーズケーキ<br>
                                        季節のフルーツ盛り合わせ<br><br>
                                    </p>
                                </div>
                                <div class="meal_menu_text_inner">
                                    <p>本日のパン</p>
                                    <p class="pd-1">
                                        安曇野産こしひかり　香の物</p> 
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                        八ヶ岳ホテル風かでは、厳選した地元銘柄を中心に、約50種類<br class="pc">のお飲み物をフリードリンクにてお愉しみいただけます。<br>
                        ご夕食後には、BARラウンジでも約30種類のお飲み物をご用意<br class="pc">しています。大切なあの人とぜひ一緒にお越しくださいませ。
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
                    <ul class="slick">
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/cuisine_photo_4_1.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/cuisine_photo_4_2.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/cuisine_photo_4_3.png"></li>
                    </ul>
                </div>
            </div>
        </div>

        <!--  -->
        <div class="content bg_b_c cuisine_content">
            <div class="inner">
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
                        <p class="p1">ご朝食（一例）</p>
                        <p>
                            地元平飼い卵のスクランブルエッグと<br class="sp">ベーコン<br>
                            高原野菜サラダ<br>
                            国産牛の特製カレー<br>
                            野菜たっぷりミネストローネ<br>
                            焼きたてパン<br>
                            山梨県産季節のフルーツ<br>
                            八ヶ岳高原ヨーグルト
                        </p>
                    </div>
                    <p class="kome">※ 仕入れの都合により提供内容が変わる場合がございます。</p>
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