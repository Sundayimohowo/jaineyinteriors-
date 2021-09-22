<?php include 'header.php'; ?>
<?php if (isset($_POST['create_post'])) {

$errors=array();
if (!empty($_FILES['image']['name'])){
	$image_name= time()."_".$_FILES['image']['name'];
	$destination="../images/" . $image_name;

	$result= move_uploaded_file($_FILES['image']['tmp_name'], $destination);

	if ($result){
		$_POST['image']=$image_name;
		unset($_POST['create_post']);
		$exist=selectOne('posts',['title'=>$_POST['title']]);
		if (!$exist){
			  if (!empty($_POST['body'])) {
				  if (!empty($_POST['category'])){
				 
				 $create=create('posts',$_POST);

					 array_push($errors,'created successully');
			 
			  }else{
				   array_push($errors,'category can not be empty');
			  }
				
			  }else{
				  array_push($errors,'post alrready exist');
			  }               
				  
			  }
	}else{
		array_push($errors,'failed to upload image');
	}
}else{
	array_push($errors,'image is required');
}

} ?>
<div class='content'>
<?php include 'sidebar.php'; ?>

<div class='the-content'>
<h4>Add New Post</h4>
<form class="content-body" action="" method="POST" enctype="multipart/form-data">

<input type="hidden" name="create_post" value="Create">
<input type="hidden" name="user_id" value="1">
<div class="username-wrapper">
<h4>Title:</h4>
<input name='title' placeholder=" Enter Post Title: "/>
</div>
<div class="username-wrapper">
    <h4>Select image</h4>
    <input type="file" name="image" id="file" placeholder="select image">
    </div>
<div class="username-wrapper">
    <h4>Select Category:</h4>
    <select name="category" class="user-role">
	<?php $categories=selectAll('categories'); 
foreach ($categories as $key => $category) {
?>
        <option value="<?php echo $category['title']; ?>"><?php echo $category['title']; ?></option>
<?php } ?>
    </select>
</div>   
<div class="username-wrapper">
    <h4>Post content</h4>
    <textarea cols="100" rows="10" id='body' name='body'></textarea>
    </div>
	
<div class="username-wrapper">
    <h4>Publish/Unpublish:</h4>
    <select name="status" class="user-role">
        <option value="1">publish</option>
		<option value="0">Unpublish</option>
    </select>
</div>   
	<div class="alert-msg" style="color: purple;margin-top: 1em;margin-bottom: 1em;"><?php if (!empty($errors)) {
				foreach ($errors as $key => $error) {
					echo $error;
				}
			} ?></div>
<div class="add-user-wrapper">
    <button>Add Post</button>
</div> 
</form>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
<script type="text/javascript">
	ClassicEditor.create( document.querySelector( '#body' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
    } );
    </script>
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