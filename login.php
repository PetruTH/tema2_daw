<?php 

session_start(); 

include "dbconnection.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM credentiale WHERE nume='$uname' AND parola='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['nume'] === $uname && $row['parola'] === $pass) {

                echo "Logged in!";

                $_SESSION['nume'] = $row['nume'];

                header("Location: home.php");

                exit();

            }else{

                header("Location: index.php?error=Incorect User name or password. Try again");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorect User name or password. Try again");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}