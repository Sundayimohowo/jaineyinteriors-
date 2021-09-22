<?php include 'functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Jainey Interiors-How it works</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
    <link rel="shortcut icon" href="images/fav.png">
	<meta name="description" content="We at Jainey Interiors help you to create and decorate spaces that offer comforts and make you feel at home.">
<meta name="keywords" content="Jainey interiors,interior decoration, interior design company, interior design website, interior design services.">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" type="text/css" href="styles.css">
	
	<link rel="stylesheet" type="text/css" href="slick/slick.css">
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@200&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<?php include 'header.php'; ?>
<div class="home-banner">
	<div class="img-wrapper">
		<img class='slides' src="images/image2.jpg" />
	</div>
	<div class="banner-texts" data-aos="fade-up"
     data-aos-anchor-placement="center-bottom">
		<h2>Interior design services for any space, on any budget.</h2>
		<p>At Jainey Interiors, we believe that impossibility is possible. If you can think it, you can be rest assured that we will create it.</p>
		<div class="banner-acts"><button class="btn-1">About us</button>
		</div>
	</div>
</div>
<style>
    .about-us-lists{
        display:flex;
        flex-direction:row;
        background-color:#fff;
        width:90%;
        justify-content:space-between;
    }
    .step1{
        width:45%;
        background-color:#fff;
        text-align:left;
        height: 420px;
    }
    .step2{
        width:45%;
        background-color:rgba(255, 125, 39, 0.073);
        height: 420px;
        text-align:left;
    }
    h2{
        font-family:'poppins';
        font-weight:bolder;
        font-size:15px;
        padding-left:5px;
    }
    .step1 p{
        font-weight:lighter;
    }
    .step1 img{
        width:100%;
        height:230px;
    }
    .step2 img{
        width:100%;
        height:230px;
    }
    .how{
        display:flex;
        flex-wrap:wrap;
        flex-direction:row;
        justify-content:space-between;
    }
    @media (max-width:468px) {
        .step1{
            width:100%;
        }
        
        .step2{
            width:100%;
        }
    }
</style>
<div class='content-wrapper'>
<div class="about-us-lists">
     <h5>STEP-BY-STEP INTERIOR DESIGN.</h5>
     <div class='how-it-works'>
     <div class='how'>
         <div class='step1'>
            <h2>1. Help Us Get To Know You.</h2>
            <p>Getting started is easy! we care about relationship so we want to know you,your space and anyone else who lives in your space. Getting to know you makes us know better whom we are working with.</p>
            <img src='images/meet.jpg' />
        </div>
        <div class='step2'>
            <h2>2. Discuss the Design process.</h2>
            <p> Let's discuss about the design process with a clear picture of the room to be designed, the full details of the design(location, when to start and how to get it done.)</p>
           <br> <img src='images/snap.jpg' />
        </div>
</div><div class='how'>
        <div class='step1'>
            <h2>3. Tell Us Your Budget.</h2>
            <p>Once we have all the above info, tell us your bugdet to give you a design that is inline with your bugdet. We work with customers budget.</p>
        <br>
            <img src='images/budget.jpg' />
        </div>
        <div class='step2'>
            <h2>4. Work With Our Designer</h2>
            <p> After speaking directly with us, and an agreement as be made, your first design is just the starting point. You can continue to work with our designer until you are 100% happy.</p>
            <img src='images/designer.jpg' />
        </div>
</div>
        <div class='step1'>
            <h2>5. Enjoy the design with confidence.</h2>
            <p>After services from our designers, you begin to enjoy the beauty of our design.   </p>
            <p>Get in touch to learn more.</p>
            <img src='images/enjoy.jpg' />
        </div>
        <div class="blog-wrapper" style='background-color:transparent;'>
        <h2>Blog posts</h2>
	<div class="blog">
		<div class="post-wrapper">
		<?php $Allposts=selectAll('posts',['status'=>1]);
		foreach ($Allposts as $key => $post) {
			?>
			<div class="single-post">
				<a href="single.php?title=<?php echo $post['title']; ?>"><img src="<?php echo 'images/'.$post['image']; ?>"/></a>
				<div class="blog-content">
			    	<a href="single.php?title=<?php echo $post['title']; ?>"><h1><?php echo $post['title']; ?></h1></a>
			<p><?php echo html_entity_decode(substr($post['body'], 0,150)."..."); ?></p>
				</div>
				
		</div>
			<?php } ?>
		</div>
	</div>
</div>
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

<!-- Footer section -->
<?php  include 'footer.php'; ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
$(document).ready(function(){
    $('.images').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        nextArrow: $('.next'),
        prevArrow: $('.prev'),

        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
  });

});
	</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>
</body>
</html>













