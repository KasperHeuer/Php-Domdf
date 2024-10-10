<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8" />
</head>

<body>
    <h1>Dit is een aaaaaaaa </h1>
    <p>En dit een alinea</p>


</body>

</html>
<?php

$html = ob_get_clean();

$dompdf = new Dompdf();
$dompdf->loadHtml($html, 'UTF-8');

ini_set('memory_limit', '256M');


$dompdf->setPaper('A4', 'landscape');

$dompdf->render();

$dompdf->stream("sample.pdf", array("Attachment" => 0)); // Display in browser
?>