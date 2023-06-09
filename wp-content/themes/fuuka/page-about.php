<?php
/**
* Template Name: ホテルのご案内
*/
get_header(); ?>
<!------------- HEADER ------------->

<body id="page-top">
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
    <main id="about" class="subpage">
        <!-- mv -->
        <div class="top_fv">
            <div class="top_fv_inner">
                <div class="top_fv_movie">
                    <div class="in"> 
                        <img src="<?php bloginfo('template_directory'); ?>/image/about_mv.jpg" alt="" class="movie">
                    </div>
                </div>
                <!-- <div class="top_fv_text">
                    <p>天空のリゾート地へ</p>
                    <p>標高1000Ｍの高原リゾート</p>
                    <p>八ヶ岳の大自然を満喫</p>
                </div> -->
                <div class="fv_text fv_fadein">
                    <img src="<?php bloginfo('template_directory'); ?>/image/fv_text_about.svg" alt="">
                </div>
                <div class="fv_menu pc fv_fadein">
                    <a href="https://www.instagram.com/hotel_fuka/?hl=ja" class="fv_menu_inner" target="_blank" rel="noopener">
                        <img class="fv_menu_icon" src="<?php bloginfo('template_directory'); ?>/image/icon_instagram_fv.svg" alt="">
                    </a>
                    <a href="<?php bloginfo('url'); ?>/access/" class="fv_menu_inner">
                        <img class="fv_menu_icon" src="<?php bloginfo('template_directory'); ?>/image/icon_map_fv.svg" alt="">
                    </a>
                </div>
            </div>
        </div>

        <!-- 導入文 -->
        <div class="pageinfo bg_b_c">
            <div class="c_info_bg inner">
                <div class="pageinfo_inner">
                    <h2 class="fv_fadein">たくさんのおもてなしを<br>
                        楽しめる<br>
                        オールインクルーシブ。
                    </h2>
                    <p class="fadein">
                        ご滞在は追加料金の心配なくたくさんのおもてなしを楽しめる<br class="sp">オールインクルーシブ。<br>
                        大人も子供もお酒好きな方も<br class="sp">そうでない方も、<br>
                        皆さまが楽しめるたくさんの<br class="sp">おもてなしをご用意。<br>
                        お家族、恋人、お友達との大切な<br class="sp">思い出旅を演出します。
                    </p>
                </div>
            </div>
        </div>

        <!-- 星見のテラス -->
        <div class="content bg_wave about1" id="about1">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv zoom">
                        <img src="<?php bloginfo('template_directory'); ?>/image/about_photo_main1.png" alt="">
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <p>満天の星空を眺めながら寛ぎのひとときを</p>
                            <h2>星見のテラス </h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                    昼は八ヶ岳の自然を愛でながら、夜は焚火とランタンが織りなす幻想的な雰囲気のなか満天の星空に癒されてください。夜の焚火BARは至極の贅沢空間です。<br>
                    昼はテラスに隣接した中庭でお子様に大人気のヤギさんお散歩体験、焚火で焼きマシュマロ体験を実施しています。
                    </p>
                    <ul class="slick">
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/about_photo_1_1.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/about_photo_1_2.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/about_photo_1_3.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/about_photo_1_4.jpg"></li>
                    </ul>
                </div>
                
            </div>
        </div>

        <!-- フロント・売店・ロビー -->
        <div class="content bg_b_c about2" id="about2">
            <div class="inner img_bg_1">
                <div class="con-sp-fv fadein">
                    <div class="float-r con_mv zoom">
                        <img src="<?php bloginfo('template_directory'); ?>/image/about_photo_main2.png" alt="">
                    </div>
                    <div class="float-l con_text-l">
                        <div class="con_title">
                            <!-- <p>星を眺めながらのんびりとお風呂に浸かれる</p> -->
                            <h2>
                                フロント・売店・ロビー
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="float-l con_text-l fadein">
                    <p class="text">
                        ロビーではチェックインの時間帯にたくさんのウエルカムサービスを実施しています。プレミアムモルツやアイスサングリア、各種ソフトドリンクはもちろんフリードリンク。テラスの窯で焼くウエルカムピザも大人気です。<br>
                        フロント前に選べる色浴衣、作務衣をご用意。売店では各種地産品を取り揃えています。<br><br>
                        チェックイン　15：00～／<br class="sp">チェックアウト　～11：00
                    </p>
                    <div class="about_point_wrap">
                        <p>
                            営業時間<br>
                            フロント　7：00～22：00<br>
                            売　　店　8：00～21：00
                        </p>
                    </div>
                    <ul class="slick">
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/about_photo_2_1.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/about_photo_2_2.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/about_photo_2_3.png"></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- レストラン－炙－ -->
        <div class="content bg_wave about3" id="about3">
            <div class="inner img_bg_2">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv zoom">
                        <img src="<?php bloginfo('template_directory'); ?>/image/about_photo_main3.png" alt="">
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <p>高原の風を感じるお料理を<br class="sp">心ゆくまで</p>
                            <h2>
                                レストラン－炙－
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        レストラン－炙－でご夕食、ご朝食を召し上がっていただきます。夕食はカジュアルフレンチ。メインの肉料理はライブキッチンで焼き上げた「八ヶ岳グリル」をご提供。<br><br>
                        またオールインクルーシブのサービスの1つ「フリードリンク」をご用意。お食事に合う多種多彩な約50種類のお飲み物とともに存分にお愉しみください。<br><br>
                        朝ご飯は洋風の八ヶ岳高原朝食をご用意します。
                    </p>
                    <div class="about_point_wrap">
                        <p class="pc">
                            レストラン営業時間<br>
                            夕食　　17：30～　19：30～　の二部制（完全予約制）<br>
                            朝食　　7：30～9：00（完全予約制）
                        </p>
                        <p class="sp">
                            レストラン営業時間<br>
                            夕食　　17：30～　19：30～<br>
                            　　　　の二部制（完全予約制）<br>
                            朝食　　7：30～9：00<br>
                            　　　　（完全予約制）
                        </p>
                    </div>
                    <ul class="slick">
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/about_photo_3_1.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/about_photo_3_2.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/about_photo_3_3.png"></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 露天風呂・大浴場 -->
        <div class="content bg_b_c about4" id="about4">
            <div class="inner img_bg_3">
                <div class="con-sp-fv fadein">
                    <div class="float-r con_mv zoom">
                        <img src="<?php bloginfo('template_directory'); ?>/image/about_photo_main4.png" alt="">
                    </div>
                    <div class="float-l con_text-l">
                        <div class="con_title">
                            <p>八ヶ岳の稜線を眺めながら、<br class="sp">のんびりと浸かる露天風呂。</p>
                            <h2>
                                露天風呂・大浴場
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="float-l con_text-l fadein">
                    <p class="text">
                        八ヶ岳南麓、標高1000Mの高原で雄大な八ヶ岳の稜線を眺めながら、のんびりと浸かる露天風呂。露天風呂（芹ヶ沢温泉）、内湯（麗水備長炭風呂）ともに広々とした空間で、ゆったりとご入浴を満喫いただけます。<br><br>
                        長野県茅野市北山より運び入れている「芹ヶ沢温泉」は良質のアルカリ性単純温泉。神経痛、筋肉痛、慢性消化器病などに効果があるとされています。<br>
                        また、大浴場の床は畳敷きです。濡れても滑りにくく、肌触りも柔らか。断熱性があるので床からの冷え込みも和らげます。
                    </p>
                    <div class="about_point_wrap">
                        <p>
                            ご利用時間<br>
                            6：00～10：00　　<br class="sp">15：00～24：00
                        </p>
                    </div>
                    <ul class="slick">
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/about_photo_4_1.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/about_photo_4_2.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/about_photo_4_3.png"></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 風香の湯 -->
        <div class="content bg_b_c about5" id="about5">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv zoom">
                        <img src="<?php bloginfo('template_directory'); ?>/image/about_photo_main5.png" alt="">
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <p>信玄の隠し湯とも言われる、<br class="sp">蓼科源泉のひとつ</p>
                            <h2>
                                【露天風呂　風香の湯】<br>芹ケ沢温泉につかり過ごす<br class="pc">極上の休日
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        信玄の隠し湯とも言われる、蓼科源泉のひとつ<br>
                        いつもと違った旅にでかけ、温泉につかりながら、<br class="pc">木々の葉ずれの音に耳を傾ける。<br>
                        喧騒とは無縁の地、八ヶ岳で心身をじっくり癒す、癒しのひと時をお過ごし<br class="pc">くださいませ。
                    </p>
                    <div class="about_point_wrap">
                        <p>
                            <span>芹ヶ沢温泉</span>　<br class="sp">ーせりがさわおんせんー<br><br>
                        </p>
                        <p class="indent3">湧出：長野県茅野市北山</p>
                        <p class="indent3">泉質：アルカリ性単純温泉（アルカリ性低張性高温泉）</p>
                        <p class="indent3">効能：神経痛、筋肉痛、関節痛、五十肩、運動麻痺、関節のこわばり、打ち身、くじき、慢性消化器病、痔疾、冷え症、病後回復期、疲労回復、健康増進</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 【内湯】麗水備長炭風呂 -->
        <div class="content bg_b_c about6" id="about6">
            <div class="inner">
                <div class="con-sp-fv  fadein">
                    <div class="float-r con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/about_photo_main6.png" alt="">
                        </div>
                        <img src="<?php bloginfo('template_directory'); ?>/image/about_photo_6_float.png" alt="" class="about_photo_6_float">
                    </div>
                    <div class="float-l con_text-l">
                        <div class="con_title">
                            <h2>
                                【内湯】麗水備長炭風呂
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="float-l con_text-l fadein">
                    <p class="text">
                        血行を促進し体の芯から温まる、浄化と解毒効果があると言われる備長炭を使用した麗水備長炭風呂をご用意。<br><br>
                        広々とした湯船にゆったり浸かり、日頃の疲れをゆっくりと癒してくださいませ。サウナも併設しておりますのでこちらもお愉しみください。<br><br>
                        畳敷きは肌触りが柔らかで滑りにくく、ぬくもりもあるため床からの冷え込みを和らげます。いつもとは違う、極上の癒しを演出いたします
                    </p>
                    <div class="about_point_wrap">
                        <p>
                            <span>-湯上り処-</span><br><br>
                            ご入浴後のご休憩に湯上がり処をご利用ください。<br><br>
                            湯上り処では、インクルーシブサービスとしてアイスキャンディー、<br class="sp">マッサージチェアをご用意しております。
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ナイトバー -->
        <div class="content bg_wave about7" id="about7">
            <div class="inner img_bg_4">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv zoom">
                        <img src="<?php bloginfo('template_directory'); ?>/image/about_photo_main7.png" alt="">
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <p>ご夕食後のひとときは<br class="sp">「ナイトバー」で<br class="pc">ゆったりと<br class="sp">過ごしませんか?</p>
                            <h2>
                                ナイトバー
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                    お客様同士や、バースタッフとの語らいで更けていく高原の夜をお愉しみください。<br>
                    ご夕食と同じくオールインクルーシブのサービスとして無料でお飲み物をご提供しています。<br>
                    （白州など一部プレミアム銘柄は有料）。星見テラスの焚火BARにもちだして飲むドリンクは最高に素敵ですよ。
                    </p>
                    <div class="about_point_wrap">
                        <p>
                            ご利用時間<br>
                            21：00～22：30
                        </p>
                    </div>
                    <ul class="slick">
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/about_photo_7_1.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/about_photo_7_2.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/about_photo_7_3.png"></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- キッズルーム&暇つぶしコーナー -->
        <div class="content bg_b_c about8" id="about8">
            <div class="inner img_bg_5">
                <div class="con-sp-fv fadein">
                    <div class="float-r con_mv zoom">
                        <img src="<?php bloginfo('template_directory'); ?>/image/about_photo_main8.png" alt="">
                    </div>
                    <div class="float-l con_text-l">
                        <div class="con_title">
                            <p>みんなで遊べる楽しい空間</p>
                            <h2>
                                キッズルーム<br class="sp">&暇つぶしコーナー
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="float-l con_text-l fadein">
                    <p class="text">
                        お子様に大人気の「キッズルーム」。遊具やおもちゃのだけでなく、旅の思い出となる工作体験なども充実しています。<br>
                        充実の工作体験（ビーズブレスレット作り、松ぼっくり紙粘土工作、紙トンボ、折り紙）<br>
                        遊具類（ジャングルジム、滑り台）、玩具類（プラレール、レゴブロック）、絵本　他<br>
                    </p>
                    <div class="about_kidroom_inner">
                        <div class="float-l">
                            <p>●ジャングルジム</p>
                            <p>●松ぼっくり工作</p>
                            <p>●絵本コーナー</p>
                        </div>
                        <div class="float-l">
                            <p>●プラレールコーナー</p>
                            <p>●ビーズアクセサリー造り</p>
                            <p>●レゴブロック</p>
                        </div>
                    </div>
                    <div class="about_point_wrap">
                        <p>
                            営業時間<br>
                            14：00～22：00<br>
                            翌朝7：00～11：00
                        </p>
                    </div>
                    <ul class="slick">
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/about_photo_8_1.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/about_photo_8_2.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/about_photo_8_3.png"></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 森のライブラリー -->
        <div class="content bg_wave about9" id="about9">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv zoom">
                        <img src="<?php bloginfo('template_directory'); ?>/image/about_photo_main9.png" alt="">
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>
                                森のライブラリー
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                    たくさんの漫画本、小説をご用意しています。静かなソファ席で読書にふけるもよし、天気がよければテラス席にお持ちになって寝転がりながらお読みいただけます。
                    </p>
                </div>
            </div>
        </div>

        <!-- RELAXZATION　和（なごみ） -->
        <div class="content bg_b_c about10" id="about10">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-r con_mv zoom">
                        <img src="<?php bloginfo('template_directory'); ?>/image/about_photo_main10.jpg" alt="">
                    </div>
                    <div class="float-l con_text-l">
                        <div class="con_title">
                            <p>整体マッサージで心も身体もリフレッシュしませんか</p>
                            <h2>
                            RELAXZATION<br>和(なごみ)
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="float-l con_text-l fadein">
                    <p class="text">
                        整体マッサージが6月より始まりました。<br><br>
                        事前にご予約される場合は<br>0551-36-6414（9：00～21：00）までご予約ください。<br class="pc">当日も受付ておりますが、事前にご予約されることをお勧めします。<br><br>
                        場所　<br class="sp">ホテル内２階施術室(施術者は男性)<br>
                        受付終了　20：00／<br class="sp">最終スタート　21：00
                    </p>
                    <div class="about_point_wrap">
                        <p>料金</p>
                        <div class="flex">
                            <p>
                                全身コース<br>
                                40分　6000円<br>
                                60分　7500円<br>
                                80分　9000円
                            </p>
                            <p style="margin-left: 5%;">
                                足つぼコース<br>
                                40分　6000円<br>
                                60分　7500円
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- ↑↑↑ MAIN ↑↑↑ -->

    <!-- ↓↓↓ FOOTER ↓↓↓ -->
    <?php get_footer(); ?>