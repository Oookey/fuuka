<?php
/**
* Template Name: まるごとおもてなしR
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
    <main id="hos" class="subpage">
        <!-- fvメニュー -->
        <div class="fv_menu pc fv_fadein">
            <a href="https://www.instagram.com/hotel_fuka/?hl=ja" class="fv_menu_inner" target="_blank" rel="noopener">
                <img class="fv_menu_icon" src="<?php bloginfo('template_directory'); ?>/image/icon_instagram_fv.svg" alt="">
            </a>
            <a href="<?php bloginfo('url'); ?>/#access" class="fv_menu_inner">
                <img class="fv_menu_icon" src="<?php bloginfo('template_directory'); ?>/image/icon_map_fv.svg" alt="">
            </a>
        </div>

        <!-- 導入文 -->
        <div class="pageinfo">
            <div class="c_info_bg inner">
                <div class="pageinfo_inner">
                    <img class="title pc fv_fadein" src="<?php bloginfo('template_directory'); ?>/image/pagetitle_hospitality.png" alt="">
                    <img class="title sp fv_fadein" src="<?php bloginfo('template_directory'); ?>/image/pagetitle_hospitality_sp.png" alt="">
                    <p class="fv_fadein">
                        大人も子供も楽しめる<br>
                        オールインクルーシブ。<br>
                        大切な方との「思い出」を<br>
                        たくさん作れる”おもてなし”を<br>
                        ご用意いたしました！
                    </p>
                    <div class="illust">
                        <img class="pc" src="<?php bloginfo('template_directory'); ?>/image/hos_bg_illust1.svg" alt="">
                        <img src="<?php bloginfo('template_directory'); ?>/image/hos_bg_illust2.svg" alt="">
                        <img src="<?php bloginfo('template_directory'); ?>/image/hos_bg_illust3.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="pageinfo-2 bg_wave hos_link">
            <div class="inner">
                <div class="flex special_contents fv_fadein">
                    <a href="#hos_c" class="special_contents_inner zoom">
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/image/special_img-1.png" alt="" class="img">
                        </figure>
                        <div class="special_contents_text">
                            <h2>お子様へおすすめの<br><span>“おもてなし”</span></h2>
                            <div>
                                <p class="btn"><span class="arrow"></span>詳しくはこちら</p>
                            </div>
                        </div>
                    </a>
                    <a href="#hos_a" class="special_contents_inner zoom">
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/image/special_img-2.png" alt="" class="img">
                        </figure>
                        <div class="special_contents_text">
                            <h2>大人の方へおすすめの<br><span>“おもてなし”</span></h2>
                            <div>
                                <p class="btn"><span class="arrow"></span>詳しくはこちら</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- お子様におすすめのおもてなし-->
        <div id="hos_c" class="content hos_bg-1 hos_c_title">
            <div class="inner">
                <div class="text_tilt fadein">
                    <p>\ お子様の笑顔間違いなし！</p>
                    <p>思い出旅は風かにおまかせ /</p>
                </div>
                <div class="flex special_contents">
                    <div class="special_contents_inner zoom">
                        <figure class=" fadein">
                            <img src="<?php bloginfo('template_directory'); ?>/image/special_img-1.png" alt="" class="img">
                        </figure>
                        <div class="special_contents_text fadein">
                            <h2>お子様へおすすめの<br><span>“おもてなし”</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- No.1 ヤギさん親子お散歩体験 -->
        <div class="content bg_wave hos_c hos_c1">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-r con_mv">
                        <figure class="zoom">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_c_img1-1.png" alt="" class="img">
                        </figure>
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_c_img1-2.png" alt="" class="img">
                        </figure>
                    </div>
                    <div class="float-l con_text-l">
                        <div class="con_title">
                            <h2>ヤギさん親子お散歩体験</h2>
                            <p class="time">15:00〜16:30</p>
                        </div>
                    </div>
                </div>
                <div class="float-l con_text-l fadein">
                    <p class="text">
                        ヤギさん親子ハナちゃん、ユキちゃんと<br class="pc">お散歩、餌やり体験が出来ます。<br>
                        お子様だけでなく大人の方にも大人気です。
                    </p>
                </div>
            </div>
        </div>
        <!-- No.2 たき火で焼きマシュマロ -->
        <div class="content hos_c hos_bg-1 hos_c2">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <figure class="zoom">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_c_img2-1.png" alt="" class="img">
                        </figure>
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_c_img2-2.png" alt="" class="img">
                        </figure>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>たき火で焼きマシュマロ</h2>
                            <p class="time">15:00〜16:30</p>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        大きな焚き火での焼きマシュマロはお子様に大人気。<br>
                        表面サクサク中とろとろで大人が食べても、<br class="pc">とても美味しいですよ。
                    </p>
                </div>
            </div>
        </div>
        <!-- No.3 窯焼きウエルカムピザ -->
        <div class="content bg_wave hos_c hos_c3">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-r con_mv">
                        <figure class="zoom">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_c_img3-1.png" alt="" class="img">
                        </figure>
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_c_img3-2.png" alt="" class="img">
                        </figure>
                    </div>
                    <div class="float-l con_text-l">
                        <div class="con_title">
                            <h2>窯焼きウエルカムピザ</h2>
                            <p class="time">15:00〜16:30</p>
                        </div>
                    </div>
                </div>
                <div class="float-l con_text-l fadein">
                    <p class="text">
                        ピザ窯で焼く焼きたてのチーズピザは<br class="pc">
                        とても美味しいと評判。<br class="sp">ご要望いただければ<br class="pc">お子様ピザ焼き体験も出来ますよ。
                    </p>
                </div>
            </div>
        </div>
        <!-- No.4 ウェルカムドリンク -->
        <div class="content hos_c hos_bg-1 hos_c4">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <figure class="zoom">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_c_img4-1.png" alt="" class="img">
                        </figure>
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_c_img4-2.png" alt="" class="img">
                        </figure>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>ウェルカムドリンク</h2>
                            <p class="time">15:00〜16:30</p>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        各種ソフトドリンク、温かいココアをご用意。<br>
                        16:30までですが地元紅茶屋さんの紅茶も<br class="pc">お子様に人気があります。
                    </p>
                </div>
            </div>
        </div>
        <!-- No.5 キッズルーム -->
        <div class="content bg_wave hos_c hos_c5">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-r con_mv">
                        <figure class="zoom">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_c_img5-1.png" alt="" class="img">
                        </figure>
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_c_img5-2.png" alt="" class="img">
                        </figure>
                    </div>
                    <div class="float-l con_text-l">
                        <div class="con_title">
                            <h2>キッズルーム</h2>
                            <p class="time">14:00〜22:00 / 7:00〜11:00</p>
                        </div>
                    </div>
                </div>
                <div class="float-l con_text-l fadein">
                    <p class="text">
                        遊具、おもちゃ、絵本だけでなく<br class="pc">松ぼっくり紙粘土工作、紙トンボ、<br class="pc">ビーズネックレスづくりなど、<br class="pc">旅の思い出に持ち帰れる工作体験も出来ます。
                    </p>
                </div>
            </div>
        </div>
        <!-- No.6 駄菓子がもらえるキーワード宝探し／湯上り処のアイスキャンディ -->
        <div class="content hos_c hos_bg-1 hos_c6">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <figure class="zoom">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_c_img6-1.png" alt="" class="img">
                        </figure>
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_c_img6-2.png" alt="" class="img">
                        </figure>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>駄菓子がもらえる<br class="sp">キーワード宝探し<br>／湯上り処のアイスキャンディ</h2>
                            <p class="time">15:00〜チェックアウトまで</p>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text"></p>
                </div>
            </div>
        </div>
        <!-- No.7 ご夕食 -->
        <div class="content bg_wave hos_c hos_c7">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-r con_mv">
                        <figure class="zoom">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_c_img7-1.png" alt="" class="img">
                        </figure>
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_c_img7-2.png" alt="" class="img">
                        </figure>
                    </div>
                    <div class="float-l con_text-l">
                        <div class="con_title">
                            <h2>ご夕食</h2>
                        </div>
                    </div>
                </div>
                <div class="float-l con_text-l fadein">
                    <p class="text">
                        お子様にはエビフライ、ハンバーグ<br class="pc">などお子様用プレートをご用意。<br>
                        もちろんお子様もフリードリンク。<br class="pc">
                        大人の方がゆったりコース料理を楽しめる様、<br class="pc">
                        いろんなおもちゃもご用意しております。
                    </p>
                </div>
            </div>
        </div>
        <!-- No.8 ナイト BAR／星見テラス -->
        <div class="content hos_c hos_bg-1 hos_c8">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <figure class="zoom">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_c_img8-1.png" alt="" class="img">
                        </figure>
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_c_img8-2.png" alt="" class="img">
                        </figure>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>ナイト BAR／星見テラス</h2>
                            <p class="time">21:00〜22:30</p>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        ナイトBARではノンアルコールのカクテルをご用意。<br>
                        少し背伸びしていつもと違うドリンクはいかが？<br>
                        星見テラスのたき火と星空も、<br>
                        お子様の貴重な体験になりますよ。
                    </p>
                </div>
            </div>
        </div>
        <!-- No.9 八ヶ岳アクティビティ -->
        <div class="content bg_wave hos_c hos_c9">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-r con_mv">
                        <figure class="zoom">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_c_img9-1.png" alt="" class="img">
                        </figure>
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_c_img9-2.png" alt="" class="img">
                        </figure>
                    </div>
                    <div class="float-l con_text-l">
                        <div class="con_title">
                            <h2>八ヶ岳アクティビティ</h2>
                            <p class="time">15:00〜16:30</p>
                        </div>
                    </div>
                </div>
                <div class="float-l con_text-l fadein">
                    <p class="text">
                        春になればイチゴ狩り、シイタケ狩り、<br class="pc">
                        ニジマス釣り体験など八ヶ岳の自然を満喫できる<br class="pc">
                        アクティビティが沢山！<br class="sp">アクティビティ付き<br class="pc">
                        宿泊プランも多数ご用意しています。
                    </p>
                </div>
            </div>
        </div>
        <!-- 大人の方におすすめのおもてなし-->
        <div id="hos_a" class="content hos_bg-2 hos_c_title">
            <div class="inner">
                <div class="text_tilt fadein">
                    <p>\ 大人の方も大満足間違いなし！</p>
                    <p>思い出旅は風かにおまかせ /</p>
                </div>
                <div class="flex special_contents">
                    <div class="special_contents_inner zoom">
                        <figure class=" fadein">
                            <img src="<?php bloginfo('template_directory'); ?>/image/special_img-2.png" alt="" class="img">
                        </figure>
                        <div class="special_contents_text fadein">
                            <h2>大人の方へおすすめの<br><span>“おもてなし”</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- No.1 ウェルカムドリンク -->
        <div class="content bg_wave hos_c hos_c1 hos_a">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-r con_mv">
                        <figure class="zoom">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_a_img1-1.png" alt="" class="img">
                        </figure>
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_a_img1-2.png" alt="" class="img">
                        </figure>
                    </div>
                    <div class="float-l con_text-l">
                        <div class="con_title">
                            <h2>ウェルカムドリンク</h2>
                            <p class="time">チェックイン〜22:20</p>
                        </div>
                    </div>
                </div>
                <div class="float-l con_text-l fadein">
                    <p class="text">
                        チェックインの時間帯から<br class="pc">夜22:30までプレモルが飲み放題。<br>
                        その他支配人レシピのアイスサングリア、<br class="pc">ロイヤルミルクティーもあります。<br>
                        （こちらは16:30まで）
                    </p>
                </div>
            </div>
        </div>
        <!-- No.2 窯焼きウエルカムピザ -->
        <div class="content hos_c hos_bg-2 hos_c2 hos_a">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <figure class="zoom">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_a_img2-1.png" alt="" class="img">
                        </figure>
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_a_img2-2.png" alt="" class="img">
                        </figure>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>窯焼きウエルカムピザ</h2>
                            <p class="time">15:00〜16:30</p>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        400度以上で一気に焼き上げるピザは<br class="pc">
                        美味しいと評判です。<br class="sp">ヤギさんと遊ぶお子様を眺めながら<br class="pc">食べるピザは最高ですよ！
                    </p>
                </div>
            </div>
        </div>
        <!-- No.3 10趣の客室 -->
        <div class="content bg_wave hos_c hos_c3 hos_a">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-r con_mv">
                        <figure class="zoom">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_a_img3-1.png" alt="" class="img">
                        </figure>
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_a_img3-2.png" alt="" class="img">
                        </figure>
                    </div>
                    <div class="float-l con_text-l">
                        <div class="con_title">
                            <h2>10趣の客室</h2>
                        </div>
                    </div>
                </div>
                <div class="float-l con_text-l fadein">
                    <p class="text">
                        スイートルーム、シアタールーム、<br class="pc">
                        お子様連れに人気の和室など、<br class="pc">
                        10種類のお部屋がございます。<br>
                        利用シーンに応じてお選びください。
                    </p>
                </div>
            </div>
        </div>
        <!-- No.4 夕食はフレンチのコース -->
        <div class="content hos_c hos_bg-2 hos_c4 hos_a">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <figure class="zoom">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_a_img4-1.png" alt="" class="img">
                        </figure>
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_a_img4-2.png" alt="" class="img">
                        </figure>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>夕食はフレンチのコース</h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        子連れご家族に人気の宿だけど、<br class="pc">
                        夕食はフレンチのコース料理。<br>
                        肉と魚のWメイン、お箸で食べるカジュアルフレンチです。<br>
                        「風」と「香」の２コースをご用意しております。
                    </p>
                </div>
            </div>
        </div>
        <!-- No.5 夕食時フリードリンク -->
        <div class="content bg_wave hos_c hos_c5 hos_a">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-r con_mv">
                        <figure class="zoom">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_a_img5-1.png" alt="" class="img">
                        </figure>
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_a_img5-2.png" alt="" class="img">
                        </figure>
                    </div>
                    <div class="float-l con_text-l">
                        <div class="con_title">
                            <h2>夕食時フリードリンク</h2>
                        </div>
                    </div>
                </div>
                <div class="float-l con_text-l fadein">
                    <p class="text">
                        役50種類のドリンクをお楽しみにいただけます。<br>
                        ビール、ウイスキーもありますが、<br class="pc">
                        特に山梨県さんワインを中心にワインが充実しています。
                    </p>
                </div>
                
            </div>
        </div>
        <!-- No.6 ナイト BAR／フリードリンク -->
        <div class="content hos_c hos_bg-2 hos_c6 hos_a">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <figure class="zoom">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_a_img6-1.png" alt="" class="img">
                        </figure>
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_a_img6-2.png" alt="" class="img">
                        </figure>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>ナイト BAR／フリードリンク</h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        役50種類のお飲み物をお楽しみいただけます。<br>
                        ウイスキー、山梨県の地酒、焼酎が特に充実しています。<br>
                        星見テラスで星空とほぼ尾を眺めながら楽しめます。
                    </p>
                </div>
            </div>
        </div>
        <!-- No.7 大人に嬉しいおもてなし -->
        <div class="content bg_wave hos_c hos_c7 hos_a">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-r con_mv">
                        <figure class="zoom">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_a_img7-1.png" alt="" class="img">
                        </figure>
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_a_img7-2.png" alt="" class="img">
                        </figure>
                    </div>
                    <div class="float-l con_text-l">
                        <div class="con_title">
                            <h2>大人に嬉しいおもてなし</h2>
                        </div>
                    </div>
                </div>
                <div class="float-l con_text-l fadein">
                    <p class="text">
                        選べる色浴衣、電動アシスト付き自転車レンタル、<br class="pc">
                        湯上り処のアイスキャンディも追加料金なく<br class="pc">
                        お楽しみいただけます。
                    </p>
                </div>
                
            </div>
        </div>
        <!-- No.8 大浴場／露天風呂 -->
        <div class="content hos_c hos_bg-2 hos_c8 hos_a">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <figure class="zoom">
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_a_img8-1.png" alt="" class="img">
                        </figure>
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/image/hos_a_img8-2.png" alt="" class="img">
                        </figure>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>大浴場／露天風呂</h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        大浴場は畳敷でフルでも冷たくありません。<br>
                        露天風呂は芹ヶ沢温泉から運んだ天然温泉です。<br>
                        ドライサウナも2022年冬にリニューアルしました。
                    </p>
                </div>
            </div>
        </div>

    </main>
    <!-- ↑↑↑ MAIN ↑↑↑ -->

    <!-- ↓↓↓ FOOTER ↓↓↓ -->
    <?php get_footer(); ?>