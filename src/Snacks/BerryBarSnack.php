<?php

namespace Gamer\Lw5\Snacks;

use Gamer\Lw5\Snack;

class BerryBarSnack extends Snack
{
    public function __construct()
    {
        parent::__construct(
            'Berry Bar',
            'Белый шоколад',
            ['сублимированная малина', 'кокосовые хлопья']
        );
    }
}
