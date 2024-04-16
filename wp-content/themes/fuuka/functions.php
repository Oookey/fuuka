<?php
// ページネーションのHTMLカスタマイズ
function custom_pagination_html( $template ) {
    $template = '
    <ul class="Pagination">
    <h2 class="screen-reader-text">%2$s</h2>
    %3$s
    </ul>';
    return $template;
}
add_filter('navigation_markup_template','custom_pagination_html');

// ============================================
// ページ表示件数の設定
function custom_posts_per_page($query) {
    if ( !is_admin() && $query->is_main_query()) {
		if ( is_post_type_archive('news') ) {
			$query->set( 'posts_per_page' , 10 );//表示したい数
		}
	}
	return $query;
}
add_action('pre_get_posts', 'custom_posts_per_page');

// ============================================
// mw-wp-form エラーメッセージの変更
function validation_rule($validation, $data, $Data) {
	$validation->set_rule('姓', 'noempty', array('message' => '姓を入力してください'));
	$validation->set_rule('名', 'noempty', array('message' => '名を入力してください'));
    $validation->set_rule('せい', 'noempty', array('message' => 'せいを入力してください'));
    $validation->set_rule('めい', 'noempty', array('message' => 'めいを入力してください'));
    $validation->set_rule('郵便番号', 'noempty', array('message' => '郵便番号を入力してください'));
    $validation->set_rule('都道府県', 'noempty', array('message' => '都道府県を入力してください'));
    $validation->set_rule('住所', 'noempty', array('message' => '住所を入力してください'));
    $validation->set_rule('電話番号', 'noempty', array('message' => '電話番号を入力してください'));
    $validation->set_rule('メールアドレス', 'noempty', array('message' => 'メールアドレスを入力してください'));
    return $validation;
}
add_filter('mwform_validation_mw-wp-form-15', 'validation_rule', 10, 3);

// ============================================
// mw-wp-form UTF-8
function my_mwform_csv_encoding($encode)
{
	return 'utf-8';
}
add_filter('mwform_csv_encoding-mwf_15', 'my_mwform_csv_encoding');
add_filter('mwform_csv_encoding-mwf_351', 'my_mwform_csv_encoding');

// ============================================
// mw-wp-form CSV
function contact_mwform_inquiry_data_columns( $columns ) {
    $columns = array(
		'post_date' => 'お問い合わせ日時',
		'お問合せの種類' => 'お問合せの種類',
		'お問合せ内容' => 'お問合せ内容',
		'姓' => '姓',
        '名' => '名',
        'せい' => 'せい',
        'めい' => 'めい',
        '郵便番号' => '郵便番号',
        '都道府県' => '都道府県',
        '住所' => '住所',
        '電話番号' => '電話番号',
        'メールアドレス' => 'メールアドレス',
    );
    return $columns;
}
add_filter( 'mwform_inquiry_data_columns-mwf_15', 'contact_mwform_inquiry_data_columns' );

// ============================================
// mw-wp-form 郵便番号から住所を自動入力、Yubinbangoライブラリの読込
wp_enqueue_script('yubinbango','https://yubinbango.github.io/yubinbango/yubinbango.js',array(),false,true );

function add_yubinbango_class(){
    echo <<<EOC
<script>
jQuery('.mw_wp_form form').addClass('h-adr');
</script>
EOC;
}
add_action( 'wp_print_footer_scripts', 'add_yubinbango_class' );

// ============================================
remove_filter('the_content', 'wpautop');

?>