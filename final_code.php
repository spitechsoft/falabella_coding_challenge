<?php

function check_value($number, $divisor1, $divisor2, $return_value_if_true) {
    if (is_numeric($number) && ($number % $divisor1 == 0) && ($number % $divisor2 == 0)) {
        return $return_value_if_true;
    }
    return $number;
}

function business_logic($start, $end) {
    $str_response = "";
    for ($i = $start; $i <= $end; $i++) {
        $final_value = $i;
        $final_value = check_value($final_value, 5, 3, "Linianos");
        $final_value = check_value($final_value, 3, 1, "Linio");
        $final_value = check_value($final_value, 5, 1, "IT");
        $str_response .= $final_value . ",";
    }
    return $str_response;
}

function unit_test() {
    $expectedValue = "1,2,Linio,4,IT,Linio,7,8,Linio,IT,11,Linio,13,14,Linianos,16,17,Linio,19,IT,Linio,22,23,Linio,IT,26,Linio,28,29,Linianos,31,32,Linio,34,IT,Linio,37,38,Linio,IT,41,Linio,43,44,Linianos,46,47,Linio,49,IT,Linio,52,53,Linio,IT,56,Linio,58,59,Linianos,61,62,Linio,64,IT,Linio,67,68,Linio,IT,71,Linio,73,74,Linianos,76,77,Linio,79,IT,Linio,82,83,Linio,IT,86,Linio,88,89,Linianos,91,92,Linio,94,IT,Linio,97,98,Linio,IT,";
    return (business_logic(1, 100) === $expectedValue);
}

echo "<b>Runing UnitTest</b><br/>";
echo "Test passed: " . unit_test() . "<br/><br/>";

echo "<b>Runing Final</b><br/>";
echo business_logic(1, 100);
