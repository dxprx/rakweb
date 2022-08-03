<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["email"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])){
		if($_POST["username"]!=""&&$_POST["email"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["confirm_password"]){
			require "../config/config.php";
			if($register){
			
			$sql1= "select id from user where id=\"$_POST[username]\" or e_mail=\"$_POST[email]\"";
			$query = $con->query($sql1);
			if ($query->num_rows==0) {
				$sql = "insert into user(id,e_mail,password) value (\"$_POST[username]\",\"$_POST[email]\",\"$_POST[password]\")";
				$query = $con->query($sql);
					if($query!=null){ print "<script>alert(\"Successful registration\");window.location='../';</script>";
					}else{ print "<script>alert(\"DB Error.\");window.location='../';</script>"; }

			}else{ print "<script>alert(\"Username or email are already registered.\");window.location='../';</script>"; }
			
		  }else{ print "<script>alert(\"Register disable.\");window.location='../';</script>"; }

	   }
	}
}
?>