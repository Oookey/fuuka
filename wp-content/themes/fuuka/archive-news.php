<?php
/**
* Template Name: お知らせ一覧ページ
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
    <main id="news" class="subpage">
        <!-- ページタイトル -->
        <div class="pageinfo bg_b_c">
            <div class="c_info_bg inner fv_fadein">
                <div class="pageinfo_inner">
                    <img src="<?php bloginfo('template_directory'); ?>/image/pagetitle_news.png" alt="">
                </div>
            </div>
        </div>

        <!-- ニュース一覧 -->
        <div class="content bg_wave">
            <div class="news img_bg_1 fv_fadein">
                <div class="inner">
                    <!-- ページネーション -->
                    <?php
                    $args = array(
                        'mid_size'      => 1, // 現在ページの左右に表示するページ番号の数
                        'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
                        'prev_text'     => __( '<svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" /></svg>'), // 「前へ」リンクのテキスト
                        'next_text'     => __( '<svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" /></svg>'), // 「次へ」リンクのテキスト
                        // 'type'          => 'list', // 戻り値の指定 (plain/list)
                    );
                    the_posts_pagination($args);
                    ?>

                    <dl>
                        <?php
                        if (have_posts()) : query_posts('post_type=news&posts_per_page=10&paged='.$paged);
                        while (have_posts()) : the_post();
                        ?>
                        <dt><?php the_time('Y.m.d'); ?></dt>
                        <dd>
                            <div>
                                <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <?php the_field('news_info'); ?>
                            </div>
                            <a href="<?php echo get_permalink(); ?>"><p><span class="arrow"></span>詳しく見る</p></a>
                        </dd>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php
                        wp_reset_query();
                        ?>
                    </dl>
                    
                    <!-- ページネーション -->
                    <?php
                    $args = array(
                        'mid_size'      => 1, // 現在ページの左右に表示するページ番号の数
                        'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
                        'prev_text'     => __( '<svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" /></svg>'), // 「前へ」リンクのテキスト
                        'next_text'     => __( '<svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" /></svg>'), // 「次へ」リンクのテキスト
                        // 'type'          => 'list', // 戻り値の指定 (plain/list)
                    );
                    the_posts_pagination($args);
                    ?>
                </div>
            </div>
        </div>

    </main>
    <!-- ↑↑↑ MAIN ↑↑↑ -->



    <!-- ↓↓↓ FOOTER ↓↓↓ -->
    <?php get_footer(); ?>