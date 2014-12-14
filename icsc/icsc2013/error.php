<?php
function curPageURL() {
 $pageURL = 'http';
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>
<?php

$status=$_SERVER['REDIRECT_STATUS'];
$codes=array(
      400 => array('400 Bad Request', 'The request cannot be fulfilled due to bad syntax.'),
      401 => array('401 Login Error', 'It appears that the password and/or user-name you entered was incorrect.'),
      403 => array('403 Forbidden', 'Sorry, employees and staff only.'),
      404 => array('404 Missing', 'We\'re sorry, but the page you\'re looking for is missing, hiding, or maybe it moved somewhere else and forgot to tell you.'),
      405 => array('405 Method Not Allowed', 'The method specified in the Request-Line is not allowed for the specified resource.'),
      408 => array('408 Request Timeout', 'Your browser failed to send a request in the time allowed by the server.'),
      414 => array('414 URL To Long', 'The URL you entered is longer than the maximum length.'),
      500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'),
      502 => array('502 Bad Gateway', 'The server received an invalid response from the upstream server while trying to fulfill the request.'),
      504 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.'),
);

$errortitle=$codes[$status][0];
$message=$codes[$status][1];

if($errortitle==false){
       $errortitle="Unknown Error";
       $message="An unknown error has occurred.";
}

?>	
<html>
<title><?php echo("$errortitle");?></title>
<body>
<center>
<table width="90%" height="90%">
<tr>
<td width="100%"><center><img src="http://www.jiit.ac.in/jiit/icsc/images/404.gif"></center>
<center><h1><u>404 Error: requested page does not exists!</u></h1>
<font face="Verdana" size="-2">URL: <?php
  echo curPageURL();
?></font><br><br>
<font face="Arial">You have reach this page because the requested
page does not exists on this server. Please check that the URL
is correct or inform the webmaster of the website of an incorrect
link.<br><br><a href="http://www.jiit.ac.in/jiit/icsc/">Go to
website home page</a></font><br><br><br></td></td></tr>
</table>
<table width="90%">
<tr><td width="100%" height="1"><center><font face="Arial" size="-2">
<!--ICSC Conference website is developed by <i><a href="http://www.shivamkhandelwal.in/">Shivam Khandelwal</a><br></i>-->
</font>
</center></td></tr></table>
</center>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41031324-1', 'jiit.com');
  ga('send', 'pageview');

</script>
<!--End ganalytic-->
</body>
</html>
