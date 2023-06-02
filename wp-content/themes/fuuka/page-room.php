<?php
/**
* Template Name: 客室のご案内
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
    <main id="room" class="subpage">
        <!-- mv -->
        <div class="top_fv">
            <div class="top_fv_inner">
                <div class="top_fv_movie">
                    <div class="in"> 
                        <img src="<?php bloginfo('template_directory'); ?>/image/room_mv.png" alt="" class="movie">
                    </div>
                </div>
                <!-- <div class="top_fv_text">
                    <p>森の中のリゾートに身を委ね</p>
                    <p>星と月のほとりで過ごす</p>
                    <p>ゆったりと癒しのひと時を</p>
                </div> -->
                <div class="fv_text fv_fadein">
                    <img src="<?php bloginfo('template_directory'); ?>/image/fv_text_room.svg" alt="">
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
                    <h2 class="fv_fadein">春夏秋冬<br>
                        表情の違う八ヶ岳を愛でる<br>
                        10趣の客室
                    </h2>
                    <p class="fadein">
                        温泉が楽しめるスイートルーム、<br>
                        100インチ超の大画面シアターが楽しめるスーペリア和洋ルーム、<br>
                        おしゃれな和モダン洋室ツインルームなど様々なタイプがございますので、<br class="pc">
                        お好きなお部屋タイプをお選びください！
                    </p>
                </div>
                <svg width="280" height="260" class="room_mask room_mask1">
                    <clipPath id="clip">
                        <path>
                            <animate dur="15s" repeatCount="indefinite" attributeName="d" attributeType="XML" values="
                                M409,303.5Q416,357,378,402Q340,447,282,439Q224,431,187,398.5Q150,366,105.5,335.5Q61,305,45,245Q29,185,59,124.5Q89,64,152.5,40Q216,16,265,63.5Q314,111,383,115.5Q452,120,427,185Q402,250,409,303.5Z;M463.5,311.5Q441,373,396,422Q351,471,287,455Q223,439,179,411Q135,383,79,350Q23,317,51.5,258.5Q80,200,94,143.5Q108,87,162,49.5Q216,12,281.5,24.5Q347,37,383.5,89Q420,141,453,195.5Q486,250,463.5,311.5Z;M432.03478,297.56957Q398.46218,345.13914,356.36479,367.83696Q314.26739,390.53478,267.26739,423.085Q220.26739,455.63521,175.78826,421.28282Q131.30913,386.93043,88.83152,348.48609Q46.35391,310.04174,68.21174,256.28131Q90.06957,202.52087,95.17544,139.65457Q100.28131,76.78826,162.38717,74.23956Q224.49304,71.69087,270.52087,88.04326Q316.5487,104.39565,381.35239,113.97913Q446.15608,123.56261,455.88173,186.78131Q465.60739,250,432.03478,297.56957Z;M456.0768,303.76136Q418.13543,357.52271,379.98225,404.29316Q341.82907,451.0636,284.01817,433.65772Q226.20727,416.25185,163.99091,418.54046Q101.77456,420.82907,62.72047,368.86953Q23.66638,316.90999,61.99091,261.65772Q100.31545,206.40545,118.97771,163.62635Q137.63998,120.84725,179.51817,86.26136Q221.39637,51.67547,267.19818,81.83773Q313,112,367.68455,125.86045Q422.36911,139.7209,458.19364,194.86045Q494.01817,250,456.0768,303.76136Z;M415.01911,310.8863Q439.5452,371.7726,388.0904,405.2945Q336.6356,438.8164,280.7726,433.452Q224.9096,428.08761,185.95759,398.74511Q147.00559,369.40261,129.05219,330.15471Q111.09878,290.9068,102.89189,247.863Q94.68499,204.8192,97.4315,140.3164Q100.17801,75.81361,160.4068,60.51771Q220.6356,45.22181,275.226,60.1356Q329.8164,75.04939,372.9534,109.3658Q416.0904,143.6822,403.29171,196.8411Q390.49301,250,415.01911,310.8863Z;M440.89145,308.17188Q431.49014,366.34375,386.51892,408.54441Q341.5477,450.74507,280.86143,454.67188Q220.17516,458.59868,161.4046,439.6065Q102.63404,420.61431,74.24712,365.23068Q45.86019,309.84704,51.25164,251.37253Q56.64309,192.89803,94.98232,154.25946Q133.32155,115.62089,180.13528,103.21957Q226.94901,90.81826,286.5366,64.96012Q346.12418,39.10197,382.33594,90.33923Q418.5477,141.57648,434.42023,195.78824Q450.29277,250,440.89145,308.17188Z;M394.89432,291.86359Q379.96349,333.72718,354.5999,379.04899Q329.23631,424.37079,274.96542,439.22911Q220.69452,454.08742,185.59462,409.0927Q150.49472,364.09798,125.7075,328.96349Q100.92028,293.82901,59.42363,237.80355Q17.92698,181.77809,66.30163,137.5999Q114.67627,93.42171,168.36359,75.4145Q222.05091,57.4073,282.76369,51.5999Q343.47647,45.7925,374.93276,97.57444Q406.38905,149.35639,408.1071,199.67819Q409.82516,250,394.89432,291.86359Z;M437.20545,311.82292Q441.89352,373.64584,380.77431,387.66608Q319.65509,401.68633,271.82754,416.34317Q224,431,184.22569,401.27431Q144.45139,371.54861,81.45601,344.74769Q18.46064,317.94676,58.87153,261.64584Q99.28242,205.34491,102.46413,144.38253Q105.64584,83.42014,164.05961,69.5926Q222.47338,55.76506,274.24769,69.97338Q326.02199,84.18171,376.989,109.95139Q427.95601,135.72107,430.23669,192.86053Q432.51737,250,437.20545,311.82292Z;M440.79254,295.90011Q393.21514,341.80021,357.53347,375.20746Q321.85181,408.61471,271.82218,427.01866Q221.79254,445.4226,171.55544,422.09659Q121.31834,398.77057,68.79254,358.84083Q16.26674,318.91109,38.15202,256.60373Q60.03731,194.29637,79.65586,134.88912Q99.27441,75.48187,157.19648,42.12622Q215.11855,8.77057,268.67782,50.11855Q322.2371,91.46653,362.16684,121.87761Q402.09659,152.2887,445.23326,201.14435Q488.36994,250,440.79254,295.90011Z;M430.80624,308.72934Q432.1339,367.45868,372.72647,377.66948Q313.31905,387.88027,263.72647,442.80911Q214.1339,497.73795,154.61821,463.08837Q95.10253,428.43879,60.15953,372.16526Q25.21653,315.89174,60.3661,260.16239Q95.51568,204.43305,120.04418,166.21939Q144.57268,128.00574,181.94874,82.19376Q219.32479,36.38179,273.74216,57.19376Q328.15953,78.00574,384.05413,102.85329Q439.94874,127.70084,434.71366,188.85042Q429.47858,250,430.80624,308.72934Z;M409,303.5Q416,357,378,402Q340,447,282,439Q224,431,187,398.5Q150,366,105.5,335.5Q61,305,45,245Q29,185,59,124.5Q89,64,152.5,40Q216,16,265,63.5Q314,111,383,115.5Q452,120,427,185Q402,250,409,303.5Z">
                            </animate>
                        </path>
                    </clipPath>
                    <image clip-path="url(#clip)" width="280px" height="260px" preserveAspectRatio=”xMidYMid slice” xmlns:xlink="http://www.w3.org/2000/svg" xlink:href="<?php bloginfo('template_directory'); ?>/image/mask_room1.png"></image>
                </svg>
            </div>
        </div>

        <!-- 温泉檜風呂付客室 -->
        <div class="content bg_wave">
            <div class="inner img_bg_1">
                <div class="con-sp-fv fadein">
                    <div class="float-r con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/room_photo_main1.png" alt="">
                        </div>
                        <div class="pc room_point">
                            <p>・ベッドルーム2部屋（ベッド各2台）+和室8畳と広々ダイニング+温泉檜風呂</p>
                            <p>・檜風呂は24時間入浴可能</p>
                            <p>・檜風呂の温泉の泉質　ナトリウム塩化物、炭酸水素塩、硫酸塩温泉（中性性低張性高温泉）</p>
                            <p>・源泉温度：66.8℃ お湯の色：無色透明 </p>
                            <p>・当ホテルはお部屋の布団敷きはセルフサービスとなります</p>
                        </div>
                    </div>
                    <div class="float-l con_text-l">
                        <div class="con_title">
                            <p>檜風呂付の木のぬくもり溢れるプライベートスイート。</p>
                            <h2>温泉檜風呂付客室<br>
                                FUUKAスイート100平米【禁煙】 </h2>
                        </div>
                    </div>
                </div>
                <div class="float-l con_text-l fadein">
                    <p class="text">
                        チェックイン～チェックアウトまでお部屋の檜風呂温泉をひとりじめできます。<br>
                        100㎡の広々ルームですので三世代でのご利用を特におすすめいたします。<br><br>
                        定員：2名～8名　／　広さ：100m&#178;
                    </p>
                    <div class="room_star_wrap">
                        <p>
                            マッサージチェア、カプセル式コーヒーメーカー、空間除菌脱臭機ジアイーノ、
                            天然アロマの茶香炉、フリーWi-Fi、バスアメニティはロクシタン
                        </p>
                    </div>
                    <a href="https://reserve.489ban.net/client/hotel-fuuka/0/detail/617417" class="flex">
                        <p class="btn"><span class="arrow"></span>このお部屋のプランはこちら</p>
                    </a>
                    <ul class="slick">
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_1_1.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_1_2.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_1_3.png"></li>
                    </ul>
                    <div class="sp room_point">
                        <p>・ベッドルーム2部屋（ベッド各2台）+和室8畳と広々ダイニング+温泉檜風呂</p>
                        <p>・檜風呂は24時間入浴可能</p>
                        <p>・檜風呂の温泉の泉質　ナトリウム塩化物、炭酸水素塩、硫酸塩温泉（中性性低張性高温泉）</p>
                        <p>・源泉温度：66.8℃ お湯の色：無色透明 </p>
                        <p>・当ホテルはお部屋の布団敷きはセルフサービスとなります</p>
                    </div>
                </div>
                <svg width="280" height="260" class="room_mask room_mask2">
                    <clipPath id="clip">
                        <path>
                            <animate dur="15s" repeatCount="indefinite" attributeName="d" attributeType="XML" values="
                                m194.6,66.44c22.1,30.05,43.84,58.16,41.01,84.68-2.65,26.69-29.88,51.97-60.11,63.99-30.41,12.02-63.82,10.96-97.58-1.06C44.34,202.2,10.4,179.58,2.09,149.17c-8.31-30.23,9.19-68.06,34.3-98.64C61.66,19.77,94.55-3.75,122.3.5c27.75,4.07,50.38,36.06,72.3,65.94Z;
                                m256.25,34.04c18.17,21.28,26.73,51.9,24.65,87.72-2.08,35.81-14.79,76.82-45.42,98.36-30.88,21.54-79.41,23.62-129.76,8.05C55.12,212.33,2.7,178.33.1,140.7-2.49,103.07,45,61.55,83.67,35.59,122.07,9.64,152.18-.74,180.99.04c29.07.78,56.83,12.72,75.26,34Z;
                                m206.88,37.45c21.16,20.99,38.51,50.47,35.21,79.44-3.47,28.97-27.4,57.41-57.24,70.59-29.83,13.18-65.56,11.27-101.99-1.56C46.62,173.26,9.5,149.49,1.69,118.27-6.29,87.05,15.05,48.2,42.28,25.82,69.51,3.45,102.64-2.45,131.78.85c28.97,3.12,54.12,15.61,75.1,36.6Z;
                                m194.6,66.44c22.1,30.05,43.84,58.16,41.01,84.68-2.65,26.69-29.88,51.97-60.11,63.99-30.41,12.02-63.82,10.96-97.58-1.06C44.34,202.2,10.4,179.58,2.09,149.17c-8.31-30.23,9.19-68.06,34.3-98.64C61.66,19.77,94.55-3.75,122.3.5c27.75,4.07,50.38,36.06,72.3,65.94Z">
                            </animate>
                        </path>
                    </clipPath>
                    <image clip-path="url(#clip)" width="280px" height="260px" preserveAspectRatio=”xMidYMid slice” xmlns:xlink="http://www.w3.org/2000/svg" xlink:href="<?php bloginfo('template_directory'); ?>/image/mask_room2.png"></image>
                </svg>
            </div>
        </div>

        <!-- 星見ジャグジー風呂付客室 -->
        <div class="content bg_b_c">
            <div class="inner img_bg_2">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/room_photo_main2.png" alt="">
                        </div>
                        <div class="pc room_point">
                            <p>・独立ベッドルーム1部屋（ベッド２台）＋広々リビング（ベッド２台）＋フラットな畳スペース＋星見ジャグジー風呂</p>
                            <p>・客室風呂は24時間入浴可能（温泉ではございません） </p>
                            <p>・当ホテルはお部屋の布団敷きはセルフサービスとなります</p>
                        </div>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <p>星を眺めながらのんびりと<br class="sp">お風呂に浸かれる</p>
                            <h2>
                                星見ジャグジー風呂付客室<br>
                                FUUKAスイート【禁煙】
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        2020年新設の新しいお部屋。洋風のおしゃれなお部屋で女性グループ、ご家族での記念日旅行でのご利用に特におすすめです。<br><br>
                        定員：2名～8名　／　広さ：80m&#178;
                    </p>
                    <div class="room_star_wrap">
                        <p>
                            マッサージチェア、カプセル式コーヒーメーカー、空間除菌脱臭機ジアイーノ、天然アロマの茶香炉、アレクサ、フリーWi-Fi、バスアメニティはロクシタン
                        </p>
                    </div>
                    <a href="https://reserve.489ban.net/client/hotel-fuuka/0/detail/617418" class="flex">
                        <p class="btn"><span class="arrow"></span>このお部屋のプランはこちら</p>
                    </a>
                    <ul class="slick">
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_2_1.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_2_2.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_2_3.png"></li>
                    </ul>
                    <div class="sp room_point">
                        <p>・ベッドルーム2部屋 + 和室6畳と広々ダイニング+ 星見ジャグジー風呂付</p>
                        <p>・客室風呂は24時間入浴可能（温泉ではございません） </p>
                        <p>・当ホテルはお部屋の布団敷きはセルフサービスとなります</p>
                    </div>
                </div>
                <svg width="280" height="260" class="room_mask room_mask3">
                    <clipPath id="clip">
                        <path>
                            <animate dur="15s" repeatCount="indefinite" attributeName="d" attributeType="XML" values="
                                m194.6,66.44c22.1,30.05,43.84,58.16,41.01,84.68-2.65,26.69-29.88,51.97-60.11,63.99-30.41,12.02-63.82,10.96-97.58-1.06C44.34,202.2,10.4,179.58,2.09,149.17c-8.31-30.23,9.19-68.06,34.3-98.64C61.66,19.77,94.55-3.75,122.3.5c27.75,4.07,50.38,36.06,72.3,65.94Z;
                                m256.25,34.04c18.17,21.28,26.73,51.9,24.65,87.72-2.08,35.81-14.79,76.82-45.42,98.36-30.88,21.54-79.41,23.62-129.76,8.05C55.12,212.33,2.7,178.33.1,140.7-2.49,103.07,45,61.55,83.67,35.59,122.07,9.64,152.18-.74,180.99.04c29.07.78,56.83,12.72,75.26,34Z;
                                m206.88,37.45c21.16,20.99,38.51,50.47,35.21,79.44-3.47,28.97-27.4,57.41-57.24,70.59-29.83,13.18-65.56,11.27-101.99-1.56C46.62,173.26,9.5,149.49,1.69,118.27-6.29,87.05,15.05,48.2,42.28,25.82,69.51,3.45,102.64-2.45,131.78.85c28.97,3.12,54.12,15.61,75.1,36.6Z;
                                m194.6,66.44c22.1,30.05,43.84,58.16,41.01,84.68-2.65,26.69-29.88,51.97-60.11,63.99-30.41,12.02-63.82,10.96-97.58-1.06C44.34,202.2,10.4,179.58,2.09,149.17c-8.31-30.23,9.19-68.06,34.3-98.64C61.66,19.77,94.55-3.75,122.3.5c27.75,4.07,50.38,36.06,72.3,65.94Z">
                            </animate>
                        </path>
                    </clipPath>
                    <image clip-path="url(#clip)" width="280px" height="260px" preserveAspectRatio=”xMidYMid slice” xmlns:xlink="http://www.w3.org/2000/svg" xlink:href="<?php bloginfo('template_directory'); ?>/image/mask_room3.png"></image>
                </svg>
            </div>
        </div>

        <!-- 美容FUUKAジュニアスイート --> 
        <div class="content bg_wave room3">
            <div class="inner img_bg_3">
                <div class="con-sp-fv fadein">
                    <div class="float-r con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/room_photo_main3.png" alt="">
                        </div>
                        <div class="pc room_point">
                            <p>・ツインベッド（ベッド1200×2000）＋ 畳スペース</p>
                            <p>・プライベートバス付き </p>
                            <p>・当ホテルはお部屋の布団敷きはセルフサービスとなります</p>
                        </div>
                    </div>
                    <div class="float-l con_text-l">
                        <div class="con_title">
                            <p>プライベートバス付客室</p>
                            <h2>
                                【プライベートバス付客室】<br>
                                美容FUUKAジュニアスイート【禁煙】
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="float-l con_text-l fadein">
                    <p class="text">
                    特に小さなお子様連れご家族や若いカップルにおすすめのお部屋。<br>
                    ベット２台、畳スペースには最大3枚までお布団を敷くことができ、<br>
                    最大5名様までお泊りいただけます。<br><br>
                        定員：2名～5名　／　広さ：50m&#178;
                    </p>
                    <div class="room_star_wrap">
                        <p>
                            マッサージチェア、Panasonicイオンブースター美顔器、<br class="pc">Panasonic高浸透ナノイー搭載ヘアドライヤー、SALONIAストレートアイロン、カプセル式コーヒーメーカー、空間除菌脱臭機ジアイーノ、バスアメニティはロクシタン、天然アロマの茶香炉、アレクサ、フリーWi-Fi
                        </p>
                    </div>
                    <a href="https://reserve.489ban.net/client/hotel-fuuka/0/detail/617419" class="flex">
                        <p class="btn"><span class="arrow"></span>このお部屋のプランはこちら</p>
                    </a>
                    <ul class="slick">
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_3_1.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_3_2.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_3_3.png"></li>
                    </ul>
                    <div class="sp room_point">
                        <p>・ツインベッド（ベッド1200×2000）＋ 畳スペース</p>
                        <p>・プライベートバス付き </p>
                        <p>・当ホテルはお部屋の布団敷きはセルフサービスとなります</p>
                    </div>
                </div>
                <svg width="280" height="260" class="room_mask room_mask4">
                    <clipPath id="clip">
                        <path>
                            <animate dur="15s" repeatCount="indefinite" attributeName="d" attributeType="XML" values="
                                m194.6,66.44c22.1,30.05,43.84,58.16,41.01,84.68-2.65,26.69-29.88,51.97-60.11,63.99-30.41,12.02-63.82,10.96-97.58-1.06C44.34,202.2,10.4,179.58,2.09,149.17c-8.31-30.23,9.19-68.06,34.3-98.64C61.66,19.77,94.55-3.75,122.3.5c27.75,4.07,50.38,36.06,72.3,65.94Z;
                                m256.25,34.04c18.17,21.28,26.73,51.9,24.65,87.72-2.08,35.81-14.79,76.82-45.42,98.36-30.88,21.54-79.41,23.62-129.76,8.05C55.12,212.33,2.7,178.33.1,140.7-2.49,103.07,45,61.55,83.67,35.59,122.07,9.64,152.18-.74,180.99.04c29.07.78,56.83,12.72,75.26,34Z;
                                m206.88,37.45c21.16,20.99,38.51,50.47,35.21,79.44-3.47,28.97-27.4,57.41-57.24,70.59-29.83,13.18-65.56,11.27-101.99-1.56C46.62,173.26,9.5,149.49,1.69,118.27-6.29,87.05,15.05,48.2,42.28,25.82,69.51,3.45,102.64-2.45,131.78.85c28.97,3.12,54.12,15.61,75.1,36.6Z;
                                m194.6,66.44c22.1,30.05,43.84,58.16,41.01,84.68-2.65,26.69-29.88,51.97-60.11,63.99-30.41,12.02-63.82,10.96-97.58-1.06C44.34,202.2,10.4,179.58,2.09,149.17c-8.31-30.23,9.19-68.06,34.3-98.64C61.66,19.77,94.55-3.75,122.3.5c27.75,4.07,50.38,36.06,72.3,65.94Z">
                            </animate>
                        </path>
                    </clipPath>
                    <image clip-path="url(#clip)" width="280px" height="260px" preserveAspectRatio=”xMidYMid slice” xmlns:xlink="http://www.w3.org/2000/svg" xlink:href="<?php bloginfo('template_directory'); ?>/image/mask_room4.png"></image>
                </svg>
            </div>
        </div>

        <!-- スーペリア和洋ルーム -->
        <div class="content bg_b_c room4">
            <div class="inner img_bg_4">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/room_photo_main4.png" alt="">
                        </div>
                        <div class="pc room_point">
                            <p>・ツインベッド ＋ 畳スペース</p>
                            <p>・バスなし　※大浴場をご利用ください</p>
                            <p>・100インチ超の大画面スクリーンをお楽しみいただけます</p>
                            <p>・当ホテルはお部屋の布団敷きはセルフサービスとなります</p>
                        </div>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <p>ワンランク上の和洋室タイプのお部屋</p>
                            <h2>
                                【100インチ超スクリーン付】<br>
                                スーペリア和洋ルーム
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        ゆったりセミダブルサイズのベッド2台と、畳スペースには最大4枚まで<br class="pc">お布団を敷くことができ、最大6名様までお泊りいただけます。<br>
                        カップルからファミリー・３世代までゆったり過ごせるワンランク上の<br class="pc">和洋室タイプのお部屋でございます。<br><br>
                        定員：2名～6名　／　広さ：60m&#178;
                    </p>
                    <div class="room_star_wrap">
                        <p>
                            EPSON製超短視点プロジェクター（100インチスクリーン）、ブルーレイレコーダー、カプセル式コーヒーメーカー、空間除菌脱臭機ジアイーノ、天然アロマの茶香炉、フリーWi-Fi
                        </p>
                    </div>
                    <a href="https://reserve.489ban.net/client/hotel-fuuka/0/detail/617420" class="flex">
                        <p class="btn"><span class="arrow"></span>このお部屋のプランはこちら</p>
                    </a>
                    <ul class="slick">
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_4_1.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_4_2.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_4_3.png"></li>
                    </ul>
                    <div class="sp room_point">
                        <p>・ツインベッド ＋ 畳スペース</p>
                        <p>・バスなし　※大浴場をご利用ください</p>
                        <p>・100インチ超の大画面スクリーンをお楽しみいただけます</p>
                        <p>・当ホテルはお部屋の布団敷きはセルフサービスとなります</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- スタンダード和洋ルーム -->
        <div class="content bg_wave room5">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-r con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/room_photo_main5.png" alt="">
                        </div>
                        <div class="pc room_point">
                            <p>・ツインベッド（ベッド1200×2000）＋ 畳スペース</p>
                            <p>・プライベートバス付き</p>
                            <p>・天然アロマの茶香炉</p>
                            <p>・当ホテルはお部屋の布団敷きはセルフサービスとなります</p>
                        </div>
                    </div>
                    <div class="float-l con_text-l">
                        <div class="con_title">
                            <p>扉を開いた瞬間、“ほっ”とする和の心。</p>
                            <h2>
                                スタンダード和洋ルーム<br>
                                ［和モダン］
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="float-l con_text-l fadein">
                    <p class="text">
                        開放感のあるお部屋はベッドと畳、和と洋の過ごしやすさを追求した客室です。<br>
                        プライベートを大切にできる広々としたお部屋は、<br class="pc">あらゆる世代の方に寛ぎの空間をお楽しみいただけます。<br><br>
                        定員：2名～5名　／　広さ：洋間＋和室10畳
                    </p>
                    <a href="https://reserve.489ban.net/client/hotel-fuuka/0/detail/617423" class="flex">
                        <p class="btn"><span class="arrow"></span>このお部屋のプランはこちら</p>
                    </a>
                    <ul class="slick">
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_5_1.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_5_2.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_5_3.png"></li>
                    </ul>
                    <div class="sp room_point">
                        <p>・ツインベッド（ベッド1200×2000）＋ 畳スペース</p>
                        <p>・プライベートバス付き</p>
                        <p>・天然アロマの茶香炉</p>
                        <p>・当ホテルはお部屋の布団敷きはセルフサービスとなります</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 洋室ツイン -->
        <div class="content bg_b_c room6">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/room_photo_main6.jpg" alt="">
                        </div>
                        <div class="pc room_point">
                            <p>・ツインベッド</p>
                            <p>・バスなし　※大浴場をご利用ください</p>
                            <p>・天然アロマの茶香炉</p>
                        </div>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <p>天然木でしつらえた和モダンな洋室</p>
                            <h2>
                                洋室ツイン<br class="sp">
                                ［和モダン］
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        2名様でのご利用に最適な和モダンのツインルーム。<br>
                        ウッドデッキ調の客室はお部屋全体が木のぬくもりに包まれた、まさに寛ぎの空間です。<br>
                        ゆったりとした作りのお部屋ですので特別な人と、特別な時間をお過ごしくださいませ。<br><br>
                        定員：1名～2名　／　広さ：34m&#178;
                    </p>
                    <!-- <div class="room_star_wrap">
                        <p>
                            
                        </p>
                    </div> -->
                    <a href="https://reserve.489ban.net/client/hotel-fuuka/0/detail/617421" class="flex">
                        <p class="btn"><span class="arrow"></span>このお部屋のプランはこちら</p>
                    </a>
                    <ul class="slick">
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_6_1.jpg"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_6_2.jpg"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_6_3.jpg"></li>
                    </ul>
                    <div class="sp room_point">
                        <p>・ツインベッド</p>
                        <p>・バスなし　※大浴場をご利用ください</p>
                        <p>・天然アロマの茶香炉</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 洋室ダブル -->
        <div class="content bg_wave room7">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-r con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/room_photo_main7.jpg" alt="">
                        </div>
                        <div class="pc room_point">
                            <p>・ダブルベッド（ベッド1600×2000）</p>
                            <p>・バスなし　※大浴場をご利用ください</p>
                            <p>・天然アロマの茶香炉</p>
                        </div>
                    </div>
                    <div class="float-l con_text-l">
                        <div class="con_title">
                            <p>天然木でしつらえた和モダンな洋室</p>
                            <h2>
                                洋室ダブル<br class="sp">
                                ［和モダン］
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="float-l con_text-l fadein">
                    <p class="text">
                        ダブルルームタイプは、クイーンサイズのベッドをご用意。大人の一人旅、ご夫婦、カップルでのご利用にも最適です。 <br>
                        リラックスいただける癒しの空間は休息の1日を穏やかに演出します。<br><br>
                        定員：2名　／　広さ：21m&#178;
                    </p>
                    <a href="https://reserve.489ban.net/client/hotel-fuuka/0/detail/617422" class="flex">
                        <p class="btn"><span class="arrow"></span>このお部屋のプランはこちら</p>
                    </a>
                    <ul class="slick">
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_7_1.jpg"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_7_2.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_7_3.png"></li>
                    </ul>
                    <div class="sp room_point">
                        <p>・ダブルベッド（ベッド1600×2000）</p>
                        <p>・バスなし　※大浴場をご利用ください</p>
                        <p>・天然アロマの茶香炉</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ファミリールーム -->
        <div class="content bg_b_c room8">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/room_photo_main8.png" alt="">
                        </div>
                        <div class="pc room_point">
                            <p>・ツインベッド（ベッド1600×2000） ＋ 畳スペース</p>
                            <p>・バスあり</p>
                            <p>・天然アロマの茶香炉</p>
                            <p>・当ホテルはお部屋の布団敷きはセルフサービスとなります</p>
                        </div>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <p>お子様連れにおすすめ</p>
                            <h2>
                                ファミリールーム
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        リニューアルしていないお部屋です。和室8畳と洋間の広々としたお部屋。洋間にはベッドを2台配置。ベッドと畳、和と洋の過ごしやすさを追求しました。<br>
                        お部屋にユニットバスがありますので、小さなお子様連れのお客様におすすめのお部屋です。<br><br>
                        定員：2名～5名　／　広さ：52m&#178;
                    </p>
                    <!-- <div class="room_star_wrap">
                        <p>
                            EPSON製超短視点プロジェクター、ブルーレイレコーダー、カプセル式コーヒーメーカー、空間除菌脱臭機ジアイーノ、天然アロマの茶香炉、フリーWi-Fi
                        </p>
                    </div> -->
                    <a href="https://reserve.489ban.net/client/hotel-fuuka/0/detail/617424" class="flex">
                        <p class="btn"><span class="arrow"></span>このお部屋のプランはこちら</p>
                    </a>
                    <ul class="slick">
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_8_1.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_8_2.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_8_3.png"></li>
                    </ul>
                    <div class="sp room_point">
                        <p>・ツインベッド（ベッド1600×2000） ＋ 畳スペース</p>
                        <p>・バスあり</p>
                        <p>・天然アロマの茶香炉</p>
                        <p>・当ホテルはお部屋の布団敷きはセルフサービスとなります</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 和室10畳 -->
        <div class="content bg_wave room9">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-r con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/room_photo_main9.jpg" alt="">
                        </div>
                        <div class="pc room_point">
                            <p>・バスなし　※大浴場をご利用ください</p>
                            <p>・天然アロマの茶香炉</p>
                            <p>・当ホテルはお部屋の布団敷きはセルフサービスとなります</p>
                        </div>
                    </div>
                    <div class="float-l con_text-l">
                        <div class="con_title">
                            <p>最もリーズナブルに利用できる</p>
                            <h2>
                                和室
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="float-l con_text-l fadein">
                    <p class="text">
                    2022年冬に畳、室内壁紙を時代にあわせて抗ウイルス仕様にリニューアル。お子様連れファミリーに安心安全にご利用いただけるお部屋です。<br><br>
                        定員：1名～4名　／　広さ：和室10畳＋広縁
                    </p>
                    <a href="https://reserve.489ban.net/client/hotel-fuuka/0/detail/617426" class="flex">
                        <p class="btn"><span class="arrow"></span>このお部屋のプランはこちら</p>
                    </a>
                    <ul class="slick">
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_main9.jpg"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_9_1.jpg"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_9_2.jpg"></li>
                    </ul>
                    <div class="sp room_point">
                        <p>・バスなし　※大浴場をご利用ください</p>
                        <p>・天然アロマの茶香炉</p>
                        <p>・当ホテルはお部屋の布団敷きはセルフサービスとなります</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ユニバーサルルーム -->
        <div class="content bg_b_c room10">
            <div class="inner">
                <div class="con-sp-fv fadein">
                    <div class="float-l con_mv">
                        <div class="zoom" style="border-radius: 3.8rem;">
                            <img src="<?php bloginfo('template_directory'); ?>/image/room_photo_main10.png" alt="">
                        </div>
                        <div class="pc room_point">
                            <p>・ツインベッド（ベッド1100×2000） ＋ 畳スペース</p>
                            <p>・バリアフリー対応のバス・トイレ付</p>
                            <p>・天然アロマの茶香炉</p>
                            <p>・当ホテルはお部屋の布団敷きはセルフサービスとなります</p>
                        </div>
                    </div>
                    <div class="float-r con_text-r">
                        <div class="con_title">
                            <p>車椅子でも利用できる広々和洋ルーム</p>
                            <h2>
                                ユニバーサルルーム
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="float-r con_text-r fadein">
                    <p class="text">
                        未リニューアルのお部屋です。広さは73㎡と風か和洋室タイプのなかでもっとも広く、専用浴室・トイレを完備したバリアフリー対応のお部屋です。<br>
                        お部屋にお風呂がございますので、車椅子の方のご利用だけでなく小さなお子様連れファミリーにもおすすめのお部屋です。<br><br>
                        定員：2名～5名　／　広さ：73m&#178;
                    </p>
                    <a href="https://reserve.489ban.net/client/hotel-fuuka/0/detail/617425" class="flex">
                        <p class="btn"><span class="arrow"></span>このお部屋のプランはこちら</p>
                    </a>
                    <ul class="slick">
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_10_1.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_10_2.png"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/image/room_photo_10_3.png"></li>
                    </ul>
                    <div class="sp room_point">
                        <p>・ツインベッド（ベッド1100×2000） ＋ 畳スペース</p>
                        <p>・バリアフリー対応のバス・トイレ付</p>
                        <p>・天然アロマの茶香炉</p>
                        <p>・当ホテルはお部屋の布団敷きはセルフサービスとなります</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 設備・備品 -->
        <div class="content bg_wave room11">
            <div class="inner fadein">
                <div class="con_title">
                    <h2>
                        設備・備品
                    </h2>
                </div>
                <div class="room_fixtures_inner">
                    <div class="float-l">
                        <p>・テレビ（一般チャンネル）</p>
                        <p>・お茶セット／湯沸かしポット</p>
                        <p>・温水洗浄便座</p>
                    </div>
                    <div class="float-l">
                        <p>・電話</p>
                        <p>・冷蔵庫（保冷用）</p>
                        <p>・ドライヤー</p>
                    </div>
                    <div class="float-l">
                        <p>・目覚まし時計</p>
                        <p>・空調（冷暖房）</p>
                    </div>
                </div>
                <p class="text room_ame_list">
                    シャンプー／リンス／ボディソープ（←お風呂があるお部屋のみ）<br>
                    歯ブラシ／ハンドソープ／ヘアブラシ／カミソリ／バスタオル／フェイスタオル／シャワーキャップ／綿 棒／浴 衣／スリッパ
                </p>

                <div class="con_title marugoto">
                    <h2>
                        まるごと おもてなし（客室）
                    </h2>
                </div>
                <p class="text">
                    八ヶ岳ホテル風かのコンセプト「まるごと おもてなし」は、お部屋にもご用意がございます。<br class="pc">
                    より快適にお寛ぎいただけますよう、ご利用・ご活用ください。
                </p>
                <ul class="room_ame_inner">
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/image/room_amenities1.png" alt="">
                        <p>選べる色浴衣<br class="sp">（1Fロビー横）</p>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/image/room_amenities2.png" alt="">
                        <p>マヴィー紅茶</p>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/image/room_amenities3.png" alt="">
                        <p>茶香炉</p>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/image/room_amenities4.png" alt="">
                        <p>全室にワインオープナー完備</p>
                    </li>
                </ul>

                
            </div>
        </div>

    </main>
    <!-- ↑↑↑ MAIN ↑↑↑ -->
    
    <!-- ↓↓↓ FOOTER ↓↓↓ -->
    <?php get_footer(); ?>