<?php
include "dbConfig.php";
// include "home.php";
$sqlquery = "DELETE FROM images WHERE id=8";
if($db -> query($sqlquery)){
    echo "<h1>Deleted Successfully</h1>";
}

?>

<html>
    <head>
     <link rel="stylesheet" href="style1.css">
    </head>

</html>

