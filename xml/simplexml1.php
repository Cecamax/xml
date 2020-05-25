<?php
/*Kreiranje XML teksta kroz HEREDOC sintaksu */
$xmlTekst = <<<XML 
<xml>
    <el>
        Prva vrijednost
    </el>
    <el>
        Druga vrijednost
    </el>
    <el>
        Treca vrijednost
    </el>
    <element>
        Prva vrijednost od elementa
    </element>
    <element>
        Druga vrijednost od elementa
    </element>
    <samostalni>
        Jedina vijednost od samostalnog elementa 
    </samostalni>
    <ul>
        <li>Prva vrijednost od li elementa</li>
        <li>Druga vrijednost od li elementa</li>
        <li>Treca vrijednost od li elementa</li>
    </ul>
    <ul>
        <li>Prva vrijednost od li elementa 2</li>
        <li>Druga vrijednost od li elementa 2</li>
        <li>Treca vrijednost od li elementa 2</li>
    </ul>
    <ul>
        <li>Prva vrijednost od li elementa 3</li>
        <li>Druga vrijednost od li elementa 3</li>
        <li>Treca vrijednost od li elementa 3</li>
        <li> Cetvrta vrijednost od li elementa 3</li>
    </ul>
</xml>
XML;

/* Instalaciranje SimleXMLElement klasu u $xml objekat*/
$xml = new SimleXMLElement($xmlTekst);
/* Pristup prvom elementu pod imenom "el" */
echo $xml->el . "<br>";
/* Pristup prvom elementu pod imenom "element" */
echo $xml->element . "<br>";
/* Pristup trecem elementu pod imenom "el" */
echo $xml->el[2] . "<br>";
/* Pristup samostalnom elemetu pod imenom "samostalni" */
echo $xml->samostalni . "<br>";
/* Ispis svih elemenata kroz v ar_dump da bi smo vidjeli sadrzaj objekta */
var_dump($xml);
echo "<br>";
/* Ispis elementa kroz for petlju pod imenom "element" */
for($i = 0; $i <sizeof($xml->element); $i++){
    echo "For ispis: " . $xml->element[$i] . "<br>";
}
/* Ispis elementa kroz for petlju pod imenom "el" */
for($i = 0; $i <sizeof($xml->el); $i++){
    echo "For ispis 2: " . $xml->el[$i] . "<br>";
}
/* Ispis svih elementa kroz foreach petlju  */
foreach($xml as $el){
    echo "Foreach ispis : " . $el . "<br>";
 }
 /* Ispis ugnjezdene vrijednosti treceg elementa "li" unutar elementa "ul"*/
 echo $xml->ul->li[2] . "<br>";
 /* For ispis vrijednost svih "li" elemenata unutar prvog "ul" elementa */
 for($i = 0; $i < sizeof($xml->ul->li); $i++){
     echo "For ispis 3: " . $xml->ul->li[$i] . "<br>";
 }
 /* For ispis vrijednost svih "li" elemenata unutar  "ul" elementa */
 for($i = 0; $i < sizeof($xml->); $i++){
     for($j = 0; $j < sizeof($xml->ul[$i]->li); $j++){
         echo "Dupli for ispis svih elemenata: " . $xml->ul[$i]->li[$j] . "<br>";
     }
 }

 
 ?>