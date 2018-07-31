<?php include 'panel-inc/head.php';?>
<?php include 'panel-inc/header.php';?>
<section class="panel_section_1">
	<div class="container">
		<div class="row py-5">			
			<div class="col-md-8">
				<div class="panel_card_first pl-5 pr-2 py-4">
					<div class="pr-4">
						<p class="d-inline-block">News Feeds</p>
						<div class="float-right">
							<img class="mr-3" src="img/sort_24.png">
							<img class="mr-3" src="img/filter_24.png">
							<img src="img/three_arrows_24.png">
						</div>
					</div>
					<div class="panel_card_list pr-5" id="scroll-bold">
						 <?php for($x = 0; $x <= 10; $x++) { ?>
							<div class="row py-4 panel_card_first_list">
								<div class="col-md-2 pr-0">
									<div class="cat_img">
										<img width="40" height="40" src="img/ailurophile_40.png">
									</div>
								</div>
								<div class="col-md-10 pl-0">
									<div class="fw-500 mb-3">
										Lorem Ipsum is simply dummy 
										<img width="20" 
											 height="20" 
											 class="ml-2" 
											 src="img/hearts_20.png">
									</div>
									<div class="f_14 text-left mb-3 lh-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took...<a class=" text-default" href="#">Read More</a></div>
									<div class="col-md-5 p-0">
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
									<span class="text-secondary f_13 float-right">5 min ago</span>
								</div>
							</div><!--row.panel_card_first_list-->
						 <?php } ?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row panel_card_second">
					<div class="col-md-11 mx-auto mb-4">
						<div class="panel_card_second_1 row p-4">
							<div class="col-md-9 p-0 pt-2">
								<p class="text-default name pl-2">Lorem Ipsum</p>
								<p class="f_13 mb-0 fw-500 pl-2">Hours Worked: 120hrs</p>
								<p class="f_13 mb-0 fw-500 pl-2">Project Completed: 15</p>
							</div>
							<div class="col-md-3 p-0">
								<img class="rounded-circle" 
								 height="64" 
								 width="64" 
								 src="img/hugh_64.jpg">
							</div>
							<div class="col-md-12 text-center">
								<a class="btn btn_main yellow_btn" href="#">View Profile</a>
							</div>
						</div>
					</div>
					<div class="col-md-11 mx-auto mb-4">
						<div class="panel_card_second_2 row p-4">
							<div class="col-md-9 p-0 pt-2">
								<p class="text-default name pl-2">Lorem Ipsum</p>
								<p class="f_13 mb-0 fw-500 pl-2">Current Balance: $100</p>
								<p class="f_13 mb-0 fw-500 pl-2">Bank Account: Active</p>
							</div>
							<div class="col-md-3 p-0">
								<img height="64" 
								 width="64" 
								 src="img/bank_64.png">
							</div>
							<div class="col-md-12 text-center">
								<a class="btn btn_main yellow_btn" href="#">View Account</a>
							</div>
						</div>
					</div>
					<div class="col-md-11 mx-auto mb-2">
						<div class="panel_card_second_3 row p-4">
							<div class="col-md-9 p-0 pt-2">
								<p class="text-default name pl-2">Lorem Ipsum</p>
								<p class="f_13 mb-0 fw-500 pl-2">Graphic Designer</p>
								<p class="f_13 mb-0 fw-500 pl-2">Experience: 6yrs</p>
							</div>
							<div class="col-md-3 p-0">
								<img height="64" 
								 width="64" 
								 src="img/design_skills_64.png">
							</div>
							<div class="col-md-12">
								<ul class="star_ul mt-3" id="scroll">
									<li>Lorem Ipsum</li>
									<li>Lorem Ipsum</li>
									<li>Lorem Ipsum</li>
									<li>Lorem Ipsum</li>
									<li>Lorem Ipsum</li>
									<li>Lorem Ipsum</li>
									<li>Lorem Ipsum</li>
								</ul>
							</div>
							<div class="col-md-12 text-center">
								<a class="btn btn_main yellow_btn" href="#">Add More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'panel-inc/footer.php';?>
