<?php

namespace App\Controller;

class Home {

    public function render(){
        $msg = 'Welcome!';
        require '../view/home.php';
    }
}
