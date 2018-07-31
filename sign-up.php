<?php include 'landing-inc/head.php';?>
<?php include 'landing-inc/header.php';?>
  <section class="landing_section_1 sign_up_section_1">
      <div class="container-fluid">
          <div class="row ">
            <div class="col-md-9 m-auto head_section">
              <div class="row mt-200 mid_section">
                <div class="col-md-10 m-auto">
                  <h1 class="text-uppercase text-center">Sign Up</h1>
                  <p class="text-center sub_heading text-white">Choose the type of account below to proceed</p>
                </div>
              </div>
            </div>
          </div>
      </div>  
    </section>
    <section>
      <div class="container-fluid position-relative">
         <div class="row mb-5">
            <div class="col-md-8 m-auto">
              <form class="p-5 bg-white rounded signup_form_row">
                <div class="row pt-3 pb-5">
                  <div class="col-md-12 text-center">
                    <div>
                      <img width="64" height="64" class="rounded" src="img/user_blue_64.png">
                    </div>
                  </div>
                </div>
                <div class="row p-3">
                  <div class="form-group col-md-6 px-4">
                    <input type="text" placeholder="First Name" class="form-control input_default" name="">
                  </div>
                  <div class="form-group col-md-6 px-4">
                    <input type="text" placeholder="Last Name" class="form-control input_default" name="">
                  </div>
                </div>
                <div class="row p-3">
                  <div class="form-group col-md-6 px-4">
                    <input type="email" placeholder="Email" class="form-control input_default" name="">
                  </div>
                  <div class="form-group col-md-6 px-4 input_default_file position-relative">
                    <label for="profilePic">Choose your profile pic</label>
                    <input  type="file" 
                        id="profilePic" 
                        placeholder="Last Name" 
                        class="form-control-file position-absolute" 
                        name="">
                  </div>
                </div>
                <div class="row p-3">
                  <div class="form-group col-md-6 px-4">
                    <input type="password" placeholder="Password" class="form-control input_default" name="">
                  </div>
                  <div class="form-group col-md-6 px-4">
                    <input type="password" placeholder="Confirm Password" class="form-control input_default" name="">
                  </div>
                </div>
                <div class="row p-3">
                  <div class="form-group col-md-6 px-4">
                    <select class="form-control input_default">
                      <option>India</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6 px-4">
                    <select class="form-control input_default">
                      <option>+91</option>
                    </select>
                  </div>
                </div>
                <div class="row p-3">
                  <div class="form-group col-md-6 px-4">
                    <select class="form-control input_default">
                      <option>Select your best 5 skills</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6 px-4">
                    <input type="text" placeholder="Mobile Number" class="form-control input_default" name="">
                  </div>
                </div>
                <div class="row mt-5">
                  <div class="col-md-9 m-auto text-center terms_and_condition">
                      
                    <div class="checkbox">
                      <label>
                        <input class="default_checkbox" type="checkbox" name="">
                        Yes i understand and agree to the <a href="#">Softral Terms of Services</a>
                      </label>
                    </div>
                    <div class="text-center my-4">
                      <a class="btn btn-primary btn_main yellow_btn" href="#">Register</a>
                    </div>
                    <div>Already a member? <a class="text-warning" href="#">Login</a></div>
                  </div>
                </div>
              </form>
            </div>  
          </div>
      </div>
    </section>
<?php include 'landing-inc/footer.php';?>