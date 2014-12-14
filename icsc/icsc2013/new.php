<?php
if(isset($_POST['xyz']))
{
if(md5(sha1($_POST['pass']))=="8efae17296285916d4675cbb31ffe49c")
{
	$line=$_POST['new'];
	if($_POST['color']!="0")
	$line='<font color="'.$_POST['color'].'">'.$line.'</font>';
	if($_POST['highlight']==1)
	$line='<strong>'.$line.'</strong>';
	$new=array($line);
	$handle = fopen("announce.csv", "a");
	fputcsv($handle, $new);
	fclose($handle);
	echo 'Added..!';
}
else
echo 'Wrong password..!!!!!';
}
?>
<form action="new.php" method="POST">
<textarea rows="4" cols="50" name="new"></textarea><br>
<input type=text name="xyz" value=121 style="display:none;"></input>
<select name="highlight">
<option value="0" default>Don't highlight</option>
<option value="1">Hightlight it</option>
</select>
<select name="color">
<option value="0" default>Black</option>
<option value="red">Red</option>
<option value="blue">Blue</option>
<option value="green">Green</option>
</select><br><br>
Password :<br>
<input type="password" name="pass"></input><br><br>
<input type="submit" value="Add announcement">
</form>