<?php
    function getCssBgName( $id = 0 )
    {
        $num  = $id % 3;

        switch ($num) {
            case 0: return "bg-success"; break;
            case 1: return "bg-primary"; break;
            case 2: return "bg-warning"; break;
        }
    }
