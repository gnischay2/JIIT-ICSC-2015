<?php 
if(isset($_POST['submit'])){ 

    $msg = mysql_real_escape_string($_POST['msg']); 
    $pas = md5(mysql_real_escape_string($_POST['password'])); 
	if($pas==="87ac3c714e345ad14dff3a5aa975b52d")
    {
	echo "Success<br>New notification is set to : <strong>".$msg."</strong><br><br>";
	$handle = fopen("notice.php", "w");
	fwrite($handle,$msg,strlen($msg)); 
	fclose($handle);
	}
} 
?>

<form action="updater.php" method="post">
    Password:<br>
    <input type="password" name="password"><br><br>
    New Message:<br>
    <input type="msg" name="msg"><br><br>
    <input type="submit" name="submit" value="Login">
</form>

