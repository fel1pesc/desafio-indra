<?php

for ($i = 1; $i <= 100; $i++) {

    $return = "";

    switch ($i){
        case $i % 15 == 0:
            $return = "Indra Minsait";
            break;
        case $i % 3 == 0:
            $return = "Indra";
            break;
        case $i % 5 == 0:
            $return = "Minsait";
            break;
        default:
            $return = $i;
            break;
    }

    printf("$return\n");
}

?>