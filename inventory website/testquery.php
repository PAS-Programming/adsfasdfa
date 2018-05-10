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
echo "\n";
echo '<html lang="en">';
echo "\n";
echo "\n";
echo '<head>';
echo "\n";
echo '<title>Search Results</title>';
echo "\n";
echo '<meta charset="UTF-8">';
echo "\n";
echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
echo "\n";
echo '<link rel="icon" type="image/png" href="favicon.ico"/>';
echo "\n";
echo "\n";
echo '<link rel="stylesheet" type="text/css" href="tablevendor/bootstrap/css/bootstrap.min.css">';
echo "\n";
echo '<link rel="stylesheet" type="text/css" href="tablefonts/font-awesome-4.7.0/css/font-awesome.min.css">';
echo "\n";
echo '<link rel="stylesheet" type="text/css" href="tablevendor/animate/animate.css">';
echo "\n";
echo '<link rel="stylesheet" type="text/css" href="tablevendor/select2/select2.min.css">';
echo "\n";
echo '<link rel="stylesheet" type="text/css" href="tablevendor/perfect-scrollbar/perfect-scrollbar.css">';
echo "\n";
echo '<link rel="stylesheet" type="text/css" href="tablecss/util.css">';
echo "\n";
echo '<link rel="stylesheet" type="text/css" href="tablecss/main.css">';
echo "\n";
echo "\n";
echo '</head>';
echo "\n";
echo '<body>';
echo "\n";
echo "\n";


echo '<div class="limiter">';
echo "\n";
echo "\n";
echo '<div class="container-table100">';
echo "\n";
echo "\n";
echo '<div class="wrap-table100">';
echo "\n";
echo "\n";
echo '<center style="font-size:5vw">PAS Science Inventory</center>';
echo "\n";
echo "\n";
echo '<div class="table100">';
echo "\n";
echo "\n";
echo '<table>';
echo "\n";
echo "\n";
echo '<thead>';
echo "\n";
echo "\n";

echo '<tr class="table100-head">';
echo "\n";
echo '<th class="column1">Name</th>';
echo "\n";
echo '<th class="column2">Size</th>';
echo "\n";
echo '<th class="column3">Type</th>';
echo "\n";
echo '<th class="column4">Department</th>';
echo "\n";
echo '<th class="column5">Location</th>';
echo "\n";
echo '<th class="column6">Quantity</th>';
echo "\n";
echo '<th class="column7">Select</th>';
echo "\n";
echo "\n";
echo '</tr>';
echo "\n";
echo "\n";
echo '</thead>';
echo "\n";
echo "\n";
echo '<tbody>';
echo "\n";
echo "\n";

while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
    echo '<tr>';
	echo "\n";
    	echo "<td>" . $row['Name'] . "</td>";
	echo "\n";
        echo "<td>" . $row['Size'] . "</td>";
	echo "\n";
        echo "<td>" . $row['Type'] . "</td>";
	echo "\n";
        echo "<td>" . $row['Department'] . "</td>";
	echo "\n";
		echo "<td>" . $row['Location'] . "</td>";
	echo "\n";
		echo "<td>" . $row['Quantity'] . "</td>";
	echo "\n";
	echo "<td>";
	echo "\n";
	echo "</td>";
	echo "\n";
	echo "\n";
	
    echo "</tr>";
	echo "\n";
	echo "\n";
  
}
echo "</tbody";
echo "\n";
echo "\n";
echo "</table";
echo "\n";
echo "\n";

sqlsrv_free_stmt($getResults);
?>