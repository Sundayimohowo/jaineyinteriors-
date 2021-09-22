<?php include 'header.php'; ?>
<div class='content'>
<?php include 'sidebar.php'; ?>

<div class='the-content'>
<h4>Categories <a href='add-category.php'><button class="addnew">Add New</button></a></h4>
<div class="all-posts"><h4>All<span>(3)</span> </h4></div>

<div class="content-body">
<div class='table-content'>
<div class="table-heading">
	<span>category</span>
	<span>Description</span>
    <span>Action</span>
</div>
<?php $categories=selectAll('categories'); 
foreach ($categories as $key => $category) {
?>
<div class="table-inputs">
	<h5><?php echo $category['title'];  ?></h5>
    <h5><?php echo $category['description'];  ?></h5>
	<p><a href='add-category.php?delete_category=<?php echo $category['id']; ?>'><i class='far fa-trash-alt delete'></i></a><a href='edit-category.php?edit_category=<?php echo $category['id']; ?>'><i class='far fa-edit edit'></i></a></p>
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