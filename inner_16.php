<?php include 'panel-inc/head.php';?>
<?php include 'panel-inc/header.php';?>
<section class="panel_section_1">
	<div class="container">
		<div class="row py-5">			
			<div class="col-md-12">
				<div class="panel_card_first reviews">
					<div class="reviews_head pt-4">
						<h1 class="text-white text-center pt-5">REVIEWS</h1>
					</div>
					<div class="p-3">
						<div class="text-right p-3">
						<a class="btn btn_main yellow_btn" href="#">Write a Review</a>
						</div>
						<div class="review_list" id="scroll-bold">
							<?php for($x = 0; $x <= 10; $x++) { ?>
								<div class="row py-4 border_bottom_blue">
									<div class="col-md-12 mb-2 f_15 fw-500">Lorem Ipsum is simply dummy text 
									 	<p class="f_12 dot d-inline-block m-0 ml-4 position-relative time">
									 		5 min ago
									 	</p>							 	
								 	</div>
								 	<div class="col-md-12 f_12 fw-500 lightgrey_color mb-2">City, Country</div>
								 	<div class="col-md-8 f_14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s took
								 	</div>
								 	<div class="col-md-4">
										<span class="fa fa-star-o"></span>
										<span class="fa fa-star-o"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
								 	</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'panel-inc/footer.php';?>
