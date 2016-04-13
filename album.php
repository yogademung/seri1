<?php include ('konektor.php');?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>LPD Desa Adat Pecatu</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/googleapis.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/prettyPhoto.css" />
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
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.custom.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

    $("#btn-blog-next").click(function () {
      $('#blogCarousel').carousel('next')
    });
     $("#btn-blog-prev").click(function () {
      $('#blogCarousel').carousel('prev')
    });

     $("#btn-client-next").click(function () {
      $('#clientCarousel').carousel('next')
    });
     $("#btn-client-prev").click(function () {
      $('#clientCarousel').carousel('prev')
    });
    
    $('#myCarousel').carousel({
        interval: 4000
    });
    $('#myCarousel').carousel('cycle');
});

</script>


</head>

<body>
    
    <?php include "header.php";?>
     
    <!-- Page Content
    ================================================== --> 
    <div class="row">

        <!-- Gallery Items
        ================================================== --> 
        <div class="span12 gallery ">
        		
              
        			
                    <?php 						
						$album= mysql_query("SELECT *  FROM tb_album order by id_album ASC") or die('Kesalahan pada proses query!');
					while($data_album=mysql_fetch_array($album))               
                 
					{	
						
						$gallerymin= mysql_query("SELECT gambar  FROM tb_gallery where id_album=$data_album[id_album] order by id_album ASC limit 0,1") or die('Kesalahan pada proses query!');
						$datagallerymin=mysql_fetch_array($gallerymin);
						
						$countgallery= mysql_query("SELECT *  FROM tb_gallery where id_album=$data_album[id_album] ") or die('Kesalahan pada proses query!');
						$datacountgallery=mysql_num_rows($countgallery);
						
						echo "<div style=\"margin:10px; float:left;\" align=\"center\">";				
						echo "<a href=\"gallery.php?id_album=$data_album[id_album]\"><img src=\"img/gallery/foto/".$datagallerymin["gambar"]."\" alt=\"\" class=\"blog-thumb-preview\" style=\"border:1px solid #cccccc; padding:5px;  height:150px; width:150px;\"/>";
						echo "<h6>";			
						echo $data_album["judul_album"]."<br/>";
						echo "Jumlah : ". $datacountgallery;
						echo "<h6>";		
						echo "</div>";									
						
					}
                    ?>     

        </div><!-- End gallery list-->

    </div><!-- End container row -->
    
    </div> <!-- End Container -->

    <?php include "footer.php";?>
    
</body>
</html>
