<?php
/**
* Template Name: スマートチェックイン（完了画面）
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
                        <h2>フォーム送信<br class="sp">完了</h2>
                    </div>

                    <div class="detail">
                        <div class="detail_title">
                            <h2>スマートチェックインフォームの送信が完了いたしました。</h2>
                            <br>
                            <p>お客様に入力いただいた情報はメールにてお送りさせていただきます。<br>ご協力をいただきまして誠にありがとうございました。</p>
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
