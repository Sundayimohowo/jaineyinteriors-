

<div class="wrapper">
	<div class="Header-wrapper">
	<div class="header">
		<style>
			header{
				height:60px;
				width:300px;
				overflow:hidden;
			}
			header img{
				width: 57%;
				height:120px;
				margin-left:-10px;
				margin-top:-30px;
			}
			.header-nav a{
			    text-decoration:none;
			    color:#000;
			    text-transform:uppercase;
			    font-size: 13px;
			    font-family: 'poppins';
	            font-weight: bold;
			}
			</style>
		<header data-aos="fade-right">
			<a href='index.php'><img src='images/logo.jpg'; /></a>
		</header>
		<div class="header-nav" data-aos="fade-left">
			<ul>
			<a href="index.php"><li>home</li></a>
			<a href="blog.php"><li>Blog</li></a>
			<a href="how-it-works.php"><li>How it works</li></a>
			<a href="about.php"><li>about us</li></a>
				<style>
					.gallery-ul ul{
						display:flex;
						flex-direction:column;
						width:150px;
						background:#fff;
						position:absolute;
						top:33px;
						padding-left:20px;
						display:none;
						height:auto;
						padding:13px;
						justify-content:space-between;
					}
					.gallery-ul:hover ul{
						display:block;
					}
					.gallery-ul ul li{
						padding-top:18px;
					}
					
					@media (max-width:768px){
						.gallery-ul ul{
							padding-left:0;
							position:relative;
							top:0;
						}
						.gallery-ul ul li{
						padding-top:0;
					}
					}
				</style>
				<a href="javascript:void(0);"><li style='border-bottom:none;' class='gallery-ul'>Gallery<ul class='gallery-ul'>
					<!-- <php $galleries=selectAll('gallery_categories');
					foreach ($galleries as $key => $gallery) {
					?> -->
					<a href='gallery.php?category=interior_decor'><li>interior Decor</li></a>
					<a href='gallery.php?category=furnitures'><li>Furnitures</li></a>
					<a href='gallery.php?category=3D designs'><li>3D designs</li></a>
					<a href='gallery.php?category=gift items'><li>Gift Items</li></a>
					<!-- <php 
				}
					?> -->
				</ul></li></a>
				<li class='social-li'><ul style='display:flex;flex-direction:row;justify-content:space-between;'>
				<li><a href="https://www.facebook.com/jaineyinteriors/"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="http://instagram.com/jainey_interiors"><i class="fab fa-instagram"></i></a></li>
				<li><a href="https://api.whatsapp.com/send?phone=2348136136538"><i class="fab fa-whatsapp"></i></a></li>
			</ul></li>
              </ul>
		</div>
		<div class="toggle-bar"><span></span></div>
	</div>
</div>
<script>

		let toggleBar = document.querySelector('.toggle-bar');
		let navbox = document.querySelector('.header-nav');
		let navStatus = false;
		toggleBar.addEventListener('click', slideToggle);

		function slideToggle() {
		
			if (navStatus == true) {
				navbox.style.right = "-100%";
				navStatus = false;
			} else if (navStatus == false) {
				navbox.style.right = "-10%";
				navStatus=true;
			}
			
		}
		

	</script>