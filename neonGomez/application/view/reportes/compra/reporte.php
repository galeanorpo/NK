<?php
require APP.  'Libs\reportes\vendor\autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

try {
    ob_start();
    include APP . 'view/reportes/compra/lista.php';
    $content = ob_get_clean();
    $html2pdf = new Html2Pdf('P', 'A4', 'es',true,'UTF-8',array(10,10,10,10));
    $html2pdf->setDefaultFont('Arial');
    $html2pdf->writeHTML($content);
    ob_end_clean();
    $html2pdf->output('Reporte.pdf');
} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}