<?php
 $db_name = "deardiary"; 		// DB 이름
 $username = "james";		  		// 사용자 이름
 $password = "p0AwPI@^*GS1"; 		// MySQL 비밀번호
 $servername = "localhost";	        // AWS EC2 인스턴스의 localhost
 
 $conn = mysqli_connect($servername, $username, $password, $db_name);
 
?>