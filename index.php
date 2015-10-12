<?php
include 'upload-model.php';
include 'upload-controller.php';
include 'upload-view.php';


$upload_model = new UploadModel(); 
$upload_controller = new UploadController($upload_model); 
$upload_view = new UploadView($upload_controller, $upload_model); 


if($_FILES){
    $upload_controller->saveFiles($_FILES); 
    $error = "files!"; 
}

echo $upload_view->output(); 
?>
