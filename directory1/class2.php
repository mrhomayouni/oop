<?php

namespace directory1;

use directory1\class1;

class class2 extends class1
{
    public function get_number($a, $b)
    {
        return self::sum($a, $b);
    }
}
