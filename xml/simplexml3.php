<?php

$xml = new SimpleXMLElement("<?xml version=\"1.0\"
ecoding=\"UTF-8\" ?> <automobili></automobili>");
$auto = $xml->addChil("auto");
$auto->addAttribute("id", "01");
$auto->addAttribute("boja", "crvena");
$auto->addChild("proizvodac", "Ferrari");
$auto->addChild("cijena", "250.000");
$auto2 = $xml->addChil("auto");
$auto2->addAttribute("id", "02");
$auto2->addAttribute("boja", "plava");
$auto2->addChild("proizvodac", "Porsche");
$auto2->addChild("cijena", "150.000");
echo $xml->asXML(simplexml.php);
var_dump($xml);
?>