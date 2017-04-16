<?php

$items = ['item', 'object', 'animal', 'guittar', 'coffee', 'clothes', 'country'];

echo 'ASC:';
echo '<br>';
echo Sort::asc($item);
echo '<br>';

echo 'DESC:';
echo '<br>';
echo Sort::desc($item);
echo '<br>';


class Sort
{
    public static function asc(array $elements)
    {
        return asort($elements);
    }

    public static function desc(array $elements)
    {
        return arsort($elements);
    }
}