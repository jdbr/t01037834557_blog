<?
$dbmsHost = 'localhost'; // �Ǵ� 127.0.0.1
$dbmsId ='root';
$dbmsPw ='apmsetup';
$dbName = 'blog';

$link = mysqli_connect($dbmsHost, $dbmsId, $dbmsPw, $dbName) or die();
//DB ������ uTF-8 ���� ����
$dd = mysqli_query($link, "SET NAMES utf8;");

function getRows($sql) {
	global $link;
	 $rows = array();
	//SELECT * FROM article ���� ����
	$result = mysqli_query($link, $sql);

	if ( $result === true) {
		return null;
	}

	//���� ����� ������ �޾ƿ���
	while ( $row = mysqli_fetch_assoc($result) ) {
	$rows[] = $row;
	}
	return $rows;
}

function execute ($sql) {
	getRows($sql);
}

