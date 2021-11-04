<?php

require_once(dirname(__FILE__, 3)."/directories/directories.php");
require_once __initDB__;
require_once __F_FORMAT__;

$id = tonotwtf($_POST['amid'], 3);

prepareForSQL($conn, $id, 2);

if(empty($id))
    echo $output->setFailed('Cannot find amenity');

if(mysqli_query($conn, "DELETE FROM `amenities` WHERE `amenityID`=$id LIMIT 1")) {
    unlink(__D_AMENITIES__."/$id/image.jpeg");
    rmdir(__D_AMENITIES__."/$id/");
    die($output->setSuccessful('Deleted'));
}
else
    die($output->setFailed('Something went wrong while deleting the amenity'));
?>