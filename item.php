<?php
$xml=simplexml_load_file("item.xml");
if(!$xml)
    die("File Not Found");
$xml->addChild('ino','13');
$xml->addChild('iname','PENCIl');
$xml->addChild('qty','10');
$xml->addChild('price',15);

echo($xml->asxml());
//print_r($xml);
?>