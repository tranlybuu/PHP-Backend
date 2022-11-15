<?php
    echo "Super Globals <br><br>";

    // Server's infomation
    // print_r($_SERVER);

    // Send data through URL or FORM using $_GET / $_POST
    // Example: add this string at the end of localhost...globals.php
    // ?name=Boo&age=20
    /* Method 1 */
    // if(isset($_GET['name'])) {
    //     echo $_GET['name'];
    // }
    // if(isset($_GET['age'])) {
    //     echo $_GET['age'];
    // }
    /* Method 2 - Coalescing */
    // $name = $_GET['name'] ?? '';
    // $age = $_GET['age'] ?? '';
    // echo "$name $age";


?>