<?php

echo 'test';
if(isset($_POST['send']))
{
	$con = new PDO('mysql:host=localhost;dbname=captcha','root','root');
	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$name=$_POST['name'];
	echo $name;
	try{
		$query='INSERT INTO contact  (name) VALUE ("'.$name.'")';
		$result=$con->query($query);
		if($result)
		{
			header('Location:index.html');
		}
	}
	catch(Exception $e){
		echo $e->getMessage();
	}
	
}
