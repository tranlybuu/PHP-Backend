<?php
    echo 'File Handling <br><br>';

    $file_path = './fruits_new.txt';
    if(file_exists($file_path)) {
        // echo readfile($file_path); // 21 = number of byte of file

        $file_handle = fopen($file_path, 'r');
        $file_content = fread($file_handle, filesize($file_path));
        fclose($file_handle);
        echo $file_content;
    } else {
        $file_handle = fopen($file_path, 'w');
        $file_content = 'banana'.PHP_EOL.'mango'.PHP_EOL.'grape';
        fwrite($file_handle, $file_content);
        fclose($file_handle);
    }

?>