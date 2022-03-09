<?php
class Second
{
public $x;
function name($a)
{

    $this->x = $a;
    return $a;
}

}

$obj1=new Second();

$res=$obj1->name('Ram');
echo "Hello All, I am $res ";

?>