<?php
function SelectAll($pdo){
    $sql = "SELECT * FROM `students`";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
}
function SelectId($pdo,$id){
    $id = $_GET["id"];
    $sql = "SELECT * FROM `students` WHERE id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["id"=> $id]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
}
function Addstudents($pdo,$data){
    $sql = "INSERT INTO students(name,groups) VALUES (:name,:groups)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($data);
    $response = [
        'status' => true,
        'message'=> 'ДОБАВЛЕНО'
    ];
    echo json_encode($response);
}