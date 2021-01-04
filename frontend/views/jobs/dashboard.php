<?php 

use yii\helpers\Url;

?>

<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="center-thing">
            <ul class="sidebar-nav">
                
                <li style="padding-top:10px; padding-bottom:10px;">
					<div class="center-things">
					  	<img src="<?php echo Url::base();?>/css/images/autodesk.png" class="rounded-circle" alt="logo" width="75" height="75">
						<h6>Autodesk Inc.</h6>
					</div>                
				</li>
                
                <li class="my-2">
					<a href="#"class="btn rounded-pill float-left details-btnh">Dashboard</a>
                </li>
                <li class="my-2">
					<a href="post_job.html"class="btn rounded-pill float-left details-btnh">Add a Job</a>
                </li>
                <li style="padding-top:10px; padding-bottom:10px;">
					<a href="#"class="btn rounded-pill float-left details-btnh">Profile</a>
                </li>
                <li style="padding-top:10px; padding-bottom:10px;">
					<a href="#"class="btn rounded-pill float-left details-btnh">Logout</a>
                </li>
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        
<div id="page-content-wrapper">
<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fas fa-bars tradewind"></i></a>			
<div class="row services-ld">
				<div class=" col-lg-3 col-sm-5 card rounded-3 shadow-lg mx-2 my-2 services-indd align-items-center">
				  <img src="<?php echo Url::base();?>/css/images/totaljobs.svg" class="card-img-top services-imgd" alt="...">
				  <div class="card-body">
				    <p class="card-text par-1h">TOTAL JOBS<br>23</p>
				  </div>
				</div>
				<div class="col-lg-3 col-sm-5 card rounded-3 shadow-lg mx-2 my-2 services-indd align-items-center">
				  <img src="<?php echo Url::base();?>/css/images/livejobs.svg" class="card-img-top services-imgd" alt="...">
				  <div class="card-body">
				    <p class="card-text par-1h">LIVE JOBS<br>10</p>
				  </div>
				</div>
				<div class="col-lg-3 col-sm-5 card rounded-3 shadow-lg mx-2 my-2 services-indd align-items-center">
				  <img src="<?php echo Url::base();?>/css/images/applications.svg" class="card-img-top services-imgd" alt="...">
				  <div class="card-body">
				    <p class="card-text par-1h">TOTAL APPLICATIONS<br>200</p>
				  </div>
				</div>
				<div class="col-lg-3 col-sm-5 card rounded-3 shadow-lg mx-2 my-2 services-indd align-items-center">
				  <img src="<?php echo Url::base();?>/css/images/pending.svg" class="card-img-top services-imgd" alt="...">
				  <div class="card-body">
				    <p class="card-text par-1h">PENDING APPLICATIONS<br>144</p>
				  </div>
				</div>
</div>

<div class=" col-lg-12 card-body job-listing px--4">
	<div class="center-things">
		<h6 class="tradewind">AUTODESK'S JOB LISTINGS</h6>
	</div>
	<div class="row align-items-center py-2 position-relative border-bottom border-1">
		<div class="row col-lg-5 col-sm-12">
			<div class="col-lg-3 center-things">
			  	<img src="<?php echo Url::base();?>/css/images/autodesk.png" class="rounded-circle" alt="logo" width="75" height="75">
			</div>
			<div class="col-lg-9 col-sm-12 center-things">
				<h5>Project Manager</h5>
				<h6>Autodesk Inc.</h6>
			</div>
		</div>
		<div class="row col-lg-4 col-sm-12 border-start center-things">
			<h6>Nairobi, Kenya</h6>
			<h6>3 days Ago</h6>
		</div>
		<div class="row col-lg-3 col-sm-12 border-start center-things">
			<div class="align-items-center center-things">
			<button type="button" class="btn rounded-pill details-btn" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Applications</button>
			</div>
			<div class="align-items-center center-things" style="padding-top:10px; padding-bottom:10px;">
			<button type="button" class="btn rounded-pill details-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Details</button>
			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Job Details</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			        <div class="col-lg-12">
       			  		<img src="<?php echo Url::base();?>/css/images/autodesk-banner.jpg" class="" alt="logo" width="100%" height="125">
			        </div>
			        <div class="row col-lg-12 border-bottom short details">
				        <div class="col-lg-4">
				        	<h5 class="tradewind" style="text-align:left;">Project Manager</h5>
							<h6 class="short-details">Autodesk Inc.</h6>
							<h6 class="short-details">Nairobi, Kenya</h6>
							<h6 class="short-details">Ksh. 150k-180k</h6>
							<h6 class="short-details">3 days Ago</h6>
				        </div>
				        <div class="col-lg-4 border-start">
				        	<h6 class="short-details">Company rating: 4.5</h6>
							<h6 class="short-details">Job type: Remote</h6>
							<h6 class="short-details">Industry: Technology</h6>
							<h6 class="short-details"><i class="far fa-heart save-icon"></i> Add to saved jobs</h6>
				        </div>
				        <div class="col-lg-4 border-start">
			        		<h5 class="tradewind" style="text-align:left;">Deadline</h5>
				        	<h6 class="short-details">21st, January, 2021</h6>
				        	<div>
					        	<a href="#" class="btn rounded-pill det-buttons">Company Profile</a>
				        	</div>
				        	<div style="padding-top:10px; padding-bottom:10px;">
	           					<a href="#" class="btn rounded-pill det-buttons">Quick Apply</a>
           					</div>
				        </div>
				        <span></span>
			        </div>
			        <div class="row col-lg-12 long-details">
			        <div class="col-lg-6">
			        	<div>
				        	<p class="tradewind">JOB DESCRIPTION</p>
				        		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ullamcorper augue eu justo laoreet, quis elementum ante hendrerit. Maecenas rutrum ac augue eget elementum. Sed ac arcu lorem. Mauris placerat ante ante, sed sollicitudin dolor fermentum varius.</p>
		        		</div>
		        		<div>
				        	<p class="tradewind">HOW TO APPLY</p>
				        		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ullamcorper augue eu justo laoreet, quis elementum ante hendrerit. Maecenas rutrum ac augue eget elementum. Sed ac arcu lorem. Mauris placerat ante ante, sed sollicitudin dolor fermentum varius.</p>
			        		<div>
	           					<a href="#" class="btn rounded-pill det-buttons">Quick Apply</a>
           					</div>
			        	</div>
			        </div>
			        <div class="col-lg-6 border-start">
			        	<div>
				        	<p class="tradewind">REQUIREMENTS<p>
				        		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ullamcorper augue eu justo laoreet, quis elementum ante hendrerit. Maecenas rutrum ac augue eget elementum. Sed ac arcu lorem. Mauris placerat ante ante, sed sollicitudin dolor fermentum varius.</p>
		        		</div>
		        		<div>
				        	<p class="tradewind">BENEFITS<p>
				        		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ullamcorper augue eu justo laoreet, quis elementum ante hendrerit. Maecenas rutrum ac augue eget elementum. Sed ac arcu lorem. Mauris placerat ante ante, sed sollicitudin dolor fermentum varius.</p>
			        	</div>
			        </div>
			        </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>
			</div>
		</div>
	</div>
	<div class="row align-items-center py-2 position-relative border-bottom border-200">
		<div class="row col-lg-5 col-sm-12">
			<div class="col-lg-3 center-things">
			  	<img src="<?php echo Url::base();?>/css/images/autodesk.png" class="rounded-circle" alt="logo" width="75" height="75">
			</div>
			<div class="col-lg-9 col-sm-12 center-things">
				<h5>Sales Associate</h5>
				<h6>Autodesk Inc.</h6>
			</div>
		</div>
		<div class="row col-lg-4 col-sm-12 border-start center-things">
			<h6>Nairobi, Kenya</h6>
			<h6>2 weeks ago</h6>
		</div>
		<div class="row col-lg-3 col-sm-12 border-start center-things">
			<div class="align-items-center center-things">
			<button type="button" class="btn rounded-pill details-btn" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Applications</button>
			</div>
			<div class="align-items-center center-things" style="padding-top:10px; padding-bottom:10px;">
			<button type="button" class="btn rounded-pill details-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Details</button>
			</div>
		</div>
	</div>
	<div class="collapse" id="collapseExample">
		<div class="row align-items-center py-2 position-relative border-bottom border-200">
			<div class="row col-lg-3 col-sm-12">
				<h6 class="tradewind">Full name</h6>
			</div>
			<div class="row col-lg-3 col-sm-12 center-things">
				<h6 class="tradewind">Cover letter</h6>
			</div>
			<div class="row col-lg-3 col-sm-12 center-things">
				<h6 class="tradewind">Resume</h6>
			</div>
			<div class="col-lg-3 col-sm-12">
				<h6 class="tradewind">Download</h6>
			</div>
		</div>
		<div class="row align-items-center py-2 position-relative border-bottom border-200">
			<div class="row col-lg-3 col-sm-12">
				<h6>Hilary Onyango Okello</h6>
			</div>
			<div class="row col-lg-3 col-sm-12 center-things">
			<button type="button" class="btn rounded-pill details-btn">Cover letter</button>
			</div>
			<div class="row col-lg-3 col-sm-12 center-things">
			<button type="button" class="btn rounded-pill details-btn">Resume/CV</button>
			</div>
			<div class="col-lg-3 col-sm-12">
			<i class="fas fa-file-download tradewind"></i>
			</div>
		</div>
		<div class="row align-items-center py-2 position-relative border-bottom border-200">
			<div class="row col-lg-3 col-sm-12">
				<h6>James Gichimu</h6>
			</div>
			<div class="row col-lg-3 col-sm-12 center-things">
			<button type="button" class="btn rounded-pill details-btn">Cover letter</button>
			</div>
			<div class="row col-lg-3 col-sm-12 center-things">
			<button type="button" class="btn rounded-pill details-btn">Resume/CV</button>
			</div>
			<div class="col-lg-3 col-sm-12">
			<i class="fas fa-file-download tradewind"></i>
			</div>
		</div>
		
	</div>

</div>	
</div>
