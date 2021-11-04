<?php

require_once("../../directories/directories.php");
require_once(__initDB__);
require_once(__F_FORMAT__);

$empID = prepareForSQL($conn, $_POST['empID']);

if(mysqli_num_rows($result = mysqli_query($conn, "SELECT `empID` from `empaccountdetails` LIMIT 1;")) == 0) {
  echo $output->setFailed("Account does not exist");
  die();
}

$sql = "UPDATE empaccountdetails SET password = DEFAULT WHERE empID=$empID LIMIT 1;";

if (mysqli_query($conn, $sql)) {
    //echo "Record updated successfully";
    echo $output->setSuccessful('Password have been reset');
    //echo mysqli_affected_rows($conn);
} else {
    //echo "Error updating record: " . mysqli_error($conn);
    echo $output->setFailed("Something went wrong while resetting the password");
  }
//echo $status;
?>