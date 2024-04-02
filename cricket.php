<?php
$xml=simplexml_load_file("cricket.xml");
if(!$xml)
    die("File not Found");
foreach($xml->player as $val)
{
    if($val->runs>=1200 && $val->wickets>=50)
    {
        echo("<br><br>Player Name=".$val->name);
        echo("<br>Runs=".$val->runs);
        echo("<br>Wickets=".$val->wickets);
    }
}
?>