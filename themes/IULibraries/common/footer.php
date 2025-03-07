        </div><!-- end content -->

    </div><!-- end wrap -->


    <footer role="contentinfo">
	<div id="footer-lib">
	<div class="row">
	<div class="column-left-footer footerleft">
	   <ul>
	   <li>
	   <a href="https://libraries.indiana.edu" class="footerlib-icon">
		<img src="/presidentialcartoons/themes/IULibraries/images/lockup.png" width="200px" height>
	   </a>
	   </li>
	   <li id="footerlib-contact">
	   <a href="https://libraries.indiana.edu/contact-us" >Contact Us</a>
	   </li>
	   </ul>
	   </div>
	   <div class="footerlib-centered" >
	   <ul style="width:100%; margin:auto; list-style-type: none;">
	   <li id="footer-arch" style="float:left;"><a href="https://libraries.indiana.edu/political-science" >Political Science Research</a></li>
           <li id="footer-bar" style="float:left; color: #EDEBEB;">&nbsp;&#124;&nbsp;</li>
	   <li id="footer-digcol" style="float:left; padding: unset;"><a href="https://libraries.indiana.edu/digital-collections" >A-Z List of Digital Collections</a>
	   </li>
	   </ul>
	   </div>
	   <div class="bg-mahogany bg-dark dark column-right-footer footerright">
	   <nav role="navigation" aria-labelledby="block-iul-footersocialmedia-menu" id="block-iul-footersocialmedia">
            
	     <h2 class="visually-hidden" id="block-iul-footersocialmedia-menu">Footer Social Media</h2>

	   <div>
		   <div class="invert border">
            <ul class="social">
				<li style=""  ><a href="https://libraries.indiana.edu/help#" ><button class="buttonlib">Need Help?</button></a></li>
                      <li class="first">
          <a href="https://twitter.com/iulibraries" target="_self" class="icon-twitter external" title="IU Libraries on Twitter">Twitter</a>
                </li>
                  <li class="two">
          <a href="https://www.instagram.com/hermanbwells/" target="_self" class="icon-instagram external" title="Herman B Wells Library on Instagram">Instagram</a>
               </li>
                  <li class="two-left">
          <a href="https://www.facebook.com/pages/IU-Libraries/237699996274633" target="_self" class="icon-facebook external" title="IU Libraries on Facebook">Facebook</a>
                </li>
<li class="last">
        <a href="https://blogs.libraries.indiana.edu/" target="_self" class="icon-rss" title="IU Libraries - All News &amp; Events content (rss feed)" data-drupal-link-system-path="https://blogs.libraries.indiana.edu/iubarchives/">RSS</a>
              </li>
          </ul>
	  </div>
	   </div>
	   </div>
	   </div>
  	     </nav>
  	 </div>
        <div id="footer-text">
            <?php echo get_theme_option('Footer Text'); ?>
            <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
                <p><?php echo $copyright; ?></p>
            <?php endif; ?>
            <p><?php //echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>.'); ?></p>
        </div>
	</div>
        <?php fire_plugin_hook('public_footer', array('view' => $this)); ?>
		<!--  Google Analytics -->
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-5726636-13', 'auto');
		ga('send', 'pageview');

		</script>
    </footer><!-- end footer -->

    <script type="text/javascript">
    jQuery(document).ready(function () {
        Omeka.showAdvancedForm();
        Omeka.skipNav();
        Omeka.megaMenu('.no-touchevents #primary-nav');
        ThanksRoy.mobileMenu();
    });
    </script>

</body>
</html>
