<?php

date_default_timezone_set("America/Edmonton");

function current_time()
{
    return date(("g:i"));
}

function cloudinary_src($pic_id)
{
    return "https://res.cloudinary.com/blunxy/image/upload/t_thumb_100/v1672493569/3512-2023-01-project-images/{$pic_id}.jpg";
}
