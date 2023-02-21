<?php
function generateArray ($n,$min,$max) {
$arr = Array ();
for ($i = 0; $i < $n; $i++) $arr[] = mt_rand ($min, $max);
return $arr;
}

function print_array ($hdr,$a) {
if (!is_array($a)) return '<p>Object with header '.$hdr.' is not Array!</p>';
$n = count ($a);
$s = '<p>'.$hdr.' ';
    for ($i = 0; $i < $n; $i++) $s .= $a[$i].($i<$n-1?', ':'');
    return $s.'</p>'."\n";
}