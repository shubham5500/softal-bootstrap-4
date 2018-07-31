<?php include 'landing-inc/head.php';?>
<?php include 'landing-inc/header.php';?>
    <section class="landing_section_1">
      <div class="container-fluid">
          <div class="row ">
            <div class="col-md-9 m-auto head_section">
              <div class="row mt-200 mid_section">
                <div class="col-md-10 m-auto">
                  <h1 class="text-uppercase text-center">great freelancer <br>for your dream project</h1>
                </div>
              </div>
              <div class="row mt-4">
                  <div class="col-md-6 m-auto">
                    <a class="btn btn-primary btn_main white_btn float-left" href="#">Find a Job</a>
                    <a class="btn btn-primary btn_main white_btn float-right" href="#">Post a Job</a>
                  </div>
              </div>
            </div>
          </div>
      </div>  
    </section>
    <section class="landing_section_2">
        <div class="container">
          <div class="row mt-5 ml-50">
            <div class="col-md-6">
              <p class="heading">Why Us?</p>
              <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
              <br><br>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
              </p>
              <ul class="star_ul">
                <li>Donec interdum lacus quis arcu fermentum sollicitudin.</li>
                <li>Proin semper mi rutrum ipsum gravida porta.</li>
                <li>Duis consectetur lacus congue velit fringilla iaculis.</li>
              </ul>
            </div>
            <div class="col-md-6 mt-5 pv-50">
              <iframe width="100%" height="250" src="https://www.youtube.com/embed/fKopy74weus" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
        </div>
    </section>
    <section class="landing_section_3">
      <div class="container">
        <div class="row position-relative carousel_row">
          <div class="col-md-9 m-auto heading">
            <p class="text-center ">Select Project Type</p>
          </div>
          <div class="col-md-9 m-auto" id="landing_section_3">
            <?php for($x = 0; $x <= 10; $x++) { ?>              
                <div class="carousel_items">
                  <div class="carousel_card">
                    <div class="carousel_card_head">
                       <img class="mt-32" src="img/coding_64.png">
                    </div>
                     <div class="carousel_card_body p-3 text-center">
                      <p class="text-center text-uppercase pt-1 pb-1">Coding</p>
                      <p class="text-justify pl-2 pr-2">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                      </p>
                       <a class="btn btn-primary btn_main blue_btn mt-2" href="#">
                        Select
                      </a>
                    </div>
                  </div>
                </div>
            <?php } ?>
               
          </div>
          <a class="prevSlider indexSliderController position-absolute"><img src="img/prev.png"></a>
          <a class="nextSlider indexSliderController position-absolute"><img src="img/next.png"></a>
        </div>
      </div>
    </section>
    <section class="landing_section_4">
        <div class="container-fluid">
          <div class="row pt-5 mb-5">
            <div class="col-md-12 heading mb-3">
              <p class="text-center ">Our Partners</p>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-2 ml_10p p-0 text-center">
                    <div class="ourpartner_card">
                      <div class="ourpartner_card_head">
                      </div>
                      <div class="ourpartner_card_foot">
                        Lorem Ipsum is simply dummy
                      </div>
                    </div>
                  </div>
                 <?php for($x = 0; $x < 4; $x++) { ?>
                  <div class="col-md-2 p-0 text-center">
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
    <section class="landing_section_5">
      <div class="container-fluid">
        <div class="row pt-5 pb-5">
          <div class="col-md-12">
            <p class="text-center m-0 c-w-f-500">Top Talent</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 m-auto">
            <div class="row">
              <div class="col-md-2">
              <ul class="footer_list">
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
              </ul>
            </div>
            <div class="col-md-2">
              <ul class="footer_list">
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
              </ul>
            </div>
            <div class="col-md-2">
              <ul class="footer_list">
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
              </ul>
            </div>
            <div class="col-md-2">
              <ul class="footer_list">
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
              </ul>
            </div>
            <div class="col-md-2">
              <ul class="footer_list">
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
              </ul>
            </div>
            <div class="col-md-2">
              <ul class="footer_list">
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Lorem Ipsum</a></li>
              </ul>
            </div>
            </div>  
          </div>
        </div>
      </div>
    </section>
<?php include 'landing-inc/footer.php';?>
   