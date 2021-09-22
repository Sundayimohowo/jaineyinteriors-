<!DOCTYPE html>
<?php include 'functions.php'; ?>
<html>
<head>	
	<title>Jainey Interiors-Blog Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="shortcut icon" href="images/fav.png">
	<meta name="description" content="we help customers to know and understand the great benefit of quality interior design.">
<meta name="keywords" content="Jainey interiors,interior decoration, interior design company, interior design website, interior design services.">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<?php include 'header.php'; ?>

<!-- Our Blog Blog sections -->
<div class="blog-wrapper" style='margin-top:40px;'>
	<div class="blog">
		<div class="post-wrapper">
		<?php $Allposts=getPublishedProducts(9);
		foreach ($Allposts as $key => $post) {
			?>
			<div class="single-post">
				<a href="single.php?title=<?php echo $post['title']; ?>"><img src="<?php echo 'images/'.$post['image']; ?>"/></a>
				<div class="blog-content">
				<a href="single.php?title=<?php echo $post['title']; ?>"><h1><?php echo $post['title']; ?></h1></a>
					<p><?php echo html_entity_decode(substr($post['body'], 0,100)."..."); ?></p>
				</div>
				<a class='readmore-btn' href="single.php?title=<?php echo $post['title']; ?>"><button>READ MORE</button></a>
		</div>
			<?php } ?>
		</div>
	
	</div>
</div>
<style>
	.gallery-wrapper{
		background-color:#ff7f27;
		height:380px;
	}
	.gallery-content{
		width:90%;
		position: relative;
		margin:auto;
	}
	.gallery-content .images{
		width:90%;
		margin:auto;
		max-height:250px;
		/* display:none; */
		/* display:flex;
		flex-direction:row; */
		overflow:hidden;
		/* justify-content:space-between; */
		align-self:center;
	}
	.images img{
		width:33%;
		height:250px;
		margin-top:30px;
	}
</style>
<div class='gallery-wrapper'>
<h2 style="text-align:center;margin-top:15px;color:#fff;font-family:'Poppins'">Work Showcase</h2>
	<div class='gallery-content'>
		<div class='images'>
			<?php $all_gallery=selectAll('gallery'); 
			foreach ($all_gallery as $key=>$gallery){?>
			    <img src='Admin/uploads/<?php echo $gallery['image_name']; ?>'/>
				<?php
			}
			?>
		</div>
		<a class="prev">❮</a>
    <a class="next">❯</a>
	</div>
</div>


<?php include 'footer.php'; ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>













