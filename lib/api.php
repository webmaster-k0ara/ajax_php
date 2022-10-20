<?php
include(__DIR__ . '/data.php');

// 作成するファイル名を複数配列に格納
$files = array('file.txt', 'file2.txt', 'file3.txt');
// ファイルが入った配列を1つずつループ処理
foreach ($files as $file) {
  // file_existsでファイルが存在しているか判定
  if(file_exists($file)) {
  } else {
    // touchでファイル作成
    touch($file);
  }
  // 以上をループ処理
}

header("Content-type: application/json; charset=UTF8");
echo json_encode($posts);
