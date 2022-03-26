<?php

namespace App\Model;

class Caneta {
    private string $cor;

    function __construct(string $cor) {
        $this->cor = $cor;
    }

    public function getCor(){
        return $this->cor;
    }
}
