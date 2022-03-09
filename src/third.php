<?php

class Third
{
public $x;
function factorial($a)
{
    $this->x = $a;
$fact=1;

for($i=1;$i <= $a;$i++)
{
    $fact=$fact*$i;
}

return $fact;

}

}

$obj2=new Third();

echo $obj2->factorial(5);


?>