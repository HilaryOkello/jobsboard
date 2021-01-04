<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\JobsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jobs';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--  <div class="jobs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jobs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'job_id',
            'id',
            'job_title',
            'industry_id',
            'location_id',
            //'currency',
            //'min_salary',
            //'max_salary',
            //'created_at',
            //'deadline',
            //'category_id',
            //'min_experience',
            //'max_experience',
            //'job_description:ntext',
            //'requirements:ntext',
            //'benefits:ntext',
            //'how_to_apply:ntext',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div> -->

	 
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
<div class = "row">	
	<nav id="sidebarMenu" class="col-lg-2 d-md-block bg-light sidebar collapse show">
		<button class="wrn-btn" data-bs-toggle="collapse" data-bs-target="#demo" >Filter By:</button>
		<div id="demo" class="collapse">
		<form>
		    <select class="form-control search-slt" id="exampleFormControlSelect1">
		        <option>Experience</option>
		        <option>Less than 2yrs</option>
		        <option>2yrs-5yrs</option>
		        <option>5yrs-10yrs</option>
		        <option>More than 10 yrs</option>
		        <option>No experience</option>
		    </select>
		    <select class="form-control search-slt" id="exampleFormControlSelect1">
		        <option>Salary</option>
		        <option>less than Ksh. 20,000</option>
		        <option>KSh. 20,000-35,000</option>
		        <option>KSh. 35,000-50,000</option>
		        <option>Ksh. 50,000-75,000</option>
		        <option>Ksh. 75,000-100,000</option>
		        <option>Ksh. 100,000-200,000</option>
		        <option>Ksh. 200,000-300,000</option>
		        <option>More than Ksh. 300,000</option>
		        
		        
		        
		    </select>
		    <select class="form-control search-slt" id="exampleFormControlSelect1">
		        <option>Organization</option>
		        <option>Public company</option>
		        <option>Private company</option>
		        <option>Non-profit</option>
		        <option>NGO</option>
		        <option>Government</option>
		    </select>
		<div class="">
		    <button class="btn wrn-btn">Filter</button>
		</div>
		<div class="">
		    <button class="btn wrn-btn">Reset</button>
		</div>
		</form>
		</div>
	</nav>

<div class=" col-lg-10 card-body job-listing px--4">
	<div class="row align-items-center py-2 position-relative border-bottom border-1">
		<div class="row col-lg-5 col-sm-12">
			<div class="col-lg-3 center-things">
			  	<img src="images/autodesk.png" class="rounded-circle" alt="logo" width="75" height="75">
			</div>
			<div class="col-lg-9 col-sm-12 center-things">
				<h5>Project Manager</h5>
				<h6>Autodesk Inc.</h6>
			</div>
		</div>
		<div class="row col-lg-4 col-sm-12 border-start center-things">
			<h6>Nairobi, Kenya</h6>
			<h6>Ksh. 150k-180k</h6>
		</div>
		<div class="row col-lg-3 col-sm-12 border-start center-things">
			<h6>3 days Ago</h6>
			<div class="row align-items-center center-things">
			<i class="col-lg-3 far fa-heart save-icon"></i>
			<button type="button" class="col-lg-5 btn rounded-pill details-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Details</button>
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
       			  		<img src="images/autodesk-banner.jpg" class="" alt="logo" width="100%" height="125">
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
			  	<img src="images/safaricom.jpg" class="rounded-circle" alt="logo" width="75" height="75">
			</div>
			<div class="col-lg-9 col-sm-12 center-things">
				<h5>Sales Associate</h5>
				<h6>Safaricom Plc.</h6>
			</div>
		</div>
		<div class="row col-lg-4 col-sm-12 border-start center-things">
			<h6>Nairobi, Kenya</h6>
			<h6>Ksh. 150k-180k</h6>
		</div>
		<div class="row col-lg-3 col-sm-12 border-start center-things">
			<h6>3 days Ago</h6>
			<div class="row align-items-center center-things">
			<i class="col-lg-3 far fa-heart save-icon"></i>
			<button type="button" class="col-lg-5 btn rounded-pill details-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Details</button>
			</div>
		</div>
	</div>
	<div class="row align-items-center py-2 position-relative border-bottom border-200">
		<div class="row col-lg-5 col-sm-12">
			<div class="col-lg-3 center-things">
			  	<img src="images/autodesk.png" class="rounded-circle" alt="logo" width="75" height="75">
			</div>
			<div class="col-lg-9 col-sm-12 center-things">
				<h5>Project Manager</h5>
				<h6>Autodesk Inc.</h6>
			</div>
		</div>
		<div class="row col-lg-4 col-sm-12 border-start center-things">
			<h6>Nairobi, Kenya</h6>
			<h6>Ksh. 150k-180k</h6>
		</div>
		<div class="row col-lg-3 col-sm-12 border-start center-things">
			<h6>3 days Ago</h6>
			<div class="row align-items-center center-things">
			<i class="col-lg-3 far fa-heart save-icon"></i>
			<button type="button" class="col-lg-5 btn rounded-pill details-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Details</button>
			</div>
		</div>
	</div>
	<div class="row align-items-center py-2 position-relative border-bottom border-200">
		<div class="row col-lg-5 col-sm-12">
			<div class="col-lg-3 center-things">
			  	<img src="images/safaricom.jpg" class="rounded-circle" alt="logo" width="75" height="75">
			</div>
			<div class="col-lg-9 col-sm-12 center-things">
				<h5>Data Engineer</h5>
				<h6>Safaricom Plc.</h6>
			</div>
		</div>
		<div class="row col-lg-4 col-sm-12 border-start center-things">
			<h6>Nairobi, Kenya</h6>
			<h6>Ksh. 150k-180k</h6>
		</div>
		<div class="row col-lg-3 col-sm-12 border-start center-things">
			<h6>3 days Ago</h6>
			<div class="row align-items-center center-things">
			<i class="col-lg-3 far fa-heart save-icon"></i>
			<button type="button" class="col-lg-5 btn rounded-pill details-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Details</button>
			</div>
		</div>
	</div>
	<div class="row align-items-center py-2 position-relative border-bottom border-200">
		<div class="row col-lg-5 col-sm-12">
			<div class="col-lg-3 center-things">
			  	<img src="images/autodesk.png" class="rounded-circle" alt="logo" width="75" height="75">
			</div>
			<div class="col-lg-9 col-sm-12 center-things">
				<h5>Project Manager</h5>
				<h6>Autodesk Inc.</h6>
			</div>
		</div>
		<div class="row col-lg-4 col-sm-12 border-start center-things">
			<h6>Nairobi, Kenya</h6>
			<h6>Ksh. 150k-180k</h6>
		</div>
		<div class="row col-lg-3 col-sm-12 border-start center-things">
			<h6>3 days Ago</h6>
			<div class="row align-items-center center-things">
			<i class="col-lg-3 far fa-heart save-icon"></i>
			<button type="button" class="col-lg-5 btn rounded-pill details-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Details</button>
			</div>
		</div>
	</div>
	<div class="row align-items-center py-2 position-relative border-bottom border-200">
		<div class="row col-lg-5 col-sm-12">
			<div class="col-lg-3 center-things">
			  	<img src="images/safaricom.jpg" class="rounded-circle" alt="logo" width="75" height="75">
			</div>
			<div class="col-lg-9 col-sm-12 center-things">
				<h5>Data Engineer</h5>
				<h6>Autodesk Inc.</h6>
			</div>
		</div>
		<div class="row col-lg-4 col-sm-12 border-start center-things">
			<h6>Nairobi, Kenya</h6>
			<h6>Ksh. 150k-180k</h6>
		</div>
		<div class="row col-lg-3 col-sm-12 border-start center-things">
			<h6>3 days Ago</h6>
			<div class="row align-items-center center-things">
			<i class="col-lg-3 far fa-heart save-icon"></i>
			<button type="button" class="col-lg-5 btn rounded-pill details-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Details</button>
			</div>
		</div>
	</div>
</div>	
</div>
		
		
	
