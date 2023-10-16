<?php
    class View{
        
        public function showTasks($tasks) {
            echo "<ul>";
            foreach($tasks as $task){
                echo "<li>$task</li>";
            }
            echo "</ul>";
        }

        public function showForm(){
            echo "<form method='post' action='index.php'>";
            echo "<input type='text' name='task' placeholder='Nueva tarea'>";
            echo "<input type='submit' value='Agregar'>";
            echo "</form>"; 
        }
    }
?>

