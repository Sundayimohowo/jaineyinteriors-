<?php include 'header.php'; 
 ?>
<div class='content'>
<?php include 'sidebar.php'; ?>

<div class='the-content'>
<h4>Add Gallery <a href='gallery.php'><button class="addnew">add new</button></a></h4>
<form class="content-body" method='POST' action='adminData.php' enctype="multipart/form-data">

<div class="username-wrapper">
    <h4>Select Category:</h4>
    <select name="category" class="user-role">
	<?php $categories=selectAll('gallery_categories'); 
foreach ($categories as $key => $category) {
?>
    <option value="<?php echo $category['title']; ?>"><?php echo $category['title']; ?></option>
<?php } ?>
    </select>
</div>   
<input type='hidden' name='submit' value='submit'/>
<div class="username-wrapper">
    <h4>Select image</h4>
    <input type="file" name="image_gallery[]" id="file" placeholder="select image" multiple>
    </div>  
	<div class="alert-msg" style="color: purple;margin-top: 1em;margin-bottom: 1em;"><?php if (!empty($errors)) {
				foreach ($errors as $key => $error) {
					echo $error;
				}
			} ?></div>
<div class="add-user-wrapper">
    <button>Add images</button>
</div> 
</form>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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