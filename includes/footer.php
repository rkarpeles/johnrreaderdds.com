<div class="footer">
	<h1>Proportional Grids</h1>
	<p>Don&rsquo;t think widths, think proportions. A dead simple method of creating responsive fluid grids with fixed gutters. Use classes to set the proportions you want your columns to take at which breakpoint.</p>
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