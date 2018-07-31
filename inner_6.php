<?php include 'panel-inc/head.php';?>
<?php include 'panel-inc/header.php';?>
<section class="panel_section_1">
	<div class="container">
		<div class="row py-5">			
			<div class="col-md-12">
				<div class="panel_card_first post_a_job">
					<div class="post_a_job_head pt-4">
						<h1 class="text-white text-center pt-5">POST A JOB</h1>
					</div>
					<div class="post_a_job_content p-5">
						<div class="row p-3">
		                  <div class="form-group col-md-5 px-4 py-2 m-auto">
		                    <input type="text" placeholder="Job Name" class="form-control input_default" name="">
		                  </div>
		                   <div class="form-group col-md-5 px-4 py-2 m-auto">
		                    <select class="form-control input_default">
		                      <option>Select Job Type</option>
		                    </select>
		                  </div>
		                </div>
		                <div class="row p-3">
		                	<div class="form-group col-md-5 px-4 py-2 m-auto">
			                    <select class="form-control input_default">
			                      <option>Select Category</option>
			                    </select>
		                  	</div>
		                  <div class="form-group col-md-5 px-4 py-2 m-auto">
		                    <input type="text" placeholder="Price(Optional) $" class="form-control input_default" name="">
		                  </div>
		                </div>
		                <div class="row p-3">
		                	<div class="form-group col-md-5 px-4 py-2 m-auto">
			                    <select class="form-control input_default">
			                      <option>Select Category</option>
			                    </select>
		                  	</div>
		                   <div class="form-group col-md-5 px-4 py-2 m-auto input_default_file position-relative">
		                    <label for="post-a-job-image">Add Image (Optional)</label>
		                    <input  type="file" 
		                        id="post-a-job-image" 
		                        placeholder="Last Name" 
		                        class="form-control-file position-absolute" 
		                        name="">
		                  </div>
		                </div>
		                 <div class="row p-3">
		                	<div class="form-group col-md-5 px-4 py-2 mx-42 mb-0">
			                    <select class="form-control input_default">
			                      <option>Select Skills</option>
			                    </select>
		                  	</div>
		                </div>
		                 <div class="row p-3">
		                	<div class="form-group col-md-5 px-4 py-2 mx-42 mb-0">
		                		<textarea class="ml-1" rows="7" placeholder="Description" cols="42"></textarea>
		                		<!-- DO NOT GIVE SPACES BETWEEN textarea ELEMENT -->
		                	</div>
		                </div>
		                <div class="row p-3 ">
		                	 <a class="btn m-auto btn-primary btn_main yellow_btn" href="#">Post Job</a>
		                </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'panel-inc/footer.php';?>
