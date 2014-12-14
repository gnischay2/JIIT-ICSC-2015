<?php
$today = date('d-m-y');
$keyy = array();
$rec = array();
$i=1;
$rec[0]=$today;
$keyy[0]="Date";
foreach ($_POST as $key=>$value) {
    $keyy[$i] = $key;
	$rec[$i] = $value;
	$i++;
}

$j=0;
$error=0;

/*
for($j=0;$j<$i;$j++)
	echo $keyy[$j].' = '.$rec[$j].'<br/>';
*/
if($i>1)
{	
if($rec[1]==7000)
$fp = fopen('2013/res/6000.csv', 'a');
else if($rec[1]==5500)
$fp = fopen('2013/res/5000.csv', 'a');
else if($rec[1]==4000)
$fp = fopen('2013/res/4000.csv', 'a');
else if($rec[1]==3000)
$fp = fopen('2013/res/3000.csv', 'a');
else if($rec[1]==10000)
$fp = fopen('2013/res/10000.csv', 'a');
else if($rec[1]==0)
$fp = fopen('2013/res/free.csv', 'a');
else
{
	$error=1;
	$fp = fopen('2013/res/junk.csv','a');
	
}
    fputcsv($fp, $rec);

fclose($fp);
}
else
	$error=1;

?>
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http+://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
	<title>ICSC Conference | Registration Page</title>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41031324-1', 'jiit.com');
  ga('send', 'pageview');

</script>
	

<!--End ganalytic-->

	
		<link rel="stylesheet" href="css/theme.css" type="text/css" />

	
</head>
<body>
<div class="bg1">
	

	<!-- Top Area -->
	<div class="wraper-top">
		<div class="fixw">
			<div class="clear">&nbsp;</div>
			<!--<div class="logo-block">
				<img src="img/logo-1.png" width="55" height="46" style="padding:10px;" alt=""/>
			</div>-->
			<div class="head-block">
				<h1>ICSC Registration Form</h1>
				<p>International Conference on Signal Processing and Communication....</p>

			</div>
		</div>
	</div>

	
	<div class="wraper-mid">
		<div class="clear">&nbsp;</div>
		<div class="fixw form-line">
			<div class="form-col-1">
				<div class="form-wrap">
					<div class="clear">&nbsp;</div>
					<div class="form-inner">
						<div class="clear">&nbsp;</div>
			<?php
			if($error==0)
			{
				?>

<p style="font-size:20px; color:white;">Your registration is successful.</p>
<?php
			}
			else
			{
				
				?>
					
<p style="font-size:20px; color:white;">Your did something wrong. Please contact administrator for more help.</p>
					<?php
					
			}
			
			?>
				<br /><p style="font-size:20px; color:grey;"><a href="index.php" style="color:rgb(128, 79, 79); text-decoration:none;">Click here to go back to Homepage</a></p>
						<div class="clear">&nbsp;</div>
					</div>
				</div>
				<div class="form-bot"></div>
			</div>


			<div class="clear"></div>
		</div>
	</div>

	<div class="wraper-bot">
		<div class="clear">&nbsp;</div>
		<div class="fixw">
			

			<div class="footer-block">
				&nbsp;&nbsp;&nbsp;&copy; JIIT , Designed By Shivam Khandelwal and Yogesh Vijay
			</div>

			
		</div>
	</div>
</div></body>
</html>		