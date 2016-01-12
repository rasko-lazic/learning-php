<?php

//echo "Hello world";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo "Pre sredjivanja<br>";
for($i=0;$i<20;$i++) {
    $niz[$i]=rand(10, 100);
    echo "Clan ". ($i+1) . ": {$niz[$i]}<br>";
}
echo "<br><br>Posle sredjivanja<br>";
for($i=0; $i<19; $i++) {
    for($j=$i+1; $j<20; $j++) {
        if($niz[$i]>$niz[$j]) {
            $temp=$niz[$i];
            $niz[$i]=$niz[$j];
            $niz[$j]=$temp;
        }
    }
}
for($i=0;$i<25;$i++) {
    echo "Clan ". ($i+1) .": {$niz[$i]}<br>";
}
