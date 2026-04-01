<?php

require "./connectDB.php";
require "./function.php";

header("Content-Type:application/json");
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "GET") {
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        SelectAll($pdo);
}
} elseif ($method == "POST") {
    Addstudents($pdo, $_POST);
}
