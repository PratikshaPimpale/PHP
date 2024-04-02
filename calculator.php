<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
class Calculator
{
    function add($a,$b)
    {
        echo("<br>Addition=".$a+$b);
    }
    function sub($a,$b)
    {
        echo("<br>Substraction=".$a-$b);
    }
    function mul($a,$b)
    {
        echo("<br>Multiplication=".$a*$b);
    }
    function div($a,$b)
    {
        echo("<br>Division=".$a/$b);
    }
}
$ob=new calculator();
$ob->add($a,$b);
$ob->sub($a,$b);
$ob->mul($a,$b);
$ob->div($a,$b);
?>