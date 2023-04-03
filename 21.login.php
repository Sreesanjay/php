<?php
$servername = "localhost";
$user ='root';
$pass="";
$db='testdb';
$conn = mysqli_connect($servername, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($_POST){
    $name = $_POST['user_name'];
    $pass = $_POST['password'];

$sql = "SELECT * FROM user WHERE user_name ='$name' AND pass= '$pass'" ;

$result = mysqli_query($conn, $sql);
$numrows=mysqli_num_rows($result);
if ($numrows > 0) {
    header('Location:success.html');
} else {
    echo '<center>User does not exist in the table.</center>';
}
}

mysqli_close($conn);
?>

<html>
    <form action="" method="post">
        <center>
        name:<input type="text" name="user_name"> <br><br>
        password:<input type="password" name="password"> <br><br>
        <input type="submit" value="login">
        </center>
    </form>
</html>

