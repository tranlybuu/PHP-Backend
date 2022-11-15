<?php
    session_start();
    if(isset($_SESSION['email'])) {
        echo "Welcome, member!";
    } else {
        echo 'Welcome, guess!';
        echo "<a href='/10. session.php'>Back to login</a>";
    }
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <title>BASE PAGE</title>
    </head>
    <body>
        <h1>Hello</h1>
    </body>
</html>