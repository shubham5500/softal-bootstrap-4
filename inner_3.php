<?php include 'panel-inc/head.php';?>
<?php include 'panel-inc/header.php';?>
<section class="panel_section_1">
	<div class="container">
		<div class="row py-5">			
			<div class="col-md-8">
				<div class="panel_card_first">
					<div class="panel_card_head text-center">
						<h2 class="text-white text-uppercase position-absolute">MY PROPOSAL</h2>
					</div>
					<div class="panel_card_content my_proposal row m-3" id="scroll-bold">
						<table class="table proposal_table" >
						  <thead>
						    <tr>
						      <th scope="col">JOB TITLE</th>
						      <th scope="col">PRICE</th>
						      <th scope="col">MY PROPOSAL</th>
						      <th scope="col">EDIT</th>
						      <th scope="col">VIEW</th>
						      <th scope="col">VIEW CONTACT</th>
						      <th scope="col">DELETE</th>
						    </tr>
						  </thead>
						  <tbody>
						   <?php for($x = 0; $x <= 10; $x++) { ?>
							    <tr >
							      <td>Lorem Ipsum is a text.</td>
							      <td>$100</td>
							      <td>$120</td>
							      <td><span class="fa fa-pencil"></span></td>
							      <td><span class="fa fa-eye"></span></td>
							      <td>VIEW CONTACT</td>
							      <td><span class="fa fa-trash"></span></td>
							    </tr>
						   <?php } ?>
						  </tbody>
						</table>		
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
