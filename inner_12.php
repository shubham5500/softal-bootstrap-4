<?php include 'panel-inc/head.php';?>
<?php include 'panel-inc/header.php';?>
<section class="panel_section_1">
	<div class="container">
		<div class="row py-5">			
			<div class="col-md-12">
				<div class="panel_card_first financial_account">
					<div class="customer_service_head pt-4">
						<h1 class="text-white text-center pt-5">CUSTOMER SERVICE</h1>
					</div>
					<div class="financial_account_content customer_service">
					<ul class="nav nav-tabs" role="tablist">
					    <li class="nav-item">
					      <a class="nav-link first active" data-toggle="tab" href="#new-ticket">NEW TICKET</a>
					    </li>
					    <li class="nav-item">
					      <a class="nav-link last" data-toggle="tab" href="#manage-ticket">MANAGE TICKET</a>
					    </li>
					</ul>
					  <!-- Tab panes -->
					  <div class="tab-content">
					    <div id="new-ticket" class="container tab-pane active position-relative">
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
				                    <select class="form-control input_default">
				                      <option>Select Department</option>
				                    </select>
			                  	</div>
			                   <div class="form-group col-md-5 px-4 py-2 m-auto">
				                    <select class="form-control input_default">
				                      <option>Select Priority</option>
				                    </select>
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
					    <div id="manage-ticket" class="container tab-pane fade">
					      <div class="row my-5 px-4">
					      	<div class="col-md-3">
					      		<div class="ticket_card red_card">
					      			<img src="./img/ticket_64.png">
					      			<div>
					      				<span class="f_30">01</span><br>
					      				<span class="f_14">New Tickets</span>
					      			</div>
					      		</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="ticket_card green_card">
					      			<img src="./img/chat_64.png">
					      			<div>
					      				<span class="f_30">02</span><br>
					      				<span class="f_14">New Replies</span>
					      			</div>
					      		</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="ticket_card yellow_card">
					      			<img src="./img/ticket_2_64.png">
					      			<div>
					      				<span class="f_30">02</span><br>
					      				<span class="f_14">Open Ticket</span>
					      			</div>
					      		</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="ticket_card blue_card">
					      			<img src="./img/ticket_3_64.png">
					      			<div>
					      				<span class="f_30">02</span><br>
					      				<span class="f_14">Resolved</span>
					      			</div>
					      		</div>
					      	</div>
					      </div>
					      <div class="row pl-5">
					      	<div class="panel_card_content customer_service_table row m-3" id="scroll-bold">
								<table class="table">
								  <thead>
								    <tr>
								      <th scope="col">S No.</th>
								      <th scope="col">TICKET ID</th>
								      <th scope="col">DEPARTMENT</th>
								      <th scope="col">PRIORITY</th>
								      <th scope="col">DATED CREATED</th>
								      <th scope="col">STATUS</th>
								      <th scope="col">VIEW</th>
								    </tr>
								  </thead>
								  <tbody>
								   <?php for($x = 0; $x <= 10; $x++) { ?>
									    <tr >
									      <td><?php echo(''+$x+1+'') ?></td>
									      <td>2131234723443</td>
									      <td>Lorem Ipsum is simply dummy text of the printing</td>
									      <td>High</td>
									      <td>12/12/2017</td>
									      <td>Completed</td>
									      <td><span class="fa fa-eye"></span></td>									     
									    </tr>
								   <?php } ?>
								  </tbody>
								</table>		
							</div>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'panel-inc/footer.php';?>
