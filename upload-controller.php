<?php 
class Controller
{
    private $model; 

    public function __construct($model){
        $this->model = $model;
    }

    public function checkFiles($files){
		$name = $files['filename']['name'];
		move_uploaded_file($files['filename']['tmp_name'], 'uploads/' . $name); 
		$this->model->status = "Uploaded file '$name'";
	}

    public function clicked(){
        $this->model->string = "Updated Data, thaks to MVC and PHP!";
    }
}

?>