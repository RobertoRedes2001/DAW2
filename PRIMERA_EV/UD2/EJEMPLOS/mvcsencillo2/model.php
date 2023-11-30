<?php
    class Model{

        private $tasks = [];
        
        public function __construct(){
            $this->tasks[] = "haces compras";
            $this->tasks[] = "haces ejercicio";
        }

        public function getTasks() {
            return $this->tasks;
        }

        public function addTasks($task) {
            $this->tasks[] = $task;
        }
    };
?>

