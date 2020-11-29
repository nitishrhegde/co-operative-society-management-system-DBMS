<?php
include_once("includes/test.inc.php");
session_start();




$result = mysqli_query($conn,"SELECT FID,PID,QUANTITY,PRICE,TOTAL,DATE from PURCHASE WHERE MID='{$_SESSION['usrname']}'");

?>

<html>
    <head>
</head>
<body>

<style>
#pview{
  font-family:"Trebuchet MS",Arial,Helvetica, sans-serif;
margin : 50px auto;
width:80%;
height:60%;
}


#pview tr:nth-child(even){background-color: #f2f2f2;}
#pview tr:nth-child(odd){background-color: #dcefef;}
#pview  th{
    font-size:20px;
    padding-top:12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #094915;
    color:white;

}
#pview tr{
    text-align:center;
}

body{
    background-image: url("index.jpg.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size:100%;
    margin: 0;
    padding: 0;
}


button{
    margin-left:50%;
    width:60px;
    height:40px;
    text-align:center;
    background-color:#094915;
}


</style>
  
<link a href="index.css" type="text/css" rel="stylesheet">
<header>
            <h2><img src="620798.svg" class="logo">AGRI GOLD<br>
           <SPAN class="head"> AGRICULTURAL MARKETING CO-OPERATIVE SOCIETY MANAGEMENT SYSTEM</SPAN> 
            </h2>
            </header>
            
           
<table id="pview">
    <tr>
        <th>FARMER ID </th>
        <th>PRODUCT ID</th>
      
        <th>QUANTITY(in Quintal)</th>
        <th>PRICE</th>
        <th>TOTAL</th>
        <th>DATE</th>
    </tr>
<?php

while($res = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$res['FID']."</td>";
        echo "<td>".$res['PID']."</td>";
        
        echo "<td>".$res['QUANTITY']."</td>";
        echo "<td>".$res['PRICE']."</td>";
        echo "<td>".$res['TOTAL']."</td>";
        echo "<td>".$res['DATE']."</td>";
      
    
}
?>
</table>



<button type="submit" ><a href="cindex.php" style="text-decoration: none;color:white;">HOME</a></button>
</body>
</html>





</body>