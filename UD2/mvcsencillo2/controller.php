<?php
   class Controller{
    private $model;
    private $view;
    
    public function __construct($model, $view){
        $this->model = $model;
        $this->view = $view;
    }

    public function updateTask(){
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['task'])){
            $task=$_POST['task'];
            $this->model->addTasks($task);
        }
        $task=$this->model->getTasks();
        $this->view->showTasks($task);
        $this->view->showForm($task);
    }
   }
?>

