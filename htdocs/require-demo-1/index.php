<?php

require 'some-data.php';

function dump($varname, $var)
{
  echo ("<pre style='font-size: 3em'>") . $varname . ":";
  var_dump($var);
  echo ("</pre>");
}

dump("width", $width);
dump("height", $height);
require 'some-other-data.php';
