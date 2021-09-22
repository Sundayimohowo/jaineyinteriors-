<footer>
	<style>
		.footer-wrapper{
			width:98%;
			position: relative;
			overflow:hidden;
			top:-50px;
			background-color:#fff;
			font-family:'Poppins';
			margin:auto;
			margin-bottom:0;
			color:rgba(0,0,0,0.5);
			box-shadow:3px 3px 3px 3px rgba(0,0,0,0.1);
			height:auto;
			padding-bottom:10px;
		}
		.footer-wrapper .row1{
			display:flex;
			flex-direction:row;
			flex-wrap:wrap;
			justify-content:space-between;
			width:90%;
			margin:auto;
			padding-bottom:20px;
			height:auto;
		}
		.footer-wrapper .row1 .column1{
			width:25%;
		}
		.column1 h3{
			color:rgba(0,0,0,0.7);
			font-family:'Poppins';
			font-size:15px;
		}
		.column2 h3{
			color:rgba(0,0,0,0.7);
			font-family:'Poppins';
			font-size:15px;
		}
		.footer-wrapper .row1 .column1 img{
			width:100%;
			margin-left:-20px;
			height:90px;
		}
		.footer-wrapper .row1 .column1 a{
			color:rgba(0,0,0,0.5);
			text-decoration:none;
		}
		.footer-wrapper .row2{
			display:flex;
			flex-direction:row;
			justify-content:space-between;
			flex-wrap:wrap;
			width:90%;
			margin:auto;
			height:250px;
		}
		.footer-wrapper .row2 .column2{
			width:33%;
		}
		
		.footer-wrapper .row2 .column2 a{
			border:2px solid #ff7f27;
			padding:5px;
			border-radius:3px;
			margin-right:13px;
			font-size:18px;
		}
		.footer-wrapper .row2 .column2 a:hover{
			border:2px solid rgba(0,0,255,0.4);
		}
		.footer-wrapper ul{
			list-style:none;
			margin-left:-40px;
		}
		.footer-wrapper ul li{
			padding-top:10px;
		}
		.footer-policy{
			width:100%;
			height:4em;
			display:flex;
			flex-direction:column;
			justify-content:center;
			background:rgba(0,0,0,0.02);
			text-align:center;
		}
		.footer-policy p{
			align-self:center;
		}
		.fa-chevron-down{
			display:none;
		}
		
		.cursor {
    cursor:pointer;
} 
.prev,.next { 
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding:16px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    transition:0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select:none;
    background: #00000066;
}
.prev{
    left:0;
}
.next {
    right: 0;
    border-radius: 3px 0 0 3px;
}
		@media (max-width:768px){
			.footer-wrapper{
			padding-bottom:20px;
			width:93%;
		}
			.footer-wrapper .row1 .column1{
				width:33%;
			}
			.footer-wrapper .row2 .column2{
			width:45%;
		}
		}
		@media (max-width:468px){
			.fa-chevron-down{
				display:block;
			}
			.footer-display{
				display:flex;
				flex-direction:row;
				justify-content:space-between;
				border-bottom:2px solid rgba(0,0,0,0.1);
				padding-bottom:10px;
				font-size:3px;
				cursor:pointer;
			}
			.footer-display2{
				display:flex;
				flex-direction:row;
				justify-content:space-between;
				border-bottom:2px solid rgba(0,0,0,0.1);
				padding-bottom:10px;
				font-size:3px;
				cursor:pointer;
			}
			.footer-display3{
				display:flex;
				flex-direction:row;
				justify-content:space-between;
				border-bottom:2px solid rgba(0,0,0,0.1);
				padding-bottom:10px;
				font-size:3px;
				cursor:pointer;
			}
			.footer-ul{
				display:none;
			}
			.footer-ul2{
				display:none;
			}
			.footer-ul3{
				display:none;
			}
			.footer-wrapper .row1 .column1{
				width:80%;
				margin:auto;
			}

			.footer-wrapper .row2 .column2{
			width:49%;
		}

		}
		@media (max-width:382px){
			.footer-wrapper .row1 .column1{
				width:95%;
				margin:auto;
			}
			
	}
	
	</style>
	<div class='footer-wrapper'>
		<div class='row1'>
		<div class='column1'>
			<img src='images/logo.jpg' />
		</div>
		<div class='column1'>
			<h3 class='footer-display'>HOME FURNITURE <i style='padding-left:15px;' class='fa fa-chevron-down'></i></h3>
			<ul class='footer-ul'>
				<li><a href='gallery.php?sub_category=bedroom furniture'>Bedrooms</a></li>
				<li><a href='gallery.php?sub_category=kitchen furniture'>kitchen</a></li>
				<li><a href='gallery.php?sub_category=dinning furniture'>Dinning Rooms</a></li>
				<li><a href='gallery.php?sub_category=office furniture'>Office</a></li>
		</ul>
	   </div>
	   <div class='column1'>
		<h3 class='footer-display2'>3D DESIGNS<i style='padding-left:15px;' class='fa fa-chevron-down'></i></h3>
		<ul class='footer-ul2'>
			<li><a href='gallery.php?sub_category=3D throwpillow'>3D Throwpillow</a></li>
			<li><a href='gallery.php?sub_category=3D wallclock'>3D Wallclock</a></li>
			<li><a href='gallery.php?sub_category=3D luminous clock'>3D Luminous clock</a></li>
			<li><a href='gallery.php?sub_category=3D wallpaper'>3D wallpaper</a></li>
	</ul>
   </div>
   <div class='column1'>
			<h3 class='footer-display3'>LINKS<i style='padding-left:15px;' class='fa fa-chevron-down'></i></h3>
			<ul class='footer-ul3'>
				<li><a href='index.php'>Home</a></li>
				<li><a href='blog.php'>Blog</a></li>
				<li><a href='How it works'>How it works</a></li>
				<li><a href='gallery'>Gallery</a></li>
		</ul>
	   </div>
    </div>
	<div class='row2'>
	<div class='column2'>
			<h3><i style='color:#ff7f27' class='fas fa-home'>Jainey Interiors</i></h3>
			<ul>
				<li>Ibadan</li>
				<li>Nigeria</li>
		</ul>
	   </div><div class='column2'>
			<h3>Home Furniture</h3>
			<ul>
				<li>jaineyinteriors@gmail.com</li>
				<li><i style='color:#ff7f27' class='fas fa-phone'></i>+2348136136538</li>
		</ul>
	   </div><div class='column2'>
			<h3>Social Media</h3>
			<ul style='display:flex;flex-direction:row,justify-content:space-between;' class='socials'>
				<li><a href='href="https://www.facebook.com/jaineyinteriors/"'><i style='color:#ff7f27' class='fab fa-facebook'></i></a></li>
				<li><a href='http://instagram.com/jainey_interiors'><i style='color:#ff7f27' class='fab fa-instagram'></i></a></li>
				<li><a href=''><i style='color:#ff7f27' class='fab fa-twitter'></i></a></li>
				<li><a href='https://api.whatsapp.com/send?phone=2348136136538'><i style='color:#ff7f27' class='fab fa-whatsapp'></i></a></li>
		</ul>
	   </div>
	</div>
	
</div>
<div class='footer-policy'>
		<p>All Right Reserved.</p>
</div>
</footer>

<script>
        let chevronBar = document.querySelector('.footer-display');
		let footerUl = document.querySelector('.footer-ul');
		let status = false;
		chevronBar.addEventListener('click', showLinks);

		function showLinks() {
		
			if (status == true) {
				footerUl.style.display = "none";
				status = false;
			} else if (status == false) {
				footerUl.style.display = "block";
				status=true;
			}
			
		}
		let chevronBar2 = document.querySelector('.footer-display2');
		let footerUl2 = document.querySelector('.footer-ul2');
		let status2 = false;
		chevronBar2.addEventListener('click', showLinks2);

		function showLinks2() {
		
			if (status2 == true) {
				footerUl2.style.display = "none";
				status2 = false;
			} else if (status2 == false) {
				footerUl2.style.display = "block";
				status2=true;
			}
			
		}
		let chevronBar3 = document.querySelector('.footer-display3');
		let footerUl3 = document.querySelector('.footer-ul3');
		let status3 = false;
		chevronBar3.addEventListener('click', showLinks3);

		function showLinks3() {
		
			if (status3 == true) {
				footerUl3.style.display = "none";
				status3 = false;
			} else if (status3 == false) {
				footerUl3.style.display = "block";
				status3=true;
			}
			
		}
</script>
<a href="https://wa.me/2348136136538?text=Hi%20Jainey%20Interiors.%20My%20name%20is..%20." class="whatsapp-wrapper" style="position:fixed;bottom:2%;right:1.5%;height: 3.3em; border-radius: 50%; cursor: pointer; width: 3.3em;background: #075E54;z-index: 1000;"><button style="border-radius: 50%;background: #075E54;width: 100%;cursor: pointer;height: 100%;border:none;">
<i class="fab fa-whatsapp" style="color: white;font-size: 2em;"></i></button></a>
</div>