<?php
$name=$_POST['name'];
$email=$_POST['email'];
$firstname=$_POST['username'];
$lastname=$_POST['lastname'];
$password=$_POST['password'];
$mobile=$_POST['mobilephone'];
$state=$_POST['state'];


if($name!=''){
	
$message='<body>
<center> <h2>Make my Store</h2></center>
<table>
<tr><td>Company Name</td><td>:'.$name.'</td><tr> 
<tr><td>Email</td><td>:'.$email.'</td><tr> 
<tr><td>User Name</td><td>:'.$firstname.' '.$lastname.'</td></tr>
<tr><td>Password</td><td>:'.$password.'</td><tr>
<tr><td>Phone Number</td><td>:'.$mobile.'</td><tr>
<tr><td>State</td><td>:'.$state.'</td><tr> 
</table></body>';


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:'.$name.' <'.$email.'>' . "\r\n";


mail("ranjannayak@ralecon.com", "website Enquiry \n".date("d-m-Y"), $message, $headers); 

	?>
	<script>window.location="index.html";</script>
	<?php
	
}else{
	?>
	<script>window.location="index.html";</script>
	<?php
}

?>