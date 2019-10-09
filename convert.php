<?php
function converttoroman($conv){
include 'array.php';
$conv = str_replace($hia, $ena, $conv);
$conv = str_replace($hib, $enb, $conv);
$conv = str_replace($hic, $enc, $conv);
$conv = str_replace($hid, $end, $conv);
$conv = str_replace($hie, $ene, $conv);
$conv = str_replace($hif, $enf, $conv);
$conv = str_replace($hig, $eng, $conv);
$conv = str_replace($hih, $enh, $conv);
$conv = str_replace($hii, $eni, $conv);
$conv = str_replace($hij, $enj, $conv);
return $conv;
}
?>
