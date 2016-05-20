<?php
echo "hello from deploy";
echo "add";
echo "second";
echo "third";
echo "fouth";
echo "fifth";
echo "sixth";
echo "seven";
echo "8<br>";

function attack($attack, $defend)
{
    return (mt_rand(1, $attack) > $defend);
}

$attack = 100;
$defend = 75;
for($i=1;$i<=10;$i++){
echo "<br>";
var_dump(attack(10,1));

echo "<br>";
}

for($i=1;$i<=10;$i++){
$probability = mt_rand( 1, 100 );
if ($probability <= 5){
    echo "大当たり<br>";
    echo $probability;
}
}
