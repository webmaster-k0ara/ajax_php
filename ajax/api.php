<?php
// $data = array("name" => "tanaka");

// JSONファイルを読み込む
$file = file_get_contents("./member.json");

// これをつけることでJSONとしてデータを渡せる
// header関数の前に出力するとエラーになる
header("Content-type: application/json; charset=UTF8");

// json形式へ変換
// echo json_encode($data);
echo $file;

exit;
