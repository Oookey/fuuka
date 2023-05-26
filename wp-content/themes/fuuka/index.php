<?php get_header(); ?>
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
    <main id="top">
        <!-- mv -->
        <div class="top_fv">
            <div class="top_fv_inner">
                <div class="top_fv_movie">
                    <div class="in"> 
                        <img src="<?php bloginfo('template_directory'); ?>/image/top_mv.png" alt="" class="movie">
                        <!-- <video class="movie" src="<?php //bloginfo('template_directory'); ?>/movie/fuuka_mv.mp4" autoplay="" muted="" loop="" playsinline=""></video> -->
                    </div>
                </div>
                <!-- ↓↓↓　動画に差し替え時コメントアウト　↓↓↓ -->
                <div class="top_fv_text fv_fadein">
                    <p><span>大人も子供も楽しめる</span></p>
                    <p><span>オールインクルーシブ</span></p>
                    <p><span>大切な人との思い出旅へ</span></p>
                </div>
                <!-- --------- -->
                <div class="fv_menu pc">
                    <a href="https://www.instagram.com/hotel_fuka/?hl=ja" class="fv_menu_inner fv_fadein" target="_blank" rel="noopener">
                        <img class="fv_menu_icon" src="<?php bloginfo('template_directory'); ?>/image/icon_instagram_fv.svg" alt="">
                    </a>
                    <a href="<?php bloginfo('url'); ?>/#access" class="fv_menu_inner fv_fadein">
                        <img class="fv_menu_icon" src="<?php bloginfo('template_directory'); ?>/image/icon_map_fv.svg" alt="">
                    </a>
                </div>
            </div>
        </div>

        <!-- topic & news -->
        <div class="top_topic_news">
            <!-- topics -->
            <div class="top_topic fadein">
                <div class="topics_title">
                    <h2>Topic<br class="pc"><span>-特集-</span></h2>
                    <img src="<?php bloginfo('template_directory'); ?>/image/topics_illust.svg" alt="">
                </div>
                <!-- slider -->
                <div class="l-wrapper">
                    <div id="demo02" class="card02 l-section">
                        <div class="l-inner">
                        <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                            <div class="swiper-wrapper" id="swiper-wrapper-264345ba8ce2e194" aria-live="polite" style="cursor: grab; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">

                                <?php
                                query_posts('post_type=topic&posts_per_page=10');
                                while (have_posts()) : the_post();
                                ?>

                                    <a href="<?php echo get_permalink(); ?>" class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 10" style="margin-right: 32px;">
                                        <article class="slide">
                                            <div class="slide-media img-cover"><img src="<?php the_field('topic_detail_toppage_img'); ?>" alt=""></div>
                                            <div class="slide-content">
                                                <h2 class="slide-title"><?php the_title(); ?></h2>
                                                <time class="slide-date" datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
                                                <p class="slide-detail"><?php the_field('topic_detail_toppage_info'); ?></p>
                                            </div>
                                        </article>
                                    </a>

                                <?php endwhile; ?>
                                <?php wp_reset_query(); ?>

                            </div><!-- /swiper-wrapper -->
                        </div>
                    </div>
                    <div class="swiper-controller">
                        <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-264345ba8ce2e194" aria-disabled="true"></div>
                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-264345ba8ce2e194" aria-disabled="false"></div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div><!-- /swiper -->
                </div><!-- /wrapper -->
            </div>
            <!-- news -->
            <?php
            query_posts('post_type=news&posts_per_page=1');
            while (have_posts()) : the_post();
            ?>
                <div class="top_news shadow fadein">
                    <h2>お知らせ</h2>
                    <dl>
                        <dt><?php the_time('Y.m.d'); ?></dt>
                        <dd><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></dd>
                        <dd><a href="<?php echo get_permalink(); ?>"><span class="arrow"></span>お知らせ一覧へ</a></dd>
                    </dl>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>

        <!-- special -->
        <div class="special bg_wave">
            <div class="inner">
                <div class="title fadein">
                    <h2><span>Special</span><br>風かの<br class="sp">”まるごとおもてなし<font size="4">&reg;</font>”</h2>
                </div>
                <div class="flex special_contents fadein">
                    <a href="" class="special_contents_inner zoom">
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/image/special_img-1.png" alt="" class="img">
                        </figure>
                        <div class="special_contents_text">
                            <h2>お子様へおすすめの<br><span>“おもてなし”</span></h2>
                            <div>
                                <p class="btn"><span class="arrow"></span>詳しくはこちら</p>
                            </div>
                        </div>
					</a>
                    <a href="" class="special_contents_inner zoom">
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/image/special_img-2.png" alt="" class="img">
                        </figure>
						<div class="special_contents_text">
                            <h2>大人の方へおすすめの<br><span>“おもてなし”</span></h2>
                            <div>
                                <p class="btn"><span class="arrow"></span>詳しくはこちら</p>
                            </div>
						</div>
                    </a>
                </div>
                <div class="concept">
                    <div class="float-l title fadein">
                        <h2>コンセプト</h2>
                        <h2>オールインクルーシブで<br>高原リゾートステイを満喫</h2>
                        <img src="<?php bloginfo('template_directory'); ?>/image/special_illust.svg" alt="">
                    </div>
                    <div class="float-r fadein">
                        <p>
                            1000Mのおもてなし<br>
                            ご家族、恋人、お友達との「思い出旅」は風かにおまかせ。<br>
                            標高1000ｍの天空のリゾート地、自然豊かな八ヶ岳にあるホテル風かでしか体験できないたくさんのおもてなしを満喫していただき、大切な方との一生の思い出を紡いでください。<br>
                            ご滞在は基本オールインクルーシブで自由で快適なステイ。<br>
                            お食事はお子様連れでも気兼ねなく楽しめるカジュアルフレンチ。<br>
                            大人だけでなくお子様も楽しめるオールインクルーシブリゾートホテルです。
                        </p>
                        <div>
                            <a href="">
                                <p class="btn"><span class="arrow"></span>宿泊プラン一覧</p>
                            </a>
                            <!-- <a href="">
                                <p class="btn"><span class="arrow"></span>空室情報へ</p>
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ご案内 -->
        <div class="about content bg_b_c">
            <div class="inner">
                <img class="title fadein" src="<?php bloginfo('template_directory'); ?>/image/top_about_title.svg" alt="">
                <img class="illust illust-r fadein" src="<?php bloginfo('template_directory'); ?>/image/about_illust.svg" alt="">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv zoom">
                        <img src="<?php bloginfo('template_directory'); ?>/image/top_about_mv.png" alt="">
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <p>まるごとおもてなし<font size="2">&reg;</font></p>
                            <h2>大人も子供も楽しめるオールインクルーシブ。<br>追加料金なしで楽しめるたくさんの「まるごとおもてなし<font size="2">&reg;</font>」をどうぞ</h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        大人が嬉しいアルコールフリードリンクはもちろん、お子様が楽しめるたくさんのおもてなしもたくさんご用意。窯焼きウエルカムピザ、ヤギさんお散歩体験、星見テラスの焚火BAR、焚火で焼きマシュマロなど風かでしか味わえない非日常のおもてなしをお楽しみください。
                    </p>
                    <a href="" class="flex">
                        <p class="btn"><span class="arrow"></span>ホテルのご案内</p>
                    </a>
                    <ul class="slick">
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/about_slider-1.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/about_slider-2.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/about_slider-3.png"></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- お食事 -->
        <div class="dinner content bg_b_c">
            <div class="inner">
                <img class="title fadein" src="<?php bloginfo('template_directory'); ?>/image/top_dinner_title.svg" alt="">
                <img class="illust illust-r fadein" src="<?php bloginfo('template_directory'); ?>/image/dinner_illust.svg" alt="">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv zoom">
                        <img src="<?php bloginfo('template_directory'); ?>/image/top_dinner_mv.png" alt="">
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <p>カジュアルフレンチ</p>
                            <h2>カジュアルフレンチと<br>オールインクルーシブドリンクとのマリアージュ</h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        ご夕食はお箸で食べるカジュアルフレンチと山梨県産ワインを中心とした約50種類のドリンクとのマリアージュをご堪能ください。<br>
                        お子様連れでも気兼ねなくコース料理をお楽しみいただけます。
                    </p>
                    <a href="" class="flex">
                        <p class="btn"><span class="arrow"></span>お食事のご案内</p>
                    </a>
                    <ul class="slick">
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/dinner_slider-1.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/dinner_slider-2.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/dinner_slider-3.png"></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 客室 -->
        <div class="room content bg_wave">
            <div class="inner">
                <img class="title fadein" src="<?php bloginfo('template_directory'); ?>/image/top_room_title.svg" alt="">
                <img class="illust illust-l fadein" src="<?php bloginfo('template_directory'); ?>/image/room_illust.svg" alt="">
                <div class="con-sp-fv fadein">
                    <div class="float-r con_mv zoom">
                        <img src="<?php bloginfo('template_directory'); ?>/image/top_room_mv.png" alt="">
                    </div>
                    <div class="float-l con_text-l">
                        <div class="con_title">
                            <p>お部屋の中でも森林浴を</p>
                            <h2>春夏秋冬 表情の違う<br>八ヶ岳を愛でる10趣<br class="sp">の客室</h2>
                        </div>
                    </div>
                </div>
                <div class="float-l con_text-l fadein">
                    <p class="text">
                        檜温泉風呂付スイートルーム、100インチスクリーンシアターが楽しめるスーペリア和洋ルーム、抗ウイルス畳がお子様連れに安心な和室など、利用シーンに応じて選べる10種の趣の異なるお部屋タイプをご用意しています。
                    </p>
                    <a href="" class="flex">
                        <p class="btn"><span class="arrow"></span>客室のご案内</p>
                    </a>
                    <ul class="slick">
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_slider-1.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_slider-2.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_slider-3.png"></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 大浴場 -->
        <div class="bath content bg_b_c">
            <div class="inner">
                <img class="title fadein" src="<?php bloginfo('template_directory'); ?>/image/top_bath_title.svg" alt="">
                <img class="illust illust-l fadein" src="<?php bloginfo('template_directory'); ?>/image/bath_illust.svg" alt="">
                <div class="con-sp-fv fadein">
                    <div class="float-r con_mv zoom">
                        <img src="<?php bloginfo('template_directory'); ?>/image/top_bath_mv.png" alt="">
                    </div>
                    <div class="float-l con_text-l">
                        <div class="con_title">
                            <p>八ヶ岳の自然を眺めながら<br>のんびり浸かる露天風呂</p>
                            <h2>【風かの湯】露天風呂は蓼科源泉のひとつ芹ケ沢温泉、内湯は畳敷きでお子様も安心</h2>
                        </div>
                    </div>
                </div>
                <div class="float-l con_text-l fadein">
                    <p class="text">
                        内湯の洗い場は畳敷きで冷たくなく柔らかでお子様、ご年配の方も安心にご利用いただけます。露天風呂は芹ケ沢温泉からの運び湯で天然温泉をお楽しみいただきます。湯あがり処には、無料で楽しめるアイスキャンディーとマッサージチェアをご用意しております。
                    </p>
                    <a href="" class="flex">
                        <p class="btn"><span class="arrow"></span>大浴場のご案内</p>
                    </a>
                    <ul class="slick">
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/bath_slider-1.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/bath_slider-2.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/bath_slider-3.png"></li>
                    </ul>
                </div>
                <img class="illust" src="<?php bloginfo('template_directory'); ?>/image/bath_illust_2.svg" alt="">
            </div>
        </div>

        <!-- 体験宿泊プラン -->
        <div class="plan bg_wave">
            <div class="plan">
                <h2 class="title fadein">体験宿泊プラン</h2>
                <ul class="slick_exp fadein">

                    <?php
                    query_posts(array(
                        'post_type' => 'activity',
                        'taxonomy' => 'activity_top_display',
                        'term' => 'act_top',
                        'posts_per_page' => 3,
                        'orderby' => 'date',
                        'order' => 'DESC'
                        )
                    );
                    while (have_posts()) : the_post();
                    ?>

                    <li class="slick_exp_li">
                        <a href="<?php bloginfo('url'); ?>/activity/#a<?php the_ID(); ?>">
                            <img src="<?php the_field('act_mv'); ?>" alt="">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_field('act_detail'); ?></p>
                        </a>
                    </li>

                    <?php endwhile; ?>
                    <?php
                    wp_reset_query();
                    ?>

                </ul>
                <a href="<?php bloginfo('url'); ?>/activity/" class="flex fadein">
                    <p class="btn"><span class="arrow"></span>全ての体験はこちら</p>
                </a>
            </div>

        <!-- お知らせ -->
            <div class="news">
                <div class="inner fadein">
                    <h2 class="title">お知らせ</h2>
                    <dl class="">
                        <?php
                        query_posts('post_type=news&posts_per_page=4');
                        while (have_posts()) : the_post();
                        ?>

                            <dt><?php the_time('Y.m.d'); ?></dt>
                            <dd><a href="<?php echo get_permalink(); ?>">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_field('news_info'); ?></p>
                            </a></dd>

                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                        
                    </dl>
                    <a href="<?php bloginfo('url'); ?>/news/" class="flex">
                        <p class="btn"><span class="arrow"></span>全てのお知らせはこちら</p>
                    </a>
                </div>
            </div>
        </div>

        <!-- ホテル施設のご案内 -->
        <div class="hotel bg_b_c">
            <div class="inner">
                <img class="illust fadein" src="<?php bloginfo('template_directory'); ?>/image/hotel_illust.svg" alt="">
                <h2 class="title fadein">ホテル施設のご案内</h2>
                <p class="about fadein">たくさんのおもてなしを楽しめる<br>オールインクルーシブ。</p>
                <ul class="hotel_list fadein">
                    <li>
                        <a href="">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hotel_1.png" alt="">
                            <h2>星見のテラス</h2>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hotel_2.png" alt="">
                            <h2>レストラン－炙－</h2>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hotel_3.png" alt="">
                            <h2>露天風呂・大浴場</h2>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hotel_4.png" alt="">
                            <h2>湯上り処サービス</h2>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hotel_5.png" alt="">
                            <h2>ナイトバー</h2>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hotel_6.png" alt="">
                            <h2>フロント・売店・ロビー</h2>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hotel_7.png" alt="">
                            <h2>キッズルーム&<br>暇つぶしコーナー</h2>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hotel_8.png" alt="">
                            <h2>森のライブラリー</h2>
                        </a>
                    </li>
                </ul>
                <a href="<?php bloginfo('url'); ?>/about/" class="flex fadein">
                    <p class="btn"><span class="arrow"></span>ホテル案内</p>
                </a>
            </div>
        </div>

        <!-- 八ヶ岳周辺観光 -->
        <div class="tourism bg_wave">
            <img class="illust sp fadein" src="<?php bloginfo('template_directory'); ?>/image/tourism_illust_3.svg" alt="">
            <div class="title fadein">
                <h2>八ヶ岳周辺観光</h2>
                <p>Tourism around <br class="sp">Yatsugatake</p>
            </div>
            <img class="illust pc fadein" src="<?php bloginfo('template_directory'); ?>/image/tourism_illust.svg" alt="">
            <img class="illust pc fadein" src="<?php bloginfo('template_directory'); ?>/image/tourism_illust_2.svg" alt="">
            <ul class="slick_tourism fadein">

                <?php
                query_posts(array(
                    'post_type' => 'sightseeing',
                    'taxonomy' => 'sightseeing_top_display',
                    'term' => 'ss_top',
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'DESC'
                    )
                );
                while (have_posts()) : the_post();
                ?>

                <li>
                    <a href="<?php bloginfo('url'); ?>/sightseeing/#a<?php the_ID(); ?>">
                        <img src="<?php the_field('ss_mv'); ?>" alt="">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_field('ss_detail'); ?></p>
                    </a>
                </li>

                <?php endwhile; ?>
                <?php
                wp_reset_query();
                ?>

            </ul>
        </div>

        <!-- INSTAGRAM -->
        <div class="instagram bg_b_c">
            <div class="title fadein">
                <h2 class="title">INSTAGRAM</h2>
                <p>風か公式Instagramアカウント</p>
            </div>

            <div class="insta_slide l-section fadein">

                <div class="swiper swiper-a">
                    <!-- <div class="swiper-wrapper"> -->
                        <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
                        <!-- <a href="" class="swiper-slide">
                            <div class="slide">
                                <div class="slide-media img-cover"><img src="<?php bloginfo('template_directory'); ?>/image/insta_1.png" alt=""></div>
                            </div>
                        </a>
                        <a href="" class="swiper-slide">
                            <div class="slide">
                                <div class="slide-media img-cover"><img src="<?php bloginfo('template_directory'); ?>/image/insta_2.png" alt=""></div>
                            </div>
                        </a>
                        <a href="" class="swiper-slide">
                            <div class="slide">
                                <div class="slide-media img-cover"><img src="<?php bloginfo('template_directory'); ?>/image/insta_3.png" alt=""></div>
                            </div>
                        </a>
                        <a href="" class="swiper-slide">
                            <div class="slide">
                                <div class="slide-media img-cover"><img src="<?php bloginfo('template_directory'); ?>/image/insta_4.png" alt=""></div>
                            </div>
                        </a>
                        <a href="" class="swiper-slide">
                            <div class="slide">
                                <div class="slide-media img-cover"><img src="<?php bloginfo('template_directory'); ?>/image/insta_5.png" alt=""></div>
                            </div>
                        </a>
                        <a href="" class="swiper-slide">
                            <div class="slide">
                                <div class="slide-media img-cover"><img src="<?php bloginfo('template_directory'); ?>/image/insta_6.png" alt=""></div>
                            </div>
                        </a>
                        <a href="" class="swiper-slide">
                            <div class="slide">
                                <div class="slide-media img-cover"><img src="<?php bloginfo('template_directory'); ?>/image/insta_7.png" alt=""></div>
                            </div>
                        </a> -->
                    <!-- </div>/swiper-wrapper -->
                </div><!-- /swiper -->
            
                <div class="swiper swiper-b">
                    <div class="swiper-wrapper">
                        <!--?php echo do_shortcode('[instagram-feed feed=1]'); ?-->
                        <!-- <a href="" class="swiper-slide">
                            <div class="slide">
                                <div class="slide-media img-cover"><img src="<?php bloginfo('template_directory'); ?>/image/insta_8.png" alt=""></div>
                            </div>
                        </a>
                        <a href="" class="swiper-slide">
                            <div class="slide">
                                <div class="slide-media img-cover"><img src="<?php bloginfo('template_directory'); ?>/image/insta_9.png" alt=""></div>
                            </div>
                        </a>
                        <a href="" class="swiper-slide">
                            <div class="slide">
                                <div class="slide-media img-cover"><img src="<?php bloginfo('template_directory'); ?>/image/insta_1.png" alt=""></div>
                            </div>
                        </a>
                        <a href="" class="swiper-slide">
                            <div class="slide">
                                <div class="slide-media img-cover"><img src="<?php bloginfo('template_directory'); ?>/image/insta_2.png" alt=""></div>
                            </div>
                        </a>
                        <a href="" class="swiper-slide">
                            <div class="slide">
                                <div class="slide-media img-cover"><img src="<?php bloginfo('template_directory'); ?>/image/insta_3.png" alt=""></div>
                            </div>
                        </a>
                        <a href="" class="swiper-slide">
                            <div class="slide">
                                <div class="slide-media img-cover"><img src="<?php bloginfo('template_directory'); ?>/image/insta_4.png" alt=""></div>
                            </div>
                        </a>
                        <a href="" class="swiper-slide">
                            <div class="slide">
                                <div class="slide-media img-cover"><img src="<?php bloginfo('template_directory'); ?>/image/insta_5.png" alt=""></div>
                            </div>
                        </a> -->
                    </div><!-- /swiper-wrapper -->
                </div><!-- /swiper -->
                
            </div>
        </div>

        <!-- マップ -->
        <div class="map map_bg">
            <div class="inner">
                <h2 class="title fadein">アクセスマップ</h2>
                <div class="googlemap fadein">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3232.6299643368557!2d138.30874631526441!3d35.8825839801478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f170!3m3!1m2!1s0x601c69fb72a92e45%3A0x22b96b0c0cc40fa7!2zMTAwME3jga7jgYrjgoLjgabjgarjgZcg5YWr44O25bKz44Ob44OG44Or6aKo44GL!5e0!3m2!1sja!2sjp!4v1683769824920!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="address fadein">
                    <h2>八ヶ岳ホテル風か</h2>
                    <div>
                        <p>〒408-0044<br>山梨県北杜市小淵沢町字上の原3989-1</p>
                        <p>TEL : 0551-36-6414<br class="sp">（受付時間/9:00～21:00）</p>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- ↑↑↑ MAIN ↑↑↑ -->

    <!-- ↓↓↓ FOOTER ↓↓↓ -->
    <?php get_footer(); ?>