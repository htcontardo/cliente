<?php

namespace Classes;

class Produto
{
    public $name;
    public $price;
    public $stock;

    public function aumentarEstoque(int $unit)
    {
        if (is_numeric($unit) && $unit > 0) {
            $this->stock += $unit;
        }
    }
}
