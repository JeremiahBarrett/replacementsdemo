<html>
<head>
<title></title>
</head>
<body>
<?php
// Specify the file location
$listfile = "npcount.txt";

// Getting file contents of the current needed count //
$pieces = file_get_contents("$listfile");

//Exploding the data into an array based on new lines
$pfixed = explode("\n", $pieces);

// Converting that array to a multidimensional array
$pfixarray = array($pfixed);


// Display all pending items
// Uncomment to display
/*
foreach($pfixed as $value){
  echo "$value<br>";
  
}
*/

?>


</body>