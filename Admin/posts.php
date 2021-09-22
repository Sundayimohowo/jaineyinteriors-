<?php include 'header.php'; ?>
<div class='content'>
<?php include 'sidebar.php'; ?>
<div class='the-content'>
<h4>Posts <a href='add-post.php'><button class="addnew">Add New</button></a></h4>
<div class="all-posts"><h4>All<span>(3)</span> </h4> <h4>published <span>(3)</span></h4></div>

<div class="content-body">
<div class='table-content'>
<div class="table-heading">
	<h4>Title</h4>
	<h4>Categories</h4>
	<h4>Action</h4>
	<h4>Date</h4>
</div>
<?php $all_posts=selectAll('posts');
foreach ($all_posts as $key => $post) {
 ?>
<div class="table-inputs">
	<h5><?php echo $post['title']; ?></h5>
	<h5><?php echo $post['category'] ?></h5>
	<p><a href='edit-post.php?delete_post=<?php echo $post['id']; ?>'><i class='far fa-trash-alt delete'></i></a><a href='edit-post.php?edit_post=<?php echo $post['id']; ?>'><i class='far fa-edit edit'></i></a>
	<a href='edit-post.php?publish=<?php echo $post['id']; ?>'><button class="publish"><?php if ($post['status']=='1') {
	   echo 'unpublish';
	}else {
		echo 'publish';
	} ?></button></a></p>
	<h5><?php echo date('d m y',strtotime($post['created_date'])); ?></h5>
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