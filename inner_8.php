<?php include 'panel-inc/head.php';?>
<?php include 'panel-inc/header.php';?>
<section class="panel_section_1">
	<div class="container">
		<div class="row py-5">			
			<div class="col-md-8">
				<div class="panel_card_first job_category p-4">
					<div>
						<p class="d-inline-block">Jobs/Category</p>
						<div class="float-right text-warning">
							Saved Job<img width="24" 
							      		  height="24" 
							      		  class="ml-2 mt--5" 
							      		  src="img/star2_24.png">
						</div>
					</div>
					<div class="my-3">
						<p class="text-default fw-500">Job Title Lorem Ipsum</p>
						<img class="banner_img" src="./img/OT1C7N0.png">
					</div>
					<div class="content d-flex flex-wrap mt-5">
						<div class="col-md-8 br_grey">
							<p class="f_14 fw-500">Details</p>
							<p class="f_13">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						</div>
						<div class="col-md-4">
							<ul class="p-0 f_13 mt-35 jobs_ul">
								<li><span>Category: </span>Lorem</li>
								<li><span>Skills Required: </span>Lorem, Dolor, Sit</li>
								<li><span>Project Offer: </span>$100-$200</li>
								<li><span>Date Posted: </span>15/04/2018</li>
								<li><span>Proposals: </span>Less than 5</li>
								<li><span>Last Viewed By Client: </span>7 min ago</li>
								<li><span>Invite Sent: </span>15</li>
							</ul>
						</div>
						<div class="col-md-12 mt-5 text-center">
							<a class="btn btn_main yellow_btn" href="#">Submit Proposal</a>
						</div>
						<div class="col-md-12 mt-5 c-pointer text-center f_12">
							View All Proposal <span class="fa fa-chevron-down"></span>
						</div>
					</div>
					
				</div>
			</div>
			<div class="col-md-4">
				<div class="row panel_card_second job_category_second">
					<div class="col-md-11 mx-auto mb-4">
						<div class="panel_card_second_1 row p-4">
							<div class="col-md-9 p-0 pt-2">
								<p class="text-default name pl-2">Lorem Ipsum</p>
								<p class="f_13 mb-0 fw-500 pl-2">Lorem Corporate Inc. City, State, India</p>								
							</div>
							<div class="col-md-3 p-0">
								<img class="rounded-circle" 
								 height="64" 
								 width="64" 
								 src="img/hugh_64.jpg">
							</div>
							<div class="col-md-12 text-center">
								<a class="btn btn_main yellow_btn" href="#">View Job Posted By Client</a>
							</div>
						</div>
					</div>
					<div class="col-md-11 mx-auto mb-2">
						<div class="panel_card_second_3 similar_jobs_third_card row p-4">
							<div class="col-md-9 p-0 pt-2">
								<p class="text-default name pl-2">Lorem Ipsum</p>
								<p class="f_13 mb-0 fw-500 pl-2">Based on the Job you search</p>
							</div>
							<div class="col-md-3 p-0">
								<img height="64" 
								 width="64" 
								 src="img/briefcase_64.png">
							</div>
							<div class="col-md-12">
								<ul class="mt-3" id="scroll">
									<?php for($x = 0; $x <= 10; $x++) { ?>
										<li>
											<div>
												<p class="mb-2 f_12 fw-500">Lorem Ipsum is simply dummy text of the printing
												</p>
												<p class="m-0 f_12 pl-3">
													Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br><a href="#" class="f_12 text-default">Read More</a>
												</p>
											</div>
										</li>
									<?php } ?>
								</ul>
							</div>
							<div class="col-md-12 text-center">
								<a class="btn btn_main yellow_btn" href="#">View More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'panel-inc/footer.php';?>
