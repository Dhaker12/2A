<?php
include "../config.php";

class ProduitCore 
{


        function afficherProduitfront()
	{
		
		$sql=" SELECT * From produit";
		$db = config::getConnexion();
		try{
		$lol=$db->prepare($sql);
		$lol->execute();
		$i=1;
		foreach ($db->query($sql) as $row) {
			echo'<div class="col-lg-6">
            <div class="nk-product-cat-2">
                <a class="nk-product-image" href="store-product.html">
                    <img style="width:250px;heigth:345px;"src="data:image/jpeg;base64,'.base64_encode(stripslashes($row['photo'])).'">
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5"><a href="store-product.html">'.$row['nom'].'</a></h3>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-rating" data-rating="3.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i></div>
                    <div class="nk-gap-1"></div>
                    '.$row['description'].'
                    <div class="nk-gap-2"></div>
                    <div class="nk-product-price">'.$row['prix'].' DT</div>
                    <div class="nk-gap-1"></div>
                    <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                </div>
            </div>
        </div>';

		}
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }
         

}
?>





