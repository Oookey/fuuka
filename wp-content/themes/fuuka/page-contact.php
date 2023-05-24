<?php
/**
* Template Name: お問い合わせ
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
    <main id="news_detail" class="subpage contact">
        <!-- ページタイトル -->
        <div class="pageinfo bg_b_c">
            <div class="c_info_bg inner">
                <div class="pageinfo_inner">
                    <img src="<?php bloginfo('template_directory'); ?>/image/pagetitle_contact.png" alt="">
                </div>
            </div>
        </div>

        <!-- ニュース詳細 -->
        <div class="content bg_wave">
            <div class="news">
                <div class="inner">

                    <p class="f-error">入力エラーです。<br>※まだ申請は完了しておりません。</p>

                    <p class="top_info f-er-n">
                    ご返信には少しお時間がかかる場合がございます。<br>
                    お急ぎの際は、お電話にてご連絡いただきますよう<br class="sp">お願い申し上げます。<br>
                    <b>電話でのお問合せ先　TEL :0551-36-6414</b><br>
                    ※必ずすべての項目をご入力ください。<br>
                    ※下記の項目にご記入のうえ「確認」ボタンを<br class="sp">クリックしてください。
                    </p>

                    <div class="detail">
                        <!-- フォーム -->
                        <div class="content_wrap form_wrap">
                            <div class="form_inner">
                                <?php echo do_shortcode('[mwform_formkey key="211"]'); ?>
                            </div>
                        </div>

                    </div>
                    <a href="<?php bloginfo('url'); ?>"><span class="arrow"></span>トップページへ戻る</a>

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

<?php get_footer(); ?>



