<?php

    function exercise1() {

        $numbers = [
            15,
            55,
            66,
            91,
            100,
            995,
            17,
            550,
        ];

        for ($i=0; $i < count($numbers); $i++) {
            if($numbers[$i] % 2 == 0) {
                echo $numbers[$i], " ";
            }
        }
    }
    var_dump(exercise1().PHP_EOL);

    function exercise2() {

        $numbers = [
            [1, 3, 5],
            [55, 87, 100],
            [12],
            [],
        ];

        $arraySingle = call_user_func_array('array_merge', $numbers);

        function multiply ($a, $n) {
            if ($n == 0) {
                return($a[$n]);
            } else {
                return ($a[$n] * multiply($a, $n - 1));
            }
        }
        $n = count($arraySingle);
        echo multiply($arraySingle, $n - 1);

    }
    var_dump(exercise2().PHP_EOL);




