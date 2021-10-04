<?php

function statusConverter($statuscode) {

    if ($statuscode == 0) {
        
        $statusback = 'Zárva';

    }
    else{

        $statusback = 'Nyitva';

    }

    return $statusback;

}

function secStatusConverter($statuscode) {

    if ($statuscode == 0) {
        
        $statusback = 'Folyamatban';

    }
    else{

        $statusback = 'Kész';

    }

    return $statusback;

}

?>