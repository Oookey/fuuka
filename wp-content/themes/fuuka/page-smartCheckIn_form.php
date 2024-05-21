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
                    <p class="top_info f-er-n">下記へご記入ください。<br><b style="color:red;">【必須】</b>は必ずご入力ください。<br>ご記入いただいた内容、及び館内の営業時間等はメールで返信させていただきます。必ずご確認ください。</p>
                    <div class="detail">
                        <!-- フォーム -->
                        <div class="content_wrap form_wrap">
                            <div class="form_inner"><?php echo do_shortcode('[mwform_formkey key="922"]'); ?></div>
                        </div>
                    </div>
                    <div class="detail" style="border-top: none;">
                        <div class="" style="margin-bottom: 5rem;font-size: 1.4rem;font-family: 'Noto Sans JP', sans-serif;    line-height: 1.4em;">
                            <!--  -->
                            <p class="news_info">
                                <b>【館内のご案内】</b><br>
                            </p>
                            <!--  -->
                            <p class="news_info" style="margin-top: 2rem;">
                                <b>チェックイン時のおもてなし</b><br>
                                15:00～16:30<br>
                                ウエルカムドリンク、ウエルカムピザ、ヤギさんふれあい体験、焼きマシュマロ等
                            </p>
                            <ol style="list-style: '・';padding-left: 1em;line-height: 1.2em;">
                                <li>荒天時は一部中止、内容変更の可能性があります</li>
                                <li>当社に、事務取扱責任者1人を置く。</li>
                                <li>ウエルカムビールは22:30までご利用いただけます。</li>
                                <li>ジュース、珈琲は22:30まで、翌朝7:00～チェックアウトまでご利用いただけます。</li>
                            </ol>
                            <!--  -->
                            <p class="news_info" style="margin-top: 2rem;">
                                <b>選べる色浴衣</b><br>
                            </p>
                            <ol style="list-style: '・';padding-left: 1em;line-height: 1.2em;">
                                <li>浴衣、作務衣はフロント前にご用意しております。お好みの色、柄の浴衣、作務衣をお選びください。お子様用の作務衣（130㎝、100㎝）もご用意しています。</li>
                                <li>館内、レストランは浴衣、作務衣でご利用いただけます。</li>
                            </ol>
                            <!--  -->
                            <p class="news_info" style="margin-top: 2rem;">
                                <b>ご夕食 ＜レストラン炙－あぶり－＞</b><br>
                                17:30～ 19:30～の二部制
                            </p>
                            <ol style="list-style: '・';padding-left: 1em;line-height: 1.2em;">
                                <li>夕食時、山梨県産ワインをはじめ約50種類がフリードリンク</li>
                            </ol>
                            <!--  -->
                            <p class="news_info" style="margin-top: 2rem;">
                                <b>ナイトBAR＜夜更かし処＞</b><br>
                                21:00～22:30<br>
                            </p>
                            <ol style="list-style: '・';padding-left: 1em;line-height: 1.2em;">
                                <li>ウィスキー、カクテルなど約50種類がフリードリンク（白州など一部有料銘柄あり）</li>
                                <li>星見テラスで焚火を実施(雨天時除く)</li>
                            </ol>
                            <!--  -->
                            <p class="news_info" style="margin-top: 2rem;">
                                <b>大浴場</b><br>
                                15:00～24:00 / 6:00～10:00（10:00クローズ）<br>
                            </p>
                            <ol style="list-style: '・';padding-left: 1em;line-height: 1.2em;">
                                <li>露天風呂：芹ケ沢温泉からの運び湯（ナトリウム炭酸水素塩硫酸塩塩化物温泉）</li>
                                <li>内湯：麗水備長炭風呂</li>
                            </ol>
                            <!--  -->
                            <p class="news_info" style="margin-top: 2rem;">
                                <b>杜のライブラリー</b><br>
                                15:00～23:00 7:00～11:00<br>
                            </p>
                            <ol style="list-style: '・';padding-left: 1em;line-height: 1.2em;">
                                <li>たくさんのコミック、小説をご用意</li>
                            </ol>
                            <!--  -->
                            <p class="news_info" style="margin-top: 2rem;">
                                <b>星見テラス</b><br>
                                1階<br>
                            </p>
                            <ol style="list-style: '・';padding-left: 1em;line-height: 1.2em;">
                                <li>昼はピザやヤギさんとのふれあい、夜は星空とたき火をお楽しみください</li>
                            </ol>
                            <!--  -->
                            <p class="news_info" style="margin-top: 2rem;">
                                <b>売店</b><br>
                                8:00～11:00 / 15:00～21:00<br>
                            </p>
                            <ol style="list-style: '・';padding-left: 1em;line-height: 1.2em;">
                                <li>風かおすすめの地元の特産を中心にご用意しています。</li>
                            </ol>
                            <!--  -->
                            <p class="news_info" style="margin-top: 2rem;">
                                <b>キッズルーム</b><br>
                                14:00～22:00 7:00～11:00<br>
                            </p>
                            <ol style="list-style: '・';padding-left: 1em;line-height: 1.2em;">
                                <li>たくさんの工作体験、遊具、おもちゃをご用意しています</li>
                            </ol>
                            <!--  -->
                            <p class="news_info" style="margin-top: 2rem;">
                                <b>チェックアウト</b><br>
                                11:00<br>
                            </p>
                            <!--  -->
                            <p class="news_info" style="margin-top: 2rem;">
                                <b>【よくあるご質問】</b><br>
                            </p>
                            <!--  -->
                            <p class="news_info" style="margin-top: 2rem;">
                                <b>Ｑ.クレジットカード、ＱＲコードは使えますか</b><br>
                            </p>
                            <ol style="list-style: 'Ａ.';padding-left: 1.5em;line-height: 1.2em;">
                                <li>クレジットカードは使えます（JCB、VISA、マスターカード、アメリカンエクスプレス、ダイナーズクラブ）。QRコード決済も使えます（PayPay、auPAY、d払い、LINEPayなど）※楽天Payはご利用いただけません</li>
                            </ol>
                            <!--  -->
                            <p class="news_info" style="margin-top: 2rem;">
                                <b>Ｑ.お部屋にWIFIはありますか</b><br>
                            </p>
                            <ol style="list-style: 'Ａ.';padding-left: 1.5em;line-height: 1.2em;">
                                <li>全室無料でWIFIはつながりますが、多客時はつながりづらい場合がございます。</li>
                            </ol>
                            <!--  -->
                            <p class="news_info" style="margin-top: 2rem;">
                                宿泊時にご不明な点がございましたら 内線９番 またはフロントでお訊ねください。<br>
                            </p>
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



