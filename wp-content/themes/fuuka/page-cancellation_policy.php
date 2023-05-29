<?php
/**
* Template Name: 宿泊規定・キャンセルポリシー
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
    <main id="news_detail" class="subpage pp r">
        
        <!-- 宿泊規定・キャンセルポリシー -->
        <div class="content">
            <div class="news">
                <div class="inner">
                    <div class="detail">
                        <div class="detail_title">
                            <h2>宿泊規定・キャンセルポリシー</h2>
                        </div>
                        <div class="detail_inner">
                            <h2 style="margin-top: 1rem;">宿泊規定</h2>
                            <table class="tbl-r02_2 font14" style="margin-bottom: 2rem;">
                                <tbody>
                                    <tr>
                                        <th style="text-align: center;border-right: 1px solid #e5e5e5;">予約受付開始</th>
                                        <td><p class="ti_15" style="margin:0;">6ヶ月前の1日より</p></td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;border-right: 1px solid #e5e5e5;">チェックイン</th>
                                        <td><p class="ti_15" style="margin:0;">15：00～</p></td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;border-right: 1px solid #e5e5e5;">チェックアウトイン	</th>
                                        <td><p class="ti_15" style="margin:0;">～11：00</p></td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;border-right: 1px solid #e5e5e5;">送　迎	</th>
                                        <td><p class="ti_15" style="margin:0;">最寄り駅からマイクロバス送迎有　要予約　※ 詳しくは「<a href="<?php bloginfo('url'); ?>/access/#free_pickup_car">アクセス</a>」をご覧ください</p></td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;border-right: 1px solid #e5e5e5;">ご使用可能カード</th>
                                        <td><p class="ti_15" style="margin:0;">VISA　JCB　Ｄｉｎｅｒ'sClub　UC NICOS　UFJCard　UFJNICOS MasterCard　AmericanExpres</p></td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            <h2>小学生・幼児料金</h2>
                            <table class="tbl-r02_2 font14" style="margin-bottom: 2rem;">
                                <tbody>
                                    <tr>
                                        <th style="text-align: center;border-right: 1px solid #e5e5e5;">小学生</th>
                                        <td><p class="ti_15" style="margin:0;">大人料金の70％<br>※小学生のご夕食は小学生料理、ご朝食はお子様朝食となります。</p></td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;border-right: 1px solid #e5e5e5;">幼児（１歳以上）</th>
                                        <td><p class="ti_15" style="margin:0;">大人料金の50％（食事・寝具あり）<br>※幼児のご夕食は幼児料理、ご朝食はお子様朝食となります。</p></td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>※上記料金はすべて消費税込の価格です。</p>

                            <h2>キャンセルポリシー</h2>
                            <table class="tbl-r02_2 font14" style="margin-bottom: 2rem;">
                                <tbody>
                                    <tr>
                                        <th style="text-align: center;border-right: 1px solid #e5e5e5;">7～4日前</th>
                                        <td><p class="ti_15" style="margin:0;">10％</p></td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;border-right: 1px solid #e5e5e5;">3日～2日前</th>
                                        <td><p class="ti_15" style="margin:0;">30％</p></td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;border-right: 1px solid #e5e5e5;">前日</th>
                                        <td><p class="ti_15" style="margin:0;">50％</p></td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;border-right: 1px solid #e5e5e5;">当日・不泊</th>
                                        <td><p class="ti_15" style="margin:0;">100％</p></td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>※10名様以上のご予約時は別途規程あり（詳細はホテルへご確認ください）</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- ↑↑↑ MAIN ↑↑↑ -->

    <!-- ↓↓↓ FOOTER ↓↓↓ -->
    <?php get_footer(); ?>