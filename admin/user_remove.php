<?php

require 'connect_db.php';

@$id = $_GET['id'];

if($id==""){
	 echo '

                <html>
                <head>
                </head>
                <body>
                <meta http-equiv="refresh" content="0;url=index.php">
                </body>
                </html>
                ';
	die();
}


$sql = "DELETE FROM user WHERE id='$id'";
$result = $connect_db->query($sql);
if($result){
	 echo '

                <html>
                <head>
                <script type="text/javascript">
                alert("ลบข้อมูลผู้ใช้เรียบร้อยแล้ว")
                </script>
                </head>
                <body>
                <meta http-equiv="refresh" content="0;url=index.php">
                </body>
                </html>
                ';
}else{
	echo '

                <html>
                <head>
                <script type="text/javascript">
                alert("เกิดข้อผิดพลาดในการลบข้อมูลผู้ใช้")
                </script>
                </head>
                <body>
                <meta http-equiv="refresh" content="0;url=index.php">
                </body>
                </html>
                ';

}

?>