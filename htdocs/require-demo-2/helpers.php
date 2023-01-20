<?php
function dump($varname, $var)
{
    echo ("<pre style='font-size: 3em'>") . $varname . ":";
    var_dump($var);
    echo ("</pre>");
}
