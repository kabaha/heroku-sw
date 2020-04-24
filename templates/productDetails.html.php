<?php foreach ($rows as $key => $row):
					// $PhotoPath = "images/products/".$row["sm_img"];
					$ItemName = $row["ItemName"];
					$Price =  $row["Price"];
					$SalePrice = $row["SalePrice"];
					$Description = $row["Description"];
					$Featured = $row["Featured"];
                    $ItemId=$row["ItemID"];
                    $Large_PhotoPath = "images/large-img/".$row["lg_img"];
?><?php endforeach; ?>
<div class="viewProduct_wrapper">

    <div class="img_view">
        <img id="zoom_01" src="<?=$Large_PhotoPath?>" alt="" data-zoom-image="<?=$Large_PhotoPath?>">
    </div>
<div id="container_info_item">
    <div class="bg_one_item">
        <div class="bg_two_item">
            <div class="info_item">
                <h3>Full Product Info</h3>
                <p><?=$ItemName?></p>
                <p><?= $Price ?></p>
                <p><?=$Description?></p>
                <!-- <input class="btn_add_to_cart" type="button" value="ADD TO CART"> -->
               <div class="wrapper_btn">
                   <button class="btn_add_to_cart"><i class="fas fa-cart-plus"></i>ADD TO CART</button>
                   <button class="btn_pay_now"><i class="fas fa-angle-double-right"></i>PAY NOW</button>
               </div>
            </div>
        </div>
    </div>
</div>


</div>