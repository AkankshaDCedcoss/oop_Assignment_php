<?php

class Fourth
{


    public $arr=array(11, -2, 4, 35, 0, 8, -9);

    function sortArray()
    {

sort($this->arr);
return $this->arr;

    }
}
$obj3=new Fourth();
$result=$obj3->sortArray();


print_r($result);







?>