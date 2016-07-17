<?
$dbmsHost = 'localhost'; // 또는 127.0.0.1
$dbmsId ='root';
$dbmsPw ='apmsetup';
$dbName = 'blog';

$link = mysqli_connect($dbmsHost, $dbmsId, $dbmsPw, $dbName) or die();
//DB 연결을 uTF-8 모드로 설정
$dd = mysqli_query($link, "SET NAMES utf8;");

function getRows($sql) {
	global $link;
	 $rows = array();
	//SELECT * FROM article 쿼리 실행
	$result = mysqli_query($link, $sql);

	if ( $result === true) {
		return null;
	}

	//뭐리 결과를 맵으로 받아오기
	while ( $row = mysqli_fetch_assoc($result) ) {
	$rows[] = $row;
	}
	return $rows;
}

function execute ($sql) {
	getRows($sql);
}

