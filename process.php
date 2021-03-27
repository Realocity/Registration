<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$firstname 		= $_POST['firstname'];
	$lastname 		= $_POST['lastname'];
	$email 			= $_POST['email'];
	$areacode 		= $_POST['areacode'];
	$phonenumber	= $_POST['phonenumber'];
	$address 		= $_POST['address'];
	$password 		= sha1($_POST['password']);
	$confirmpassword = sha1($_POST['confirmpassword']);
	$gender 		= ($_POST['gender']);

		$sql = "INSERT INTO registration (firstname, lastname, email, areacode, phonenumber, address, password, confirmpassword, gender ) VALUES(?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $email, $areacode, $phonenumber, $address, $password, $confirmpassword, $gender]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
