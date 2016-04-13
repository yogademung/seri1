
<?php 
	include ('konektor.php');
	include "function/function.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>LPD Desa Adat Pecatu</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
<link rel="stylesheet" href='css/css.css'  type='text/css'>
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
<link rel="shortcut icon" href="img/icon_lpd.png">
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
     
    <!-- Blog Content
    ================================================== --> 
    <div class="row">

        <!-- Blog Posts
        ================================================== --> 
        <div class="span8 blog">   
        

            <!-- Blog Post 1 -->
           <?php					  
					  $idproduk=$_GET['idproduk'];
					  $produk1 = mysql_query("SELECT * FROM tb_produk WHERE id_produk='$idproduk'");
					  $data_produk1=mysql_fetch_array($produk1);		  
					  echo $data_produk1["deskripsi"];
		  
		  			?>                         
        </div>

        <!-- Blog Sidebar
        ================================================== --> 
        <div class="span4 sidebar">

           <h5 class="title-bg">Slide Show</h5>
           <div>
				 <?php
				 		include ('slide_show_produk.php');
                 		echo "<hr/>";
                 ?>
           </div>  
            <!--Popular Posts-->
            <h5 class="title-bg">Berita Krama</h5>
            <?php
            
             
					$page = mysql_query("SELECT * FROM tb_berita_krama order by id_berita desc limit 0,4") or die('Kesalahan pada proses query!');
					while($data_page=mysql_fetch_array($page))
                
                 
					{
						echo "<ul class=\"popular-posts\">";
						echo "<li>";
						echo "<em>";
						echo getFormatTglIndo($data_page["tgl_posting"]);
						echo "</em>"; 
						echo "<img src=\"img/gallery/$data_page[gambar]\" class=\"align-left blog-thumb-preview\" style=\"border:1px solid #cccccc; padding:5px; height:60px; width:60px;\"/>";
						echo "<br/>";
						echo "<h7>";
						echo "<a href=\"berita_krama_detail.php?id=$data_page[id_berita]\">$data_page[judul]</a>";
						echo "</h7>";									
						echo "</li>";
						echo "</ul>";
						echo "<hr/>";
					}
				?>

            
        </div>

    </div>
    
    </div> <!-- End Container -->

    <?php include "footer.php";?>
    
</body>
</html>
