<?php include ('konektor.php');?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>LPD Desa Adat Pecatu</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/jquery.lightbox-0.5.css">
<link rel="stylesheet" href="css/custom-styles.css">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]--> 

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="img/iconlpd.png">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.custom.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>


</head>

<body>

    <?php include "header.php";?>
     
    <!-- Page Content
    ================================================== --> 
    <div class="row"><!--Container row-->

        <div class="span8 contact"><!--Begin page content column-->

            <p><img src="img/gallery/gedung_lpd.jpg" style="box-shadow:0px 0px 10px #999"></p>

            <div class="alert alert-success" style="font-size:24px">
               Post Komentar
                
            </div>
          
          <?php include 'komentar.php'; ?>
          
          
        </div> <!--End page content column-->
        
	</div>
        <!-- Sidebar
        ================================================== --> 
        <div class="span4 "><!-- Begin sidebar column -->
            <h5 class="title-bg">Hubungi Kami</h5>
            <address>
            <h5> <strong>LPD DESA ADAT PECATU </strong></h5>
            <b style="font-size:16px">Jl. Raya Uluwatu - Pecatu Km. 5 Uluwatu.<br>            
            Kec. Kuta Selatan, Kab. Badung<br>
            <abbr title="Phone">Telp.</abbr> (0361) 702078 / 702133 / 8470624 </b>
            </address>
             
            <address>
            <strong>Email</strong><br>
            
            <a href="mailto:#"> info@lpdpecatu.or.id</a>
           
            </address>

            <h5 class="title-bg">Peta Lokasi </h5>
           
          
		  <iframe src="maps.php" width="330px" height="370px" allowtransparency="true" scrolling="no" frameborder="0"></iframe>
         
			

        </div><!-- End sidebar column -->

    </div><!-- End container row -->
    </div>
    </div> <!-- End Container -->

    <?php include "footer.php";?>
    
</body>
</html>
