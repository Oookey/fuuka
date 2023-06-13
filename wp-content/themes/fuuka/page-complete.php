<?php
/**
* Template Name: お問い合わせ（完了画面）
*/
get_header(); ?>
<!------------- HEADER ------------->

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

        <!-- お問い合わせフォーム -->
        <div class="content bg_wave confirm">
            <div class="news">
                <div class="inner">

                    <div class="title">
                        <h2>お問い合わせ<br class="sp">完了</h2>
                    </div>

                    <div class="detail">
                        <div class="detail_title">
                            <h2>お問い合わせをいただきまして<br>誠にありがとうございます。</h2>
                            <br>
                            <p>お客様からのお問い合わせ内容を受け付け致しましたので、ご連絡させていただきます。</p>
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
