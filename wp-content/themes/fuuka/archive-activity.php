<?php
/**
* Template Name: 宿泊体験プラン
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
    <main id="activity" class="subpage">
        <!-- mv -->
        <div class="top_fv">
            <div class="top_fv_inner">
                <div class="top_fv_movie">
                    <div class="in"> 
                        <img src="<?php bloginfo('template_directory'); ?>/image/activity_mv.jpg" alt="" class="movie">
                    </div>
                </div>
                <!-- <div class="top_fv_text">
                    <p>八ヶ岳の豊かな自然、</p>
                    <p>文化、味覚、アートを</p>
                    <p>風かに泊まって体感する</p>
                </div> -->
                <div class="fv_text fv_fadein">
                    <img src="<?php bloginfo('template_directory'); ?>/image/fv_text_activity.svg" alt="">
                </div>
                <div class="fv_menu pc fv_fadein">
                    <a href="https://www.instagram.com/hotel_fuka/?hl=ja" class="fv_menu_inner" target="_blank" rel="noopener">
                        <img class="fv_menu_icon" src="<?php bloginfo('template_directory'); ?>/image/icon_instagram_fv.svg" alt="">
                    </a>
                    <a href="<?php bloginfo('url'); ?>/index.html#access" class="fv_menu_inner">
                        <img class="fv_menu_icon" src="<?php bloginfo('template_directory'); ?>/image/icon_map_fv.svg" alt="">
                    </a>
                </div>
            </div>
        </div>

        <!-- 導入文 -->
        <div class="pageinfo bg_b_c">
            <div class="c_info_bg inner">
                <div class="pageinfo_inner">
                    <h2 class="fv_fadein">～Yatsugatake Inclusive～<br>
                        泊まって楽しむ八ヶ岳
                    </h2>
                    <p class="fadein">
                        八ヶ岳を観る、遊ぶ、学ぶ、<br class="sp">創る、食べる、歩く、漕ぐ。<br>
                        八ヶ岳の豊かな自然、文化、<br class="sp">味覚、アートを<br>
                        風かに泊まって体感してみませんか。
                    </p>
                </div>
            </div>
        </div>



        <?php
        if (have_posts()) : query_posts('post_type=activity&posts_per_page=99&paged='.$paged);
        while (have_posts()) : the_post();
        ?>

        <div class="content bg_wave about1">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php the_field('act_mv'); ?>" alt="">
                        </div>
                        <ul class="slick">
                            <?php if( get_field('act_photo1') ) { ?>
                                <li><img src="<?php the_field('act_photo1'); ?>"></li>
                            <?php } ?>
                            <?php if( get_field('act_photo2') ) { ?>
                                <li><img src="<?php the_field('act_photo2'); ?>"></li>
                            <?php } ?>
                            <?php if( get_field('act_photo3') ) { ?>
                                <li><img src="<?php the_field('act_photo3'); ?>"></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>
                                <?php the_title(); ?>
                            </h2>
                            <p><?php the_field('act_price'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <?php if( get_field('act_detail') ) { ?>
                        <p class="text"><?php the_field('act_detail'); ?></p>
                    <?php } ?>
                    <a href="<?php the_field('act_plan_url'); ?>" class="flex">
                        <p class="btn"><span class="arrow"></span>このプランを予約する</p>
                    </a>
                </div>                
            </div>
        </div>

        <?php endwhile; ?>
        <?php endif; ?>
        <?php
        wp_reset_query();
        ?>




        <!-- 【八ヶ岳エナジーファームのイチゴ狩り体験付】 -->
        <div class="content bg_b_c about1">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_main2.png" alt="">
                        </div>
                        <ul class="slick">
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_2_1.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_2_2.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_2_3.png"></li>
                        </ul>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>
                                【八ヶ岳エナジーファームのイチゴ狩り体験付】<br>
                                フレンチWメイン＜香＞と美食オールインクルーシブ
                            </h2>
                            <p>19,000円 ～</p>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        2021年９月に新規オープン！１年をとおして通年で楽しめる八ヶ岳エナジーファームのイチゴ狩りと風か宿泊＜夕食：スタンダード香＞がセットになったプランです。<br><br>
                        ＜八ヶ岳エナジーファームイチゴ狩りのご案内＞<br>
                        標高1000ｍを超える高原で育ったいちご狩り体験を通年でお楽しみいただけます。
                    </p>
                    <a href="" class="flex">
                        <p class="btn"><span class="arrow"></span>このプランを予約する</p>
                    </a>
                </div>                
            </div>
        </div>

        <!-- 【ニジマス釣り体験付】 -->
        <div class="content bg_wave about1">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_main3.png" alt="">
                        </div>
                        <ul class="slick">
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_3_1.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_3_2.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_3_3.png"></li>
                        </ul>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>
                                【ニジマス釣り体験付】<br>
                                フレンチWメイン＜香＞と美食オールインクルーシブ
                            </h2>
                            <p>18,500円 ～</p>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        フィッシングエリア山里での「ニジマス釣り体験」と風か宿泊＜夕食：スタンダード香＞がセットになったプランです。<br><br>
                        ＜ニジマス釣り体験のご案内＞<br>
                        八ヶ岳南麓の清澄な湧水池で、ニジマス釣りがお楽しみいただけます。釣った魚は全てお持ち帰りできます。塩焼きでぜひお召し上がりください。別料金ですが、炭火で塩焼きにしてその場で釣りたてニジマスを召し上がることができます。
                    </p>
                    <a href="" class="flex">
                        <p class="btn"><span class="arrow"></span>このプランを予約する</p>
                    </a>
                </div>                
            </div>
        </div>

        <!-- 【選べる8つのスパティオ体験工房講座】 -->
        <div class="content bg_b_c about1">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_main4.png" alt="">
                        </div>
                        <ul class="slick">
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_4_1.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_4_2.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_4_3.png"></li>
                        </ul>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>
                                【選べる8つのスパティオ体験工房講座】<br>
                                フレンチWメイン＜香＞と美食オールインクルーシブ
                            </h2>
                            <p>19,000円 ～</p>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        スパティオ体験工房の８つの体験プラン「押し花」「ガラス磁気絵付け」「とんぼ玉」「羊毛フェルト」「ステンドグラス」「皮小物」「天然石アクセサリー」「フラワーアレンジ」「機織り」各体験からおひとつ（ご利用当日に開講している講座から選択）と風か宿泊＜夕食：スタンダード香＞がセットになったプランです。何を受講されるかは実際に現地で見てお決めいただけます。
                    </p>
                    <a href="" class="flex">
                        <p class="btn"><span class="arrow"></span>このプランを予約する</p>
                    </a>
                </div>                
            </div>
        </div>

        <!-- 【セグウェイネイチャーライド体験付】 -->
        <div class="content bg_wave about1">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_main5.png" alt="">
                        </div>
                        <ul class="slick">
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_5_1.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_5_2.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_5_3.png"></li>
                        </ul>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>
                                【セグウェイネイチャーライド体験付】<br>
                                フレンチWメイン＜香＞と美食オールインクルーシブ 
                            </h2>
                            <p>21,000円 ～</p>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        八ヶ岳アウトドア・アクティヴィティーズの「セグウェイパークライド【ガイド付】」体験と風か宿泊＜夕食：スタンダード香＞がセットになったプランです。<br><br>
                        ＜セグウェイパークライド体験のご案内＞<br>
                        次世代モビリティ「セグウェイ」に乗って、清里「萌木の村」の森の中をガイドとともに周遊するライドツアー。四季折々に移り変わる森の表情、咲き誇る花々をお楽しみください。セグウェイの操作方法は十分な講習を受けていただくので、安心安全です。
                    </p>
                    <a href="" class="flex">
                        <p class="btn"><span class="arrow"></span>このプランを予約する</p>
                    </a>
                </div>                
            </div>
        </div>

        <!-- 【山カヤック体験付】 -->
        <div class="content bg_b_c about1">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_main6.png" alt="">
                        </div>
                        <ul class="slick">
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_6_1.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_6_2.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_6_3.png"></li>
                        </ul>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>
                                【山カヤック体験付】<br>
                                フレンチWメイン＜香＞と美食オールインクルーシブ
                            </h2>
                            <p>21,000円 ～</p>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        八ヶ岳アウトドア・アクティヴィティーズの「山カヤック【ガイド付】」体験と風か宿泊＜夕食：スタンダード香＞がセットになったプランです。<br>
                        ＜山カヤック体験のご案内＞<br>
                        標高1500ｍの湖面にカヤックを浮かべて、しばし揺られてみませんか。ガイドの簡単なレクチャーを受けたあとは、ご自分でバドルを握って漕ぎ出してみよう！
                    </p>
                    <a href="" class="flex">
                        <p class="btn"><span class="arrow"></span>このプランを予約する</p>
                    </a>
                </div>                
            </div>
        </div>

        <!-- 【イチゴ狩り＋しいたけ狩りのＷ自然体験】 -->
        <div class="content bg_wave about1">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_main7.png" alt="">
                        </div>
                        <ul class="slick">
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_7_1.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_7_2.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_7_3.png"></li>
                        </ul>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>
                                【イチゴ狩り＋しいたけ狩りのＷ自然体験】<br>
                                レンチWメイン＜香＞と美食オールインクルーシブ
                            </h2>
                            <p>19,500円 ～</p>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        2021年９月に新規オープン！<br>
                        １年をとおして通年で楽しめる八ヶ岳エナジーファームのイチゴ狩り（30分食べ放題）としいたけ狩り（大人の方お1人様につき１袋詰め放題お持ち帰り）と風か宿泊＜夕食：スタンダード香＞がセットになったプランです。<br><br>
                        ━━八ヶ岳エナジーファームイチゴ狩り＋しいたけ狩りのご案内━━<br><br>
                        標高1000ｍを超える高原で育ったいちご狩り＋自社工場で徹底して品質管理された菌床で栽培した肉厚のしいたけ狩り体験を、Ｗでお楽しみいただけます。<br>
                        いちご狩り農園とシイタケ狩り農園は隣接しています。
                    </p>
                    <a href="" class="flex">
                        <p class="btn"><span class="arrow"></span>このプランを予約する</p>
                    </a>
                </div>                
            </div>
        </div>

        <!-- 【本格乗馬体験60分 カナディアンキャンプ八ヶ岳】 -->
        <div class="content bg_b_c about1">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_main8.png" alt="">
                        </div>
                        <ul class="slick">
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_8_1.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_8_2.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_8_3.png"></li>
                        </ul>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>
                                【本格乗馬体験60分 カナディアンキャンプ八ヶ岳】<br>
                                フレンチWメイン＜香＞と美食オールインクルーシブ
                            </h2>
                            <p>27,500円 ～</p>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        森の中を馬に乗って歩く！そんな非日常の体験ができるプランです。<br>
                        体験風かから車で5分！カナディアンキャンプ八ヶ岳での60分（場内30分レッスン+外乗30分）乗馬体験と風か宿泊＜夕食：スタンダード香＞がセットになったプランです。馬の町、小淵沢でお馬さんと歩く非日常を楽しんでみませんか。
 
                    </p>
                    <a href="" class="flex">
                        <p class="btn"><span class="arrow"></span>このプランを予約する</p>
                    </a>
                </div>                
            </div>
        </div>

        <!-- 【お手軽乗馬体験30分 ララミー牧場】 -->
        <div class="content bg_wave about1">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_main9.png" alt="">
                        </div>
                        <ul class="slick">
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_9_1.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_9_2.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_9_3.png"></li>
                        </ul>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>
                                【お手軽乗馬体験30分 ララミー牧場】<br>
                                フレンチWメイン＜香＞と美食オールインクルーシブ
                            </h2>
                            <p>21,000円 ～</p>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        お手軽に乗馬体験を楽しめるプランです。<br>
                        体験風かから車で5分！ララミー牧場での30分（場内での30分）乗馬体験と風か宿泊＜夕食：スタンダード香＞がセットになったプランです。馬の町、小淵沢でお馬さんと歩く非日常を楽しんでみませんか。
                    </p>
                    <a href="" class="flex">
                        <p class="btn"><span class="arrow"></span>このプランを予約する</p>
                    </a>
                </div>                
            </div>
        </div>

        <!-- 【パラグライダー半日体験付】 -->
        <div class="content bg_b_c about1">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_main10.png" alt="">
                        </div>
                        <ul class="slick">
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_10_1.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_10_2.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_10_3.png"></li>
                        </ul>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>
                                【パラグライダー半日体験付】<br>
                                フレンチWメイン＜香＞と美食オールインクルーシブ
                            </h2>
                            <p>23,500円 ～</p>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        富士見パノラマパラグライダースクールの「パラグライダー（半日体験コース）」体験と風か宿泊＜夕食：スタンダード香＞がセットになったプランです。<br><br>
                        ＜パラグライダー体験のご案内＞<br>
                        パラグライダーをまずは体験したい方に最適なコースです。パラグライダーの基礎を学び、実際のフライトにチャレンジします
                    </p>
                    <a href="" class="flex">
                        <p class="btn"><span class="arrow"></span>このプランを予約する</p>
                    </a>
                </div>                
            </div>
        </div>

        <!-- 【家族で楽しむ森歩き体験付】 -->
        <div class="content bg_wave about1">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_main11.png" alt="">
                        </div>
                        <ul class="slick">
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_11_1.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_11_2.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/activity_photo_11_3.png"></li>
                        </ul>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>
                                【家族で楽しむ森歩き体験付】<br>
                                フレンチWメイン＜香＞と美食オールインクルーシブ
                            </h2>
                            <p>18,500円 ～</p>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        八ヶ岳アウトドア・アクティヴィティーズの「家族で楽しむ森歩き【ガイド付】」体験と風か宿泊＜夕食：スタンダード香＞がセットになったプランです。<br><br>
                        ＜家族で楽しむ森歩き体験のご案内＞<br>
                        ご家族で四季折々の自然の魅力を楽しく体験するプログラムです。ガイドとともに、野鳥の声を聞き、高原の冷たい水に触れ、動物の痕跡を探し、森の面白さを発見しながらゆっくり歩いてみませんか。
                    </p>
                    <a href="" class="flex">
                        <p class="btn"><span class="arrow"></span>このプランを予約する</p>
                    </a>
                </div>                
            </div>
        </div>

    </main>
    <!-- ↑↑↑ MAIN ↑↑↑ -->

    <!-- ↓↓↓ FOOTER ↓↓↓ -->
    <?php get_footer(); ?>