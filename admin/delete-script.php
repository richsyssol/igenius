<?php
include "includes/config.php";
include_once "Common.php";
if (isset($_POST['deleteBtn'])){
    $recordIds = $_POST['recordsCheckBox'];
    $common = new Common();
    foreach ( $recordIds as $id ) {
        $delete = $common->deleteRecordById($conn,$id);
    }
    if ($delete) {
        echo '<script>alert("Record deleted successfully !")</script>';
        echo '<script>window.location.href="active-product.php";</script>';
    }
}
