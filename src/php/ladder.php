<?php
require "../config/config.php";
$sql1= "select id from user where id=\"$_POST[username]\" or e_mail=\"$_POST[email]\"";
$query = $con->query($sql1);

?>