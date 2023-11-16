<?php
class sayingView {
    
    # Método público llamado "readSaying" que acepta un parámetro $saying.
    public function readSaying($saying){
        # Imprime los refranes.
        foreach($saying as $refran){
            echo $refran."<br>";
        }
    }
    
}
?>