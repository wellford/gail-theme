        <!--</div> end content -->

<!--</div>  
</div>-->

<footer class="footer" style="padding-bottom:0px;">
<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation" style="position:relative;">
  <div "container">
  <!-- Branding -->
  <div class="container">
    <div class="row" style="margin-bottom:20px;margin-top:20px;">
      <div class="col-md-3">
        <p>
          <a class="navbar-brand" href="/">
            <img src="<?php echo img('logoalpha.png', 'assets/img');?>" class="img-responsive" style="height:130%;width:auto;background-color:transparent;">
          </a>
          <a class="navbar-brand" href="/">
            the gail project
          </a>
        </p><br/><br/><br/>
        <p style="font-color:white;">
          An Okinawan-American Dialogue
        </p>
      </div>
      <div class="col-md-3">
        <p>
          <a href="#">About</a>
        </p>
        <p>
          <a href="#">Collections</a>
        </p>
        <p>
          <a href="#">Studio</a>
        </p>
        <p>
          <a href="#">Contribute</a>
        </p>
      </div>
      <div class="col-md-3">
        <p>
          Connect With Us
        </p>
        <div class="row">
          <div class="col-xs-3 col-sm-3 col-md-3">
            <a href="https://twitter.com/thegailproject">
              <img src="<?php echo img('twitter.png', 'assets/img');?>" class="img-responsive" style="max-height:150px;max-width:150px;height:70%;width:70%;background-color:transparent;">
            </a>    
          </div>
          <div class="col-xs-3 col-sm-3 col-md-3">
            <a href="https://www.facebook.com/TheGailProject/">
              <img src="<?php echo img('facebook.png', 'assets/img');?>" class="img-responsive" style="max-height:150px;max-width:150px;height:70%;width:70%;background-color:transparent;">
            </a>
          </div>
          <div class="col-xs-3 col-sm-3 col-md-3">
            <a href="https://www.instagram.com/thegailproject/">
              <img src="<?php echo img('insta.png', 'assets/img');?>" class="img-responsive" style="max-height:150px;max-width:150px;height:70%;width:70%;background-color:transparent;">
            </a>
          </div>
          <div class="col-xs-3 col-sm-3 col-md-3">
            <a href="https://medium.com/@TheGailProject">
              <img src="<?php echo img('medium.png', 'assets/img');?>" class="img-responsive" style="max-height:150px;max-width:150px;height:70%;width:70%;background-color:transparent;">
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <p>
          Subscribe for Updates
        </p>
        <form>
          <div class="input-group">
            <input type="email" class="form-control" id="email" placeholder="email" disabled="true">
            <!--<i class="glyphicon glyphicon glyphicon-menu-right" style="background-color:transparent;"></i>-->
          </div>
        </form>
      </div>
    </div>
  </div>
  
</div>
</div>
</footer><!-- end footer -->

</div><!-- end container -->


<!-- Le javascript -->
<!-- Placed at the end of the document so the pages load faster -->
<?php queue_js_file(array(
                     'bootstrap-transition',
                     'bootstrap-alert',
                     'bootstrap-modal',
                     'bootstrap-dropdown',
                     'bootstrap-scrollspy',
                     'bootstrap-tab',
                     'bootstrap-tooltip',
                     'bootstrap-popover',
                     'bootstrap-button',
                     'bootstrap-collapse',
                     'bootstrap-carousel',
                     'bootstrap-typeahead')); ?>
<!-- JavaScripts -->
<script type="text/javascript">
    jQuery(document).ready(function(){
        Omeka.showAdvancedForm();
               Omeka.dropDown();
    });
</script>

<?php echo head_js(); ?>

</body>
</html>
