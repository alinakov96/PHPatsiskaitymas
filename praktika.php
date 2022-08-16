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
    var_dump(exercise1());

