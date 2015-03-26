<?php
$chessboard = array(
    array('r','n','b','k','q','b'.'n'.'r'),
    array('p','p','p','p','p','p','p','p'),
    array('','','','','','','',''),
    array('','','','','','','',''),
    array('','','','','','','',''),
    array('','','','','','','',''),
    array('','','','','','','',''),
    array('','','','','','','',''),
    array('P','P','P','P','P','P','P','P'),
    array('R','N','B','K','Q','B','N','R'));
echo "<pre>";
foreach ($chessboard as $row)
{
    foreach ($row as $piece)
    echo "$piece";
    echo "<br />";
}
echo "</pre>";
echo $chessboard[8][1];
echo (is_array($chessboard)) ? "Это массив" : "Это не мпассив";
echo (count($chessboard,1));

?>
