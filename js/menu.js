(function() {


	// Get the toggle button and the menu
			var toggle = document.getElementById("navbar-toggler");
			var menu = document.getElementById("menu");

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



})();			