<?php
require_once "directory1/class1.php";
use directory1\class1;

class index
{
    function a()
    {
        return $a = class1::sum(4, 5);

    }
}

$a = new index();
echo $a->a();