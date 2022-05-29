<?php
if (isset($_GET['employeeId'])) {
    die();
}

require_once 'db.php';

$employeeId = $_GET["employeeId"];
echo($employeeId);


$sql = "DELETE FROM employee WHERE id = '$employeeId';";
echo($sql);

$result = mysqli_query($conn, $sql);
echo($result);

?>