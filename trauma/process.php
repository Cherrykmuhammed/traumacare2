<?php
 
 	$mysqli=new mysqli('localhost','root','','traumacare') or die(mysqli_error($mysqli));
	if(isset($_POST['submit'])){
		$fullname=$_POST['fullname'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$blood=$_POST['blood'];
		$address=$_POST['address'];
		$pin=$_POST['pin'];
		$location=$_POST['location'];
		$contact_no=$_POST['contact_no'];
		
		
		$mysqli->query("INSERT into register(Sl_No,fullname,email,username,password,blood,address,pin,location,contact_no) VALUES('','$fullname','$email','$username','$password','$blood','$address','$pin','$location','$contact_no')") or die(mysqli_error($mysqli));
		
	}

			
		
		
		
	
		
		
		
 
 ?>