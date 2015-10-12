<?php 
echo "<html><body><h1>Uploaded Files</h1><ul>"; 

$path = "./uploads"; 
$dh = opendir($path); 
$i=1; 

while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." ){
        echo  "<li><a href='$path/$file'><h3>$file</h3></a></li>";
        $i++; 
    }
}

closedir($dh); 

echo "</ul></body></html>";
?>