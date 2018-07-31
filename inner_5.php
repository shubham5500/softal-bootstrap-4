<?php include 'panel-inc/head.php';?>
<?php include 'panel-inc/header.php';?>
<section class="panel_section_1">
	<div class="container">
		<div class="row py-5">			
			<div class="col-md-12">
				<div class="panel_card_first dashboard pl-5 pr-2 py-4">
					<div class="pr-4">
						<div class="d-flex input_in_head">
							<div class="form-group col-md-4 position-relative">
								<input type="text" 
									   placeholder="Type Here..." 
									   class="form-control input_default" 
									   name="">
								<span class="fa fa-search position-absolute"></span>
							</div>
							<div class="form-group col-md-4 ml-4">	
			                    <select class="form-control input_default">
			                      <option>Select Category</option>
			                    </select>
							</div>
						</div>
						<div class="float-right">
							<img width="24" height="24" class="mr-3" src="img/sort_24.png">
							<img width="24" height="24" class="mr-3" src="img/filter_24.png">
							<img width="24" height="24" src="img/three_arrows_24.png">
						</div>
					</div>
					<div class="panel_card_list pr-5" id="scroll-bold">
						 <?php for($x = 0; $x <= 10; $x++) { ?>
							<div class="row py-4 panel_card_first_list">
								<div class="col-md-1 pr-0">
									<div class="cat_img">
										<img width="40" height="40" src="img/ailurophile_40.png">
									</div>
								</div>
								<div class="col-md-8">
									<div class="fw-500 mb-3">
										Lorem Ipsum is simply dummy 
										<img width="20" 
											 height="20" 
											 class="ml-2" 
											 src="img/hearts_20.png">
									</div>
									<div class="f_14 text-left mb-3 lh-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took...<a class=" text-default" href="#">Read More</a></div>
									<div class="row">
										<div class="col-md-5">
											<p class="f_13 mb-0 fw-500 d-inline-block">Skills Required: 
												<span class="text-default">Photoshop, Illustrator</span>
											</p>
											<p class="f_13 mb-0 mr-2 fw-500 d-inline-block">Prize: 
												<span class="text-default">$10-20</span>
											</p>
											<p class="f_13 mb-0 fw-500 d-inline-block">Time: 
												<span class="text-default">10-15 hrs/week</span>
											</p>
											<p class="f_13 mb-0 fw-500 d-inline-block">Proposal: 
												<span class="text-default">10</span>
											</p>
										</div>
										<div class="col-md-6 position-relative p-0">
											<span class="text-secondary position-absolute time f_13 float-right">
												5 min ago
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-3 p-0">
									<div class="row mt-4">
										<div class="col-md-4 p-0 text-center mt-3">
											<p class="m-0 fw-500">Budget</p>
											<p class="text-default fw-500 f_22">$100</p>
										</div>
										<div class="col-md-8 p-0 text-center mt-3">
											<a class="btn btn_main yellow_btn make_a_proposal" href="#">Make a Proposal</a>
										</div>
									</div>
								</div>
							</div><!--row.panel_card_first_list-->
						 <?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'panel-inc/footer.php';?>
