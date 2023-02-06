<?php
$array = [1,2,3,5,8,16, 56];
$item = 56;

function binarySearch(array $array, int $item, int $start = 0, int $end = null): int
{
    if( $end === null) {
        $end = count($array) - 1;
    }

    if( $start>$end)
    {
        throw new LogicException("Нету элемента");
    }

    $mid = ($start + $end) / 2;
    if ($array[$mid] !== $item)
    {
        if ($array[$mid] < $item)
        {
            $start = $mid + 1;
        }
        else {
            $end = $mid - 1;
        }
        return binarySearch($array, $item, $start, $end);
    }
    return $mid;

}

echo binarySearch($array, $item);