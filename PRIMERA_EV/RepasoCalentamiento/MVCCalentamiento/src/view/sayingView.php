<?php

namespace Roberto\App\View;

class sayingView {
    
    public function readSaying($saying){
        foreach($saying as $refran){
            echo $refran."<br>";
        }
    }
    
}
?>