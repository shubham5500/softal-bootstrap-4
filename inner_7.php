<?php include 'panel-inc/head.php';?>
<?php include 'panel-inc/header.php';?>
<section class="panel_section_1">
	<div class="container">
		<div class="row py-5">			
			<div class="col-md-12">
				<div class="panel_card_first financial_account">
					<div class="financial_account_head pt-4">
						<h1 class="text-white text-center pt-5">POST A JOB</h1>
					</div>
					<div class="financial_account_content">
					 <ul class="nav nav-tabs" role="tablist">
					    <li class="nav-item">
					      <a class="nav-link active" data-toggle="tab" href="#accounts">ACCOUNTS</a>
					    </li>
					    <li class="nav-item">
					      <a class="nav-link" data-toggle="tab" href="#withdraw">WITHDRAW</a>
					    </li>
					    <li class="nav-item">
					      <a class="nav-link" data-toggle="tab" href="#deposite">DEPOSIT MONEY</a>
					    </li>
					    <li class="nav-item">
					      <a class="nav-link" data-toggle="tab" href="#f_transaction">FINANCIAL TRANSACTION</a>
					    </li>
					    <li class="nav-item">
					      <a class="nav-link last" data-toggle="tab" href="#f_activities">FINANCIAL ACTIVITIES</a>
					    </li>
					  </ul>

					  <!-- Tab panes -->
					  <div class="tab-content">
					    <div id="accounts" class="container tab-pane active position-relative">
					    <div class="d-inline-block edit_detail position-absolute f_14">
					    	Edit Details<span class="fa fa-pencil ml-2"></span>
					    </div>
					      <div class="row p-5">
					      	<div class="col-md-6 border_right_blue mt-5">
					      		<div class="row">
					      			<div class="col-md-12 mb-5">
					      				<div class="back_account">
					      					<span class="legend px-2">
				      						   <img width="16" 
						      						height="16" 
						      						class="mx-1" 
						      						src="./img/bank-building_16.png">
					      						Bank Account #1
					      					</span>
				      						<img width="64" 
						      					 height="64" 
						      					 src="./img/banks_64.png" 
						      					 class="bank float-left">
				      						<ul class="p-0 ml-100">
				      							<li>Name: John Doe</li>
				      							<li>Bank: Lorem Ipsum City Bank</li>
				      							<li>Account No.: 1234-XXXX-1234-XXXX</li>
				      							<li>IFSC Code: 12121SHVJVDD</li>
				      							<li>Branch: City, State, Country</li>
				      						</ul>
					      				</div>
					      			</div>
					      			<div class="col-md-12">
					      				<div class="back_account">
					      					<span class="legend px-2">
					      						<img width="16" 
					      						     height="16" 
					      						     class="mx-1" 
					      						     src="./img/bank-building_16.png">
					      						Bank Account #2
					      					</span>
				      						<img width="64" 
				      							 height="64" 
				      							 src="./img/banks_64.png" 
				      							 class="bank float-left">
				      						<ul class="p-0 ml-100">
				      							<li>Name: John Doe</li>
				      							<li>Bank: Lorem Ipsum City Bank</li>
				      							<li>Account No.: 1234-XXXX-1234-XXXX</li>
				      							<li>IFSC Code: 12121SHVJVDD</li>
				      							<li>Branch: City, State, Country</li>
				      						</ul>
					      				</div>
					      			</div>
					      		</div>
					      	</div>
					      	<div class="col-md-6 mt-4">
					      		<div class="col-md-12 mb-4">
					      			<div class="credit_cards">
					      				<p class="f_14 mb-2">
					      					<span class="fa fa-credit-card-alt mr-2"></span>Credit Card #1
					      				</p>
					      				<img width="261" 
							      			 height="150" 
							      			 src="./img/visa_brown_150.png">
					      			</div>
					      		</div>
					      		<div class="col-md-12">
					      			<div class="credit_cards">
					      				<p class="f_14 mb-2">
					      					<span class="fa fa-credit-card-alt mr-2"></span>Credit Card #1
					      				</p>
					      				<img width="261" 
							      			 height="150"
							      			 src="./img/visa_blue_150.png">
					      			</div>
					      		</div>
					      	</div>
					      	<div class="col-md-12 mt-5">
					      		<div class="paypal m-auto">
					      			<span class="legend">
					      				<img width="118" 
					      					 height="40" 
					      					 src="./img/paypal_15.jpg">
					      			</span>
					      			<ul class="p-0 m-0 mt-3">
		      							<li>Name: John Doe</li>
		      							<li>Paypal Link: <a class="text-default" href="#">paypal.com</a></li>
				      				</ul>
					      		</div>
					      	</div>
					      </div>
					    </div>
					    <div id="withdraw" class="container tab-pane fade">
					      <h3>Menu 1</h3>
					      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					    </div>
					    <div id="deposite" class="container tab-pane fade">
					      <h3>Menu 2</h3>
					      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
					    </div>
					    <div id="f_transaction" class="container tab-pane fade">
					      <h3>Menu 3</h3>
					      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
					    </div>
					    <div id="f_activities" class="container tab-pane fade">
					      <h3>Menu 4</h3>
					      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
					    </div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'panel-inc/footer.php';?>
