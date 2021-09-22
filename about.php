
<?php include 'functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<meta name="description" content="About Jainey Interiors entails all you need to stay in-the-know about what we offer and where we are headed.">
<meta name="keywords" content="Jainey interiors,interior decoration, interior design company, interior design website, interior design services.">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="shortcut icon" href="images/fav.png">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head></head>
<body>
<?php include 'header.php'; ?>

<div class="content-wrapper" data-aos="fade-up"
     data-aos-anchor-placement="center-bottom">
         <style>
             .about-us-wrapper{
                 width:80%;
                 margin:auto;
                 margin-top: 40px;
             }
             .about-us-banner-wrapper{
                 width:100%;
                 height:60vh;
             }
             .about-us-banner-wrapper img{
                 width:100%;
                 height:100%;
             }
             .social-media{
                display:flex;
                flex-direction:row;
                justify-content:flex-start;
             }
             .about-us-content ul{
                    display:flex;
                    flex-direction:row;
                    justify-content:flex-start;
                    list-style:none;
                }
                .about-us-content ul li{
                   margin-right:25px;
                }
                .about-us-content ul li i{
                   color:rgba(0,0,0,0.5);
                }
                .about-us-content ul li span{
                   color:rgba(0,0,0,0.5);
                }
             @media (max-width:1111px){
                .about-us-banner-wrapper{
                    height: 30vh;
                }
                .about-us-content{
                    text-align:left;
                }
                .about-us-content p{
                    text-align:left;
                }
             }
             .services-ul{
                 display:flex;
                 flex-direction:column;
                 justify-content:space-between;
             }
         </style>
	<div class='about-us-wrapper'>
        <div class='about-us-banner-wrapper'>
            <img src='images/image2.jpg' />
        </div>
        <div class='about-us-content'>
            <h2>About Jainey Interiors</h2>
            <p>Jainey Interiors is a home and decor site, designed to inspire anyone to live a more beautiful and happy life at home.</p><p>

10 years ago, Bamidele Janet was known as the “apartment therapy” because of the way she arranges her friends’ spaces leaving it beautiful and perfect.
Shortly after University, Janet decided to go to Interior school where she trained for months. 
</p><p>

Jainey Interiors was launched in 2019 by the interior designer/decorator Bamidele Janet (nicknamed “the apartment therapist”).</p><p>

Through a combination of expert advice, shopping guides, and DIY how-to’s, it’s our mission to show how people are making their own homes more beautiful with unstaged and true-to-life tips and photos for range of budgets 
</p><p>

Between running JI and her many projects, Janet enjoys life on the farm, cooking and gardening. Above all, she loves spending time with her family.</p>
            <p>This section offers a behind the scene to show you cool things like what we do, things happening at Jainey interioirs and our Blogs.You can find out how we can constantly help you to imagine, design and create spaces.</p>
        
            <p class='social-media'><ul>
				<li><a href="https://www.facebook.com/jaineyinteriors/"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="http://instagram.com/jainey_interiors"><i class="fab fa-instagram"></i></a></li>
				<li><a href=""><i class="fab fa-twitter"></i></a></li>
				<li><a href="https://api.whatsapp.com/send?phone=2348136136538"><i class="fab fa-whatsapp"></i></a></li>
                <li><span>follow us</span></li>
			</ul></p>
        </div>
    </div>
    <div class="blog-wrapper" style='background-color:transparent;'>
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
<?php include 'footer.php'; ?>
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
