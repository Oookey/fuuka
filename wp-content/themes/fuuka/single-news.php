<?php
/**
* Template Name: お知らせ詳細ページ
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

            <div class="news">
                <div class="title">
                    <h2 class="vertical">お知らせ</h2>
                </div>
                <div>
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
                    <a href="<?php bloginfo('url'); ?>/news/"><span class="arrow"></span>一覧へ戻る</a>
                </div>
            </div>

        </div>
    </div>

    <!-- ↓↓↓ FOOTER ↓↓↓ -->
    <?php get_footer(); ?>