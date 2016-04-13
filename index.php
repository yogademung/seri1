<?php 
include ('konektor.php');
include "function/function.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>LPD Pecatu</title>
  <!-- Site made with Mobirise Website Builder v2.9, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v2.9, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2-300x80-65.png" type="image/x-icon">
  <meta name="description" content="">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
  <link rel="stylesheet" href="assets/mobirise-slider/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/bootstrap/css/wowslider.css" type="text/css">

  
  
  
</head>
<body>
<?php include("header.php");
?>
<!--Halaman Atas sudah-->
<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" style="background-image: url(assets/images/sunset.jpg);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center">
        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(34, 34, 34);"></div>
			<div class="mbr-box__container mbr-section__container container">
				<div class="mbr-box mbr-box--stretched">
				<div class="mbr-box__magnet mbr-box__magnet--center-center">
					<div class="row">
					<div class=" col-sm-8 col-sm-offset-2">
							<div class="mbr-hero animated fadeInUp">
									<h1 class="mbr-hero__text">Om Swastiastu,</h1>
								<p class="mbr-hero__subtext">Selamat Datang di Website Lembaga Perkreditan Desa (LPD) Desa Adat Pecatu. Ngiring Sareng - Sareng Ngewangun Desa Mejalaran Antuk Nyar engin Ring LPD.<br></p>
							</div>
						<br><center>
							
								<table class="table-condensed">
									<tr>
										<td><a href="https://lpdpecatu.or.id/lpdnetsecure/">
										  <img class="img-thumbnail" width="180" height="100" src="assets/images/lpdnet.jpg" alt="lpd_net">
										</a></td>
										<td><a href="https://lpdpecatu.or.id/lpd/layanan_mail.php">
										  <img class="img-thumbnail" width="180" height="100"  src="assets/images/lpdmail.jpg" alt="lpd_net">
										</a></td>
										<td><a href="https://lpdpecatu.or.id/lpd/lpd_call.php">
										  <img class="img-thumbnail" width="180" height="100"  src="assets/images/lpdcall.jpg" alt="lpd_net">
										</a></td> 
										<td><a href="https://lpdpecatu.or.id/lpd/lpd_sms.php">
										  <img class="img-thumbnail" width="180" height="100"  src="assets/images/lpdsms.jpg" alt="lpd_sms">
										</a></td>  
									</tr>                
								</table></center>  

					</div>
				</div>                  
            </div>
			</div>
				</div>                  
            </div>
       <div class="mbr-arrow mbr-arrow--floating text-center">
            <div class="mbr-section__container container">
                <a class="mbr-arrow__link" href="#slider-2"><i class="glyphicon glyphicon-menu-down"></i></a>
            </div>
       </div>
</section>
<!--slider-->
<section class="mbr-slider mbr-section--no-padding carousel slide" data-ride="carousel" data-wrap="true" data-interval="2000" id="slider-2" style="background-color: rgb(255, 255, 255);">
    <div class="mbr-section__container">
      <div>
            <ol class="carousel-indicators">
                <li data-app-prevent-settings="" data-target="#slider-2" data-slide-to="0" class="active"></li>
				<li data-app-prevent-settings="" data-target="#slider-2" class="" data-slide-to="1"></li>
				<li data-app-prevent-settings="" data-target="#slider-3" data-slide-to="2"></li>
				<li data-app-prevent-settings="" data-target="#slider-4" data-slide-to="3"></li>
            </ol>
        <div class="carousel-inner" role="listbox">
			<?php 
							$no=0;
							$page = mysql_query("SELECT * FROM tb_slider order by id_slider desc limit 0,4") or die('Kesalahan pada proses query!');
							while($data_page=mysql_fetch_array($page))
							{	
								echo "<a href=\"$data_page[url_gambar]\">";
								echo "<div class=\"mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section1--full-height active\" style=\"background-image: url(img/gallery/slider1/data1/images/$data_page[gambar]);\" alt=\"$data_page[judul]\" title=\"$data_page[judul]\">";
								$no++;			
							}
			?>
						
						<div class="mbr-box__magnet mbr-box__magnet--sm-padding">
                        <div class=" container">
                           <div class="row">
							<div class="col-sm-4 col-sm-offset-2">
                                <div class="mbr-hero">
                                    <p class="mbr-hero__subtext">Selamat Hari Raya Nyepi</p>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
				<a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#slider-2">
					<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#slider-2">
					<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
		</div>
	</div>
</div>


</section>
<!--Berita Terkini-->
<section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-parallax-background" id="features1-4" style="background-image: url(assets/images/sunset.jpg);">
  <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(34, 50, 40);"></div>
		<div class="mbr-section__container mbr-section__container--std-top-padding mbr-section__container--sm-bot-padding mbr-section-title container">
				<div class="mbr-header mbr-header--center mbr-header--wysiwyg row">
						<div class="col-sm-8 col-sm-offset-2">
							<h3 class="mbr-header__text">BERITA TERKINI</h3>
						</div><br><br>
				<div class="mbr-section__container container">
						<div class=\"mbr-section__row row">
				 <?php 
               $page = mysql_query("SELECT * FROM tb_berita order by id_berita desc limit 0,4") or die('Kesalahan pada proses query!');
               while($data_page=mysql_fetch_array($page))
                        {
						//post
							echo "<div class=\"mbr-section__col col-xs-12 col-md-3 col-sm-8\">";
								echo "<div class=\"mbr-section__container mbr-section__container--center mbr-section1__container--middle\">";
									echo "<figure class=\"mbr-figure\">";
										echo "<img class=\"mbr-figure__img\" src=\"img/gallery/".$data_page["gambar"]."\" height=\"200px\">";
									echo "</figure>";
								echo "</div>";
								echo "<div class=\"mbr-section__container mbr-section__container--middle\">";
									echo "<div class=\"mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg\">";
										echo "<h3 class=\"mbr-header__text\">";
											echo "<a href=\"berita_detail.php?id=$data_page[id_berita]\">";
											echo "$data_page[judul]";
											echo "</a>";
										echo "</h3>";
										
									echo "</div>";
								echo "</div>";
								echo "<div class=\"mbr-section__container mbr-section__container--middle\">";
											echo "<div class=\"mbr-article mbr-article--wysiwyg\">";
											//echo substr($data_page["deskripsi"],0,50);   	 
											echo "<p style=\"color:#000\">";
												$explode=explode('.',$data_page["deskripsi"]);   	 
												echo $explode[0].".  ".$explode[1].".";
											echo "</p>";
											echo "</div>";
								echo "</div>";
									echo "<div class=\"mbr-section__container mbr-section__container--last\">";
										echo "<div class=\"mbr-buttons mbr-buttons--center\">";
											echo "<a href=\"berita_detail.php?id=$data_page[id_berita]\" class=\"mbr-buttons__btn btn btn-wrap btn-xs-lg btn-primary\">";
											echo "Selengkapnya";
											echo "</a>";
										echo "</div>";
									echo "</div>";
								echo "</div>";
					
						}
					?>
					</div>			
				</div>
			</div>
</section>

<!--Download Catu sudah-->
<section class="mbr-section mbr-section--relative" id="msg-box4-3" style="background-color: rgb(189, 220, 198);">    
    <div class="mbr-section__container mbr-section__container--isolated container">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
				<?php 
					$majalah = mysql_query("SELECT * FROM tb_majalah  order by id_majalah desc limit 0,1") or die('Kesalahan pada proses query!');
					while($data_majalah=mysql_fetch_array($majalah))
					{
						echo "<div class=\"mbr-box__magnet mbr-box__magnet--top-right mbr-section__left col-sm-6\">";
							echo "<figure class=\"mbr-figure mbr-figure--adapted mbr-figure--caption-inside-bottom mbr-figure--full-width\">";
								echo "<center>";
								echo "<img class=\"img-responsive\" src=\"magaz/".$data_majalah["gambar"]."\" width=\"300px\" height=\"150px\">";
								echo "</center>";
							echo "</figure>";
						echo "</div>";
						echo "<div class=\"mbr-box__magnet mbr-class-mbr-box__magnet--center-left col-sm-6 mbr-section__right\">";
							echo "<div class=\"mbr-section__container mbr-section__container--middle\">";
								echo "<div class=\"mbr-header mbr-header--auto-align mbr-header--wysiwyg\">";
									echo "<a href='list_majalah.php'>";
											echo "<h3 class=\"mbr-header__text\">";
											echo "$data_majalah[judul_majalah]";																
											echo "</h3>";
									echo "</a>";
								echo "</div>";
							echo "</div>";
						
						echo "<div class=\"mbr-section__container mbr-section__container--middle\">";
							echo "<div class=\"mbr-article mbr-article--auto-align mbr-article--wysiwyg\">";
								echo "$data_majalah[deskripsi]";
									echo "<div class=\"mbr-buttons mbr-buttons--auto-align btn-inverse\">";
										echo "<a href=\"magaz/".$data_majalah["pdf_file"]."\"> <input type=\"button\"  class=\"btn btn-inverse\" value=\"Download\"></a>";
										//echo "<a href=\"magaz/".$data_majalah["pdf_file"]."\"" class=\"mbr-buttons__btn btn btn-lg btn-default\">DOWNLOAD</a>";
									echo "</div>";
							echo "</div>";
						echo "</div>";
						echo "</div>";
					}
				?>
            </div>
        </div>
    </div>
</section>
<!--Berita Krama Sudah-->
<section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-parallax-background" id="features1-4" style="background-image: url(assets/images/sunset.jpg);">
    <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(34, 50, 34);"></div>
	<div class="mbr-section__container mbr-section__container--std-top-padding mbr-section__container--sm-bot-padding mbr-section-title container">
        <div class="mbr-header mbr-header--center mbr-header--wysiwyg row">
            <div class="col-sm-8 col-sm-offset-2">
                <h3 class="mbr-header__text">BERITA KRAMA</h3>
            </div>
        </div><br>
		<div class="mbr-section__container container">
		<div class="mbr-section__row row">
			<?php           
					$page = mysql_query("SELECT * FROM tb_berita_krama order by id_berita desc limit 0,4") or die('Kesalahan pada proses query!');
					while($data_page=mysql_fetch_array($page))
                {
					
						echo "<div class=\"mbr-section__col col-xs-12 col-md-3 col-sm-6\">";
							echo "<div class=\"mbr-section__container mbr-section__container--center mbr-section1__container--middle\">";
								echo "<figure class=\"mbr-figure\">";
									echo "<img class=\"mbr-figure__img\" src=\"img/gallery/$data_page[gambar]\" height=\"200px\">";
								echo "</figure>";
							echo "</div>";
						
							echo "<div class=\"mbr-section__container mbr-section__container--middle\">";
								echo "<div class=\"mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg\">";
									echo "<h3 class=\"mbr-header__text\">";
										echo "<a href=\"berita_krama_detail.php?id=$data_page[id_berita]\">$data_page[judul]</a>";
									echo "</h3>";
									echo "</div>";
								echo "</div>";       
							echo "<div class=\"mbr-section__container mbr-section__container--last\">";
								echo "<div class=\"mbr-buttons mbr-buttons--center\">";
									echo "<a href=\"berita_krama_detail.php?id=$data_page[id_berita]\" class=\"mbr-buttons__btn btn btn-wrap btn-xs-lg btn-primary\">Selengkapnya</a>";
								echo "</div>";
							echo "</div>";
					echo "</div>";
       	}
	?>
	</div>
	</div>
	</div>
 </section>
<!--Share Page sudah-->
<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="social-buttons1-5" style="background-color: rgb(255, 255, 255);">
    <div class="mbr-section__container container">
        <div class="mbr-header mbr-header--inline row">
            <div class="col-sm-4">
                <h3 class="mbr-header__text">BAGIKAN HALAMAN INI</h3>
            </div>
            <div class="mbr-social-icons col-sm-8">
                <div class="mbr-social-likes social-likes_style-1" data-counters="true">
                    <div class="mbr-social-icons__icon social-likes__icon facebook socicon-bg-facebook" title="Share link on Facebook">
                        <i class="socicon socicon-facebook"></i>
                        
                    </div>
                    <div class="mbr-social-icons__icon social-likes__icon plusone socicon-bg-googleplus" title="Share link on Google+">
                        <i class="socicon socicon-googleplus"></i>
                        
                    </div>
                    <div class="mbr-social-icons__icon social-likes__icon twitter socicon-bg-twitter" title="Share link on Twitter">
                        <i class="socicon socicon-twitter"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Footer sudah--->
<footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-6" style="background-color: rgb(68, 68, 68);">
    
    <div class="mbr-section__container container">
        <div class="mbr-footer mbr-footer--wysiwyg row">
            <div class="col-sm-12">
                <p class="mbr-footer__copyright">Copyright (c) 2016 Sevanam Enterprise. <a class="mbr-footer__link text-gray" href="#">Terms of Use</a>  | <a class="mbr-footer__link text-gray" href="#">Privacy Policy</a></p>
            </div>
        </div>
    </div>
</footer>
<!--Script Js sudah-->
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/social-likes/social-likes.js"></script>
  <script src="assets/mobirise/js/script.js"></script>
</body>
</html>