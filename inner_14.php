<?php include 'panel-inc/head.php';?>
<?php include 'panel-inc/header.php';?>
<section class="panel_section_1">
	<div class="container">
		<div class="row py-5">			
			<div class="col-md-12">
				<div class="panel_card_first height_750 pl-5 pr-2 py-4">
					<div class="pr-4 my-3">
						<div class="d-flex input_in_head">
							<div class="form-group col-md-4 position-relative">
								<input type="text" 
									   placeholder="Type Here..." 
									   class="form-control input_default" 
									   name="">
								<span class="fa fa-search position-absolute c-pointer"></span>
							</div>
							<div class="ml-auto">
								<img width="24" height="24" class="mr-3" src="img/sort_24.png">
								<img width="24" height="24" class="mr-3" src="img/filter_24.png">
								<img width="24" height="24" src="img/three_arrows_24.png">
							</div>
						</div>	
					</div>
					<div class="panel_card_list pr-5" id="scroll-bold">
						 <?php for($x = 0; $x <= 10; $x++) { ?>
							<div class="row py-5 panel_card_first_list">
								<div class="col-md-2 text-center p-0 f_12">
									<img width="64" height="64" class="rounded" src="img/jason_64.jpg"><br>
									Account #512
								</div>
								<div class="col-md-3">
									<div class="fw-500 mb-3">
										John Doe
										<img width="20" 
											 height="20" 
											 class="ml-2 mt--3" 
											 src="img/india.png">
									</div>
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
								<div class="col-md-5 p-0 d-flex flex-wrap">
									<div class="rates">
										<p>Completes Rate</p>
										<p class="f_22 text-default">100%</p>
									</div>
									<div class="rates">
										<p>Projects Completed</p>
										<p class="f_22 text-default">23%</p>
									</div>
									<div class="rates">
										<p>Added to Favroites</p>
										<img class="mt-2" src="./img/hearts_20.png">
									</div>
								</div>
								<div class="col-md-2 p-0 d-flex justify-content-center align-items-center">
									<div class="text-center">
										<a class="btn btn_main yellow_btn view_profile" href="#">View Profile</a>
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
