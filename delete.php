<?php
include_once("includes/test.inc.php");

$id = $_GET['id'];

$result= mysqli_query($conn,"DELETE FROM PRODUCT WHERE PCODE=$id;");

$res=mysqli_query($conn,"SELECT * FROM PRODUCT WHERE PCODE=$id");
$numres=mysqli_num_rows($res);

if($numres = 1){
    
    echo "<script>";echo "alert('DELETE OPERATION FAILED')" ; echo "</script>";
}

header("Location: pview.php");

?>