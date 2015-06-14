<?php
    function getCssBgName( $id = 0 )
    {
        switch ($id) {
            case 0: return "bg-success"; break;
            case 1: return "bg-primary"; break;
            case 2: return "bg-warning"; break;
            case 3: return "bg-error"; break;
        }
    }
