<?php
/**
* Template Name: イベント情報詳細ページ
*/
get_header(); ?>
<!------------- HEADER ------------->

    <!-- ↓↓↓ MAIN ↓↓↓ -->
    <main id="news_detail" class="subpage event_detail">
        <!-- ページタイトル -->
        <div class="pageinfo bg_b_c">
            <div class="c_info_bg inner fv_fadein">
                <div class="pageinfo_inner">
                    <img src="<?php bloginfo('template_directory'); ?>/image/pagetitle_event.png" alt="">
                </div>
            </div>
        </div>

        <!-- Topic詳細 -->
        <div class="content bg_wave">
            <div class="news img_bg_1 fv_fadein">
                <div class="inner">
                    <div class="detail">
                    <div class="detail_title">
                            <p><?php the_time('Y.m.d'); ?></p>
                            <h2><?php the_title(); ?></h2>
                        </div>
                        <div class="detail_inner">
                            <?php if( get_field('event_info') ) { ?>
								<div class="event_info"><?php the_field('event_info'); ?></div>
							<?php } ?>
                            <?php if(have_rows('event_inner')): ?>
								<?php while(have_rows('event_inner')): the_row(); ?>

                                <?php if( get_sub_field('event_subtitle') ) { ?>
                                    <h4 class="event_subtitle"><?php the_sub_field('event_subtitle'); ?></h4>
                                <?php } ?>

                                <?php if( get_sub_field('event_img') ) { ?>
                                    <div class="event_img">
                                        <img src="<?php the_sub_field('event_img'); ?>">
                                        <a href="<?php the_sub_field('event_img'); ?>" data-lightbox="img" data-title="<?php the_sub_field('event_img_info'); ?>" class="event_img_size">
                                            <p>画像を拡大</p>
                                        </a>
                                    </div>
                                <?php } ?>

                                <?php if( get_sub_field('event_detail') ) { ?>
                                    <div class="event_detail"><?php the_sub_field('event_detail'); ?></div>
                                <?php } ?>

                                <?php endwhile; ?>
							<?php endif; ?>
                        </div>
                    </div>
                    <a href="<?php bloginfo('url'); ?>/event/" class="flex">
                        <p class="btn"><span class="arrow"></span>一覧へ戻る</p>
                    </a>
                </div>
            </div>
        </div>

    </main>
    <!-- ↑↑↑ MAIN ↑↑↑ -->

    <!-- ↓↓↓ FOOTER ↓↓↓ -->
    <?php get_footer(); ?>