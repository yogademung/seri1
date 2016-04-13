<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-5">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <span class="mbr-brand__logo"><a href="#"><img class="mbr-navbar__brand-img mbr-brand__img" src="assets/images/logo3.png" alt="lpdpecatu"></a></span>
                   </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                <div class="mbr-navbar__column">
				<ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active">
				<li class="mbr-navbar__item"><div class="mbr-navbar__column mbr-navbar__menu">
                <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                <div class="mbr-navbar__column">
                <ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links">
                        
						
				<!--Navbar-->
                <li class="mbr-navbar__item" "dropdown">
                <a href="index.php" class="mbr-buttons__link btn text-danger" <?php if(($mod[0]=="index.php")||($mod[0]=="lpd")){echo "active";}?>">BERANDA</a>
                </li>
                <li class="mbr-navbar__item" "dropdown-toggle" data-toggle="dropdown">
                <a class="mbr-buttons__link btn text-white" href="#">TENTANG KAMI<span class="caret"></span></a></li>
			    <ul class="dropdown-menu" style="background:#666">
					<?php 
							$page_menu=mysql_query("SELECT id_about_us, judul FROM tb_about_us WHERE aktif='Y' ORDER BY urut ASC") or 
							die('Kesalahan pada proses query!');
							while($data_page=mysql_fetch_array($page_menu))
							{//a
							echo"<li><a href=\"tentang_kami.php?idp=$data_page[id_about_us]\">$data_page[judul]</a></li>";
							}//a
							?>
				</ul>
					</ul>
					</li>                    
                    <li class="mbr-navbar__item" "dropdown-toggle" data-toggle="dropdown">
                    <a class="mbr-buttons__link btn text-white" <?php if($mod[0]=="produk.php"){echo "active";}?>">PRODUK<span class="caret"></span></a>
                    <ul class="dropdown-menu">
					 <?php 										 		
							$produk_menu=mysql_query("SELECT id_produk, nama_produk FROM tb_produk WHERE aktif='Y' 
							AND samping='Y' ORDER BY urut_samping ASC") or 
							die('Kesalahan pada proses query!');
							while($data_produk=mysql_fetch_array($produk_menu))
							{//a
							echo"<li><a href=\"produk.php?idproduk=$data_produk[id_produk]\">$data_produk[nama_produk]</a></li>";
							}//a
							?>
                   	</ul>
                    </li>                        
                    <li class="mbr-navbar__item">
                    <a class="mbr-buttons__link btn text-white" href="berita.php">BERITA</a>
                    </li>
                    <li class="mbr-navbar__item">
                    <a class="mbr-buttons__link btn text-white" href="album.php">GALLERY</a>
                    </li>
                    <li class="mbr-navbar__item">
                    <a class="mbr-buttons__link btn text-white" href="kontak.php">KONTAK</a>
                    </li>
                    </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>