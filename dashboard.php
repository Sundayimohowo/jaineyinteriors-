<?php include 'header.php'; ?>
<div class='content'>
<?php include 'sidebar.php'; ?>
<div class='the-content'>
<h4>Dashboard</h4>
<div class="content-body">
	<h4>Welcome to your Dashboard</h4>
	<p>Here are some links to get you started.</p>
	
</div>
</div>
</div>
</div>
</body>
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
</html>