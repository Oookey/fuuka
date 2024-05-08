<?php
/**
* Template Name: スマートチェックイン ポータルページ
*/
get_header(); ?>
<!------------- HEADER ------------->

    <!-- ↓↓↓ MAIN ↓↓↓ -->
    <main id="news_detail" class="subpage pp portal">
        
        <!-- スマートチェックイン ポータルページ-->
        <div class="content">
            <div class="news">
                <div class="inner">
                    <div class="detail">

                        <?php if( !post_password_required( $post->ID ) ) :  ?>

                        <div class="detail_title">
                            <h2>スマートチェックイン</h2>
                        </div>
                        <div class="detail_inner">
                            <p class="news_info">
                                この度はホテルのご予約をいただき誠にありがとうございます。<br>
                                事前にチェックイン手続きが可能な「スマートチェックイン」へのご協力をお願いしております。<br>
                                「スマートチェックイン」をしていただきますと、到着時の署名や館内説明を省略させていただきますので、当日はスムーズにお部屋へご入室いただけ、チェックイン時のおもてなしを快適にご堪能いただけます。<br>
                                また当日ご不明点がありましたらフロントにお尋ねください。
                            </p>
                            <p class="news_info indent2">
                                <b>１）「<a href="<?php bloginfo('url'); ?>/smartcheckIn_form">チェックイン入力フォーム</a>」に入力</b><br>
                                「チェックイン入力フォーム」に必要事項をご入力いただき送信してください。<br>
                                お客様に入力いただいた情報はメールにてお送りさせていただきます。<br>
                                <b style="color:red;">こちらは宿泊日２週間前から前日までに情報を入力し送信してください。</b><br>
                            </p>
                            <a href="<?php bloginfo('url'); ?>/smartcheckIn_form" class="flex btn" style="float: none;display: block;margin-bottom: 4rem;">
                                <p class=""><span class="arrow"></span>チェックイン入力フォーム<br class="sp">はこちら</p>
                            </a>
                            <p class="news_info indent2">
                                <b>２）「<a href="<?php bloginfo('template_directory'); ?>/document/スマートチェックイン用宿泊受付表.pdf" target="_blank" rel="noopener">チェックインシート</a>」を当日持参</b><br>
                                添付ファイルを印刷しご記入いただき、当日スタッフにお渡しください。<br>
                            </p>
                            <a href="<?php bloginfo('template_directory'); ?>/document/スマートチェックイン用宿泊受付表.pdf" class="flex btn" style="float: none;display: block;margin-bottom: 4rem;" target="_blank" rel="noopener">
                                <p class=""><span class="arrow"></span>チェックインシートPDF<br class="sp">はこちら</p>
                            </a>
                            <p class="news_info" style="text-indent: -1.1em; padding-left: 1em; margin-bottom: .5em;">
                                ※下記の案内をご確認ください。すぐにチェックイン時のおもてなしを楽しみ、お部屋にお入りいただけるよう当日の説明は省かせていただきます。
                            </p>
                            <p class="news_info" style="text-indent: -1.1em; padding-left: 1em;">
                                ※ホテル風か館内案内図です。こちらもご確認ください。<br>
                                <b><a href="<?php bloginfo('template_directory'); ?>/document/館内案内図.pdf" target="_blank" rel="noopener">館内案内図はこちら</a></b><br>
                            </p>
                            <p class="news_info">
                                <b>【ホテル風かは大人も子供も楽しめるオールインクルーシブの宿です】</b><br>
                            </p>
                            <p class="news_info">
                                <b>レストラン炙（あぶり）</b><br>
                                夕食時間：「一部17:30～19:00」「二部19:30～21:00」の2部制（事前予約要）<br>
                                朝食時間：7:30～9:00（30分刻みで事前予約 又は 宿泊日当日にお伺い）
                            </p>
                            <p class="news_info">
                                <b>大浴場</b><br>
                                営業時間：15:00～24:00　翌朝6:00～10:00<br>
                            </p>
                            <p class="news_info">
                                <b>ウエルカムのおもてなし</b><br>
                                15:00～16:30（雨天時一部中止あり）<br>
                                ウエルカムドリンク、窯焼きウエルカムピザ、ヤギさんお散歩体験、焚火で焼きマシュマロ<br>
                            </p>
                            <p class="news_info">
                                <b>ナイトBAR</b><br>
                                21:00～<br>
                            </p>
                        </div>

                        <?php else:  ?>
                            <?php echo get_the_password_form(); ?>
                        <?php endif;  ?>

                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- ↑↑↑ MAIN ↑↑↑ -->






    <!-- ↓↓↓ FOOTER ↓↓↓ -->

    <?php get_footer(); ?>