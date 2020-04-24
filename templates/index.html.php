	<!-- _slider.php  -->
	<?php include "includes/_slider.php"; ?> <!-- display slider here -->


		<div class="heading_bg">
	     	<h2 id="featured-products">Featured products</h2>
		</div>
	     <div id="products-contents">

		 <?php foreach ($rows as $key => $row):
					$PhotoPath = "images/products/".$row["PhotoPath"];
					$ItemName = $row["ItemName"];
					$Price =  $row["Price"];
					$SalePrice = $row["SalePrice"];
					$Description = $row["Description"];
					$Featured = $row["Featured"];
					$ItemId=$row["ItemID"];
			?>

			<div class="card">
				<a href="productDetails.php?id=<?=$ItemId?>">
					<div class="img-card-contanier">
						<img src=<?=$PhotoPath ?> alt="<?=$ItemName ?>">
					</div>
					<p class="box-price">
						<span class="price">$<?=$Price ?></span>
						<?php if($SalePrice != null): ?>
		        			<span class="was-price">was $<?=$SalePrice ?></span>
						<?php endif; ?>
	        		</p>
					<p class="info-product"><?=$ItemName ?></p>
				</a>
			</div> 	
			
			<?php endforeach; ?>
	     </div>

	     <div class="heading_bg">
	     		<h2 class="ourbrand">Our brands and partnerships</h2>
	 	</div>
	 	
	     <div id="ourbrand_container">
	     	<div class="ourbrand_text">
	     		<p>These are some of our top brands and partnerships.</p>
	     		<a href="">The best of the best is here.</a>
	     	</div>
	     	<div class="barnd_logo">
	     		<ul>
	     			<li>
	     				<a href="">
	     					<img src="images/logo/logo_nike.png" alt="logo-nike">
	     				</a>
	     			</li><li>
	     				<a href="">
	     					<img src="images/logo/logo_adidas.png" alt="logo-adidas">
	     				</a>
	     			</li><li>
	     				<a href="">
	     					<img src="images/logo/logo_skins.png" alt="logo-skins">
	     				</a>
	     			</li><li>
	     				<a href="">
	     					<img src="images/logo/logo_asics.png" alt="logo-asics">
	     				</a>
	     			</li><li>
	     				<a href="">
	     					<img src="images/logo/logo_newbalance.png" alt="logo-newbalance">
	     				</a>
	     			</li><li>
	     				<a href="">
	     					<img src="images/logo/logo_wilson.png" alt="logo-wilson">
	     				</a>
	     			</li>
	     		</ul>
	     	</div>
	     </div>