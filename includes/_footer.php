</div> <!-- THIS IS CLOSE WRAPPER -->

<!-- FOOTER -->
<footer id="footer">
    <div id="boutton-footer-container">
        <div class="nav_footer_container">
		     <div class="footer_bg">
		     	<h3>Site navigation</h3>
		     	<ul>
		     		<li><a href="index.php">Home</a></li>
		     		<li>About SW</li>
		     		<li><a href="contact.php">Contact Us</a></li>
		     		<li>View Products</li>
		     		<li>Privacy policy</li>
		     	</ul>
		     </div>
		     <div class="footer_bg">
		     	<h3>Product categories</h3>
		     	<ul> 
				 	<?php 
						require_once("categories.php");
						foreach ($category_rows as $key => $row):
						//$categoryId = $row['CategoryID']; 
						$categoryName = $row['CategoryName'];
					?>  
						<li><a href="products.php?category=<?=rawurlencode($categoryName)?>"><?=$categoryName?></a></li>
					<?php endforeach; ?>
		     		<!-- <li>Shoes</li>
		     		<li>Helmets</li>
		     		<li>Pants</li>
		     		<li>Tops</li>
		     		<li>Balls</li>
		     		<li>Equipment</li>
		     		<li>Training Gear</li> -->
		     	</ul>
		     </div>
		     <div class="footer_bg">
				<h3>Contact Sports Warehouse</h3>
				<ul>
					<li><a href=""><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
					<li><a href=""><i class="fab fa-twitter"></i><span>Twitter</span></a></li>
					<li><a href=""><i class="fab fa-telegram-plane"></i><span>Other</span></a></li>
				</ul>
		    </div>
	    </div>
    </div>
   <div class="copyright-info">
        <span>&copy; Copyright 2020 Sports Warehouse.</span>
        <span>All rights reserved.</span>
        <span>Website made by Awesomesauce Design.</span>
   </div>
</footer>


<!-- Include jQuery library -->
<script src="https://code.jquery.com/jquery-3.4.1.js"
	  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	
<!-- Include jQuery plugins AFTER including the jQuery library -->
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>

<script>
		
		// Using jQuery - wait until the page has finished loading before running the JS code.
		$(document).ready(function(){

			// Slideshow is hidden by default - this will unhide it when JS is ready and available
			//$('#slideshow').removeAttr('hidden');
			$('#slid-show').removeClass('loading');
			
			// Activate and customise the bxSlider slideshow
			$('.bxslider').bxSlider({
				mode: 'horizontal', // 'horizontal', 'vertical', 'fade'
				captions: false,
				pager: true,
				auto: true,
				pause: 3000,		// how long each slide stays visible for = 3000ms = 3s
				speed: 500,			// transition speed = 500ms = 0.5s
				autoHover: true		// pause slideshow on mouse hover
				
			});

		});

	</script>



<!-- <script type="text/javascript"> -->
<script>

		// Wait for the document to load before running our JS code
		document.addEventListener("DOMContentLoaded", () => {

		// Get the toggle button and the menu
		let toggle = document.getElementById("menu-toggle");
		let menu = document.getElementById("menu");

		// Make sure menu and toggle button exist
		if (toggle && menu) {

		// Remove the "show" class from the menu (now that JS is functional)
		menu.classList.remove("show");

		// Add click event listener to toggle button
		toggle.addEventListener("click", (event) => {

		// Stop hyperlink navigation
		event.preventDefault();

		// Toggle (add/remove) CSS class on the menu
		menu.classList.toggle("show");

		});

		}

});

</script>	


<script>
    // $('#zoom_01').elevateZoom();
	//$("#zoom_01").elevateZoom({tint:true, tintColour:'#F90', tintOpacity:0.5});
</script>

</body>
</html>