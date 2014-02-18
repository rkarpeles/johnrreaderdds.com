<div class="footer small-text footer-background">	

	<div class="container">
  
		<div class="grid-wrap">
			<div class="grid-col col-one-quarter">
				<strong>Address</strong>
				<p>960 Illinois Route 22 Suite 206<br>
				Fox River Grove, IL 60021</p>
			</div>	
			<div class="grid-col col-one-half">
				<strong>Quick Links</strong>
				<div class="grid-wrap">
					<div class="grid-col col-one-third">
						<ul class="foot-list no-style-list">
							<li>Home</li>
							<li>About Us</li>
						</ul>
					</div>
					<div class="grid-col col-one-third">
						<ul class="foot-list no-style-list">
							<li>Contact Us</li>
							<li>FAQs</li>
						</ul>
					</div>
					<div class="grid-col col-one-third">
						<ul class="foot-list no-style-list">
							<li>Services</li>
							<li>Testimonials</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="grid-col col-one-quarter">
				<strong>Contact Us</strong>
				<p>847.639.8008</p>
			</div>	
		</div>

	</div>
	
</div><!-- .footer -->

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