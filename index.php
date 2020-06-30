<?php
include "Ust.php";
 ?>	

	

	<!-- Features section -->
	<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/1.png" alt="#">
						</div>
						<h2>HIZLI ÖDEME KOLAYLIĞI</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/2.png" alt="#">
						</div>
						<h2>GÜVENİLİR ALIŞVERİŞ</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/3.png" alt="#">
						</div>
						<h2>ÜCRETSİZ KARGO</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


	<!-- letest product section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>YENİ ÜRÜNLER</h2>
			</div>
			<div class="product-slider owl-carousel">

				<?php 
				$Urunler=$db->query("SELECT *FROM urun ORDER BY urun_id DESC LIMIT 5");

				//fonksiyon yazalım

				while($Urun=$Urunler->fetch())
				UrunListeGorunumu($Urun);

				 ?>
			</div>
		</div>
	</section>
	<!-- letest product section end -->



	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>ÖNE ÇIKAN ÜRÜNLER</h2>
			</div>
			<div class="row">

<?php 
$Urunler=$db->query("SELECT * FROM urun WHERE urun_vitrin=1 ORDER BY RAND() LIMIT 8");

while ($Urun=$Urunler->fetch())
{
 ?>


				<div class="col-lg-3 col-sm-6">
					<?php 

				UrunListeGorunumu($Urun);
					 ?>
				</div>


<?php 
}
 ?>

			</div>
			<div class="text-center pt-5">
				
			</div>
		</div>
	</section>
	<!-- Product filter section end -->



<?php 
include "Alt.php";
 ?>