<?php



$tokenatual = token_tiny($empresa);
$formato = "XML";
$url = "https://api.tiny.com.br/api2/notas.fiscais.pesquisa.php";
$link = $url . "?token=" . $tokenatual . "&numero=" . $nf . "&formato=XML";

$oxml = simplexml_load_file($link, 'SimpleXMLElement', LIBXML_NOCDATA);
foreach($oxml->notas_fiscais->nota_fiscal as $nota){
  $idTiny = $nota->id;

};



$url = "https://api.tiny.com.br/api2/nota.fiscal.obter.xml.php";
$link = $url . "?token=" . $tokenatual . "&numero=" . $nf . "&formato=XML";

$oxml = simplexml_load_file($link, 'SimpleXMLElement', LIBXML_NOCDATA);
foreach($oxml->notas_fiscais->nota_fiscal as $nota){
  $idTiny = $nota->id;

};










 ?>
