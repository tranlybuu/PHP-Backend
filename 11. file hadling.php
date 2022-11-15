<?php
    echo 'File Handling <br><br>';

    $file_path = './fruits.txt';
    if(file_exists($file_path)) {
        echo readfile($file_path);
    }

?>