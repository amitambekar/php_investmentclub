<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="wrapper">
<?php $this->view('frontend/includes/header'); ?>
  <div id="banner">
    <div class="bnr-sec">
      <ul class="bxslider">
        <li><img src="<?= base_url(); ?>assets/frontend/images/banner-1.jpg" style="width:100%; height:250px">
          <div class="caption-sec">
            <h3>what can we do for you? </h3>
            <p>There Is Life After Debt. Let Us Help You Get There.</p>
            <!--<a href="#">Learn More</a>-->
            <div class="clear"></div>
          </div>
        </li>
        <li><img src="<?= base_url(); ?>assets/frontend/images/banner-2.jpg" style="width:100%; height:250px">
          <div class="caption-sec">
            <h3>Lorem Ipsum is simpl</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus</p>
            <!--<a href="#">Learn More</a>-->
            <div class="clear"></div>
          </div>
        </li>
      </ul>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>

<div class="textsec">
    <div class="container">
        <h1>COMING SOON</h1>
    </div>
</div>  
</div>
  <?php $this->view('frontend/includes/footer'); ?>
  </div>
</div>
<script>
$(document).ready(function(){
  $('.bxslider').bxSlider();
});
</script>
</body>
</html>