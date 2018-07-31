<?php include 'panel-inc/head.php';?>
<?php include 'panel-inc/header.php';?>
<section class="panel_section_1">
	<div class="container">
		<div class="row py-5">			
			<div class="col-md-12">
				<div class="panel_card_first workboard">
					<div class="escrow_contract_head pt-4">
						<h1 class="text-white text-center pt-5">ESCROW CONTRACTS</h1>
					</div>
					<div class="p-3">
						<div class="escrow_contract_table my-4" id="scroll-bold">
							<table class="table">
								  <thead>
								    <tr>
								      <th scope="col">JOB TITLE</th>
								      <th scope="col">FREELANCER</th>
								      <th scope="col">PRICE</th>
								      <th scope="col">POSTED DATE</th>
								      <th>VIEW CONTRACTS</th>
								      <th>STATUS</th>
								      <th>VIEW INVOICE</th>
								      <th>EDIT</th>
								      <th>VIEW</th>
								      <th>DELETE</th>
								    </tr>
								  </thead>
								  <tbody>
								   <?php for($x = 0; $x <= 20; $x++) { ?>
									    <tr>
								    	  <td>Lorem Ipsum is simply dummy text</td>
								    	  <td>John Doe</td>
								    	  <td>$100</td>
									      <td>12/12/2017</td>
									      <td class="text-default">VIEW CONTACT</td>
									      <td>Funded</td>				     
									      <td><span class="fa fa-eye"></span></td>
									      <td><span class="fa fa-pencil"></span></td>
									      <td><span class="fa fa-eye"></span></td>
									      <td><span class="fa fa-trash"></span></td>
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
</section>
<?php include 'panel-inc/footer.php';?>
