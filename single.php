<?php include 'functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Jainey interiors-<?php echo $_GET['title']; ?></title>
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
<?php 
if (isset($_GET['title'])){
    $post=selectOne('posts',['title'=>$_GET['title']]);
}
?>

<div class="blog-wrapper" style='background-color:#fff;padding-top: 70px;'>
	<div class="single-wrapper">
		<div class="post-wrapper">
			<img src="<?php echo 'images/'.$post['image']; ?>" />
            <div class='single-content'>
                <h1 style="font-family:'Rubik'"><?php echo $post['title']; ?></h1>
                <span style='padding-right:10px;color:rgba(0,0,0,0.7)' style='text-align:left;'><?php echo date('F j,Y',strtotime($post['created_date'])); ?> / by Jainy</span>
                <span><i style='padding-right:10px;color:rgba(0,0,0,0.7)' class='fab fa-facebook'></i><i style='padding-right:10px;color:rgba(0,0,0,0.7)' class='fab fa-twitter'></i><i style='padding-right:10px;color:rgba(0,0,0,0.7)' class='fab fa-instagram'></i></span>
                <p><?php echo $post['body']; ?>                </p>
                <!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<h5 style='text-align:left;font-weight:bold;'> Share On:</h5>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_linkedin"></a>
<a class="a2a_button_whatsapp"></a>
<a class="a2a_button_copy_link"></a>
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
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

<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
            </div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>