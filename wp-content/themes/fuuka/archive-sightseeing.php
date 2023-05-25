<?php
/**
* Template Name: 周辺観光
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
    <main id="tourism" class="subpage">
        <!-- mv -->
        <div class="top_fv">
            <div class="top_fv_inner">
                <div class="top_fv_movie">
                    <div class="in"> 
                        <img src="<?php bloginfo('template_directory'); ?>/image/tourism_mv.png" alt="" class="movie">
                    </div>
                </div>
                <div class="fv_menu pc">
                    <a href="https://www.instagram.com/hotel_fuka/?hl=ja" class="fv_menu_inner fv_fadein" target="_blank" rel="noopener">
                        <img class="fv_menu_icon" src="<?php bloginfo('template_directory'); ?>/image/icon_instagram_fv.svg" alt="">
                    </a>
                    <a href="<?php bloginfo('url'); ?>/#access" class="fv_menu_inner fv_fadein">
                        <img class="fv_menu_icon" src="<?php bloginfo('template_directory'); ?>/image/icon_map_fv.svg" alt="">
                    </a>
                </div>
            </div>
        </div>

        <!-- 導入文 -->
        <div class="pageinfo bg_b_c">
            <div class="c_info_bg inner fv_fadein">
                <div class="pageinfo_inner">
                    <img src="<?php bloginfo('template_directory'); ?>/image/pagetitle_tourism.png" alt="">
                </div>
            </div>
        </div>

        <!-- 1.	清里テラス（サンメドウズ清里） -->
        <div class="content bg_wave">
            <div class="inner">
                <div class="illust fv_fadein"><img src="<?php bloginfo('template_directory'); ?>/image/tourism_fv_illust.svg" alt=""></div>
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_main1.jpg" alt="">
                        </div>
                        <!-- <ul class="slick">
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_1-1.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_1-2.png"></li>
                        </ul> -->
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>清里テラス（サンメドウズ清里）</h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        パノラマリフトで行く標高1900ｍの天空の楽園。富士山、野辺山高原など眼下に広がる絶景に癒される。映えるおしゃれカフェ、絶景爽快ライドG-KARTなどもあり。
                    </p>
                    <dl class="about_point_wrap">
                        <dt>所在地：</dt>
                        <dd>山梨県北杜市大泉町西井出8240-1</dd>
                        <dt>営業期間：</dt>
                        <dd>4月～11月（定休日あり）</dd>
                        <dt>当館からのアクセス：</dt>
                        <dd>風かから車で35分</dd>
                        <dt>公式サイト：</dt>
                        <dd><a href="https://www.sunmeadows.co.jp/green/parkguide/kiyosato_teracce/" target="_blank" rel="noopener">https://www.sunmeadows.co.jp/green/parkguide/kiyosato_teracce/</a></dd>
                    </dl>
                    <a href="https://reserve.489ban.net/client/hotel-fuuka/0/detail/591957" class="flex">
                        <p class="btn"><span class="arrow"></span>体験宿泊プランはこちら</p>
                    </a>
                </div>                
            </div>
        </div>

        <!-- 2.	天空カート（富士見高原スキー場） -->
        <div class="content bg_b_c">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_main2.jpg" alt="">
                        </div>
                        <!-- <ul class="slick">
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_2-1.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_2-2.png"></li>
                        </ul> -->
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>天空カート（富士見高原スキー場）</h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        自動運転カートで行く片道25分の小旅行。終点は標高1400ｍの展望スポット。日本三大高峰を望む180度の大パノラマ。シーズンには道中、美しい花々が咲き誇る。
                    </p>
                    <dl class="about_point_wrap">
                        <dt>所在地：</dt>
                        <dd>長野県諏訪郡富士見町境12067</dd>
                        <dt>営業期間：</dt>
                        <dd>4月～11月（定休日あり）</dd>
                        <dt>当館からのアクセス：</dt>
                        <dd>風かから車で15分</dd>
                        <dt>公式サイト：</dt>
                        <dd><a href="https://hanano-sato.jp/attraction/enjoy/outdoor.html" target="_blank" rel="noopener">https://hanano-sato.jp/attraction/enjoy/outdoor.html</a></dd>
                    </dl>
                    <a href="https://reserve.489ban.net/client/hotel-fuuka/0/detail/728815" class="flex">
                        <p class="btn"><span class="arrow"></span>体験宿泊プランはこちら</p>
                    </a>
                </div>         
            </div>
        </div>

        <!-- 3.	道の駅こぶちさわ -->
        <div class="content bg_wave">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_main3.jpg" alt="">
                        </div>
                        <!-- <ul class="slick">
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_1-1.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_1-2.png"></li>
                        </ul> -->
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>道の駅こぶちさわ</h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        地元の新鮮な農作物直売所、イタリアンレストラン、シャトレーゼ、蕎麦屋、本格体験工房、日帰り温泉など多くの施設がある人気スポット。
                    </p>
                    <dl class="about_point_wrap">
                        <dt>所在地：</dt>
                        <dd>山梨県北杜市小淵沢町2968-1</dd>
                        <dt>営業期間：</dt>
                        <dd>通年（年数回休館日あり）</dd>
                        <dt>当館からのアクセス：</dt>
                        <dd>風かから車で１分</dd>
                        <dt>公式サイト：</dt>
                        <dd><a href="https://mkobuchisawa.jp/" target="_blank" rel="noopener">https://mkobuchisawa.jp/</a></dd>
                    </dl>
                    <!-- <a href="" class="flex">
                        <p class="btn"><span class="arrow"></span>体験宿泊プランはこちら</p>
                    </a> -->
                </div>            
            </div>
        </div>

        <!-- 4.	フィッシングエリアやま里 -->
        <div class="content bg_b_c">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_main4.jpeg" alt="">
                        </div>
                        <!-- <ul class="slick">
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_2-1.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_2-2.png"></li>
                        </ul> -->
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>フィッシングエリアやま里</h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        森の中の湧水地でニジマス釣りが楽しめる。釣ったニジマスはその場で炭火焼きにして食べることも可能。
                    </p>
                    <dl class="about_point_wrap">
                        <dt>所在地：</dt>
                        <dd>山梨県北杜市小淵沢町 3866</dd>
                        <dt>営業期間：</dt>
                        <dd>通年（定休日あり）</dd>
                        <dt>当館からのアクセス：</dt>
                        <dd>風かから車で5分</dd>
                        <dt>公式サイト：</dt>
                        <dd><a href="https://www.kob-art.com/yamazato/" target="_blank" rel="noopener">https://www.kob-art.com/yamazato/</a></dd>
                    </dl>
                    <a href="https://reserve.489ban.net/client/hotel-fuuka/0/detail/456910" class="flex">
                        <p class="btn"><span class="arrow"></span>体験宿泊プランはこちら</p>
                    </a>
                </div>           
            </div>
        </div>

        <!-- 5.	いちご畑としいたけの森（八ヶ岳エナジーファーム） -->
        <div class="content bg_wave">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_main5.jpeg" alt="">
                        </div>
                        <!-- <ul class="slick">
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_1-1.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_1-2.png"></li>
                        </ul> -->
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>いちご畑としいたけの森（八ヶ岳エナジーファーム）</h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        八ヶ岳南麓富士見高原にある通年で楽しめる（完全予約制）イチゴ狩りとしいたけ狩りが楽しめる農園。
                    </p>
                    <dl class="about_point_wrap">
                        <dt>所在地：</dt>
                        <dd>長野県諏訪郡富士見町立沢1098</dd>
                        <dt>営業期間：</dt>
                        <dd>通年（生育状況で休園する場合あり）</dd>
                        <dt>当館からのアクセス：</dt>
                        <dd>風かから車で15分</dd>
                        <dt>公式サイト：</dt>
                        <dd><a href="https://www.kingofkinoko.com/yatsugatake-energee-farm/" target="_blank" rel="noopener">https://www.kingofkinoko.com/yatsugatake-energee-farm/</a></dd>
                    </dl>
                    <a href="https://reserve.489ban.net/client/hotel-fuuka/0/detail/501887" class="flex">
                        <p class="btn"><span class="arrow"></span>体験宿泊プランはこちら</p>
                    </a>
                </div>           
            </div>
        </div>

        <!-- 6.	八ヶ岳アウトドアアクティビティーズ -->
        <div class="content bg_b_c">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_main6.JPG" alt="">
                        </div>
                        <!-- <ul class="slick">
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_2-1.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_2-2.png"></li>
                        </ul> -->
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>八ヶ岳アウトドアアクティビティーズ</h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        清里萌木の村をセグウェイで巡る「セグウェイネイチャーライド」、標高1600ｍの山上池で楽しむ「山カヤック」など八ヶ岳の大自然を満喫できるプログラムを多数ご用意（完全予約制）
                    </p>
                    <dl class="about_point_wrap">
                        <dt>所在地：</dt>
                        <dd>山梨県北杜市高根町清里3545 萌木の村 南駐車場内</dd>
                        <dt>営業期間：</dt>
                        <dd>通年（定休日あり、季節によりプログラム変更）</dd>
                        <dt>当館からのアクセス：</dt>
                        <dd>風かから車で35分</dd>
                        <dt>公式サイト：</dt>
                        <dd><a href="https://y-outdoor.com/" target="_blank" rel="noopener">https://y-outdoor.com/</a></dd>
                    </dl>
                    <a href="https://reserve.489ban.net/client/hotel-fuuka/0/detail/456980" class="flex">
                        <p class="btn"><span class="arrow"></span>体験宿泊プランはこちら</p>
                    </a>
                </div>           
            </div>
        </div>

        <!-- 7.	まきば公園 -->
        <div class="content bg_wave">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_main7.jpg" alt="">
                        </div>
                        <!-- <ul class="slick">
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_1-1.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_1-2.png"></li>
                        </ul> -->
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>まきば公園</h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        八ヶ岳南麓の高原にひろがる広大な牧場。広大な緑の牧草地で羊やヤギとふれあえる。レストランもあり。
                    </p>
                    <dl class="about_point_wrap">
                        <dt>所在地：</dt>
                        <dd>山梨県北杜市大泉町 西井出 8240-1</dd>
                        <dt>営業期間：</dt>
                        <dd>4月下旬～11月上旬（定休日あり）</dd>
                        <dt>当館からのアクセス：</dt>
                        <dd>風かから車で25分</dd>
                        <dt>公式サイト：</dt>
                        <dd><a href="https://www.yatuboku.jp/makiba-home" target="_blank" rel="noopener">https://www.yatuboku.jp/makiba-home</a></dd>
                    </dl>
                    <!-- <a href="" class="flex">
                        <p class="btn"><span class="arrow"></span>体験宿泊プランはこちら</p>
                    </a> -->
                </div>           
            </div>
        </div>

        <!-- 8.	八ヶ岳アウトレットリゾート -->
        <div class="content bg_b_c">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_main8.jpg" alt="">
                        </div>
                        <!-- <ul class="slick">
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_2-1.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_2-2.png"></li>
                        </ul> -->
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>八ヶ岳アウトレットリゾート</h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        八ヶ岳の雄大な自然を感じながらショッピングを楽しめる自然調和型のエコロジカルモール。風かから徒歩で行けます。2023年5月現在閉鎖している店舗もあり。
                    </p>
                    <dl class="about_point_wrap">
                        <dt>所在地：</dt>
                        <dd>山梨県北杜市小淵沢町4000</dd>
                        <dt>営業期間：</dt>
                        <dd>通年</dd>
                        <dt>当館からのアクセス：</dt>
                        <dd>風かから徒歩10分</dd>
                        <dt>公式サイト：</dt>
                        <dd><a href="http://www.yatsugatake-outlet.com/index2.php" target="_blank" rel="noopener">http://www.yatsugatake-outlet.com/index2.php</a></dd>
                    </dl>
                    <!-- <a href="" class="flex">
                        <p class="btn"><span class="arrow"></span>体験宿泊プランはこちら</p>
                    </a> -->
                </div>           
            </div>
        </div>

        <!-- 9.	カナディアンキャンプ八ヶ岳 -->
        <div class="content bg_wave">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_main9.jpg" alt="">
                        </div>
                        <!-- <ul class="slick">
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_1-1.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_1-2.png"></li>
                        </ul> -->
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>カナディアンキャンプ八ヶ岳</h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        ホテル風かがある小淵沢町は馬の街で、いくつかの乗馬クラブがあり。カナディアンキャンプ八ヶ岳では、乗馬初体験の方でも四季折々の八ヶ岳の大自然のなかをお馬さんにのって歩けます。
                    </p>
                    <dl class="about_point_wrap">
                        <dt>所在地：</dt>
                        <dd>山梨県北杜市小淵沢町10235</dd>
                        <dt>営業期間：</dt>
                        <dd>通年（定休日あり）</dd>
                        <dt>当館からのアクセス：</dt>
                        <dd>風かから車で5分</dd>
                        <dt>公式サイト：</dt>
                        <dd><a href="https://yatsugatake.canadiancamp.jp/" target="_blank" rel="noopener">https://yatsugatake.canadiancamp.jp/</a></dd>
                    </dl>
                    <a href="https://reserve.489ban.net/client/hotel-fuuka/0/detail/453946" class="flex">
                        <p class="btn"><span class="arrow"></span>体験宿泊プランはこちら</p>
                    </a>
                </div>           
            </div>
        </div>
        
        <!-- 10.  平山郁夫シルクロード美術館 -->
        <div class="content bg_b_c">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_main10.jpg" alt="">
                        </div>
                        <!-- <ul class="slick">
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_2-1.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_2-2.png"></li>
                        </ul> -->
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>平山郁夫シルクロード美術館</h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        日本画家平山郁夫先生の作品、シルクロードコレクションが展示されています。
                    </p>
                    <dl class="about_point_wrap">
                        <dt>所在地：</dt>
                        <dd>山梨県北杜市長坂町小荒間2000-6</dd>
                        <dt>営業期間：</dt>
                        <dd>通年（休館日/冬季長期休館あり）</dd>
                        <dt>当館からのアクセス：</dt>
                        <dd>風かから車で15分</dd>
                        <dt>公式サイト：</dt>
                        <dd><a href="https://www.silkroad-museum.jp/" target="_blank" rel="noopener">https://www.silkroad-museum.jp/</a></dd>
                    </dl>
                    <!-- <a href="" class="flex">
                        <p class="btn"><span class="arrow"></span>体験宿泊プランはこちら</p>
                    </a> -->
                </div>           
            </div>
        </div>

        <!-- 11.中村キースヘリング美術館 -->
        <div class="content bg_wave">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_main11.jpg" alt="">
                        </div>
                        <!-- <ul class="slick">
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_1-1.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_1-2.png"></li>
                        </ul> -->
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>中村キースヘリング美術館</h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        31年という短い生涯にすべてを表現し、希望と夢を残していったストリート・アーティスト「キースヘリング」の作品を集めた美術館。
                    </p>
                    <dl class="about_point_wrap">
                        <dt>所在地：</dt>
                        <dd>山梨県北杜市小淵沢町10249-7</dd>
                        <dt>営業期間：</dt>
                        <dd>通年（休館日あり）</dd>
                        <dt>当館からのアクセス：</dt>
                        <dd>風かから車で10分</dd>
                        <dt>公式サイト：</dt>
                        <dd><a href="https://www.nakamura-haring.com/" target="_blank" rel="noopener">https://www.nakamura-haring.com/</a></dd>
                    </dl>
                    <a href="https://reserve.489ban.net/client/hotel-fuuka/0/detail/457057" class="flex">
                        <p class="btn"><span class="arrow"></span>体験宿泊プランはこちら</p>
                    </a>
                </div>           
            </div>
        </div>

        <!-- 12.入笠山（富士見パノラマリゾート） -->
        <div class="content bg_b_c">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_main12.JPG" alt="">
                        </div>
                        <!-- <ul class="slick">
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_2-1.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_2-2.png"></li>
                        </ul> -->
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>入笠山（富士見パノラマリゾート）</h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        ゴンドラリフトでかけあがり、2000ｍクラスの眺望を手軽に楽しめるトレッキングコース。季節ごとに美しい花々が咲き誇ります。
                    </p>
                    <dl class="about_point_wrap">
                        <dt>所在地：</dt>
                        <dd>長野県諏訪郡富士見町富士見6666−703</dd>
                        <dt>営業期間：</dt>
                        <dd>4月下旬～11月上旬</dd>
                        <dt>当館からのアクセス：</dt>
                        <dd>風かから車で35分</dd>
                        <dt>公式サイト：</dt>
                        <dd><a href="https://www.fujimipanorama.com/summer/" target="_blank" rel="noopener">https://www.fujimipanorama.com/summer/</a></dd>
                    </dl>
                    <!-- <a href="" class="flex">
                        <p class="btn"><span class="arrow"></span>体験宿泊プランはこちら</p>
                    </a> -->
                </div>           
            </div>
        </div>

        <!-- 13.北杜市八ヶ岳スケートセンター -->
        <div class="content bg_wave">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_main13.jpeg" alt="">
                        </div>
                        <!-- <ul class="slick">
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_1-1.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_1-2.png"></li>
                        </ul> -->
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>北杜市八ヶ岳スケートセンター</h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        2022年リニューアルオープン。ホテル風かに隣接する緑豊かな屋外のスケートセンター。冬季のみの営業。
                    </p>
                    <dl class="about_point_wrap">
                        <dt>所在地：</dt>
                        <dd>山梨県北杜市小淵沢町3989-1</dd>
                        <dt>営業期間：</dt>
                        <dd>11月下旬～2月上旬（2022年度営業期間）</dd>
                        <dt>当館からのアクセス：</dt>
                        <dd>風かから徒歩１分</dd>
                        <!-- <dt>公式サイト：</dt>
                        <dd><a href="https://www.nakamura-haring.com/" target="_blank" rel="noopener">https://www.nakamura-haring.com/</a></dd> -->
                    </dl>
                    <!-- <a href="" class="flex">
                        <p class="btn"><span class="arrow"></span>体験宿泊プランはこちら</p>
                    </a> -->
                </div>           
            </div>
        </div>

        <!-- 14.富士見高原スキー場 -->
        <div class="content bg_b_c">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_main14.jpeg" alt="">
                        </div>
                        <!-- <ul class="slick">
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_2-1.png"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/tourism_photo_2-2.png"></li>
                        </ul> -->
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <h2>富士見高原スキー場</h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        八ヶ岳にはいくつかのスキー場があり、富士見高原スキー場は風か最寄りのスキー場。キッズスノーランドがありお子様連れファミリーにとくにおすすめ。
                    </p>
                    <dl class="about_point_wrap">
                        <dt>所在地：</dt>
                        <dd>長野県諏訪郡富士見町境広原12067</dd>
                        <dt>営業期間：</dt>
                        <dd>営業期間　12月下旬～3月下旬</dd>
                        <dt>当館からのアクセス：</dt>
                        <dd>風かから車で15分</dd>
                        <dt>公式サイト：</dt>
                        <dd><a href="https://fujimikogen-ski.jp/" target="_blank" rel="noopener">https://fujimikogen-ski.jp/</a></dd>
                    </dl>
                    <!-- <a href="" class="flex">
                        <p class="btn"><span class="arrow"></span>体験宿泊プランはこちら</p>
                    </a> -->
                </div>           
            </div>
        </div>

    </main>
    <!-- ↑↑↑ MAIN ↑↑↑ -->

    <!-- ↓↓↓ FOOTER ↓↓↓ -->
    <?php get_footer(); ?>