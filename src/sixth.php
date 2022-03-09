<?php

class Mycalculator
{

    public $x;
    public $y;
function __construct($a,$b)
{
    $this->x = $a;
    $this->y = $b;
}



function add()
{
    return $this->x+$this->y;
}
function subtract()
{
    return $this->x-$this->y;
}
function multiply()
{
    return $this->x*$this->y;
}
function divide()
{
    return $this->x/$this->y;
}







}

$obj5=new Mycalculator(12,6);
echo "Addition is : ".$obj5->add()."<br>";
echo "Subtraction is : ".$obj5->subtract()."<br>";
echo "Multiplication is : ".$obj5->multiply()."<br>";
echo "Divide is : ".$obj5->divide()."<br>";






?>