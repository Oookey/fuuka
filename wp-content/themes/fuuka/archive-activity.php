<?php
/**
* Template Name: 体験宿泊プラン
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

        <div class="content roop_bg about1" id="a<?php the_ID(); ?>">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php the_field('act_mv'); ?>" alt="">
                        </div>
                        <?php if( get_field('act_photo1') ) { ?>
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
                        <?php } ?>
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



    </main>
    <!-- ↑↑↑ MAIN ↑↑↑ -->

    <!-- ↓↓↓ FOOTER ↓↓↓ -->
    <?php get_footer(); ?>