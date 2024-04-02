<?php
$xml=simplexml_load_file("book.xml");
if(!$xml)
    die("File not found");
$s=$_POST["s1"];
foreach($xml->book as $val)
{
    if($val->bname==$s)
    {
        echo("<br>Book No=".$val->bno);
        echo("<br>Book Name=".$val->bname);
        echo("<br>Book Price=".$val->price);
    }
}
?>