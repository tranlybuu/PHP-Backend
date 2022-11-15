<?php
    echo "Session <br><br>";

    /*
      Session are stored in the server
      so it can be used across multiple pages
    */
    session_start();
    if(isset($_POST['summit'])) {
      $email = htmlspecialchars($_POST['email']);
      $password = $_POST['password'];
      if ($email == 'boo@gmail.com' && $password == '12345') {
        $_SESSION['email'] = $email;
        // redirect to another page
        header('Location: base.php');
      } else {
        echo "Incorrect email/password";
      }
    }

    /* sesion_destroy()  = delete the data in session */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form 
        action="<?php echo 
            htmlspecialchars($_SERVER['PHP_SELF']); ?>"
        method="POST"
        >
        <h3>Login to your account</h3>
        <div>
            <label for="name">Email:</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>