<?php
/**
* Template Name: お知らせ詳細ページ
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
    <main id="news_detail" class="subpage">
        <!-- ページタイトル -->
        <div class="pageinfo bg_b_c">
            <div class="c_info_bg inner fv_fadein">
                <div class="pageinfo_inner">
                    <img src="<?php bloginfo('template_directory'); ?>/image/pagetitle_news.png" alt="">
                </div>
            </div>
        </div>
        
        <!-- ニュース詳細 -->
        <div class="content bg_wave">
            <div class="news img_bg_1 fv_fadein">
                <div class="inner">
                    <div class="detail">
                        <div class="detail_title">
                            <p><?php the_time('Y.m.d'); ?></p>
                            <h2><?php the_title(); ?></h2>
                        </div>
                        <div class="detail_inner">
                            <?php if( get_field('news_info') ) { ?>
								<div class="news_info"><?php the_field('news_info'); ?></div>
							<?php } ?>
                            <?php if(have_rows('news_inner')): ?>
								<?php while(have_rows('news_inner')): the_row(); ?>

                                <?php if( get_sub_field('news_subtitle') ) { ?>
                                    <h4 class="news_subtitle"><?php the_sub_field('news_subtitle'); ?></h4>
                                <?php } ?>

                                <?php if( get_sub_field('news_img') ) { ?>
                                    <div class="news_img">
                                        <img src="<?php the_sub_field('news_img'); ?>">
                                        <a href="<?php the_sub_field('news_img'); ?>" data-lightbox="img" data-title="<?php the_sub_field('news_img_info'); ?>" class="news_img_size">
                                            <p>画像を拡大</p>
                                        </a>
                                    </div>
                                <?php } ?>

                                <?php if( get_sub_field('news_detail') ) { ?>
                                    <div class="news_detail"><?php the_sub_field('news_detail'); ?></div>
                                <?php } ?>

                                <?php endwhile; ?>
							<?php endif; ?>
                        </div>
                    </div>
                    <a href="<?php bloginfo('url'); ?>/news/" class="flex">
                        <p class="btn"><span class="arrow"></span>一覧へ戻る</p>
                    </a>
                </div>
            </div>
        </div>

    </main>
    <!-- ↑↑↑ MAIN ↑↑↑ -->

    <!-- ↓↓↓ FOOTER ↓↓↓ -->
    <?php get_footer(); ?>