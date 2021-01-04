<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
	<!--  Search Bar -->	
		<section class="search-sec">
		    <div class="container col-lg-8">
		        <form action="#" method="post" novalidate="novalidate">
		            <div class="row">
		                <div class="col-lg-12">
		                    <div class="row">
		                        <div class="col-lg-6 col-md-6 col-sm-12 p-0">
		                            <input type="text" class="form-control search-slt" placeholder="Enter Job Title">
		                        </div>
		                        <div class="col-lg-2 col-md-2 col-sm-12 p-0">
		                            <input type="text" class="form-control search-slt" placeholder="Enter Location">
		                        </div>
		                        <div class="col-lg-2 col-md-2 col-sm-12 p-0">
		                            <select class="form-control search-slt" id="exampleFormControlSelect1">
		                                <option>Job category</option>
		                                <option>Full time</option>
		                                <option>Part time</option>
		                                <option>Remote</option>
		                                <option>Contractual</option>
		                                <option>Permanent</option>
		                            </select>
		                        </div>
		                        <div class="col-lg-2 col-md-2 col-sm-12 p-0">
		                            <button href="jobs.html" type="button" class="btn wrn-btn">Search</button>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </form>
		    </div>
		</section>
		
		<!-- Call to action, slogan, and background image, locations, job alerts -->
		
		<div  class="row landing-image">
		
		<!-- Call to action/Slogan -->
		
			<div class="col-lg-2">
			</div>
			<div class="col-lg-3 slogan">
				<p class="landing-slogan">Journeys<br>
				to fullfilling careers <br>
				start at JOBS BOARD</p>
				<div class= "start-now-div">
					<button type="button" class="btn rounded-pill start-now">Start Now</button>
				</div>
			</div>
			<div class="col-lg-7">
			</div>
			
						<!-- What we do section -->
			<div class="">
			<div>
			    <p class="hed-2" style="text-align:center; padding-top:220px;">You can:</p>
		    </div>
		    <div class="services-h">
			<div class="row container services-l">
				<div class=" col-lg-3">
				<div class="card rounded-3 shadow-lg my-2 services-ind">
				  <img src="<?php echo Url::base();?>/css/images/search.svg" class="card-img-top services-img" alt="...">
				  <div class="card-body">
				    <p class="card-text par-1">Search for JOBS anywhere</p>
				  </div>
				</div>
				</div>
				<div class=" col-lg-3">
				<div class="card rounded-3 shadow-lg my-2 services-ind">
				  <img src="<?php echo Url::base();?>/css/images/details.svg" class="card-img-top services-img" alt="...">
				  <div class="card-body">
				    <p class="card-text par-1">See details and how to apply</p>
				  </div>
				</div>
				</div>
				<div class=" col-lg-3">
				<div class="card rounded-3 shadow-lg my-2 services-ind">
				  <img src="<?php echo Url::base();?>/css/images/read.svg" class="card-img-top services-img" alt="...">
				  <div class="card-body">
				    <p class="card-text par-1">Read about the company</p>
				  </div>
				</div>
				</div>
				<div class=" col-lg-3">
				<div class="card rounded-3 shadow-lg my-2 services-ind">
				  <img src="<?php echo Url::base();?>/css/images/profile.svg" class="card-img-top services-img" alt="...">
				  <div class="card-body">
				    <p class="card-text par-1">Create a profile with your CV</p>
				  </div>
				</div>
				</div>
			</div>
			</div>
			</div>
		</div>
			
			
			<!-- Locations section -->
			
			<div class="row row-O" style="display: flexbox; justify-content:center; margin:auto;">
					<div class="container" style="text-align:center;">
					<h2 class="hed-2">Explore Jobs at Top Cities</h2>
					</div>
				     <div class="col-lg-3 col-sm-3 card text-center card-1">
				         <img class="img-size" src="<?php echo Url::base();?>/css/images/nairobi.jpg" alt="Card image cap">
				         <div class="card-img-overlay">
				             <h5 class="card-title-0">Nairobi</h5>
				             <div class="explore-cust">
				             <a href="#" class="btn btn-sm explore">Explore</a>
				             </div>
				         </div>
				     </div>
				     <div class="col-lg-3 col-sm-3 card text-center card-1">
				         <img class="img-size" src="<?php echo Url::base();?>/css/images/mombasa.jpg" alt="Card image cap">
				         <div class="card-img-overlay">
				             <h5 class="card-title-0">Mombasa</h5>
				             <div class="explore-cust">
				             <a href="#" class="btn btn-sm explore">Explore</a>
				             </div>
				         </div>
				     </div>
				     <div class="col-lg-3 col-sm-3 card text-center card-1">
				         <img class="img-size" src="<?php echo Url::base();?>/css/images/kisumu.jpeg" alt="Card image cap">
				         <div class="card-img-overlay">
				             <h5 class="card-title-0">Kisumu</h5>
				             <div class="explore-cust">
			                 <a href="#" class="btn btn-sm explore">Explore</a>
				             </div>
				         </div>
				     </div>
				     <div class="col-lg-3 col-sm-3 card text-center card-1">
				         <img class="img-size" src="<?php echo Url::base();?>/css/images/nakuru.jpg" alt="Card image cap">
				         <div class="card-img-overlay">
				             <h5 class="card-title-0">Nakuru</h5>
				             <div class="explore-cust">
				             <a href="#" class="btn btn-sm explore">Explore</a>
				             </div>
				         </div>
				     </div>
			</div>
		
		<!-- Mailing List Section -->
		
			<div class="container">
				<div class="mail-list">
					<h2 class="hed-2">Lorem ipsum dolor sit amet</h2>
					<p class="par-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ullamcorper augue eu<br>elementum. Sed ac arcu lorem. Mauris placerat ante ante, sed sollicitudin dolor<br>fermentum varius.</p>
					<a href="#" class="btn rounded-pill mail-button">Get Job Alerts</a>
				</div>     
			</div>
	
