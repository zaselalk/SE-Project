<?php include_once 'site_connection.php';
include_once 'header.php';

$sql_select_product_bs = "select * from `product` where `stock`='In Stock'";
$data_product = mysqli_query($conn, $sql_select_product_bs);


?>

<!-- Product -->
<section class="sec-product bg0 p-t-100 p-b-50">
	<div class="container">
		<div class="p-b-32">
			<h3 class="ltext-105 cl5 txt-center respon1">
				Store
			</h3>
		</div>
		<!-- Tab panes -->
		<div class="tab-content p-t-50">
			<!-- - -->
			<div class="" id="Best-seller">
				<!-- Slide2 -->
				<div class="wrap-slick2">
					<div class="">


						<?php while ($row = mysqli_fetch_assoc($data_product)) { ?>
							<div class="row ">
								<?php while ($row = mysqli_fetch_assoc($data_product)) { ?>
									<div class="product-card col col-3">
										<img src="admin/image/<?php echo $row['image1']; ?>" height="300px" alt="Product 4">
										<h2><?php echo $row['name']; ?></h2>
										<p>Rs.<?php echo $row['price']; ?></p>
										<!-- <button><i class="fa fa-shopping-cart"></i> Add to Cart</button> -->
										<a href="product-detail.php?detail_id=<?php echo $row['id']; ?>" class="btn btn-primary"
											btn-primary>View </a>
									</div>
								<?php } ?>
							</div>

						<?php } ?>


					</div>
				</div>
			</div>


		</div>

	</div>
</section>



<?php include_once 'footer.php'; ?>
<?php include_once 'scripts.php'; ?>