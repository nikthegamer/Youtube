<?php 
    session_start();

    if(isset($_SESSION["id"])){
        header("Location: index.php");
    }
    $servername = "localhost";
    $username = "test";
    $password = "";
    $db = "users";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="margin:0 auto; overflow-x:hidden;">  <!--TO SPODAJ NI CSS-->
    <div style="
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    min-height: 100vh;
    background: url('slike/background.png');
    ">
    <div width="100px" height="100px" style="display: block; border: 1px solid black; padding:5px; background-color:white; border-radius: 5px;">
    <form action='login.php' method='POST'>
    username <input type='text' name='username'>
    <br>
    password <input type='password' name='password'>
    <br>
    <button type='submit' name='submit'>login</button>
    <br>
    <button type='submit' name='register'>register</button>
    </form>
    </div>
    </div>

    <?php 
    if(isset($_POST['username'])){
        if(isset($_POST['password'])){
            $uname = $_POST['username'];
            $pass = $_POST['password'];

            $sql = "SELECT id FROM uporabniki WHERE `username` = '$uname' AND `password` = '$pass'";
            $result = $conn->query($sql);
            
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $_SESSION["id"] = $row["id"];
            header("Location: index.php");
        }
        } else {
        }
        $conn->close();
            }
        }
        if(isset($_POST["register"])){
            header("Location: register.php");
        }
    ?>
</body>
</html>