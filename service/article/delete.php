<?
include $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$sqlSafe = $_REQUEST;

$sql = "
DELETE FROM article
WHERE id = '{$sqlSafe['id']}'
";
execute($sql);

$resultData = array(
'resultCode' => 'S-1',
'id' => $sqlSafe['id']
);


echo json_encode($resultData);