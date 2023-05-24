<?php
/**
* Template Name: お問い合わせ（確認画面）
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

            <div class="news contact confirm">
                <div class="title">
                    <h2 class="vertical">お問い合わせ<br class="sp">内容確認</h2>
                </div>
                <div>
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
    </div>

<!------------- FOOTER ------------->
<?php get_footer(); ?>