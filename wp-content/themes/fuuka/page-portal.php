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
                                ご到着時のチェックイン手続きが不要になる「スマートチェックイン」へのご協力をお願いしております。以下の２つのいずれかの方法をお選びいただくだけで、到着時の署名や館内説明を省略され、当日はスムーズにお部屋へご入室いただけます。当館自慢の「チェックイン時のおもてなし」を存分にお楽しみください。<br>
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
                                <b><a href="<?php bloginfo('template_directory'); ?>/document/館内案内図.pdf" target="_blank" rel="noopener" style="font-size: 1.8rem; line-height: 1.8;" class="hotel_map"><span class="arrow"></span>館内案内図はこちら</a></b><br>
                            </p>
                            <!-- <p class="news_info">
                                <b>【ホテル風かは大人も子供も楽しめるオールインクルーシブの宿です】</b><br>
                            </p> -->
                            
                            <div class="detail hotel_info" style="border-top: none;">
                                <div class="" style="margin-bottom: 5rem;font-size: 1.4rem;font-family: 'Noto Sans JP', sans-serif;    line-height: 1.4em;">
                                    <!--  -->
                                    <p class="news_info">
                                        <b>【ホテル風かは大人も子供も楽しめるオールインクルーシブの宿です】</b><br>
                                    </p>
                                    <!--  -->
                                    <p class="news_info" style="margin-top: 1.5rem;">
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
                                    <p class="news_info" style="margin-top: 1.5rem;">
                                        <b>選べる色浴衣</b><br>
                                    </p>
                                    <ol style="list-style: '・';padding-left: 1em;line-height: 1.2em;">
                                        <li>浴衣、作務衣はフロント前にご用意しております。お好みの色、柄の浴衣、作務衣をお選びください。お子様用の作務衣（130㎝、100㎝）もご用意しています。</li>
                                        <li>館内、レストランは浴衣、作務衣でご利用いただけます。</li>
                                    </ol>
                                    <!--  -->
                                    <p class="news_info" style="margin-top: 1.5rem;">
                                        <b>ご夕食 ＜レストラン炙－あぶり－＞</b><br>
                                        17:30～ 19:30～の二部制
                                    </p>
                                    <ol style="list-style: '・';padding-left: 1em;line-height: 1.2em;">
                                        <li>夕食時、山梨県産ワインをはじめ約50種類がフリードリンク</li>
                                    </ol>
                                    <!--  -->
                                    <p class="news_info" style="margin-top: 1.5rem;">
                                        <b>ナイトBAR＜夜更かし処＞</b><br>
                                        21:00～22:30<br>
                                    </p>
                                    <ol style="list-style: '・';padding-left: 1em;line-height: 1.2em;">
                                        <li>ウィスキー、カクテルなど約50種類がフリードリンク（白州など一部有料銘柄あり）</li>
                                        <li>星見テラスで焚火を実施(雨天時除く)</li>
                                    </ol>
                                    <!--  -->
                                    <p class="news_info" style="margin-top: 1.5rem;">
                                        <b>大浴場</b><br>
                                        15:00～24:00 / 6:00～10:00（10:00クローズ）<br>
                                    </p>
                                    <ol style="list-style: '・';padding-left: 1em;line-height: 1.2em;">
                                        <li>露天風呂：芹ケ沢温泉からの運び湯（ナトリウム炭酸水素塩硫酸塩塩化物温泉）</li>
                                        <li>内湯：麗水備長炭風呂</li>
                                    </ol>
                                    <!--  -->
                                    <p class="news_info" style="margin-top: 1.5rem;">
                                        <b>杜のライブラリー</b><br>
                                        15:00～23:00 7:00～11:00<br>
                                    </p>
                                    <ol style="list-style: '・';padding-left: 1em;line-height: 1.2em;">
                                        <li>たくさんのコミック、小説をご用意</li>
                                    </ol>
                                    <!--  -->
                                    <p class="news_info" style="margin-top: 1.5rem;">
                                        <b>星見テラス</b><br>
                                        1階<br>
                                    </p>
                                    <ol style="list-style: '・';padding-left: 1em;line-height: 1.2em;">
                                        <li>昼はピザやヤギさんとのふれあい、夜は星空とたき火をお楽しみください</li>
                                    </ol>
                                    <!--  -->
                                    <p class="news_info" style="margin-top: 1.5rem;">
                                        <b>売店</b><br>
                                        8:00～11:00 / 15:00～21:00<br>
                                    </p>
                                    <ol style="list-style: '・';padding-left: 1em;line-height: 1.2em;">
                                        <li>風かおすすめの地元の特産を中心にご用意しています。</li>
                                    </ol>
                                    <!--  -->
                                    <p class="news_info" style="margin-top: 1.5rem;">
                                        <b>キッズルーム</b><br>
                                        14:00～22:00 7:00～11:00<br>
                                    </p>
                                    <ol style="list-style: '・';padding-left: 1em;line-height: 1.2em;">
                                        <li>たくさんの工作体験、遊具、おもちゃをご用意しています</li>
                                    </ol>
                                    <!--  -->
                                    <p class="news_info" style="margin-top: 1.5rem;">
                                        <b>チェックアウト</b><br>
                                        11:00<br>
                                    </p>
                                    <!--  -->
                                    <p class="news_info" style="margin-top: 1.5rem;">
                                        <b>【よくあるご質問】</b><br>
                                    </p>
                                    <!--  -->
                                    <p class="news_info" style="margin-top: 1.5rem;">
                                        <b>Ｑ.クレジットカード、ＱＲコードは使えますか</b><br>
                                    </p>
                                    <ol style="list-style: 'Ａ.';padding-left: 1.5em;line-height: 1.2em;">
                                        <li>クレジットカードは使えます（JCB、VISA、マスターカード、アメリカンエクスプレス、ダイナーズクラブ）。QRコード決済も使えます（PayPay、auPAY、d払い、LINEPayなど）※楽天Payはご利用いただけません</li>
                                    </ol>
                                    <!--  -->
                                    <p class="news_info" style="margin-top: 1.5rem;">
                                        <b>Ｑ.お部屋にWIFIはありますか</b><br>
                                    </p>
                                    <ol style="list-style: 'Ａ.';padding-left: 1.5em;line-height: 1.2em;">
                                        <li>全室無料でWIFIはつながりますが、多客時はつながりづらい場合がございます。</li>
                                    </ol>
                                    <!--  -->
                                    <p class="news_info" style="margin-top: 1.5rem;">
                                        <b>宿泊時にご不明な点がございましたら 内線９番 またはフロントでお訊ねください。</b><br>
                                    </p>
                                </div>
                            </div>
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