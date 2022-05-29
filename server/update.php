<?php

if (!(isset($_POST['txtName']) && isset($_POST['txtAge']) && isset($_POST['txtGender']) && isset($_POST['txtId']) )){
    die();
}

$name = $_POST["txtName"];
$age = $_POST["txtAge"];
$gender = $_POST["txtGender"];
$id = $_POST["txtId"];

require_once 'db.php';

$sql = "UPDATE employee SET name ='$name', age = '$age', gender_id = '$gender' WHERE ID = $id;";

$result = mysqli_query($conn, $sql);
if($result){
    echo("true");
}else{
    echo("false");
}

?>