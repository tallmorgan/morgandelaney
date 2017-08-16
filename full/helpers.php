<?php

include "libs/content.php";

/**
 * Echo a viewport based on which device is visiting the site
 */
function morgan_viewport()
{
    $width = function_exists( 'is_mobile' ) && is_mobile()
        ? '640' : 'device-width';

    echo "width=$width";
}