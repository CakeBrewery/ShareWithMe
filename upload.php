<?php
include 'upload-model.php';
include 'upload-controller.php';


$model = new Model(); 
$controller = new Controller($model); 
$view = new View($controller, $model); 


if($_FILES){
	$controller->checkFiles($_FILES); 
	$error = "files!"; 
}

echo $view->output(); 

?>


<?php
class view
{
    private $model; 
    private $controller; 


    public function __construct($controller, $model){
        $this->controller = $controller; 
        $this->model = $model; 
    }

    public function output(){
        return " 
        <html><head><title>Share</title></head>
        <body>
	       	<form method='post' action='upload.php' enctype='multipart/form-data'>
	        	Select File: <input type='file' name='filename' size='10' />
	        	<input type='submit' value='Upload' />
        	</form> 
        	<p>". $this->model->status."</p> 
        </body></html> 
    	";
    }
}

?>


