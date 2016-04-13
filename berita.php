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
     
    <!-- Blog Content
    ================================================== --> 
    <div class="row">

        <!-- Blog Posts
        ================================================== --> 
        <div class="span8 blog">
        <h5 class="title-bg">
        	<small>Berita Terkini</small>               
        </h5>

            <!-- Blog Post 1 -->
            <?php 
					//pagination
					$limit=4;
					$h=0;
					$bk=0;
					
					//getjumlah
					$data = mysql_query("SELECT id_berita FROM tb_berita") or die('Kesalahan pada proses query!');
					$count_data=mysql_num_rows($data);
					
					//getpage
					$halaman=ceil($count_data/$limit);
					if(!isset($_GET["h"]))
					{
						$h=1;
					}
					else
					{
						$h=$_GET["h"];
					}
					$limit_awal=($h-1)*$limit;
					
					//tampilkan data	
					$page = mysql_query("SELECT * FROM tb_berita order by id_berita desc limit $limit_awal,$limit") or die('Kesalahan pada proses query!');
					while($data_page=mysql_fetch_array($page))
					{
                 		echo "<div class=\"active item\">";
                    	echo "<img src=\"img/gallery/".$data_page["gambar"]."\"  alt=\"\" class=\"align-left blog-thumb-preview\" style=\"border:1px solid #cccccc; padding:5px; height:125px; width:125px;\"/>";
                    	echo "<div class=\"post-info1 clearfix\">";
						echo getFormatTglIndo($data_page["tgl_posting"]);
                        echo "<h5>";
						echo "<a href=\"berita_detail.php?id=$data_page[id_berita]\">";
						echo "$data_page[judul]";
						echo "</a>";
						echo "</h5>";
						echo "<span class=\"blog-summary\">";   	 
		  				$explode=explode('.',$data_page["deskripsi"]);   	 
                        echo $explode[0].".  ".$explode[1].".";
						//echo substr($data_page["deskripsi"],0,380);
						echo "<span>";
                    	echo "</div>";
                   		echo "</div>";	
						echo "<hr/>";					
					}	
				?>         
            
            
           

            
            <!-- Pagination -->
            <div class="pagination">
                <ul>
                    <?php 
						if($halaman==1)
						{
							echo "<li class=\"active\"><a>Prev</a></li>";
							echo "<li class=\"active\"><a>1</a></li>";
							echo "<li class=\"active\"><a>Next</a></li>";	
						}
						else if($halaman>1)
						{
							if($h==1)
							{
								echo "<li class=\"active\"><a>Prev</a></li>";
							}
							else
							{
								$prev=$h-1;
								echo "<li><a href=\"berita.php?h=$prev\">Prev</a></li>";
							}
							for($i=0;$i<$halaman;$i++)
							{
								$now=$i+1;
								if($h==$now)
								{
									echo "<li class=\"active\"><a>$now</a></li>";		
								}
								else
								{
									echo "<li><a href=\"berita.php?h=$now\">$now</a></li>";	
								}
							}
							if($h==$halaman)
							{
								echo "<li class=\"active\"><a>Next</a></li>";
							}	
							else
							{
								$next=$h+1;
								echo "<li><a href=\"berita.php?h=$next\">Next</a></li>";
							}
						}
						else
						{
							echo "<li></li>";
						}
					?>
                </ul>
            </div>
        </div>

        <!-- Blog Sidebar
        ================================================== --> 
       
        
        
        <div class="span4">            
            <!--Popular Posts-->
            <h5 class="title-bg">Berita Krama</h5>
            <?php
				//pagination
					$limit=4;
					$bk=0;
					
					//getjumlah
					$data = mysql_query("SELECT id_berita FROM tb_berita_krama") or die('Kesalahan pada proses query!');
					$count_data=mysql_num_rows($data);
					
					//getpage
					$halaman=ceil($count_data/$limit);
					if(!isset($_GET["bk"]))
					{
						$h=1;
					}
					else
					{
						$h=$_GET["bk"];
					}
					$limit_awal=($h-1)*$limit;
            		
					//tampilkan data             
					$page = mysql_query("SELECT * FROM tb_berita_krama order by id_berita desc limit $limit_awal,$limit") or die('Kesalahan pada proses query!');
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
                 <!-- Pagination -->
            <div class="pagination">
                <ul>
                    <?php 
						if($halaman==1)
						{
							echo "<li class=\"active\"><a>Prev</a></li>";
							echo "<li class=\"active\"><a>1</a></li>";
							echo "<li class=\"active\"><a>Next</a></li>";	
						}
						else if($halaman>1)
						{
							if($h==1)
							{
								echo "<li class=\"active\"><a>Prev</a></li>";
							}
							else
							{
								$prev=$bk-1;
								echo "<li><a href=\"berita.php?h=$prev\">Prev</a></li>";
							}
							for($i=0;$i<$halaman;$i++)
							{
								$now=$i+1;
								if($bk==$now)
								{
									echo "<li class=\"active\"><a>$now</a></li>";		
								}
								else
								{
									echo "<li><a href=\"berita.php?h=$now\">$now</a></li>";	
								}
							}
							if($h==$halaman)
							{
								echo "<li class=\"active\"><a>Next</a></li>";
							}	
							else
							{
								$next=$h+1;
								echo "<li><a href=\"berita.php?bk=$next\">Next</a></li>";
							}
						}
						else
						{
							echo "<li></li>";
						}
					?>
                </ul>
            </div>

            <!--Tabbed Content-->
            
            <!--Start Majalah Catu -->              
            <section class="post-content">
                <div class="post-body about-author ">
                <h5 class="title-bg">Majalah LPD</h5>
                    <?php 
			   
					$majalah = mysql_query("SELECT * FROM tb_majalah  order by id_majalah desc limit 1") or die('Kesalahan pada proses query!');
					while($data_majalah=mysql_fetch_array($majalah))
					{
                 		
						echo "<div class=\"active item\">";                 		
                    	echo "<img src=\"img/gallery/".$data_majalah["gambar"]."\" width=\"100\" hight=\"150\" alt=\"\" class=\"align-left blog-thumb-preview\"  />";
						
						echo "<h4>";						
						echo "$data_majalah[judul_majalah]";						
						echo "</h4>"; 
						echo "<span>";						
						echo "Edisi $data_majalah[edisi]";						
						echo "</span>"; 
						echo "<span class=\"text1\">";
						echo "$data_majalah[deskripsi]";
						echo "</span>";
						echo "<a href=\"img/majalah_catu _edisi1.pdf\"> <input type=\"submit\"  class=\"btn btn-inverse\" value=\"Download\"></a>";
						echo "<hr/>";
					}
					?>
                </div>
            </section>
 			<!--End Majalah Catu -->
              
        </div>

    </div>
    
    </div> <!-- End Container -->

   <?php include "footer.php";?>
    
</body>
</html>
