<?php include 'panel-inc/head.php';?>
<?php include 'panel-inc/header.php';?>
<section class="panel_section_1">
	<div class="container">
		<div class="row py-5">			
			<div class="col-md-12">
				<div class="panel_card_first reviews add_review">
					<div class="reviews_head pt-4">
						<h1 class="text-white text-center pt-5">REVIEWS</h1>
					</div>
					<div class="p-3">
						<div class="mb-3">
							<div class="row mt-5 mb-3 px-5">
				                  <div class="form-group col-md-5 px-4 py-2 m-auto">
				                    <input  type="text" 
						                    placeholder="John Doe" 
						                    class="form-control input_default input_disabled" 
						                    name=""
						                    disabled>
				                  </div>
				                  <div class="form-group col-md-5 px-4 py-2 m-auto">
				                    <input  type="text" 
						                    placeholder="johndoe@gmail.com" 
						                    class="form-control input_default input_disabled" 
						                    name=""
						                    disabled>
				                  </div>
				            </div>
				             <div class="row px-5">
			                	<div class="form-group col-md-5 px-4 py-2 m-auto">
				                    <input  type="text" 
						                    placeholder="Specify Title" 
						                    class="form-control input_default" 
						                    name="">
				                 </div>
			                   <div class="form-group col-md-5 px-4 py-2 m-auto">
			                   			<p class="d-inline-block m-0">Select Rating</p>
				                    	<span class="fa fa-star-o"></span>
										<span class="fa fa-star-o"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
			                  	</div>
			                </div>
			                <div class="row px-5 my-4">
			                	<div class="form-group col-md-11 px-4 py-2 m-auto">
			                		<textarea class="ml-1" rows="14" placeholder="Type your message here..." cols="115"></textarea>
		                			<!-- DO NOT GIVE SPACES BETWEEN textarea ELEMENT -->
			                	</div>
			                </div>
			                 <div class="row p-3 ">
			                	 <a class="btn m-auto btn-primary btn_main yellow_btn" href="#">Submit</a>
			                </div>
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
