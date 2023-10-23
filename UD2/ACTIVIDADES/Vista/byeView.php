<?php
class byeView {
    
    # Método público llamado "despedirse" que acepta un parámetro $time.
    public function despedirse($time){
        # Imprime un mensaje de despedida junto con la hora proporcionada como parte del mensaje.
        echo "¡Adios! ¡Son las ".$time."!";
    }
    
}
?>