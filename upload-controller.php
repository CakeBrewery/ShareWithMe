<?php 
class UploadController
{
    private $model; 

    public function __construct($model){
        $this->model = $model;
    }

    public function saveFiles($files){
        $name = $files['filename']['name'];
        move_uploaded_file($files['filename']['tmp_name'], 'uploads/' . $name); 
        $this->model->status = "Uploaded file '$name'";
    }
}
?>