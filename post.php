<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Piece Request</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
</head>
<body>
<?php
include 'request.php';
include 'updatecount.php';
include 'updatecustomers.php';
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4" id="main">
			<h2>
				<?php echo "<p>". "Thanks for submitting your request " . $newcustomer->name . " !</>"; ?>
			</h2>
			<p>
<?php echo "<p> The information about what pieces you need have been recorded, and we will keep an eye out for you.</></br> The items you requested are: </br>" ;

// Depending on how many different pieces they are requesting, we show different outputs.

if ($newpiecerequest->amount3 > 0) {
echo "<p>" . $newpiecerequest->amount . " " .  $newpiecerequest->type . "s in the print of " . $newpiecerequest->print . "</br>";
echo "Also " . $newpiecerequest->amount2 . " " .  $newpiecerequest->type2 . "s in the print of " . $newpiecerequest->print2 . "</br>";
echo "And " . $newpiecerequest->amount3 . " " .  $newpiecerequest->type3 . "s in the print of " . $newpiecerequest->print3 . "</p></br>";

} elseif ($newpiecerequest->amount2 > 0) {
echo "<p>" . $newpiecerequest->amount . " " .  $newpiecerequest->type . "s in the print of " . $newpiecerequest->print . "</br>";
echo "Also " . $newpiecerequest->amount . " " .  $newpiecerequest->type . "s in the print of " . $newpiecerequest->print2 . "</p></br>";

} else {
echo "<p>" . $newpiecerequest->amount . " " .  $newpiecerequest->type . "s in the print of " . $newpiecerequest->print . "</p></br>";
}



 ?>
			
			</p>
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>
</body>