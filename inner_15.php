<?php include 'panel-inc/head.php';?>
<?php include 'panel-inc/header.php';?>
<section class="panel_section_1">
	<div class="container">
		<div class="row py-5">			
			<div class="col-md-8">
				<div class="panel_card_first pl-5 pr-2 py-4">
					<div class="pr-4">
						<p class="d-inline-block text-default fw-500">My Notifications</p>
						<div class="float-right text-default f_14 c-pointer fw-500">
							Clear All<img class="ml-3 mt--3" src="img/cancel_16.png">
						</div>
					</div>
					<div class="panel_card_list pr-5" id="scroll-bold">
						<?php for($x = 0; $x <= 10; $x++) { ?>
						 <div class="row py-3 notification_div border_bottom_blue">
						 	<div class="col-md-12 mb-2 f_15 fw-500">Lorem Ipsum is simply dummy text 
							 	<p class="f_12 dot d-inline-block m-0 ml-4 position-relative time">
							 		5 min ago
							 	</p>
						 	</div>
						 	<div class="col-md-11 f_14 pr-0">
						 		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s took... 
						 		<span class="text-default c-pointer">Read More</span>
						 	</div>
						 	<div class="col-md-1 pl-0"><img class="ml-3 mt--3 c-pointer" src="img/cancel_16.png"></div>
						 </div>
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
