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

    function exercise3() {

        $holidays = [
            [
                'title' => 'Romantic Paris',
                'destination' => 'Paris',
                'price' => 1500,
                'tourists' => 55,
            ],
            [
                'title' => 'Amazing New York',
                'destination' => 'New York',
                'price' => 2699,
                'tourists' => 21,
            ],
            [
                'title' => 'Spectacular Sydey',
                'destination' => 'Sydey',
                'price' => 4130,
                'tourists' => 9,
            ],
            [
                'title' => 'Hidden Paris',
                'destination' => 'Paris',
                'price' => 1700,
                'tourists' => 10,
            ],
            [
                'title' => 'Emperors of the past',
                'destination' => 'Beijing',
                'price' => null,
                'tourists' => 10,
            ],
        ];

        foreach ($holidays as $key => $value) {
            if ($value['price'] === null) {
                unset($key, $value);
            } else {
                echo "Destination: ", $value['destination'] . "\n";
                echo "Titles: ", $value['title'] . "\n";
                echo "Total: ", $value['price'] * $value['tourists'] . "\n";
            }
        }
    }
    var_dump(exercise3().PHP_EOL);


