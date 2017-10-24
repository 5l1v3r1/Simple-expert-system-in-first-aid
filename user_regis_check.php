<?php
require 'connect_db.php';
if(isset($_POST['username']) || isset($_POST['password']) || isset($_POST['nickname'])){
    if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['nickname']) ){
        echo "<!DOCTYPE html>";
        echo "<html>";
        echo "<link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">";
        echo "<body style=\"background-color:black\">";
        echo "<center>";
        echo "<div class=\"jumbotron\" style=\"background-color:black\">";
        echo "<a href=\"index.php\">";
        echo "<h1 class=\"btn btn-danger\" style=\"color:white\">#ERROR NULL DATA #GO TO REGIS</h1>";
        echo "</a>";
        echo "</div>";
        echo "</center>";
        echo "</body>";
        echo "</html>";
        //echo $_POST['username']);
        //echo $_POST['password']);
        //echo $_POST['nickname']);
    }else{

            $username = mysqli_real_escape_string($connect_db,@$_POST['username']);
            $password = mysqli_real_escape_string($connect_db,@$_POST['password']);
            $nickname = mysqli_real_escape_string($connect_db,@$_POST['nickname']);

             if($username=='admin'){

                echo '

                <html>
                <head>
                <script type="text/javascript">
                alert("โปรดใช้ Username ตัวอืน")
                </script>
                </head>
                <body>
                <meta http-equiv="refresh" content="0;url=user_register.php">
                </body>
                </html>
                ';
                die();

            }

            //$sqlquery = "SELECT * FROM admin WHERE username=? AND password=?";

            //$stmt = mysqli_prepare($connect_db, $sqlquery);
            //mysqli_stmt_bind_param($stmt, "ss", $username, $password);
            //mysqli_execute($stmt);

            //$result_user = mysqli_stmt_get_result($stmt);
            $sqlquery = "INSERT INTO user (username, password, nick_name) VALUES ('$username', '$password', '$nickname')";    
            $result_user = mysqli_query($connect_db ,$sqlquery);



                if($result_user == TRUE){
                    session_start();
                   // $row_user = mysqli_fetch_array($result_user, MYSQLI_ASSOC);
                   // $_SESSION['username'] = $row_user['nick_name'];

                    echo '<script language="javascript">';
                    echo 'alert("สมัครสมาชิกเรียบร้อยแล้ว"); location.href="user_login.php"';
                    echo '</script>';

                  //  header("Location: user_login.php");
    
                }else{
                    echo "<!DOCTYPE html>";
                    echo "<html>";
                    echo "<link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">";
                    echo "<body style=\"background-color:black\">";
                    echo "<center>";
                    echo "<div class=\"jumbotron\" style=\"background-color:black\">";
                    echo "<a href=\"user_login.php\">";
                    echo "<h1 class=\"btn btn-danger\" style=\"color:white\">#ERROR #INCORRECT USER</h1>";
                    echo "</a>";
                    echo "</div>";
                    echo "</center>";
                    echo "</body>";
                    echo "</html>";
}
mysqli_close($connect_db);
    }
}else{
                    echo "<!DOCTYPE html>";
                    echo "<html>";
                    echo "<link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">";
                    echo "<body style=\"background-color:black\">";
                    echo "<center>";
                    echo "<div class=\"jumbotron\" style=\"background-color:black\">";
                    echo "<a href=\"user_login.php\">";
                    echo "<h1 class=\"btn btn-danger\" style=\"color:white\">#FUCK #GO TO LOGIN NOW</h1>";
                    echo "</a>";
                    echo "</div>";
                    echo "</center>";
                    echo "</body>";
                    echo "</html>";
    
}




?>