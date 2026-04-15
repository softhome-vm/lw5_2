<?php

namespace Gamer\Lw5\Factories;

use Gamer\Lw5\ChocolateFactory;
use Gamer\Lw5\Snack;
use Gamer\Lw5\Snacks\BerryBarSnack;
use Gamer\Lw5\Snacks\CaramelBiteSnack;
use Gamer\Lw5\Snacks\CocoaCubeSnack;

class ClassicChocolateFactory extends ChocolateFactory
{
    protected function createSnack(string $type): Snack
    {
        $normalizedType = strtolower(trim($type));

        switch ($normalizedType) {
            case 'cocoa':
            case 'cocoa cube':
                return new CocoaCubeSnack();
            case 'berry':
            case 'berry bar':
                return new BerryBarSnack();
            case 'caramel':
            case 'caramel bite':
                return new CaramelBiteSnack();
            default:
                return new CocoaCubeSnack();
        }
    }
}
