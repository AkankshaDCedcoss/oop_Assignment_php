<?php
$fdate=new DateTime('1981/11/03');
$ldate=new DateTime('2013/09/04');


$diffrence=$ldate->diff($fdate)->format('%Y years, %m months, %d days');

echo $diffrence;






?>