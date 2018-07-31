<?php include 'panel-inc/head.php';?>
<?php include 'panel-inc/header.php';?>
<section class="panel_section_1">
	<div class="container">
		<div class="row py-5">			
			<div class="col-md-8">
				<div class="panel_card_first tech_mart">
					<div class="panel_card_head tech_mart_head text-center">
						<h2 class="text-white text-uppercase position-absolute">TECH MART</h2>
					</div>
					<div class="my_proposal row m-3">
						<div class="col-md-12 f_14 mt-2 fw-500">
							Client Name: John Doe <br>
							Client's Id: #420
						</div>
	                	<div class="form-group col-md-11 mx-auto my-4">
	                		<textarea class="mx-3" rows="12" placeholder="Type your message here..." cols="75"></textarea>
                			<!-- DO NOT GIVE SPACES BETWEEN textarea ELEMENT -->
	                	</div>	
	                	<div class="form-group col-md-6 px-3 py-2 ml-5">
		                    <input  type="text" 
				                    placeholder="Client's Name" 
				                    class="form-control input_default" 
				                    name="">
		                </div>
			            <div class="checkbox text-center mx-auto mt-3">
	                      <label>
	                        <input class="default_checkbox" type="checkbox" name="">
	                        Yes i understand and agree to the <a class="text-default" href="#">Tech Mart Terms of Services</a>
	                      </label>
	                    </div>
	                     <div class="col-md-12 text-center mt-4">
	                      <a class="btn btn-primary btn_main yellow_btn" href="#">Submit</a>
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
								<ul class="mt-3 my_jobs_ul tech_mart_ul" id="scroll">
									<?php for($x = 0; $x <= 10; $x++) { ?>
										<li class="row px-3 f_12">
											<div class="col-md-8">
												Lorem Ipsum is simply dummy text
											</div>
											<div class="col-md-3 p-0 text-right">
												<span class="fw-500 text-default">Active</span><br>
												<span>14/04/2017</span>
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
