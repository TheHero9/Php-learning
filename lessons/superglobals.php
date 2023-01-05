<?php
// echo $_GET['name'] . ' is ' .
// $_GET['age'] . ' years old. ';


if(isset($_POST['submit'])){

//Normal output(not recommended)
    //echo $_POST['name'];

//Sanitizing Inputs
    // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    // $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    // echo $name;

//Cookies
    //Set cookie
    setcookie('name', 'Pete', time()+86000);
    if(isset($_COOKIE['name'])){
        echo $_COOKIE['name'];
    }
}
?>

<!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Dimi&age=20">Click</a> -->



<form action="<?php echo $_SERVER['PHP_SELF'];?>" 
method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <input type="submit" value='submit' name='submit'>
</form>


