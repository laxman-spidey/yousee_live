
<html>
<head>
</head>
<body>
<?php

include 'tableUtility.php';
$query ="select donor_id,type_of_donor,first_name from donors";
$array = array("id","type","first name","last name");
include '../prod_conn.php';

 mysql_connect("$dbhost","$dbuser","$dbpass");
 mysql_select_db("$dbdatabase");
 

$util = new tableUtility($query,$array);
$util->generateTable();
?>
</body>
</html>