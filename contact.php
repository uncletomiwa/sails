<?php $title="contact Us"; include "partials/nav.php";?>
    <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>Contact us</h1>
        </div>
        <div class="row-fluid">
          <!-- Start: CONTACT US FORM -->
          <div class="span4 offset1">
            <div class="page-header">
              <h2>Quick message</h2>
            </div>
            <form class="form-contact-us">
              <div class="control-group">
                <div class="controls">
                  <input type="text" id="inputName" placeholder="Name">
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <input type="text" id="inputEmail" placeholder="Email">
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <textarea id="inputMessage" placeholder="Message"></textarea>
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <input type="submit" class="btn btn-primary btn-large" value="Send">
                </div>
              </div>
            </form>
          </div>
          <!-- End: CONTACT US FORM -->
          <!-- Start: OFFICES -->
          <div class="span5 offset1">
            <div class="page-header">
              <h2>Offices</h2>
            </div>
            <h3>Head Office</h3>
            <div>
              <address class="pull-left">
                <strong>2nd FLOOR, 314 <br/> HERBERT MACAULAY,<br>STREET<br> SABO-YABA, LAGOS</strong><br>
              </address>
              <div class="pull-right">
                <div class="bottom-space">
                  <i class="icon-phone icon-large"></i> +234-702-982-4674
                  <i class="icon-phone icon-large"></i> +234-702-982-4658
                </div>
                <a href="mailto:info@secadams.com" class="contact-mail">
                  <i class="icon-envelope icon-large"></i>
                </a> info@secadams.com
              </div>
              <div class="clearfix"></div>
            </div>
            <hr>
            <h3>Calabar Office</h3>
            <div>
              <address class="pull-left">
                <strong>NO 2, ESSIEN ABASI STREET,<br>
			SPRING ROAD, ESSIEN TOWN<br>
			CALABAR, CROSS RIVERS STATE</strong><br>
              </address>
              <div class="pull-right">
                <div class="bottom-space">
                  <i class="icon-phone icon-large"></i> +234-802-364-1412
                </div>
                <a href="mailto:projects@secondadams.com" class="contact-mail">
                  <i class="icon-envelope icon-large"></i>
                </a> projects@secondadams.com
              </div>
              <div class="clearfix"></div>
            </div>
            <h3>WARRI OFFICE</h3>
            <div>
              <address class="pull-left">
                <strong>BLOCK 1, SUITE 1 
			EDEWOR SHOPPING CENTRE
			EFFURUN SAPELE ROAD
			 WARRI</strong><br>
              </address>
              <div class="clearfix"></div>
            </div>
          </div>
          <!-- End: OFFICES -->
        </div>
      </div>
    </div>
<?php include "partials/footer.php"; ?>