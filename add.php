<?php 
include_once("includes/test.inc.php");
if(isset($_POST['value'])){
$name=$_POST['name'];
$code=$_POST['code'];
$maxprice=$_POST['maxprice'];
$minprice=$_POST['minprice'];


$sql = "SELECT * FROM PRODUCT WHERE PCODE=$code;";
$result=mysqli_query($conn,$sql);
$res=mysqli_num_rows($result);
if($res > 0){
    include("product.php");
    echo "<script>";echo "alert('duplicate product id')"; echo "</script>";

    exit();
}
$sql="insert into product values('$name',$code,$maxprice,$minprice);";
mysqli_query($conn,$sql);
header("Location: pview.php");
}
?>

