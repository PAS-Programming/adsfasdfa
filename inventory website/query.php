<?php
$serverName = "passcience.database.windows.net";
$connectionOptions = array(
    "Database" => "Inventory",
    "Uid" => "pasadmin",
    "PWD" => "Johnson1111"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
$tsql= "SELECT TOP 20 pc.Name as CategoryName, p.name as ProductName
        FROM [SalesLT].[ProductCategory] pc
        JOIN [SalesLT].[Product] p
     ON pc.productcategoryid = p.productcategoryid";
$getResults= sqlsrv_query($conn, $tsql);
echo ("Reading data from table" . PHP_EOL);
if ($getResults == FALSE)
    echo (sqlsrv_errors());
while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
 echo ($row['CategoryName'] . " " . $row['ProductName'] . PHP_EOL);
}
echo ("Ram ranch" . PHP_EOL);
sqlsrv_free_stmt($getResults);
?>

<html>
  <head>
    <title>Sample "Hello, World" Application</title>
  </head>
  <body>


    <p>This is the home page for the HelloWorld Web application. </p>
    <p>To prove that they work, you can execute either of the following links:

  </body>
</html>