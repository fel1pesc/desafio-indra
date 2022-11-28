<?php

$arrayMultiples = ["Indra Minsait" => 15, "Minsait" => 5, "Indra" => 3];

for ($i = 1; $i <= 100; $i++) {
    $return = $i;

    foreach ($arrayMultiples as $multiple){
        if($i % $multiple == 0) {
            $return = array_search($multiple, $arrayMultiples);
            break;
        }
    }

    echo "$return<br>";
}

?>