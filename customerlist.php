<html>
<head>
<title></title>
</head>
<body>
<?php
// Specify the file location
$file = "csrq.txt";

// Getting file contents of the current needed count //
$customers = file_get_contents("$file");

//Exploding the data into an array based on new lines
$cfixed = explode("\n", $customers);

// Converting that array to a multidimensional array
$cfixarray = array($cfixed);


// Display all pending items
// Uncomment to see 
/*
foreach($cfixed as $value){
  echo "$value<br>";
}
/*


// Create Table For Easy Viewing
// Uncomment to see
/*
echo "<table>";
foreach ($cfixarray as $row) {
   echo "<tr>";
   foreach ($row as $column) {
      echo "<td>$column</td>";
   }
   echo "</tr>";
}    
echo "</table>";
*/

?>


</body>