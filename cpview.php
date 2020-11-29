<?php
include_once("includes/test.inc.php");

$result = mysqli_query($conn,"SELECT * from product;");

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
#pview tr:nth-child(odd){background-color: #f2f2f2;}
#pview th{
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
    background-attachment:fixed;
    background-size:100%;
}

button{
    margin-left:50%;
    width:60px;
    height:40px;
    text-align:center;
    background-color:#094915;
}

</style>

<table id="pview">
    <tr>
        <th>PRODUCT NAME</th>
        <th>PRODUCT CODE</th>
        <th>MINPRICE</th>
        <th>MAXPRICE</th>
    </tr>
<?php

while($res = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$res['PNAME']."</td>";
        echo "<td>".$res['PCODE']."</td>";
        echo "<td>".$res['MINPRICE']."</td>";
        echo "<td>".$res['MAXPRICE']."</td>";
    
}
?>
</table>
<button type="submit" ><a href="cindex.php" style="text-decoration: none;color:white; 
">HOME</a></button>
</body>
</html>





</body>