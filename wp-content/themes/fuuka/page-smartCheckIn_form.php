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
                    <div class="detail" style="border-top: none;">
                        <div class="c_bottom_wrap">
                            <p class="news_info">
                                <b>【館内のご案内】</b><br>
                            </p>
                            <p class="news_info">
                                <b>チェックイン時のおもてなし</b><br>
                                15:00～16:30<br>
                                ウエルカムドリンク、ウエルカムピザ、ヤギさんふれあい体験、焼きマシュマロ等
                            </p>
                            <ol>
                                <li>荒天時は一部中止、内容変更の可能性があります</li>
                                <li>当社に、事務取扱責任者1人を置く。</li>
                                <li>ウエルカムビールは22：30までご利用いただけます。</li>
                                <li>ジュース、珈琲は22：30まで、翌朝7：00～チェックアウトまでご利用いただけます。</li>
                            </ol>
                            <p class="news_info">
                                <b>選べる色浴衣</b><br>
                            </p>
                            <ol>
                                <li>浴衣、作務衣はフロント前にご用意しております。お好みの色、柄の浴衣、作務衣をお選びください。お子様用の作務衣（130㎝、100㎝）もご用意しています。</li>
                                <li>館内、レストランは浴衣、作務衣でご利用いただけます。</li>
                            </ol>
                            <p class="news_info">
                                <b>ご夕食 ＜レストラン炙－あぶり－＞</b><br>
                                17:30～ 19:30～の二部制
                            </p>
                            <ol>
                                <li>夕食時、山梨県産ワインをはじめ約50種類がフリードリンク</li>
                            </ol>
                            <p class="news_info">
                                <b>ナイトBAR＜夜更かし処＞</b><br>
                                21:00～22:30<br>
                            </p>
                            <ol>
                                <li>ウィスキー、カクテルなど約50種類がフリードリンク（白州など一部有料銘柄あり）</li>
                                <li>星見テラスで焚火を実施(雨天時除く)</li>
                            </ol>
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



