<?php
 require "conn.php";

 $userId = $_POST["userId"];
 $password = $_POST["psw"];


 if ($conn) {
         
        $sqlCheckId = "SELECT * FROM user WHERE user_id LIKE '$userId'";
        $userIdQuery = mysqli_query($conn, $sqlCheckId);

        if (mysqli_num_rows($userIdQuery) > 0) {
            
            $sqlLogin = "SELECT * FROM user WHERE user_id LIKE '$userId' AND password LIKE MD5('$password')";
            $loginQuery = mysqli_query($conn, $sqlLogin);

            if (mysqli_num_rows($loginQuery) > 0) {
                echo "Login Success";
            } else {
                echo "Wrong Password";
            }

        } else {
            echo "This ID is not registered";
        }

     
 } else {
     echo "Connection Error";
 }

?>