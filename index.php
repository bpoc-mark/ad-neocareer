<?php

// error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ERROR | E_PARSE);
// 変数の初期化
$clean = array();
$error = array();
// サニタイズ
if( !empty($_POST) ) {
	foreach( $_POST as $key => $value ) {
		$clean[$key] = htmlspecialchars( $value, ENT_QUOTES);
	} 
}
// 文字成型
$clean['tel'] = str_replace(array('-', 'ー', '−', '―', '‐'), '', $clean['tel']);
$clean['tel'] = str_replace(array(" ", "　"), "", $clean['tel']);
$clean['tel'] = mb_convert_kana($clean['tel'], "n");
$clean['email'] = str_replace(array(" ", "　"), "", $clean['email']);
$clean['email'] = mb_convert_kana($clean['email'], "askhc");

if( !empty($clean['btn_confirm'])) {
	$error = validation($clean);

	if( empty($error) ) {

		$page_flag = 1;
		// セッションの書き込み
		session_start();
		$_SESSION['page'] = true;		
	}

} elseif( !empty($clean['btn_submit']) ) {
	session_start();
	if( !empty($_SESSION['page']) && $_SESSION['page'] === true ) {
		// セッションの削除
		unset($_SESSION['page']);
		$page_flag = 2;
		// 変数とタイムゾーンを初期化
		$header = null;
		$body = null;
		$admin_body = null;
		$auto_reply_subject = null;
		$auto_reply_text = null;
		$admin_reply_subject = null;
		$admin_reply_text = null;
		date_default_timezone_set('Asia/Tokyo');
		
		//日本語の使用宣言
		mb_language("ja");
		mb_internal_encoding("UTF-8");
	
		$header = "MIME-Version: 1.0\n";
		$header = "Content-Type: multipart/mixed;boundary=\"__BOUNDARY__\"\n";
		$header .= "From: markariel.maata@bpoc.co.jp\n";
		$header .= "Reply-To: markariel.maata@bpoc.co.jp\n";
	
		// 件名を設定
		$auto_reply_subject = '【お問い合わせありがとうございます】／株式会社ネオキャリア 採用インテグレーション事業部';
	
		// 本文を設定
		// $auto_reply_text =  $clean['your_name'] . "様 \n\n";
		$auto_reply_text .= $clean['name_fname'] . " " . $clean['name_lname'] . "様\n\n";
		$auto_reply_text .= "この度は、当サイトよりお問い合わせを頂きまして、誠にありがとうございます。\n 3営業日以内に担当より折り返しご連絡をいたしますので、今しばらくおまちくださいませ。\n\n";

		$auto_reply_text .= "お問い合わせ内容: " . $_POST['inquiry'][0] . " / " . $_POST['inquiry'][1] . " / " . $_POST['inquiry'][2] . " / " . $_POST['inquiry'][3] . " / " . $_POST['inquiry'][4] . " / " . $_POST['inquiry'][5] . "\n";
		$auto_reply_text .= "会社名: " . $clean['company_name'] . "\n";
		$auto_reply_text .= "氏名: " . $clean['name_fname'] . " " . $clean['name_lname'] . "\n";
		$auto_reply_text .= "氏名（カナ）: " . $clean['kana_fname'] . " " . $clean['kana_lname'] . "\n";
		$auto_reply_text .= "メールアドレス: " . $clean['email'] . "\n";
		$auto_reply_text .= "電話番号: " . $clean['tel1'] . " " .  $clean['tel2'] . " ". $clean['tel3'] ."\n";
		$auto_reply_text .= "リモート勤務中の連絡先: " . $clean['remote_tel1'] . " " .  $clean['remote_tel2'] . " ". $clean['remote_tel3'] ."\n";
		$auto_reply_text .= "役職: " . $clean['job'] . "\n";
		$auto_reply_text .= "会社所在地: " . $clean['location'] . "\n";
		$auto_reply_text .= "現状の課題、利用目的: " . $_POST['purpose'][0] . " / " . $_POST['purpose'][1] . " / " . $_POST['purpose'][2] . " / " . $_POST['purpose'][3] . " / " . $_POST['purpose'][4] . " / " . $_POST['purpose'][5] . " / " . "\n";
		$auto_reply_text .= "自由記入欄: " . nl2br($clean['content']) . "\n\n";
		$auto_reply_text .= "---------------------------- \n\n";
		$auto_reply_text .= "内容を確認の上、弊社担当者より追ってご連絡させていただきます。\n\n尚、お問い合わせの内容によってはお時間をいただく場合がございますのでご了承ください。\n";
		$auto_reply_text .= "■本メールは送信専用メールです。\nご返信頂いてもお答えできませんのでご了承ください。\n";
		$auto_reply_text .= "---------------------------- \n\n";
		
		$auto_reply_text .= "株式会社ネオキャリア \n東京都新宿区西新宿1-22-2 新宿サンエービル\n03-6756-0433\n";

		$auto_reply_text .= "---------------------------- \n";
		
		// テキストメッセージをセット
		$body = "--__BOUNDARY__\n";
		$body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n";
		$body .= $auto_reply_text . "\n";
		$body .= "--__BOUNDARY__\n";
	
		// 自動返信メール送信
		mb_send_mail( $clean['email'], $auto_reply_subject, $body, $header);
	

		// 運営側へ送るメールの件名
		$admin_reply_subject = "【資料請求がありました】";
	
		// 本文を設定
		$admin_reply_text .= "下記のお客様より資料請求がありました。\n 担当者は対応をお願いします\n\n";
		// $admin_reply_text .= "＝＝＝＝＝＝＝＝＝＝＝＝＝ \n";
		// $admin_reply_text .= "※以下、問合せ項目の反映\n";
		
		$admin_reply_text .= "お問い合わせ内容: " . $_POST['inquiry'][0] . " / " . $_POST['inquiry'][1] . " / " . $_POST['inquiry'][2] . " / " . $_POST['inquiry'][3] . " / " . $_POST['inquiry'][4] . " / " . $_POST['inquiry'][5] . "\n";
		$admin_reply_text .= "会社名: " . $clean['company_name'] . "\n";
		$admin_reply_text .= "氏名: " . $clean['name_fname'] . " " . $clean['name_lname'] . "\n";
		$admin_reply_text .= "氏名（カナ）: " . $clean['kana_fname'] . " " . $clean['kana_lname'] . "\n";
		$admin_reply_text .= "メールアドレス: " . $clean['email'] . "\n";
		$admin_reply_text .= "電話番号: " . $clean['tel1'] . " " .  $clean['tel2'] . " ". $clean['tel3'] ."\n";
		$admin_reply_text .= "リモート勤務中の連絡先: " . $clean['remote_tel1'] . " " .  $clean['remote_tel2'] . " ". $clean['remote_tel3'] ."\n";
		$admin_reply_text .= "役職: " . $clean['job'] . "\n";
		$admin_reply_text .= "会社所在地: " . $clean['location'] . "\n";
		$admin_reply_text .= "現状の課題、利用目的: " . $_POST['purpose'][0] . " / " . $_POST['purpose'][1] . " / " . $_POST['purpose'][2] . " / " . $_POST['purpose'][3] . " / " . $_POST['purpose'][4] . " / " . $_POST['purpose'][5] . " / " . "\n";
		$admin_reply_text .= "自由記入欄: " . nl2br($clean['content']) . "\n\n";
		$admin_reply_text .= "---------------------------- \n\n";
		$admin_reply_text .= "送信された日時：" . date("Y/m/d D H:i") . "\n";

		// $admin_reply_text .= "内容を確認の上、弊社担当者より追ってご連絡させていただきます。\n\n尚、お問い合わせの内容によってはお時間をいただく場合がございますのでご了承ください。\n";
		// $admin_reply_text .= "■本メールは送信専用メールです。\nご返信頂いてもお答えできませんのでご了承ください。\n";
		// $admin_reply_text .= "---------------------------- \n\n";

		// $admin_reply_text .= "株式会社オフグリッドラボ \nMail：info@offgrid-lab.co.jp\nホームページURL：https://offgrid-lab.co.jp/\n";

		$admin_reply_text .= "---------------------------- \n";
		
		// テキストメッセージをセット
		$body = "--__BOUNDARY__\n";
		$body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n";
		$body .= $admin_reply_text . "\n";
		$body .= "--__BOUNDARY__\n";
	
		// 管理者へメール送信
		mb_send_mail('markariel.maata@bpoc.co.jp', $admin_reply_subject, $body, $header);
		
	} else {
		$page_flag = 0;
	}	
}
function validation($data) {
	$error = array();

	// Inquiry field validation
	if( empty($_POST['inquiry']) ) {
		$error['inquiry'] = "「お問い合わせ内容」は入力必須項目です。";
	}

	// Company name validation
	if( empty($data['company_name']) ) {
		$error['company_name'] = "「会社名」は入力必須項目です。";
	} elseif( 20 < mb_strlen($data['company_name']) ) {
		$error['company_name'] = "20文字以内で入力してください。";
	}

	// 氏名のバリデーション
	if( empty($data['name_fname']) || empty($data['name_lname'])) {
		$error['name'] = "「氏名」は入力必須項目です。";
	} elseif( 20 < mb_strlen($data['name_fname']) || 20 < mb_strlen($data['name_lname'])) {
		$error['name'] = "20文字以内で入力してください。";
	}

	// // ふりがな検証
	if(empty($data['kana_fname']) || empty($data['kana_lname'])) {
		$error['name_kana'] = "「氏名（カナ）」は入力必須項目です。";
	} 
	elseif(  20 < mb_strlen($data['kana_fname']) || 20 < mb_strlen($data['kana_lname'])) {
		$error['name_kana'] = "20文字以内で入力してください。";
	}

	// メールアドレスのバリデーション//
	if( empty($data['email']) ) {
		$error['email'] = "「メールアドレス」は入力必須項目です。";
	} elseif( !preg_match( '/^[0-9a-z_.\/?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$/', $data['email']) ) {
		$error['email'] = "正しい形式で入力してください。";
	}

	// // 電話番号のバリデーション
	if( empty($data['tel1']) || empty($data['tel2']) || empty($data['tel3']) ) {
		$error['tel'] = "「電話番号」は入力必須項目です。";
	} elseif( !preg_match( '/^[0-9]+[0-9.-]+$/', $data['tel1']) || !preg_match( '/^[0-9]+[0-9.-]+$/', $data['tel2']) || !preg_match( '/^[0-9]+[0-9.-]+$/', $data['tel3'])) {
		$error['tel'] = "正しい形式で入力してください。";
	}

	// // リモート勤務中の連絡先のバリデーション
	if( empty($data['remote_tel1']) || empty($data['remote_tel2']) || empty($data['remote_tel3']) ) {
		$error['remote_tel'] = "「リモート勤務中の連絡先」は入力必須項目です。";
	} elseif( !preg_match( '/^[0-9]+[0-9.-]+$/', $data['remote_tel1']) || !preg_match( '/^[0-9]+[0-9.-]+$/', $data['remote_tel2']) || !preg_match( '/^[0-9]+[0-9.-]+$/', $data['remote_tel3'])) {
		$error['remote_tel'] = "正しい形式で入力してください。";
	}

	// Job field validation
	if( empty($data['job']) ) {
		$error['job'] = "「役職」は入力必須項目です。";
	}

	// Location field validation
	if( empty($data['location']) ) {
		$error['location'] = "「会社所在地」は入力必須項目です。";
	}

	// Purpose field validation
	if( empty($_POST['purpose']) ) {
		$error['purpose'] = "「現状の課題、利用目的」は入力必須項目です。";
	}

	// // 氏名のバリデーション
	if( empty($data['content']) ) {
		$error['content'] = "「自由記入欄」は入力必須項目です。";
	} elseif( 300 < mb_strlen($data['content']) ) {
		$error['content'] = "20文字以内で入力してください。";
	}

	// // 日付の検証
	// // if( empty($data['inquiry']) ) {
	// // 	$error['inquiry'] = "この項目は必須です。";
	// // }

	// if( empty($data['agreement']) ) {
	// 	$error['agreement'] = "「個人情報の取り扱いについて」に同意します は入力必須項目です。 ";
	// }

	// if( empty($data['time1']) ) {
	// 	$error['time1'] = "この項目は必須です。";
	// }

	return $error;
}
?>

<?php if( $page_flag === 1 ):
	// 確認画面読み込み
require_once(dirname(__FILE__)."/inc/confirm.php");
 ?>
<?php elseif( $page_flag === 2 ):
	// サンクスページへリダイレクト
// $url = "https://www.e-vision.co.jp/lp/inc/thanks.php";
// header('Location: ' . $url, true, 301);
require_once(dirname(__FILE__)."/inc/thanks.html");
exit;
 ?>
<?php else:
	// フォーム画面読み込み
require_once(dirname(__FILE__)."/inc/form.php");
 ?>
<?php endif; ?>