<?php
    echo 'ARRAY <br><br><br>';

    $fruit = ['banana', 'apple', 'orange'];
    // print_r($fruit);
    // echo $fruit[0];

    // Associative array        [ key => value ]
    /* Key as a number */
    $colors = [
        6 => 'red',
        7 => 'blue',
        8 => 'yellow',
    ];
    // echo $colors[6];

    /* key as a string */
    $hex_colors = [
        'red' => '#FF0000',
        'green' => '00FF00',
        'blue' => '0000FF',
    ];
    // echo $hex_colors["red"]

    $students = [
        'fullname' => "Nguyen Van A",
        'age' => 20,
        'email' => "abcxyz@gmail.com",
    ];
    // print_r($students);
    // echo $students['email'];

    $Staffs = [
        [
            'fullname' => "Nguyen Van A",
            'age' => 20,
            'email' => "abcxyz@gmail.com"
        ],
        [
            'fullname' => "Tran Quang B",
            'age' => 24,
            'email' => "qweqwe@gmail.com"
        ],
        [
            'fullname' => "Phan Thi C",
            'age' => 16,
            'email' => "yoyo1728@gmail.com"
        ]
    ];
    // print_r($Staffs);
    // echo $Staffs[1]["fullname"]
    // var_dump(json_encode($Staffs))
?>