<?php //upload.php 
/* Note: This is INCREDIBLY unsanitary... DO NOT USE the current version unless you know what you;re doing. 
I haven't sanitized the inputs yet :( */
echo <<<_END
<html><head><title>PHP Form</title></head>
<body>  
    <form method='post' action='upload.php' enctype="multipart/form-data">
        Select File: <input type='file' name='filename' size='10' />
        <input type='submit' value='Upload' /> 
    </form>
_END;


if($_FILES)
{
	$name = $_FILES['filename']['name'];
	move_uploaded_file($_FILES['filename']['tmp_name'], 'uploads/' . $name);
	echo "Uploaded file '$name' ";
}

echo "</body></html>";
?>