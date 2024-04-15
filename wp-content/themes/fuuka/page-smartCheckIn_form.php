<?php
/**
* Template Name: スマートチェックイン
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

        <?php if( !post_password_required( $post->ID ) ) :  ?>

        <!-- スマートチェックインフォーム -->
        <div class="content bg_wave">
            <div class="news">
                <div class="inner">
                    <p class="f-error">入力エラーです。<br>※まだフォームの記入は完了しておりません。</p>
                    <p class="top_info f-er-n">下記へご記入ください。<br><b style="color:red;">【必須】</b>は必ずご入力ください。<br>ご記入いただいた内容、及び館内の営業時間等は</p>
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

    <script>
        jQuery(function($) {
        if ( $('.error')[0] ) {
            $('.f-error').addClass('display');
            $('.f-er-n').addClass('display-n');
            $('.mw_wp_form').addClass('mw_wp_form_error');
                var errorEl = $('.mw_wp_form').eq(0);
                var position = errorEl.parent().offset().top - 100;
                $('body,html').delay(200).animate({scrollTop:position}, 600, 'swing');
        }
        });
    </script>

<?php else:  ?>
    <?php echo get_the_password_form(); ?>
<?php endif;  ?>

<?php get_footer(); ?>



