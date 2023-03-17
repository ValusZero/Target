<?php

$string = "String para Reverter";
$stringSize =strlen("$string");
For($i=1;$i<=$stringSize;$i++)
{
    $val= $string[-$i];
   echo $val;
}
?>
