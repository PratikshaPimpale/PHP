<?php
$s1=$_POST["t1"];
$xml=simplexml_load_file("student.xml");
if(!$xml)
    die("File not found");
$flag=0;
echo("Students admitted for <b>$s1</b> Course<br><br>");
echo("<table border=1 cellspacing=0>");
foreach($xml->student AS $val)
{
    if($val->course==$s1)
    {
        $flag=1;
        echo("<tr>");
        echo("<td>".$val->rollno);
        echo("<td>".$val->name);
        echo("<td>".$val->college);
    }
}
if($flag==0)
{
    echo("<br>Course not found...");
}
?>