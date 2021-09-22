<?php include 'header.php'; ?>
<?php 
if (isset($_GET['edit_post'])) {
   $the_post=selectOne('posts',['id'=>$_GET['edit_post']]);
}else if (isset($_GET['delete_post'])){
        $delete=delete('posts',$_GET['delete_post']);
        if ($delete) {
            header('location:posts.php');
        }
    }else {
    if (isset($_GET['publish'])){
        $post=selectOne('posts',['id'=>$_GET['publish']]);
        if ($post['status']==1) {
            $status=0;
        }else {
            $status=1;
        }
        $update=update('posts',$_GET['publish'],['status'=>$status]);
        if ($update) {
            header('location:posts.php');
        }
    }
}

if (isset($_POST['create_post'])) {

$errors=array();
if (!empty($_FILES['image']['name'])){
	$image_name= time()."_".$_FILES['image']['name'];
	$destination="../images/" . $image_name;

	$result= move_uploaded_file($_FILES['image']['tmp_name'], $destination);

	if ($result){
		$_POST['image']=$image_name;
		unset($_POST['create_post']);
		$exist=selectOne('posts',['id'=>$_GET['edit_post']]);
		if ($exist){
			  if (!empty($_POST['body'])) {
				  if (!empty($_POST['category'])){
				 $create=update('posts',$the_post['id'],$_POST);

					 array_push($errors,'updated successully');
			 
			  }else{
				   array_push($errors,'category name can not be empty');
			  }
				
			  }else{
				  array_push($errors,'post does not exist, please, create.');
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
<input type="hidden" name="user_id" value='<?php echo $the_post['user_id']; ?>'>
<div class="username-wrapper">
<h4>Title:</h4>
<input name='title' placeholder=" Enter Post Title: " value='<?php echo $the_post['title']; ?>' />
</div>
<div class="username-wrapper">
    <h4>Select image</h4>
    <input type="file" name="image" id="file" placeholder="select image" value='<?php echo $the_post['image']; ?>'>
    </div>
<div class="username-wrapper">
    <h4>Select Category:</h4>
    <select name="category" class="user-role">

        <option value="<?php echo $the_post['category']; ?>"><?php echo $the_post['category']; ?></option>
    </select>
</div>   
<div class="username-wrapper">
    <h4>Post content</h4>
    <textarea cols="100" rows="10" id='body' name='body'><?php echo $the_post['body']; ?></textarea>
    </div>
<div class="username-wrapper">
    <h4>Publish/Unpublish:</h4>
    <select name="status" class="user-role">
        <option value="<?php echo $the_post['status']=1?1:0; ?>"><?php if ($the_post['status']=='1') {
	   echo 'unpublish';
	}else {
		echo 'publish';
	} ?></option>
		<option value="<?php echo $the_post['status']=1?0:1; ?>"><?php if ($the_post['status']=='1') {
	   echo 'publish';
	}else {
		echo 'unpublish';
	} ?></option>
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