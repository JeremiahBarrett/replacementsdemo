<html>
<head>
<title></title>
</head>
<body>
<?php
// Including customers to get file value
include 'customerlist.php';

// Write Customer Request
// Obtains cxentry on form post
//FILE_APPEND to make sure its not added to an existing line
// LOCK_EX to make sure nobody is stepping on our toes while we write.
file_put_contents($file, $cxentry, FILE_APPEND | LOCK_EX);


?>
</body>