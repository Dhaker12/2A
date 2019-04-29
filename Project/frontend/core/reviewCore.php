<?php
include "../config.php";
class ReviewCore {

	function ajouterReview($review){
		$sql="insert into review (name,country,week,message,rating,date) values (:name,:country,:week,:message,:rating,:date)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

		$name=$review->getName();
        $country=$review->getCountry();
        $week=$review->getWeek();
        $message=$review->getMessage();
        $rating=$review->getRating();
        $date=$review->getDate();

		$req->bindValue(':name',$name);
		$req->bindValue(':country',$country);
		$req->bindValue(':week',$week);
		$req->bindValue(':message',$message);
		$req->bindValue(':rating',$rating);
		$req->bindValue(':date',date("Y-m-d") );
        $req->execute();
            return true ;
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
            return false ;
        }
		
	}



        function afficherReview()
	{
		
		$sql=" SELECT * From review";
		$db = config::getConnexion();
		try{
		$lol=$db->prepare($sql);
		$lol->execute();
		$i=1;
		foreach ($db->query($sql) as $row) {

		if (($row['rating'])=='0')
		{	
         echo ' <div class="nk-comment">
                                    <div class="nk-comment-meta">
                                        <img src="assets/images/avatar-2.jpg" alt="Witch Murder" class="rounded-circle" width="35"> by <a href="https://nkdev.info">'.$row['name'].'</a> in '.$row['date'].'
                                        <div class="nk-review-rating" data-rating="'.$row['rating'].'"> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                    </div>
                                    <div class="nk-comment-text">
                                        <p>I used the product for '.$row['week'].' week(s)</p>

                                        <p>'.$row['message'].'</p>
                                    </div>
                                </div>';
                               
		}
		if (($row['rating'])=='1')
		{	
         echo ' <div class="nk-comment">
                                    <div class="nk-comment-meta">
                                        <img src="assets/images/avatar-2.jpg" alt="Witch Murder" class="rounded-circle" width="35"> by <a href="https://nkdev.info">'.$row['name'].'</a> in '.$row['date'].'
                                        <div class="nk-review-rating" data-rating="'.$row['rating'].'"> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                    </div>
                                    <div class="nk-comment-text">
                                        <p>I used the product for '.$row['week'].' week(s)</p>

                                        <p>'.$row['message'].'</p>
                                    </div>
                                </div>';
                               
		}
		if (($row['rating'])=='2')
		{	
         echo ' <div class="nk-comment">
                                    <div class="nk-comment-meta">
                                        <img src="assets/images/avatar-2.jpg" alt="Witch Murder" class="rounded-circle" width="35"> by <a href="https://nkdev.info">'.$row['name'].'</a> in '.$row['date'].'
                                        <div class="nk-review-rating" data-rating="'.$row['rating'].'"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                    </div>
                                    <div class="nk-comment-text">
                                        <p>I used the product for '.$row['week'].' week(s)</p>

                                        <p>'.$row['message'].'</p>
                                    </div>
                                </div>';
                               
		}
		if (($row['rating'])=='3')
		{	
         echo ' <div class="nk-comment">
                                    <div class="nk-comment-meta">
                                        <img src="assets/images/avatar-2.jpg" alt="Witch Murder" class="rounded-circle" width="35"> by <a href="https://nkdev.info">'.$row['name'].'</a> in '.$row['date'].'
                                        <div class="nk-review-rating" data-rating="'.$row['rating'].'"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                    </div>
                                    <div class="nk-comment-text">
                                        <p>I used the product for '.$row['week'].' week(s)</p>

                                        <p>'.$row['message'].'</p>
                                    </div>
                                </div>';
                               
		}
		if (($row['rating'])=='4')
		{	
         echo ' <div class="nk-comment">
                                    <div class="nk-comment-meta">
                                        <img src="assets/images/avatar-2.jpg" alt="Witch Murder" class="rounded-circle" width="35"> by <a href="https://nkdev.info">'.$row['name'].'</a> in '.$row['date'].'
                                        <div class="nk-review-rating" data-rating="'.$row['rating'].'"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                                    </div>
                                    <div class="nk-comment-text">
                                        <p>I used the product for '.$row['week'].' week(s)</p>

                                        <p>'.$row['message'].'</p>
                                    </div>
                                </div>';
                               
		}
		if (($row['rating'])=='5')
		{	
         echo ' <div class="nk-comment">
                                    <div class="nk-comment-meta">
                                        <img src="assets/images/avatar-2.jpg" alt="Witch Murder" class="rounded-circle" width="35"> by <a href="https://nkdev.info">'.$row['name'].'</a> in '.$row['date'].'
                                        <div class="nk-review-rating" data-rating="'.$row['rating'].'"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    </div>
                                    <div class="nk-comment-text">
                                        <p>I used the product for '.$row['week'].' week(s)</p>

                                        <p>'.$row['message'].'</p>
                                    </div>
                                </div>';
                               
		}
		}
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }
         


}