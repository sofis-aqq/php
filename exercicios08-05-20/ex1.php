<?php 

$a = 12;
$b = 5;
$c = 10;

if ($a > $b && $b > $c) {
    echo "$c $b $a";
}
elseif ($b > $a && $a > $c) {
    echo "$c $a $b";
}
elseif ($a > $c && $c > $b) {
    echo "$b $c $a";
}
elseif ($c > $b && $b > $a) {
    echo "$a $b $c";
}
elseif ($c > $a && $a > $b) {
    echo "$b $a $c";
}
else {
    echo "$a $c $b";
}

?>