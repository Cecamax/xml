<?php
$xmlTekst = <<<XML 

<izdanja>
    <knjiga>
        <naslov>Majstor i Margarita</naslov>
        <autor>Mihail Bulgakov</autor>
    </knjiga>
    <knjiga>
        <naslov>Zlocin i kazna</naslov>
        <autor>Fjodor M. Dostojevski</autor>
    </knjiga>
</izdanja>
XML

$izdanja = new SimpleXMLElement($xmlTekst);

/*Foreach petlja primjer 1 */
foreach($izdanje as $knjiga){
    $knjiga = $knjiga->children();
    echo $knjiga->naslov . " - " . $knjiga->autor . "<br>";
}
/*Foreach petlja primjer 2 */
echo "<br><br><br>";
foreach($izdanja as $knjiga){
    echo $knjiga->naslov . " - " . $knjiga->autor . "<br>";
}

/*Foreach petlja primjer 3 sa atributima */
echo "<ul>";
foreach($izdanja->children() as $knjiga){
    echo "<li><ul>";
        echo "<li> ID knjige: " . $knjiga['id'] . "</li>";
        echo "<li> Naslov: " . $knjiga->naslov . "</li>";
        echo "<li> Autor: " . $knjiga->autor . "</li>";
        echo "<li> Oznaka biblioteke: " . $knjiga['biblioteka'] . "</li>";
    echo "</ul></li>";
}
echo "</ul>";

?>