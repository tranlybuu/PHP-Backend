<?php
    echo "Functions <br><br>";


    $line = "Hello";
    function sayHello($name){
        global $line;
        echo "$line $name";
    }
    // sayHello('Boo')

    function sum($a = 0 , $b = 0){
        // default arguments' values = 0
        return $a + $b;
    }
    // echo sum(1,4);

    $multiply = function ($a, $b){
        return $a + $b;
    };
    // echo $multiply(1,5);

    /* arrow function */
    $substract = fn($a, $b) => $a - $b;
    // echo $substract(6,2);

    $names = ['john', 'anna', 'hoang', 'tony'];
    // echo "number of items = ".count($names);

    // search inside array
    // var_dump(in_array('elon', $names));

    // insert an item to the ending of the array
    // array_push($names, "bill", "jim");

    // insert to the beginning of the array
    // array_unshift($names, "satoshi");

    // Remove the last item
    // array_pop($names);

    // Remove the first item
    // array_shift($names);

    // Remove an item
    // unset($names[2]);

    // Chunk an array
    // $names = array_chunk($names, 2);

    // Merge
    $more_name = ['Steve', 'Tom', 'Brown'];
    // $names = array_merge($names, $more_name);
    
    // print_r($names);

    /* Spread operator */
    $new_array = [...$names];   // Clone an array
    $new_array[0] = 111;
    // print_r($new_array);

    $new_array_two = [...$names, ...$more_name];
    // print_r($new_array_two)

    /* Combine two arrays */
    $a = ['Name', "age", "email"];
    $b = ["Nguyen Van A", 18, "abcxyz@gmail.com"];
    $c = array_combine($a, $b);
    // print_r($c);
    // print_r(array_keys($c));
    // print_r(array_values($c));
    // print_r(array_flip($c));     // Swap key and value

    /* Array form a range */
    $numbers = range(1,10);
    // print_r($numbers);

    /* Map an array to another array
       wth the same size, but other values */
    $squared_numbers = array_map(function($each_number) {
        return $each_number*$each_number;
    }, $numbers);
    // print_r($squared_numbers)

    /* filter an array */
    $filter_number = array_filter($numbers,
    fn($each_number) => $each_number % 2 == 0);
    // print_r($filter_number)

?>