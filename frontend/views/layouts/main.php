<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="utf-8">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    		<!-- Bootstrap CSS -->
		   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
			<!-- Fontawesome cdn -->
		
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
		
    <?php $this->registerCsrfMetaTags() ?>
    <title>JOBS BOARD</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
				<!-- 	Navigation Bar -->
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top nav-cus">
			  <div class="container-fluid col-lg-12">
			  	<a class="nav-link active" href="<?php echo Url::to(['/site/index']) ?>"> 
			  	<img src="<?php echo Url::base();?>/css/images/logo.svg" alt="Logo" width="40" height="50">
			  	</a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarNav">
			      <ul class="navbar-nav">
			        <li class="nav-item active">
			          <a class="nav-link nav-text" aria-current="page" href="<?php echo Url::to(['/jobs/index']) ?>">Explore jobs</a>
			        </li>
			      </ul>
			    </div>
			    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
			      <ul class="navbar-nav mr-auto">
			        <li class="nav-item active">
			          <a class="nav-link nav-text" aria-current="page" href="<?php echo Url::to(['/site/employers']) ?>">For employers</a>
			        </li>
			        <li class="nav-item active">
			          <a class="nav-link nav-text" data-bs-toggle="modal" data-bs-target="#signinModal" href="#">Sign in</a>
			        </li>
			      </ul>
			    </div>
			  </div>
			</nav>
			
			<div class="modal fade" id="signinModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-md">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title tradewind center-thing" id="exampleModalLabel">SIGN IN</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body center-thing">
					   <form action="/action_page.php">
					       <div class="form-floating mb-3">
							  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
							  <label for="floatingInput">Username</label>
							</div>
							<div class="form-floating mb-3">
							  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
							  <label for="floatingPassword">Password</label>
							</div>
						<div class="center-thing">
					     <a href="jobs.html" class="btn rounded-pill details-btn">Sign in</a>
					    </div>
					    <div class="container my-3">
					       <label>
					       <input type="checkbox"  checked="checked" name="remember"> Remember me
					       </label>
					       <span class="psw"><a href="#"> Forgot password?</a></span>
					    </div>
					    <div class="container">
					     <h6 class="tradewind my-3"> OR </h6>
					    <div class="container center-thing">
					     <a href="sign_up.html" class="btn rounded-pill details-btn">Sign up</a>
					    </div>
					    </div>
					   </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>

    <div class="content-main">

        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
	<div class="container" style="display: flexbox; justify-content:center; margin:auto; text-align:center; padding-bottom:20px;">
		<a href="/" class="Header-logo">
		<img src="<?php echo Url::base();?>/css/images/logo.svg" alt="JOBS BOARD">
		</a>
	</div>
	<div class="container row" style="display: flexbox; justify-content:center; margin:auto;">
		<div class="col-lg-4 col-md-4 col-sm-12">
			<h6>About</h6>
			<div id="list-menu-footer">
			<ul>
			<li><a class="tradewind" href="#">Our story</a></li>
			<li><a class="tradewind" href="#">Media</a></li>
			</ul>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<h6>Legal</h6>
			<div id="list-menu-footer">
			<ul>
			<li><a class="tradewind" href="#">Term of use</a></li>
			<li><a class="tradewind" href="#">Privacy policy</a></li>
			</ul>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<h6>Support</h6>
			<div id="list-menu-footer">
			<ul>
			<li><a class="tradewind" href="#">JB Support</a></li>
			<li><a class="tradewind" href="#">FAQS</a></li>
			</ul>
			</div>
		</div>
		<br>
		<div style="display: flexbox; justify-content:center; margin:auto; text-align:center;"><p>© Hilary Onyango Okello 2020 All rights reserved</p>
		</div>
		</div>
</footer>
</div>

		<script>
			$("#menu-toggle").click(function(e) {
		  e.preventDefault();
		  $("#wrapper").toggleClass("toggled");
		});
		</script>
	
	    <!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
