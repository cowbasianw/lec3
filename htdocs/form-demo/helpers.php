<?php
function dump($varname, $var)
{
    echo ("<pre style='font-size: 2em'>") . $varname . ":";
    print_r($var);
    echo ("</pre>");
}

function cloudinary_src($pic_id)
{
    return "https://res.cloudinary.com/blunxy/image/upload/t_thumb_100/v1672493569/3512-2023-01-project-images/{$pic_id}.jpg";
}
