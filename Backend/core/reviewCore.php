<?php
include "../config.php";
class ReviewCore {

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
       echo '<section class="panel-group mb-xlg" style="width:1100px;" > <div class="widget-twitter-profile">
                                                
                                                <div class="profile-info">
                                                    <div class="profile-picture">
                                                        <img src="photo/1.png" alt="">
                                                    </div>
                                                    <div class="profile-account">
                                                        <h3 class="name text-semibold">'.$row['name'].'</h3>
                                                        <h6 class="name text-semibold">I used the product for '.$row['week'].' week(s) </h6>
                                                    </div>
                                                    <ul class="profile-stats">
                                                        <li>
                                                           <div class="nk-review-rating" data-rating="'.$row['rating'].'"></div>
                                                           </div>  
                                                        </li>
                                                    </ul>
                                                
                                                <div class="profile-quote">
                                                    <blockquote>
                                                        <p>
                                                            '.$row['message'].'
                                                        </p>
                                                    </blockquote>
                                                    <div class="quote-footer">
                                                        <span class="datetime">Posted in '.$row['date'].'</span>
                                                        
                                                    </div>
                                                </div></div>
                </div></section>
                ';                    

		}
		if (($row['rating'])=='1')
		{	
     echo'<section class="panel-group mb-xlg" style="width:1100px;" >
                                            <div class="widget-twitter-profile">
                                                
                                                <div class="profile-info">
                                                    <div class="profile-picture">
                                                        <img src="photo/1.png" alt="">
                                                    </div>
                                                    <div class="profile-account">
                                                        <h3 class="name text-semibold">'.$row['name'].'</h3>
                                                        <h6 class="name text-semibold">I used the product for '.$row['week'].' week(s) </h6>
                                                    </div>
                                                    <ul class="profile-stats">
                                                        <li>
                                                           <div class="nk-review-rating" data-rating="'.$row['rating'].'"> <i class="fa fa-star"></i></div>
                                                           </div>  
                                                        </li>
                                                    </ul>
                                                
                                                <div class="profile-quote">
                                                    <blockquote>
                                                        <p>
                                                            '.$row['message'].'
                                                        </p>
                                                    </blockquote>
                                                    <div class="quote-footer">
                                                        <span class="datetime">Posted in '.$row['date'].'</span>
                                                        
                                                    </div>
                                                </div></div>
                                            </div></section>';
        
                               
        }
                               
		if (($row['rating'])=='2')
            {   
        echo'<section class="panel-group mb-xlg" style="width:1100px;" > <div class="widget-twitter-profile">
                                                
                                                <div class="profile-info">
                                                    <div class="profile-picture">
                                                        <img src="photo/2.png" alt="">
                                                    </div>
                                                    <div class="profile-account">
                                                        <h3 class="name text-semibold">'.$row['name'].'</h3>
                                                        <h6 class="name text-semibold">I used the product for '.$row['week'].' week(s) </h6>
                                                    </div>
                                                    <ul class="profile-stats">
                                                        <li>
                                                           <div class="nk-review-rating" data-rating="'.$row['rating'].'"> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                           </div>  
                                                        </li>
                                                    </ul>
                                                
                                                <div class="profile-quote">
                                                    <blockquote>
                                                        <p>
                                                            '.$row['message'].'
                                                        </p>
                                                    </blockquote>
                                                    <div class="quote-footer">
                                                        <span class="datetime">Posted in '.$row['date'].'</span>
                                                        
                                                    </div>
                                                </div></div>
                                            </div></section>';
		
                     
		}
		if (($row['rating'])=='3')
		{	
         echo'<section class="panel-group mb-xlg" style="width:1100px;" > <div class="widget-twitter-profile">
                                                
                                                <div class="profile-info">
                                                    <div class="profile-picture">
                                                        <img src="photo/3.png" alt="">
                                                    </div>
                                                    <div class="profile-account">
                                                        <h3 class="name text-semibold">'.$row['name'].'</h3>
                                                        <h6 class="name text-semibold">I used the product for '.$row['week'].' week(s) </h6>
                                                    </div>
                                                    <ul class="profile-stats">
                                                        <li>
                                                           <div class="nk-review-rating" data-rating="'.$row['rating'].'"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                                           </div>  
                                                        </li>
                                                    </ul>
                                                
                                                <div class="profile-quote">
                                                    <blockquote>
                                                        <p>
                                                            '.$row['message'].'
                                                        </p>
                                                    </blockquote>
                                                    <div class="quote-footer">
                                                        <span class="datetime">Posted in '.$row['date'].'</span>
                                                        
                                                    </div>
                                                </div></div>
                                            </div></section>';
        
                               
        }

		if (($row['rating'])=='4')
		{	
     echo' <section class="panel-group mb-xlg" style="width:1100px;" > <div class="widget-twitter-profile">
                                                
                                                <div class="profile-info">
                                                    <div class="profile-picture">
                                                        <img src="photo/4.png" alt="">
                                                    </div>
                                                    <div class="profile-account">
                                                        <h3 class="name text-semibold">'.$row['name'].'</h3>
                                                        <h6 class="name text-semibold">I used the product for '.$row['week'].' week(s) </h6>
                                                    </div>
                                                    <ul class="profile-stats">
                                                        <li>
                                                           <div class="nk-review-rating" data-rating="'.$row['rating'].'"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                           </div>  
                                                        </li>
                                                    </ul>
                                                
                                                <div class="profile-quote">
                                                    <blockquote>
                                                        <p>
                                                            '.$row['message'].'
                                                        </p>
                                                    </blockquote>
                                                    <div class="quote-footer">
                                                        <span class="datetime">Posted in '.$row['date'].'</span>
                                                        
                                                    </div>
                                                </div></div>
                                            </div></section>';
        
                               
        }

		if (($row['rating'])=='5')
		{	
        echo' <section class="panel-group mb-xlg" style="width:1100px;" > <div class="widget-twitter-profile">
                                                
                                                <div class="profile-info">
                                                    <div class="profile-picture">
                                                        <img src="photo/5.png" alt="">
                                                    </div>
                                                    <div class="profile-account">
                                                        <h3 class="name text-semibold">'.$row['name'].'</h3>
                                                        <h6 class="name text-semibold">I used the product for '.$row['week'].' week(s) </h6>
                                                    </div>
                                                    <ul class="profile-stats">
                                                        <li>
                                                           <div class="nk-review-rating" data-rating="'.$row['rating'].'"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                           </div>  
                                                        </li>
                                                    </ul>
                                                
                                                <div class="profile-quote">
                                                    <blockquote>
                                                        <p>'.$row['message'].'</p>
                                                    </blockquote>
                                                    <div class="quote-footer">
                                                        <span class="datetime">Posted in '.$row['date'].'</span>   
                                                    </div>
                                                </div></div>
                                            </div></section>';
        
                               
    }                            
	}
    }
		
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
                            }

    }
}