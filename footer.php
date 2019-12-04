<footer class="mainFooter color3bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-6 col-12 footCol">
        <img class="footLogo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/brescia_logo.svg" alt="brescia university college" width="251" height="91">
        <p>1285 Western Road<br>
          London, Ontario, Canada N6G 1H2<br>
          <a class="phone" href="tel:5194328353">519.432.8353</a></p>

        <p>Affiliated with <a href="https://www.uwo.ca/">Western University</a>.</p>
      </div>

      <div class="col-lg-4 col-sm-6 col-12 footCol">
        <h2>Resources</h2>

        <!-- <ul class="footList">
          <li><a href="#">Webmail</a></li>
          <li><a href="#">Library</a></li>
          <li><a href="#">Directory</a></li>
          <li><a href="#">Employment</a></li>
          <li><a href="#">Accessibility</a></li>
          <li><a href="#">Communications</a></li>
        </ul> -->
        <?php wp_nav_menu( array( 'menu' => 'Resources', 'container' => '', 'menu_class' => 'footList') ); ?>

      </div>

      <div class="col-lg-4 col-sm-12 col-12 footCol text-center">

        <h2>Connect With Us</h2>

        <ul class="social footSocial list-inline">

          <li class="in list-inline-item">
            <a href="http://www.google.com">
              <span class="brescicon-youtube" aria-hidden="true"></span>
              <span class="sr-only">YouTube</span>
            </a>
          </li>
          <li class="fb list-inline-item">
            <a href="http://www.google.com">
              <span class="brescicon-fb" aria-hidden="true"></span>
              <span class="sr-only">Facebook</span>
            </a>
          </li>
          <li class="tw list-inline-item">
            <a href="http://www.google.com">
              <span class="brescicon-twitter" aria-hidden="true"></span>
              <span class="sr-only">Twitter</span>
            </a>
          </li>

          <li class="ig list-inline-item">
            <a href="http://www.google.com">
              <span class="brescicon-instagram" aria-hidden="true"></span>
              <span class="sr-only">Instagram</span>
            </a>
          </li>
          <li class="in list-inline-item">
            <a href="http://www.google.com">
              <span class="brescicon-linkedin" aria-hidden="true"></span>
              <span class="sr-only">LinkedIn</span>
            </a>
          </li>

        </ul>
      </div>

    </div><!-- row -->

    <div class="row copyright">

      <div class="col-6">
        <a href="#" class="copylink">&copy;</a>2019 Brescia University College
      </div>

      <div class="col-6 text-right">
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms of Use</a></li>
        </ul>
      </div>

    </div>


  </div>	<!-- container -->
</footer>


</div> <!-- siteWrap -->




<div id="bsCssCheck" class="d-none"><!-- bootstrap css check element --></div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>


<script>
    //check for bootstrap css class working - if not - fallback
    $(function () {
        if ($('#bsCssCheck').is(':visible') === true) {
            $('<link rel="stylesheet" id="bsCssFallback" href="css/vendor/bootstrap.min.css">').insertBefore('#mainCss');
        }
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha256-VsEqElsCHSGmnmHXGQzvoWjWwoznFSZc6hs7ARLRacQ=" crossorigin="anonymous"></script>

<script>window.jQuery.fn.modal || document.write('<script src="js/vendor/bootstrap.min.js"><\/script>')</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/jquery.smartmenus.min.js" integrity="sha256-L+Zo9Q4bGfdY06BqwMYLDoacazH6GrQxkLavPdT0a44=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/addons/bootstrap-4/jquery.smartmenus.bootstrap-4.min.js" integrity="sha256-86IE6BxjIc6DQWhu21kSaAYt4+62VrnCr+JkpdajhAY=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/addons/keyboard/jquery.smartmenus.keyboard.min.js" integrity="sha256-s1xqBJ0LFHg0E4TK8mJ3YnvvIjGGaIgMb5VQzBMqSsk=" crossorigin="anonymous"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/brescia.js"></script>
<?php wp_footer();?>
</body>
</html>
