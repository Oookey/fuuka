<?php
/**
* Template Name: スマートチェックイン（確認画面）
*/
get_header(); ?>
<!------------- HEADER ------------->

    <!-- ↓↓↓ MAIN ↓↓↓ -->
    <main id="news_detail" class="subpage contact">
        <!-- ページタイトル -->
        <div class="pageinfo bg_b_c">
            <div class="c_info_bg inner">
                <div class="pageinfo_inner">
                    <img src="<?php bloginfo('template_directory'); ?>/image/pagetitle_smartCheckIn.png" alt="">
                </div>
            </div>
        </div>

        <!-- スマートチェックインフォーム -->
        <div class="content bg_wave confirm">
            <div class="news">
                <div class="inner">

                    <div class="title">
                        <h2>お問い合わせ<br class="sp">内容確認</h2>
                    </div>

                    <div class="detail">
                        <!-- フォーム -->
                        <div class="content_wrap form_wrap">
                            <div class="form_inner">
                                <?php echo do_shortcode('[mwform_formkey key="351"]'); ?>
                            </div>
                        </div>

                    </div>
                    <a href="<?php bloginfo('url'); ?>/"><span class="arrow"></span>トップページへ戻る</a>

                </div>
            </div>
        </div>

        </main>
    <!-- ↑↑↑ MAIN ↑↑↑ -->

    <!-- ↓↓↓ FOOTER ↓↓↓ -->
    <?php get_footer(); ?>