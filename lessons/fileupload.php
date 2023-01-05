<?php
    if(isset($_POST['Submit'])){
        $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');


        if(!empty($_FILES['upload']['name'])){

            $file_name = $_FILES['upload']['name'];
            $file_size = $_FILES['upload']['size'];
            $file_temp = $_FILES['upload']['tmp_name'];
            $target_dir = '../uploads/${file_name}';

            //Get ext
            $file_ext = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext));

            //Validate file ext
            if(in_array($file_ext, $allowed_ext)){
                if($file_size <= 1000000){

                    move_uploaded_file($file_temp, $target_dir);
                    $message =
            '<p style="color: blue;"> Success! </p>';

                } else{
                    $message =
            '<p style="color: red;"> Too Large file. </p>';
                }
            } else{
                $message =
            '<p style="color: red;"> Invalid type. </p>';
            }

        } else{
            $message =
            '<p style="color: red;"> Please choose a file. </p>';
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

        <?php echo $message ?? null; ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>"
        method="POST" enctype="multipart/form-data">
        Select:
            <input type="file" name="upload">
            <input type="submit" value="Submit" name="Submit">
    
        </form>
        
        <script src="" async defer></script>
    </body>
</html>