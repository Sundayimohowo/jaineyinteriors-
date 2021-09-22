<!DOCTYPE html>
<html>
<head>
	<title>Interior Design</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet"> 
</head>
<body>
<div class="wrapper">
	<div class="Header-wrapper">
	<div class="header">
		<header>
			<h5><i class="fas fa-home"></i>Interior</h5>
		</header>
	<h5><i class="fas fa-plus"></i>New</h5>
		<div class='loggedin-user'>
        <h6>Howdy, olaoluwa</h6>
        <div class='user-act'><ul>
        <li>Logout</li></ul></div></div>
	</div>
</div>
<div class='content'>
<?php include 'sidebar.php'; ?>

<div class='the-content'>
<h4>Portfolio <button class="addnew">Add New</button></h4>
<div class="all-posts"><h4>All<span>(3)</span> </h4> <h4>published <span>(3)</span></h4></div>

<div class="content-body">
<div class='table-content'>
<div class="table-heading">
	<span>Title</span>
	<span>Author</span>
	<span>Categories</span>
	<span>Action</span>
	<span>Date</span>
</div>
<div class="table-inputs">
	<h5>new post</h5>
	<h5>stephking</h5>
	<h5>blog</h5>
	<p><i class='far fa-trash-alt delete'></i><i class='far fa-edit edit'></i><button class="publish">Unpublish</button></p>
	<h5>9-11-2020</h5>
</div>
<div class="table-inputs">
	<h5>new post</h5>
	<h5>stephking</h5>
	<h5>blog</h5>
	<p><i class='far fa-trash-alt delete'></i><i class='far fa-edit edit'></i><button class="publish">Unpublish</button></p>
	<h5>9-11-2020</h5>
</div>
</div>
	
</div>
</div>
</div>
</div>
<script>

		let toggleBar = document.querySelector('.toggle-bar');
		let navbox = document.querySelector('.sidebar-nav');
		let navStatus = false;
		toggleBar.addEventListener('click', slideToggle);

		function slideToggle() {
		
			if (navStatus == true) {
				navbox.style.left = "-660px";
				navStatus = false;
			} else if (navStatus == false) {
				navbox.style.left = "0";
				navStatus=true;
			}
			
		}

	</script>
</body>
</html>