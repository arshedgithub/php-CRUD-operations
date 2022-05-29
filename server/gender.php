<?php

require_once 'db.php';

$sql = "SELECT * FROM gender";
$result = mysqli_query($conn, $sql);

$genders = array();
while($gender = mysqli_fetch_assoc($result)){
            $genders[] = $gender;
}
$jsonData = json_encode($genders);
echo($jsonData);
?>