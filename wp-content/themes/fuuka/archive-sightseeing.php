<?php
/**
* Template Name: 周辺観光
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
    <main id="tourism" class="subpage">
        <!-- mv -->
        <div class="top_fv">
            <div class="top_fv_inner">
                <div class="top_fv_movie">
                    <div class="in"> 
                        <img src="<?php bloginfo('template_directory'); ?>/image/tourism_mv.png" alt="" class="movie">
                    </div>
                </div>
                <div class="fv_menu pc">
                    <a href="https://www.instagram.com/hotel_fuka/?hl=ja" class="fv_menu_inner fv_fadein" target="_blank" rel="noopener">
                        <img class="fv_menu_icon" src="<?php bloginfo('template_directory'); ?>/image/icon_instagram_fv.svg" alt="">
                    </a>
                    <a href="<?php bloginfo('url'); ?>/access/" class="fv_menu_inner fv_fadein">
                        <img class="fv_menu_icon" src="<?php bloginfo('template_directory'); ?>/image/icon_map_fv.svg" alt="">
                    </a>
                </div>
            </div>
        </div>

        <!-- 導入文 -->
        <div class="pageinfo bg_b_c">
            <div class="c_info_bg inner fv_fadein">
                <div class="pageinfo_inner">
                    <img src="<?php bloginfo('template_directory'); ?>/image/pagetitle_tourism.png" alt="">
                </div>
            </div>
        </div>





        <?php
        if (have_posts()) : query_posts('post_type=sightseeing&posts_per_page=99&paged='.$paged);
        while (have_posts()) : the_post();
        ?>

        <div class="content roop_bg" id="a<?php the_ID(); ?>">
            <div class="inner">
            <?php if ($wp_query->current_post == 0) : ?>
                <div class="illust fv_fadein"><img src="<?php bloginfo('template_directory'); ?>/image/tourism_fv_illust.svg" alt=""></div>
            <?php else : ?>
                <div></div>
            <?php endif; ?>
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php the_field('ss_mv'); ?>" alt="">
                        </div>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2><?php the_title(); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <?php if( get_field('ss_detail') ) { ?>
                        <p class="text"><?php the_field('ss_detail'); ?></p>
                    <?php } ?>
                    <dl class="about_point_wrap">
                        <?php if( get_field('ss_address') ) { ?>
                            <dt>所在地：</dt>
                            <dd><?php the_field('ss_address'); ?></dd>
                        <?php } ?>
                        <?php if( get_field('ss_open') ) { ?>
                            <dt>営業期間：</dt>
                            <dd><?php the_field('ss_open'); ?></dd>
                        <?php } ?>
                        <?php if( get_field('ss_access') ) { ?>
                            <dt>当館からのアクセス：</dt>
                            <dd><?php the_field('ss_access'); ?></dd>
                        <?php } ?>
                        <?php if( get_field('ss_url') ) { ?>
                            <dt>公式サイト：</dt>
                            <dd><a href="<?php the_field('ss_url'); ?>" target="_blank" rel="noopener"><?php the_field('ss_url'); ?></a></dd>
                        <?php } ?>
                    </dl>
                    <?php if( get_field('ss_plan_url') ) { ?>
                    <a href="<?php the_field('ss_plan_url'); ?>" class="flex">
                        <p class="btn"><span class="arrow"></span>体験宿泊プランはこちら</p>
                    </a>
                    <?php } ?>
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