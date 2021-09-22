<?php include 'header.php'; ?>
<div class='content'>
<?php include 'sidebar.php'; ?>

<div class='the-content'>
<h4>Reviews</h4>

<div class="content-body">
<div class='table-content'>
<div class="table-heading">
	<span>Name</span>
	<span>Review</span>
    <span>Action</span>
</div>
<?php $reviews=selectAll('reviews',['status'=>0]); 
foreach ($reviews as $key => $review) {
?>
<div class="table-inputs">
	<h5><?php echo $review['name'];  ?></h5>
    <h5><?php echo $review['body'];  ?></h5>
	<p><a href='edit-category.php?delete_review=<?php echo $review['id']; ?>'><i class='far fa-trash-alt delete'></i></a><a href='edit-category.php?approve_review=<?php echo $review['id']; ?>'><button class='edit'>approve</button></a></p>
</div>
<?php } ?>
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