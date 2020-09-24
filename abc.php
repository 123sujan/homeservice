<?php
namespace Dompdf;
require_once 'dompdf/autoload.inc.php';


$dompdf = new Dompdf(); 
$html = file_get_contents("invoice.php"); 
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream("a",array("Attachment" => false));
exit(0);

?>