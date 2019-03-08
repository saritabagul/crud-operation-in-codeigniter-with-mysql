<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Admin Panel</title>
		<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		

<!-- Latest compiled JavaScript -->
<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
<script src="<?= base_url('assets/js/bootstrap.js')?>"></script>
	</head>
	<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <?= anchor('login/logout','Logout',['class'=>'nav-link']); ?>
        
      </li>

     
     
    </ul>
 
    
   
  </div>
</nav>






	