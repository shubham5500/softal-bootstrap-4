<?php include 'panel-inc/head.php';?>
<?php include 'panel-inc/header.php';?>
<section class="panel_section_1">
	<div class="container">
		<div class="row py-5">			
			<div class="col-md-12">
				<div class="panel_card_first settings">
					<div class="pt-4 settings_head">
						<h1 class="text-white text-center pt-5">SETINGS</h1>
					</div>
          <form class="settings_content py-4 px-5">
              <div class="row mb-5">
                <img width="200"
                     height="200" 
                     class="rounded-circle m-auto img_border" 
                     src="./img/hugh_220.jpg">
              </div>
              <div class="row mb-3 p-3">
                <div class="col-md-12 mb-2">
                  <p class="text-default fw-500 text-center">Profile Details</p>
                </div>
                  <div class="form-group col-md-5 px-4 py-2 m-auto">
                    <input type="text" placeholder="First Name" class="form-control input_default" name="">
                  </div>
                  <div class="form-group col-md-5 px-4 py-2 m-auto">
                    <input type="text" placeholder="Last Name" class="form-control input_default" name="">
                  </div>
              </div>
              <div class="row px-3 py-1">
                <div class="col-md-12 mb-2">
                  <p class="text-default fw-500 text-center">Address</p>
                </div>
                  <div class="form-group col-md-5 px-4 py-2 m-auto">
                    <input type="text" placeholder="Building" class="form-control input_default" name="">
                  </div>
                  <div class="form-group col-md-5 px-4 py-2 m-auto">
                    <input type="text" placeholder="Land Mark" class="form-control input_default" name="">
                  </div>
              </div>
               <div class="row px-3 py-1">
                  <div class="form-group col-md-5 px-4 py-2 m-auto">
                    <input type="text" placeholder="City" class="form-control input_default" name="">
                  </div>
                  <div class="form-group col-md-5 px-4 py-2 m-auto">
                    <input type="text" placeholder="State" class="form-control input_default" name="">
                  </div>
              </div>
              <div class="row px-3 py-1 mb-5">
                  <div class="form-group col-md-5 px-4 py-2 m-auto">
                    <input type="text" placeholder="Country" class="form-control input_default" name="">
                  </div>
                  <div class="form-group col-md-5 px-4 py-2 m-auto">
                    <input type="text" placeholder="Zip/Post Code" class="form-control input_default" name="">
                  </div>
              </div>
               <div class="row mb-5 px-3 py-1">
                <div class="col-md-12 mb-2">
                  <p class="text-default fw-500 text-center">Contact Info</p>
                </div>
                  <div class="form-group col-md-5 px-4 py-2 m-auto">
                    <input type="email" placeholder="Email" class="form-control input_default" name="">
                  </div>
                  <div class="form-group col-md-5 px-4 py-2 m-auto">
                    <input type="number" placeholder="Mobile Number" class="form-control input_default" name="">
                  </div>
              </div>
              <div class="row p-3 pb-5 border_bottom_blue">
                 <a class="btn m-auto btn-primary btn_main yellow_btn" href="#">Save</a>
              </div>
              <div class="row my-5 px-3 py-1">
                  <div class="col-md-12 mb-2">
                    <p class="text-default fw-500 text-center">Time Zone</p>
                  </div>
                  <div class="form-group col-md-11 m-auto px-4 py-2">
                    <select class="form-control input_default">
                      <option>Select Time Zone</option>
                    </select>
                  </div>
              </div>
              <div class="row px-3 py-1">
                <div class="col-md-4 text-center">
                  <p class="text-default m-0">Send Mail Notification</p>
                  <input type="checkbox" id="id-name--1" name="set-name" class="switch-input">
                    <label for="id-name--1" class="switch-label">
                      <span class="toggle--on">ON</span><span class="toggle--off">OFF</span>
                    </label>
                </div>
                <div class="col-md-4 text-center">
                  <p class="text-default m-0">All Notification</p>
                  <input type="checkbox" id="id-name--2" name="set-name" class="switch-input">
                    <label for="id-name--2" class="switch-label">
                      <span class="toggle--on">ON</span><span class="toggle--off">OFF</span>
                    </label>
                </div>
                <div class="col-md-4 text-center">
                  <p class="text-default m-0">Job Post Notification</p>
                  <input type="checkbox" id="id-name--3" name="set-name" class="switch-input">
                    <label for="id-name--3" class="switch-label">
                      <span class="toggle--on">ON</span><span class="toggle--off">OFF</span>
                    </label>
                </div>
              </div>
              <div class="row p-3 pb-5 border_bottom_blue">
                 <a class="btn m-auto btn-primary btn_main yellow_btn" href="#">Save</a>
              </div>
              <div class="row my-5 px-3 py-1">
                <div class="col-md-12 mb-2">
                  <p class="text-default fw-500 text-center">Password</p>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-group col-md-5 px-4 py-2 m-auto">
                    <input type="password" placeholder="Old Password" class="form-control input_default" name="">
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-group col-md-5 px-4 py-2 m-auto">
                    <input type="password" placeholder="New Password" class="form-control input_default" name="">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group col-md-5 px-4 py-2 m-auto">
                    <input type="password" placeholder="Confirm Password" class="form-control input_default" name="">
                  </div>
                </div>
              </div>
              <div class="row p-3 pb-5">
                 <a class="btn m-auto btn-primary btn_main yellow_btn" href="#">Save</a>
              </div>
          </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'panel-inc/footer.php';?>
