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
    <?php 
        echo "
        <form action='register.php' method='POST'>
        username <input type='text' name='username'>
        <br>
        password <input type='password' name='password'>
        <br>
        email &zwnj; &zwnj; &zwnj; &zwnj; &zwnj; &zwnj; &zwnj;<input type='text' name='email'>
        <br>
        <button type='submit' name='register'>register</button>
        </form>"
        ;

        if(isset($_POST['email'])){
            $select  = "SELECT email from uporabniki;";
            $result = $conn->query($select);
            $bool = 0;
            $email = $_POST['email'];
            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
                    if($row['email'] == $email){
                        echo "this email already exists";
                        $bool = 1;
                    }
                }
            }
        }
    ?>
    <button type='submit' name='backToLogin'>back to login</button>
    </div>
    </div>

    <?php 
    if(isset($_POST['username'])){
        if(isset($_POST['password'])){
            if(isset($_POST['email'])){
                $uname = $_POST['username'];
                $pass = $_POST['password'];
                $email = $_POST['email'];
                // output data of each row
                if($bool == 0){
                    $sql = "INSERT INTO uporabniki VALUES(null,'$uname','$pass','$email');";
                }
                echo $sql;
                $conn -> query($sql);
                echo $sql;
                header("Location: login.php");
            }
        }
    }
    if(isset($_POST["backToLogin"])){
        header("Location: login.php");
    }
    ?>
</body>
</html>