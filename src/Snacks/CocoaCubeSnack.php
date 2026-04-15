<?php

namespace Gamer\Lw5\Snacks;

use Gamer\Lw5\Snack;

class CocoaCubeSnack extends Snack
{
    public function __construct()
    {
        parent::__construct(
            'Cocoa Cube',
            'Молочный шоколад',
            ['ореховая крошка', 'вафля']
        );
    }
}
