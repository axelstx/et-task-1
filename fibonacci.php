<?php

function fibonacci(int $number)
{
    $result = [0, 1];

    for ($i = 1; $i < $number; $i++ ) {
        $result[] = $result[$i] + $result[$i - 1];
    }

    foreach ($result as $value) {
        echo $value . '<br>';
    }
}
