<?php
    session_start();
    if(@$_SESSION['username'] == NULL){
        echo "<!DOCTYPE html>";
            echo "<html>";
            echo "<link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">";
            echo "<body style=\"background-color:black\">";
            echo "<center>";
            echo "<div class=\"jumbotron\" style=\"background-color:black\">";
            echo "<a href=\"user_login.php\">";
            echo "<h1 class=\"btn btn-danger\" style=\"color:white\">#ERROR #GO TO LOGIN NOW</h1>";
            echo "</a>";
            echo "</div>";
            echo "</center>";
            echo "</body>";
            echo "</html>";
    }else{
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ระบบผู้เชี่ยวชาญการปฐมพยาบาล</title>
    <!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <!--<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
    <!--<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>-->
    <!--<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"">ระบบผู้เชี่ยวชาญการปฐมพยาบาล</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">หน้าแรก</a></li>
            <li class="active"><a href="about.php">เกี่ยวกับ</a></li>
            <li><a href="docs/manual.pdf" target="_blank">คู่มือการใช้งานระบบ</a></li>
           <!-- <li><a href="#contact">ความรู้ทั่วไป</a></li> -->
						<li><div class="dropdown">
  <button class="btn" type="button" data-toggle="dropdown"><?php echo "Welcome: ".$_SESSION['username']; ?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="user_update.php">แก้ไขข้อมูล</a></li>
  </ul>
</div></li>
            <li><a href="user_logout.php">ออกจากระบบ</a></li>
          </ul>
       
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h2>เกี่ยวกับระบบผู้เชี่ยวชาญการปฐมพยาบาล</h2>

      </div>

    </div> <!-- /container -->


 <div class="container">
    <center>
         <h3 style="text-shadow: 2px 2px 5px green">วัตถุประสงค์ในการพัฒนาเว็บไซต์</h3>
    </center>
    <p style="text-align: justify">
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp เนื่องจากปัจจุบันนั้น เทคโนโลยีนั้นเติบโตแบบก้าวกระโดดมากขึ้น การนำระบบผู้เชี่ยวมาประยุกต์ใช้งานเข้ากับระบบต่างๆ จะสามารถช่วยลดการเวลาและช่วยเพิ่มประสิทธิภาพในการ process งานต่างๆ
ทางผุ้พัฒนาเล็งเห็นการนำระบบผู้เชี่ยวชาญมาช่วยในงานทางการแพทย์นั้นเป็นสิ่งที่มีประโยชน์ต่อประชาชนทั่วไป โดยระบบที่พัฒนาขึ้นมานี้ก็คือจะเป็นระบบผู้เชี่ยวชาญการปฐมพยาบาล เพื่อช่วยในการวินิจฉัยโรคต่างๆ ทำให้ลดเวลาและค่าใช้จ่ายได้เป็นอย่างมาก
    </p>
    </div>
    <hr width="75%">
    <div class="container">
    <center>
         <h3 style="text-shadow: 2px 2px 5px yellow">กลุ่มเป้าหมาย</h3>
    </center>
    <ul>
      <li>ประชาชนทั่วไปที่สนใจ</li>
      <li>บุคลากรทางการแพทย์</li>
    </ul>
    </div>
    <hr width="75%">

    <div class="container">
        <center>
         <h3 style="text-shadow: 2px 2px 5px red">ผู้พัฒนาเว็บไซต์</h3>
        </center>
        <img src="img/15178965_1867262000226762_4570635383539442066_n.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236" align="left">

        <img src="img/14947769_1786800731568705_4035868719985446952_n.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236" align="right">
        <p align="left"><b>นายอนุวัฒน์ คงช่วย IT431 รหัส 357402360273</b><br> <i>"Programmer/Developer"</i> <br> <button type="button" class="btn btn-info" style="padding-top: 0px; padding-bottom: 0px">Facebook</button>: <a href="https://www.facebook.com/un4ckn0wl3z" target="_blank">Anuwat Khongchuai</a></p>
        <p align="right"><b>นายสุทธวีร์ เสนาคชวงศ์ IT431 รหัส 357402360248</b><br> <i>"UI Design /Resource collector"</i> <br> <button type="button" class="btn btn-info" style="padding-top: 0px; padding-bottom: 0px">Facebook</button>: <a href="https://www.facebook.com/suttawee555?fref=ts" target="_blank">Suttawee Senakotchawong</a></p>
    </div>







    <!-- Bootstrap core JavaScript
    ================================================== -->
     <br /><br /><br /><footer>
       <p class="copyright text-muted">&copy; 2017 All Rights Reserved. Powered by <a href="https://www.facebook.com/un4ckn0wl3z" target="_blank">Anuwat</a> and <a href="https://www.facebook.com/suttawee555?fref=ts" target="_blank">Suttawee</a></p><br /><br /><br /><br />

    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

    
  </body>
</html>

<?php

}

?>
