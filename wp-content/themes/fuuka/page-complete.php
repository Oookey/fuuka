<?php
/**
* Template Name: お問い合わせ（完了画面）
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

            <div class="news contact complete">
                <div class="title">
                    <h2 class="vertical">お問い合わせ<br class="sp">完了</h2>
                </div>
                <div>
                    <div class="detail">
                        
                        <div class="detail_title">
                            <h2>お問い合わせをいただきまして<br>誠にありがとうございます。</h2>
                            <br>
                            <p>お客様からのお問い合わせ内容を受け付け致しましたので、ご連絡させていただきます。</p>
                        </div>

                    </div>
                    <a href="<?php bloginfo('url'); ?>"><span class="arrow"></span>トップページへ戻る</a>
                </div>
            </div>

        </div>
    </div>

<!------------- FOOTER ------------->
<?php get_footer(); ?>