<?php
define( 'DB_HOST', 'ホスト名を記述（例えばlocalhost）' );
define( 'DB_USER', 'ユーザー名を記述（例えばroot）' );
define( 'DB_PASS', 'パスワードを記述' );
define( 'DB_NAME', 'データベース名を記述' );
{
    // DBに取り込む画像のパス
	$img_path = 'http://ecx.images-amazon.com/images/I/61vSkV4-rwL.jpg';//例として、この時一番売れてる本の画像にしておきました。
	 
    // データベースに接続
    $DB = mysql_connect( DB_HOST, DB_USER, DB_PASS );
    mysql_select_db( DB_NAME, $DB );
 
    // 画像の取得
    $image = file_get_contents( $img_path );
 
    // SQL文の作成
    $sql = sprintf( 'INSERT INTO temp_upload (image ) VALUES ( "%s" )',
                    mysql_real_escape_string( $image ) );
	
	// SQL文の実行
    $result = mysql_query( $sql );
}
?>
