<?php include 'panel-inc/head.php';?>
<?php include 'panel-inc/header.php';?>
<section class="panel_section_1">
	<div class="container">
		<div class="row py-5">			
			<div class="col-md-8">
				<div class="panel_card_first chat_message_card">
					<div class="chat_message_card_head px-3 row py-3 m-0">
						<div class="col-md-2 pr-0">
							<img width="64"
							 height="64" 
							 class="rounded-circle" 	 
							 src="./img/jason_64.jpg">
						</div>
						<div class="col-md-7 mt-1 text-white f_14 pt-2 px-0">
							John Doe <br>
							<span class="f_12">Active</span>
						</div>
						<div class="col-md-3 pt-1">
							<img class="float-right mt-3 c-pointer" src="./img/more.png">
						</div>
					</div>
					<div class="chat_message_card_content p-3" id="scroll-grey">
						<!-- <div class="chatting_div d-flex flex-wrap">
							<div class="col-md-1">
								<img src="./img/user_32.png"
								 class="mt-1" 
								 height="32"
								 width="32">
							</div>
							<div class="col-md-9">
								Lorem Ipsum is simply 
							</div>							
							<span class="position-absolute">5 min ago</span>
						</div> -->
						<div class="col-md-12">
							<div class="media chatting_div_grey mr-auto">
							  <img class="align-self-start mr-2" src="./img/user_32.png"> 
							    <span>Cras sit amet nibh libero sit amet nibh libero sit amet nibh libero.</span>
							  <span class="position-absolute">5 min ago</span>
							</div>
						</div>
						<div class="col-md-12">
							<div class="media chatting_div_pink mr-auto">
							    <span>Cras sit amet nibh libero sit amet nibh libero sit amet nibh libero.</span>
							  <span class="position-absolute">5 min ago</span>
							</div>
						</div>
					</div>
					<div class="chat_message_card_footer d-flex">
						<div class="form-group col-md-11 position-relative">
							<input type="text" 
								   class="form-control message_input" 
								   placeholder="Type Here..." 
								   name="">
						</div>
						<div class="col-md-1 p-0 text-right">
							<div class="send_button"><img src="./img/send-button.png"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row panel_card_second">
					<div class="col-md-12 mx-auto mb-4">
						<div class="panel_card_second_1 chat_side_card pl-4 pr-2 py-4">
							<div class="col-md-12 mb-4	">
								<p class="border_left_yellow pl-2 fw-500 text-default">Recent Messages</p>
							</div>
							<div class="form-group col-md-12 position-relative">
								<input type="text" 
									   class="form-control chat_input" 
									   placeholder="Search Here..." 
									   name="">
								<span class="fa fa-search chat_search_fa position-absolute"></span>
							</div>
							<div class="chat_contact_list"  id="scroll-grey">
								<?php for($x = 0; $x <= 10; $x++) { ?>
									<div class="d-flex flex-wrap pt-3 border_bottom_blue">
										<div class="col-md-2">
											<img src="./img/user_32.png"
												 class="mt-1" 
												 height="32"
												 width="32"></div>
										<div class="col-md-7">
											<p class="text-default fw-500 m-0 f_14">John Doe</p>
											<p class="f_12 mb-2">Lorem Ipsum is simply</p>
										</div>
										<div class="col-md-3 text-done f_12 fw-500"><br>Active</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'panel-inc/footer.php';?>
