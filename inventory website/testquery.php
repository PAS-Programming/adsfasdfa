<?php
$serverName = "passcience.database.windows.net";
$connectionOptions = array(
    "Database" => "Inventory",
    "Uid" => "pasadmin",
    "PWD" => "Johnson1111"
);

//Establishes the connection

$conn = sqlsrv_connect($serverName, $connectionOptions);
if($conn === false)
{
    die(print_r(sqlsrv_errors(), true));
}


//We need to get name and quantity from inventory table by searching for %name%. Sorting options should be available in a button.

$tsql= "SELECT * FROM dbo.inventory";
$stm = sqlsrv_query($conn, $del);
$getResults = sqlsrv_query($conn, $tsql);


if ($getResults === false)
    echo 'error:'. (sqlsrv_errors());

echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<title>Search Results</title>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
echo '<link rel="icon" type="image/png" href="favicon.ico"/>';
echo '<link rel="stylesheet" type="text/css" href="tablevendor/bootstrap/css/bootstrap.min.css">';
echo '<link rel="stylesheet" type="text/css" href="tablefonts/font-awesome-4.7.0/css/font-awesome.min.css">';
echo '<link rel="stylesheet" type="text/css" href="tablevendor/animate/animate.css">';
echo '<link rel="stylesheet" type="text/css" href="tablevendor/select2/select2.min.css">';
echo '<link rel="stylesheet" type="text/css" href="tablevendor/perfect-scrollbar/perfect-scrollbar.css">';
echo '<link rel="stylesheet" type="text/css" href="tablecss/util.css">';
echo '<link rel="stylesheet" type="text/css" href="tablecss/main.css">';
echo '</head>';
echo '<body>';


echo '<div class="limiter">';
echo '<div class="container-table100">';
echo '<div class="wrap-table100">';
echo '<center style="font-size:5vw">PAS Science Inventory</center>';
echo '<div class="table100">';
echo '<table>';
echo '<thead>';
echo '<tr class="table100-head">';
echo '<th class="column1">Name</th>';
echo '<th class="column2">Size</th>';
echo '<th class="column3">Type</th>';
echo '<th class="column4">Department</th>';
echo '<th class="column5">Location</th>';
echo '<th class="column6">Quantity</th>';
echo '<th class="column7">Select</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
    echo '<tr>';
    	echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Size'] . "</td>";
        echo "<td>" . $row['Type'] . "</td>";
        echo "<td>" . $row['Department'] . "</td>";
		echo "<td>" . $row['Location'] . "</td>";
		echo "<td>" . $row['Quantity'] . "</td>";
	echo "<td>";
	echo "</td>";
    echo "</tr>";
  
}
echo "</tbody";
echo "</table";

sqlsrv_free_stmt($getResults);
?>