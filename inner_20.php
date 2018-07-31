<?php include 'panel-inc/head.php';?>
<?php include 'panel-inc/header.php';?>
<section class="panel_section_1">
	<div class="container">
		<div class="row py-5">			
			<div class="col-md-12">
				<div class="panel_card_first workboard">
					<div class="workboard_head pt-4">
						<h1 class="text-white text-center pt-5">WORKBOARD</h1>
					</div>
					<div class="p-3">
						<div class="text-right p-3">
							<a class="btn btn_main yellow_btn" href="#">Write a Review</a>
						</div>
						<div class="workbord_table my-4 px-5" id="scroll-bold">
							<table class="table">
								  <thead>
								    <tr>
								      <th scope="col" colspan="1">S No.</th>
								      <th scope="col" colspan="1">EMPLOYER: GULF NEUROLOGY CENTER</th>
								      <th scope="col" colspan="4">WORKBOARD JOB TITLE: WEBSITE DESIGN(ID=92)</th>
								      <th scope="col" colspan="1">FREELANCE AKASH DIVYA</th>
								    </tr>
								    <tr>
								      <th scope="col" colspan="1"></th>
								      <th scope="col" colspan="1">EMPLOYER ASSIGNMENTS</th>
								      <th scope="col" colspan="2">EMPLOYER</th>
								      <th scope="col" colspan="2">FREELANCER</th>
								      <th scope="col" colspan="1">FREELANCER COMMENTS</th>
								    </tr>
								    <tr>
								      <th scope="col" colspan="1"></th>
								      <th scope="col" colspan="1"></th>
								      <th scope="col" colspan="1">APPROVE</th>
								      <th scope="col" colspan="1">DISAPPROVE</th>
								      <th scope="col" colspan="1">COMPLETE</th>
								      <th scope="col" colspan="1">INCOMPLETE</th>
								      <th scope="col" colspan="1"></th>
								    </tr>
								  </thead>
								  <tbody>
								   <?php for($x = 0; $x <= 20; $x++) { ?>
									    <tr >
									      <td colspan="1"></td>
									      <td colspan="1"></td>
									      <td colspan="1"></td>				     
									      <td colspan="1"></td>
									      <td colspan="1"></td>
									      <td colspan="1"></td>
									      <td colspan="1"></td>
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
