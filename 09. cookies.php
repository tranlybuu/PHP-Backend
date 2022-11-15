<?php
    echo 'Cookies <br><br>';

    /*
    Cookies: - Save data in remote browser
             - Retrieve it when the user visit the site again
    */

    // save data to cookie
    // after 1 day, cookie will be expired
    // 1 day = 24*3600
    // 1 month = 24*3600*30
    setcookie('name', 'Boo', time() + 24*3600);

    // check the existing cookie
    if(isset($_COOKIE['name'])) {
        echo $_COOKIE['name'];
    }

    //remove data in cookie = set the value at 1 day before
    setcookie('name', '', time() - 24*3600);
?>