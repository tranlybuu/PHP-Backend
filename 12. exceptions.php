<?php
    echo "Exceptions <br><br>";

    function divide($a, $b){
        if(!$b) {
            throw new Exception("Can not divide by zero");
        }
        return $a/$b;
    }

    try {
        echo divide(10,3);
        echo divide(5,0);
        echo "No errors";
    } catch(Exception $e) {
        echo "Caught Exception: ".$e->getMessage().'<br>';
    } finally {
        echo "Done...";
    }
?>