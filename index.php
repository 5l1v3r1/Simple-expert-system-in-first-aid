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
            <li class="active"><a href="index.php"">หน้าแรก</a></li>
            <li><a href="about.php">เกี่ยวกับ</a></li>
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
        <h1>ระบบผู้เชี่ยวชาญการปฐมพยาบาล</h1>
        <p>ระบบนี้พัฒนาขึ้นเพื่อ เป็นการนำความรู้ในวิชาระบบผู้เชี่ยวชาญ มาสร้างเป็นตัวระบบที่สามารถใช้งานได้จริง.</p>
        <p>ซึ่งสามารถอ่านข้อมูลการใช้งานระบบได้โดยการคลิกปุ่มด้านล่างนี้</p>
        <p>
          <a class="btn btn-lg btn-primary" target="_blank" role="button" href="docs/manual.pdf">คู่มือการใช้งานระบบ &raquo;</a>
        </p>
      </div>

    </div> <!-- /container -->


    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h2>เลือกสาเหตุของอาการ</h2>
        <p>หากผู้ใช้งานทราบสาเหตุพื้นของอาการบาดเจ็บโปรดเลือกสาเหตุตามด้านล่างนี้</p>
         <hr width="75%">
    <div class="container">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="img/169245.jpg" alt="" style="width: 300px; height: 300px">
        <div class="overlay">
           <h2>การหมดสติ</h2>
           <a class="info" href="sym_unconscious.php" target="_blank">เข้าใช้งาน</a>
        </div>
    </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="img/ferti02.jpg" alt="" style="width: 300px; height: 300px">
        <div class="overlay">
           <h2>สารพิษ (เคมี)</h2>
           <a class="info" href="sym_toxin_chemis.php" target="_blank">เข้าใช้งาน</a>
        </div>
    </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="img/mordedura-serpiente.jpg" alt="" style="width: 300px; height: 300px">
        <div class="overlay">
           <h2>สารพิษ (สัตว์)</h2>
           <a class="info" href="sym_toxin_animal.php" target="_blank">เข้าใช้งาน</a>
        </div>
    </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="img/2011312_77557.jpg" alt="" style="width: 300px; height: 300px">
        <div class="overlay">
           <h2>กระดูกหัก</h2>
           <a class="info" href="sym_bone_problem.php" target="_blank">เข้าใช้งาน</a>
        </div>
    </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="img/i9.jpg" alt="" style="width: 300px; height: 300px">
        <div class="overlay">
           <h2>ถูกยิงหรือถูกแทง</h2>
           <a class="info" href="sym_ganster_syndrome.php" target="_blank">เข้าใช้งาน</a>
        </div>
    </div>
    </div>



    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="img/i18.jpg" alt="" style="width: 300px; height: 300px">
        <div class="overlay">
           <h2>สิ่งแปลกปลอมเข้าสู่ร่างกาย</h2>
           <a class="info" href="sym_body_effect.php" target="_blank">เข้าใช้งาน</a>
        </div>
    </div>
    </div>



    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="img/help-512.png" alt="" style="width: 300px; height: 300px">
        <div class="overlay">
           <h2>จมน้ำ</h2>
           <a class="info" href="sym_swimless.php" target="_blank">เข้าใช้งาน</a>
        </div>
    </div>
    </div>

	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="img/i1.jpg" alt="" style="width: 300px; height: 300px">
        <div class="overlay">
           <h2>ไฟไหม้น้ำร้อนลวก</h2>
           <a class="info" href="sym_hotgot.php" target="_blank">เข้าใช้งาน</a>
        </div>
    </div>
    </div>



    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="img/danger-zone.jpg" alt="" style="width: 300px; height: 300px">
        <div class="overlay">
           <h2>สถานที่อันตราย เช่น บริเวณไฟฟ้าแรงสูง หรือ ไฟไหม้</h2>
           <a class="info" href="sym_danger_zone.php" target="_blank">เข้าใช้งาน</a>
        </div>
    </div>
    </div>
    

    <hr width="75%">
    <br>


    </div> <!-- /container -->
</div>


</div>
<!--
  <div class="container">
<div class="jumbotron">
        <p>ในกรณีที่ไม่ทราบสาเหตุของอาการตามที่แนะนำไว้ด้านบนให้ผู้ใช้งานเข้าไประบุข้อมูลเพื่อใช้ในการวินิจฉัย โดยการคลิกปุ่มด้านล่างนี้</p>
    <p>
      <a class="btn btn-lg btn-danger" href="#document" role="button">วินิจฉัยเพื่อจำแนกหมวดหมู่ของอาการ</a>
     </p>


</div>
</div>
-->




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