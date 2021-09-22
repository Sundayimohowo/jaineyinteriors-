<?php 
include '../functions.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Interior Design</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet"> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="wrapper">
	<div class="Header-wrapper">
	<div class="header">
	<div class="toggle-bar"><span></span></div>
		<header>
			<a href='../index.php' style='color:#fff'><h5><i class="fas fa-home"></i><span class='headertext'>Jainy Interiors<span></h5></a>
		</header>
	<h5><ul><li class='firstUl'><i class="fas fa-plus"></i><a href='#' class='headertext'>New</a><ul class='headerUl'>
        <li><a href='add-post.php'>Post</a></li>
		<li><a href='new-user.php'>User</a></li></ul></li></ul></h5>
		<div class='loggedin-user'>
			<style>
				ul{
					list-style: none;
				}
				.headerUl{
					position: absolute;
					top: 30px;
					background-color:#fff;
					display:none;
					padding-right: 15px;
				}
				.headerUl li{
					border-bottom:2px solid rgba(0,0,0,0.3);
				}
				.headerUl a{
					font-size:13px;
					padding-left:-10px;
					color: #000;
				}
				.headerUl a:hover{
					color: blue;
				}
				.firstUl:hover .headerUl{
					display:block;
					padding-top:10px;
					margin-left:-40px;
				}
			</style>
        <h5><ul><li class='firstUl'> <i class="fas fa-user"></i> <a href='#' class='headertext'>olaoluwa</a><ul  class='headerUl'>
        <li><a href='adminData.php?logout=true'>Logout</a></li></ul></li></ul></h5>
        </div>
	</div>
</div>
