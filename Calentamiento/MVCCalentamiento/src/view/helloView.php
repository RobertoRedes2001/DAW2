<?php
class helloView {
    
    # Método público llamado "saludar" que acepta un parámetro $time.
    public function saludar($time){
        # Imprime un mensaje de saludo junto con la hora proporcionada como parte del mensaje.
        echo "¡Hola! ¡Son las ".$time."!";
    }
    
}
?>