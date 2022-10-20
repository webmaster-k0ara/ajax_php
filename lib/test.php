<?php
$test = [
"name" => "taro",
"age" => "20"
];

header("Content-type: application/json; charset=UTF8");

echo json_encode($test);
