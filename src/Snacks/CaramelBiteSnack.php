<?php

namespace Gamer\Lw5\Snacks;

use Gamer\Lw5\Snack;

class CaramelBiteSnack extends Snack
{
    public function __construct()
    {
        parent::__construct(
            'Caramel Bite',
            'Темный шоколад',
            ['соленая карамель', 'дробленый фундук']
        );
    }
}
