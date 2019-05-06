<html>
<head>
<title></title>
</head>
<body>
<?php
// Creating random ID to associate customer request with its listing in the count
$randid = rand(1,100000000);

// Creating Customer Object to hold data from submitted information.
class Customer {
 public $name;
 public $email;
 public $requestdatetime;
 public $phonenumber;
 public $customernumber;	

// Constructing Public Function For Class
public function __construct ($name, $email, $phonenumber, $customernumber, $requestdatetime) {	
$this->name = $name;
$this->email = $email;
$this->requestdatetime = $requestdatetime;
$this->phonenumber = $phonenumber ;
$this->customernumber = $customernumber;
}
}

// Second Class Extends Customer, as orders have customers.
class PieceRequest extends Customer {
// First Request
public $type;
public $print;
public $amount;
// Second Request
public $type2;
public $print2;
public $amount2;
// Third Request
public $type3;
public $print3;
public $amount3;

//Constructing Public Function For Class
public function __construct ($type, $print, $amount, $type2, $print2, $amount2, $type3, $print3, $amount3) {	
$this->type = $type;
$this->print = $print;
$this->amount = $amount;
$this->type2 = $type2;
$this->print2 = $print2;
$this->amount2 = $amount2;
$this->type3 = $type3;
$this->print3 = $print3;
$this->amount3 = $amount3;
}
}

// Accept data for new customer
// Name, Email, Phone, Customer Number, Date
$newcustomer = new Customer ($_POST['element_1'], $_POST['element_2'], $_POST['element_3_1'] . $_POST['element_3_2'] . $_POST['element_3_3'], $_POST['element_16'], date('Y/m/d H:i:s'));

// Accept data for new piece request
$newpiecerequest = new PieceRequest ($_POST['element_6'], $_POST['element_7'], $_POST['element_8'],$_POST['element_9'],$_POST['element_10'],$_POST['element_11'],$_POST['element_12'],$_POST['element_13'],$_POST['element_14']);


// For First Piece Request
$pieceentry1 = ($newpiecerequest->type . "," . $newpiecerequest->print . "," . $newpiecerequest->amount . "," . $randid . "\r\n");


// For Second Piece Request
$pieceentry2 = ($newpiecerequest->type2 . "," . $newpiecerequest->print2 . "," . $newpiecerequest->amount2 . "," . $randid . "\r\n");


// For Third Piece Request
$pieceentry3 = ($newpiecerequest->type3 . "," . $newpiecerequest->print3 . "," . $newpiecerequest->amount3 . "," . $randid . "\r\n");


// Creating Strings To Update Text File
// For Customer
$cxentry = ($newcustomer->name .", ". $newcustomer->email . ", " . $newcustomer->phonenumber . ", " . $newcustomer->customernumber . "," . $newpiecerequest->type . "," . $newpiecerequest->print . "," . $newpiecerequest->amount. "," . $newpiecerequest->type2 . "," . $newpiecerequest->print2 . "," . $newpiecerequest->amount2 . "," . $newpiecerequest->type3 . "," . $newpiecerequest->print3 . "," . $newpiecerequest->amount3 . "," . $randid . "\r\n" );




?>



</body>