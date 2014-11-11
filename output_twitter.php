<?php
$stmt = $pdo->query("SELECT tw FROM tweet WHERE at");
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($res as $rs){
	foreach($rs as $r){
		echo json_encode($r)
	}
}
