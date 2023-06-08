<?php get_header(); ?>
<!------------- HEADER ------------->

<!-- ↓↓↓ MAIN ↓↓↓ -->
<main id="news_detail" class="subpage pp">
        
        <!-- 404 -->
        <div class="content">
            <div class="news">
                <div class="inner">
                    <div class="detail">
                        <div class="detail_title">
                            <h2>指定したページが見つかりませんでした</h2>
                        </div>
                        <div class="detail_inner">
                            <p class="news_info">
                                ページが移動または削除されたか、URLの入力間違いの可能性があります。
                            </p>
                            <div>
                                <a href="<?php bloginfo('url'); ?>/">
                                    <p class="btn"><span class="arrow"></span>トップページへ</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- ↑↑↑ MAIN ↑↑↑ -->



<!-- ↓↓↓ FOOTER ↓↓↓ -->
<?php get_footer(); ?>