<?php
    echo "Upload file in PHP <br><br>";

    if(isset($_POST['submit'])) {
        if(!empty($_FILES['upload']['name'])) {
            print_r($_FILES);
        } else {
            $error_message = 'No file selected, please try again';
        }
    }
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
    <h1>File upload in PHP</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" 
        method="post"
        enctype="multipart/form-data"
        >
        Choose your image to upload
        <input type="file" name="upload">
        <input type="submit" value="submit" name="submit">
    </form>
    <?php echo $error_message ?? '' ?>
</body>
</html>