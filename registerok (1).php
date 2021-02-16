<?php
    echo $uesrname  = $_POST('username');
    echo $email = $_POST('user_email');
    echo $password = $_POST('user_password');
    echo $start_date = date ('Y-m-d H:i:s');
?>

<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "register";
?>

<?php
     $con = mysqli_connect('localhost','root','register');
?>
<?php
    $query = "insert into users(user_id, username, firstname,lastname, user_address, user_email, user_password, user_gender, start_regis)
    values(null,'kchuchart','chuchart','seatiew','trat','a@gmail.com','1234','m',current_timestamp());"
    $result = mysqli_query ($con,$query);
?>