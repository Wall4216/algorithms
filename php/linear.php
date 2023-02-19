<?php
$vs = [1,2,3,45,5,6,7,8];
$v = 4;
foreach ($vs as $val) {
    if ($v === $val) return true;
}
return false;