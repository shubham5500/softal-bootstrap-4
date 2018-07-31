<?php include 'panel-inc/head.php';?>
<?php include 'panel-inc/header.php';?>
<section class="panel_section_1">
	<div class="container">
		<div class="row py-5">			
			<div class="col-md-12">
				<div class="panel_card_first about_us">
					<div class="pt-4 about_us_head">
						<h1 class="text-white text-center pt-5">ABOUT US</h1>
					</div>
					<div class="px-5 pt-5 pb-4 about_us_content">
						<p class="px-5 f_14">
							It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
						</p>
						<p class="px-5 f_14">
							There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
						</p>
					</div>
					<div class="col-6 m-auto">
	                      <iframe class="align-content-center" width="560" height="315" src="https://www.youtube.com/embed/fKopy74weus" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
		<div class="row about_us_sponser pt-5 mb-5">
            <div class="col-md-12 heading mb-3">
              <p class="text-center f_18 fw-500 text-default">Our Partners</p>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-2 m-auto p-0 text-center">
                    <div class="ourpartner_card">
                      <div class="ourpartner_card_head">
                      </div>
                      <div class="ourpartner_card_foot">
                        Lorem Ipsum is simply dummy
                      </div>
                    </div>
                  </div>
                 <?php for($x = 0; $x < 4; $x++) { ?>
                  <div class="col-md-2 m-auto p-0 text-center">
                    <div class="ourpartner_card">
                      <div class="ourpartner_card_head">
                      </div>
                      <div class="ourpartner_card_foot">
                        Lorem Ipsum is simply dummy
                      </div>
                    </div>
                  </div>
                  <?php } ?>
              </div>
            </div>
          </div>
	</div>
</section>
<?php include 'panel-inc/footer.php';?>
