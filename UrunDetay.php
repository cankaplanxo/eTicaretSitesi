	<?php 

	include "Ust.php";

$Urun=$db->prepare("SELECT * FROM urun WHERE urun_id=?");
$Urun->execute(array(intval($_GET['id'])));

 if($Urun->rowCount()==1)
{
 $Urun=$Urun->fetch();
 $db->query("UPDATE urun SET urun_gosterilme=(urun_gosterilme+1)WHERE urun_id=".$Urun['urun_id']);

 }
else

 {
 	header ("Location:./");
 	exit;

 }


	 ?>

	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>ÜRÜN</h4>
			<div class="site-pagination">
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- product section -->
	<section class="product-section">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-6">
					<div class="product-pic-zoom">
						<img class="product-big-img" src="img/single-product/1.jpg" alt="">
					</div>
				
				</div>
				<div class="col-lg-6 product-details">
					<h2 class="p-title"><?php echo $Urun ['urun_adi'] ?></h2>
					<h3 class="p-price"><?php echo number_format($Urun['urun_fiyat'],2,",",".")."₺"?></h3>
					<h4 class="p-stock">Available: <span>stokta var</span></h4>
					<div class="p-rating">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o fa-fade"></i>
					</div>
					
					<div class="fw-size-choose">
						<p>Size</p>
						<div class="sc-item">
							<input type="radio" name="sc" id="xs-size">
							<label for="xs-size">32</label>
						</div>
						<div class="sc-item">
							<input type="radio" name="sc" id="s-size">
							<label for="s-size">34</label>
						</div>
						<div class="sc-item">
							<input type="radio" name="sc" id="m-size" checked="">
							<label for="m-size">36</label>
						</div>
						<div class="sc-item">
							<input type="radio" name="sc" id="l-size">
							<label for="l-size">38</label>
						</div>
						<div class="sc-item disable">
							<input type="radio" name="sc" id="xl-size" disabled>
							<label for="xl-size">40</label>
						</div>
						<div class="sc-item">
							<input type="radio" name="sc" id="xxl-size">
							<label for="xxl-size">42</label>
						</div>
					</div>
					
					<a href="#" class="site-btn">SİPARİŞ VER</a>
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Ürün Bilgileri</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<?php echo $Urun ['urun_aciklama'] ?>
								</div>
							</div>
						</div>



					</div>
				
				</div>
			</div>
		</div>
	</section>
	<!-- product section end -->


	<!-- RELATED PRODUCTS section -->
	
	<!-- RELATED PRODUCTS section end -->


	<!-- Footer section -->
	

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</div>
		</div>
	</section>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
