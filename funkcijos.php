<?php
function arraytostring($data) {
    $tarpas = "";
    foreach ($data as $key => $value) {
        $key++;
        if (is_array($value)) {
            $tarpas .= "[" . $key . "] => (" . arraytostring($value) . ") \n";
        } else {
            $tarpas .= "[" . $key . "] => " . $value . "\n";
        }
    }
    return $tarpas;
}
?>
