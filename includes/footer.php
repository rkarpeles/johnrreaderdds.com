<div class="footer small-text footer-background">	

	<div class="container">

		<div class="footer-content-wrap">

			<div class="footer-left-col">
				<div class="foot-header">Address</div>
				<div class="foot-address">
					960 Illinois Route 22 Suite 206<br>
					Fox River Grove, IL 60021
				</div>
			</div>

			<div class="footer-mid-col">
			  <div class="foot-header">Menu</div>
				<div class="foot-list-col-1">
					<ul class="foot-list">
						<li><a href="">Home</a></li>
						<li><a href="">About Us</a></li>
					</ul>
				</div>
				<div class="foot-list-col-2">
					<ul class="foot-list">
						<li><a href="">Contact Us</a></li>
						<li><a href="">FAQs</a></li>
					</ul>
				</div>
				<div class="foot-list-col-3">
					<ul class="foot-list">
						<li><a href="">Services</a></li>
						<li><a href="">Testimonials</a></li>
					</ul>
				</div>
			</div>

			<div class="footer-right-col">
				<div class="foot-header">Contact Us</div>
				<div class="foot-number">
					847.639.8008
				</div>
			</div>

		</div><!-- .footer-content-wrap -->

		<div class="flowers"></div>

	</div><!-- .container -->
	
</div><!-- .footer -->

<div class="container">
  <div class="copyright">
	Copyright &copy; <?php echo date("Y") ?> / Design by Ryan Karpeles
  </div>
</div>

<!-- Scripts -->

<!-- Responsive Nav -->
<script>
	var navigation = responsiveNav("#nav");	
	
	var navigation = responsiveNav("#nav", {
		insert: "before"
	});    
</script>

<!-- Accordion -->

<script>
$(document).ready(function() {

    //Hide (Collapse) the toggle containers on load
    $(".toggle_container").hide();

    //Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
    $("h3.trigger").click(function() {
        $(this).toggleClass("active").next().slideToggle("slow");
        return false; //Prevent the browser jump to the link anchor
    });

});
</script> 

</body>
</html>