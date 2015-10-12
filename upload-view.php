<?php
class UploadView
{
    private $model; 
    private $controller; 

    public function __construct($controller, $model){
        $this->controller = $controller; 
        $this->model = $model; 
    }

    public function output(){
        return " 
            <html>
            <head>
                <title>Share With Me</title></head>
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
            </head>
            <body> 

            <div class='container'>
                <h1>Share a File With Me</h1>
                <form method='post' action='index.php' enctype='multipart/form-data'>
                    <div class='form-group'>
                        <label>Select File </label>
                        <input type='file' name='filename'>
                        <p class='help-block'>" . $this->model->status . "</p> 
                    </div>
                    <div class='form-group'>
                        <button type='submit' class='btn btn-primary'>Upload</button>
                    </div>
                </form> 
            </div>
        ";
    }
}
?>


