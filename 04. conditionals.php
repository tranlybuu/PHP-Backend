<?php
    echo 'Conditionals <br><br>';

    $age = 30;
    // if($age>=18) {
    //     echo "What's up, bro";
    // } else {
    //     echo "So young, bro";
    // }
    
    $date = date('F j');
    // echo $date;
    $time = date('H');
    // echo $time;
    // if($time<12) {
    //     echo "Good morning, bro";
    // } else if($time<17){
    //     echo "Good afternoon, bro";
    // } else {
    //     echo "Good evening, dude";
    // };

    $comments = ['good','nommal','bad'];
    /* Method 1 */
    // if(empty($comments)){
    //     echo "No comment";
    // } else {
    //     echo "There are some comments here";
    // };
    /* Method 2 - Use for only 2-condition */
    // echo !empty($comments) ? "There are some comments here" : "No comments";
    
    // $first_comment = !empty($comments)
    //                 ? $comments[0] : 'No comments';
    // echo $first_comment

    $comments = [];
    /* Coalescing operator */
    // $first_comment = $comments[0] ?? 'No comment';
    // echo $first_comment;
    
    /* SWITCH - CASE */
    // $favorite_color = "aqua";
    //     switch($favorite_color) {
    //         case 'red':
    //             echo "You like RED";
    //             break;
    //         case 'green':
    //             echo "You like GREEN";
    //             break;
    //         case 'blue':
    //             echo "You like BLUE";
    //             break;
    //         default:
    //             echo "Not RED, GREEN, BLUE";
    //     }

?>