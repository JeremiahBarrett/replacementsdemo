
<html>
<head>
<title></title>
</head>
<body>
<?php
// Include listcount to get file variable
include 'listcount.php';

// Depending on wheter the user submitted 1, 2, or 3 pieces in their request, we write different data
if ($newpiecerequest->amount3 > 0) {
file_put_contents($listfile, $pieceentry1, FILE_APPEND | LOCK_EX);
file_put_contents($listfile, $pieceentry2, FILE_APPEND | LOCK_EX);
file_put_contents($listfile, $pieceentry3, FILE_APPEND | LOCK_EX);

} elseif ($newpiecerequest->amount2 > 0) {
file_put_contents($listfile, $pieceentry1, FILE_APPEND | LOCK_EX);
file_put_contents($listfile, $pieceentry2, FILE_APPEND | LOCK_EX);

} else {
file_put_contents($listfile, $pieceentry1, FILE_APPEND | LOCK_EX);
}

?>


</body>