<?php

//echo "Hello world";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$title="Selection sort";
$count=20;
echo "Pre sredjivanja<br>";
for($i=0;$i<$count;$i++) {
    $niz[$i]=rand(10, 100);
    echo "Clan ". ($i+1) . ": {$niz[$i]}<br>";
}
echo "<br><br>Posle sredjivanja<br>";
for($i=0; $i<($count-1); $i++) {
    for($j=$i+1; $j<$count; $j++) {
        if($niz[$i]>$niz[$j]) {
            $temp=$niz[$i];
            $niz[$i]=$niz[$j];
            $niz[$j]=$temp;
        }
    }
}
for($i=0;$i<$count;$i++) {
    echo "Clan ". ($i+1) .": {$niz[$i]}<br>";
}

echo'<br><br><a href="/learning-php/index.php">Back</a>';
