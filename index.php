<?php

require_once 'vendor/autoload.php';

use Gamer\Lw5\Factories\ClassicChocolateFactory;

function def(): bool
{
    echo 'Мы не смогли определить ваш вариант, повторите ввод.' . PHP_EOL;
    return false;
}

echo 'Шоколадная фабрика' . PHP_EOL;

$factory = new ClassicChocolateFactory();
$proverka = false;
$type = '';

while (!$proverka) {
    echo '1) Какао' . PHP_EOL;
    echo '2) Ягодная' . PHP_EOL;
    echo '3) Карамельная' . PHP_EOL;

    $input = trim((string) readline('Выберите тип сладости: '));

    switch ($input) {
        case '1':
            $type = 'cocoa';
            $proverka = true;
            break;
        case '2':
            $type = 'berry';
            $proverka = true;
            break;
        case '3':
            $type = 'caramel';
            $proverka = true;
            break;
        default:
            $proverka = def();
            break;
    }
}

$factory->orderSnack($type);
echo 'Сладость успешно создана.' . PHP_EOL;
