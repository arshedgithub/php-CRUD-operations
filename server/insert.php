<?php
$name = $_POST["txtName"];
$age = $_POST["txtAge"];
$gender = $_POST["txtGender"];

require_once 'db.php';

$sql = "INSERT INTO employee(name,age,gender_id)values('$name','$age','$gender')";
$result = mysqli_query($conn, $sql);
if($result){
    echo("true");
}else{
    echo("false");
}

?>