<?php

require_once 'db.php';

$sql = "SELECT id,name,age, gender_id, (select name from gender where id = gender_id) as gender FROM employee";
$result = mysqli_query($conn, $sql);

$employees = array();
while($employee = mysqli_fetch_assoc($result)){
    $employees[] = $employee;
}
$jsonData = json_encode($employees);
echo($jsonData);
?>