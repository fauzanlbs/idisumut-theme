<?php
get_header();
?>
<!-- START CONTACT SECTION -->
<section class="container container-fixed-lg p-t-65 p-b-100  sm-p-b-30 sm-m-b-30">
        <div class="row">
          <div class="col-md-6">
            <h2></h2>
            <div class="p-r-40 sm-p-r-0">
              <div class="panel" id="contact-panel">
                <p class="semi-bold no-margin"></p>
                <form role="form" autocomplete="off" class="m-t-15" id="contact-form" action="_lib/mail.php" method="post">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group form-group-default required">
                        <label class="control-label">First name</label>
                        <input type="text" name="name" class="form-control" required="">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group form-group-default">
                        <label class="control-label">Last name</label>
                        <input type="text" name="last-name" class="form-control" required="">
                      </div>
                    </div>
                  </div>
                  <div class="form-group form-group-default">
                    <label class="control-label">Email</label>
                    <input type="email" name="email" placeholder="This can be changed later" class="form-control" required="">
                  </div>
                  <div class="form-group form-group-default">
                    <label class="control-label">Message</label>
                    <textarea name="message" placeholder="Type the message you wish to send" style="height:100px" class="form-control" required=""></textarea>
                  </div>
                  
                  <button class="btn btn-primary font-montserrat all-caps fs-12 xs-pull-left">Kirim</button>
                  
                  
                  <!-- <div class="sm-p-t-10 clearfix">
                    <p class="pull-left small hint-text m-t-5 font-arial"> </p>
                   
                  </div>
                  <div class="clearfix"></div> -->
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="visible-xs visible-sm b-b b-grey-light m-t-35 m-b-30"></div>
            <div class="p-l-40 sm-p-l-0 sm-p-t-10">
              <h3></h3>
              <p></p>
              <br>
              <div class="row">
                <div class="col-sm-6">
                  <h5 class="block-title hint-text m-b-0">Medan </h5>
                  <address class="m-t-10">123123
                                <br> Jl Merak 123
                                <br> Halat</address>
                  <br>
                  <p class="hint-text no-margin"><span class="fs-12 font-montserrat bold all-caps p-r-10">Tel</span> <span class="fs-14">(061) 412-7766</span></p>
                  <p class="hint-text"><span class="fs-12 font-montserrat bold all-caps p-r-10">Fax</span> <span class="fs-14">(061) 412-7766</span></p>
                </div>
                <div class="col-sm-6">
                  <h5 class="block-title hint-text m-b-0">Medan </h5>
                  <address class="m-t-10">123123
                                <br> Jl Merak 123
                                <br> Halat</address>
                  <br>
                  <p class="hint-text no-margin"><span class="fs-12 font-montserrat bold all-caps p-r-10">Tel</span> <span class="fs-14">(061) 412-7766</span></p>
                  <p class="hint-text"><span class="fs-12 font-montserrat bold all-caps p-r-10">Fax</span> <span class="fs-14">(061) 412-7766</span></p>
                </div>
              </div>
              <br>
              <h5 class="block-title hint-text m-b-0"> </h5>
              <br>
              <div class="row">
                <div class="col-sm-6">
                  <p class="fs-12 font-montserrat bold all-caps no-margin hint-text">Email 1</p>
                  <p class="hint-text no-margin fs-14">admin@idisumut.or.id</p>
                </div>
                <div class="col-sm-6">
                  <p class="fs-12 font-montserrat bold all-caps no-margin hint-text">Email 2</p>
                  <p class="hint-text no-margin fs-14">admin@idisumut.or.id</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END CONTACT SECION -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.039299855792!2d98.64227991475846!3d3.578443097395903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312f2ee49165a1%3A0x9998ffc52a988504!2sIDI%20Wilayah%20Sumatera%20Utara!5e0!3m2!1sen!2smy!4v1679110273747!5m2!1sen!2smy" width="1260" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
</iframe>
<?php 

get_footer();
?>