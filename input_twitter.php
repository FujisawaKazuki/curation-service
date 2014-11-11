<?php
require 'TwistOAuth.php';

// 設定
$dbname = '';
$dbhost = '127.0.0.1';//localhost
$dbuser = 'root';
$dbpass = '';
$ck='';
$cs='';
$ot='';
$os='';
$q = '#abcdef';
$lang = 'ja';
$count = 10;
$tz = new DateTimeZone('Asia/Tokyo');

try {

// ツイートの取得
$to = new TwistOAuth($ck, $cs, $ot, $os);
$statuses = $to->get('search/tweets', compact('q', 'lang', 'count'))->statuses;

// データベースへの接続
//$dsn = "mysql:host=$dbhost;dbname=$dbname;charset=utf8";//
$dsn = 'mysql:host='.$dbhost.';port=3306;dbname='.$dbname;
$pdo = new PDO($dsn, $dbuser, $dbpass);//PDOでデータベース接続
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//既存のテーブル削除
$result = $pdo->query("DELETE FROM tweet");
//$result = executeQuery($sql);

// データベースへの挿入
$stmt = $pdo->prepare('INSERT IGNORE INTO tweet(`str_id`,`user_id`,`tw`,`at`) VALUES(?,?,?,?)');//IGNORE:重複しても無視できてエラーがでない
foreach ($statuses as $status) {
if (isset($status->retweeted_status)) {
$status = $status->retweeted_status;
}
$stmt->execute(array(
$status->id_str,
$status->user->id_str,
htmlspecialchars_decode($status->text, ENT_NOQUOTES),
date_create($status->created_at, $tz)->format('Y/m/d H:i:s'),
));
}

} catch (Exception $e) {

// PDOException, TwistException はここでキャッチされます
echo $e->getMessage() . PHP_EOL;

}


/*$stmt = $pdo->query("SELECT * FROM tweet");//データベースkazukiからテーブルtestを参照する
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<table border='4'>\n";
foreach($res as $rs){
	echo "<tr>\n";
	foreach($rs as $r){
		echo $r;
	}
	echo "</tr>\n";
}
echo "</table>\n";*/
