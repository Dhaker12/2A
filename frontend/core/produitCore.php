
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
		foreach ($db->query($sql) as $row) 
        {
			echo'<div class="col-lg-6">
            <div class="nk-product-cat-2">
                <a class="nk-product-image" href="product.php">
                    <img style="width:250px;heigth:345px;"src="data:image/jpeg;base64,'.base64_encode(stripslashes($row['photo'])).'">
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5"><a href="product.php">'.$row['nom'].'</a></h3>
                    <div class="nk-gap-1"></div>
                    '.$row['description'].'
                    <div class="nk-gap-2"></div>
                    <div class="nk-product-price">'.$row['prix'].' DT</div>
                     <div class="nk-gap-1"></div>
                <a href="addcart.php?reference='.$row['reference'].'"><input type="button" value="Add to cart"></a>
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





