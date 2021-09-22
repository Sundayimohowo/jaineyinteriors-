<?php
include '../functions.php';
$tableName='gallery'; 
if (isset($_POST['add_user'])){
	unset($_POST['add_user']);
	if(preg_match('/[a-zA-Z0-9_]+/', $_POST['username'])){
		if(strlen($_POST['password'])>=5 && strlen($_POST['password'])<=12){
			$exist=selectOne('users',['username'=>$_POST['username']]);
			$original=$_POST['password'];
			$password=password_hash($_POST['password'],PASSWORD_BCRYPT);
			$_POST['password']=$password;
			if (!$exist) {
				$user=create('users',$_POST);
		   if ($user) {
			   echo 'user '.$_POST['username'].' created successfully with password '.$original.' as an '.$_POST['role'];		   
			}else {
				echo "An error occured while creating user ".$_POST['username'];
			}
		}else {
				echo 'username already exist';
		}
	}else {
		echo 'password must be more than five characters and not more than 12';
	}
}else {
	echo 'please, enter a valid username';
}
}else if (isset($_POST['delete_user'])) {
	$user=selectOne('users',['id'=>$_POST['delete_user']]);
	if ($user) {
		$delete=delete('users',$_POST['delete_user']);
		if ($delete) {
		header('location:users.php');
		}
	}
}elseif (isset($_POST['create_category'])) {
	if (!empty($_POST['user_id'])) {
		if (!empty($_POST['title'])) {
			$exist=selectOne('categories',['title'=>$_POST['title']]);
			if (!$exist) {
				if (!empty($_POST['description'])) {
					unset($_POST['create_category']);
					$create=create('categories',$_POST);
					if ($create) {
						echo "category has been created successfully";
					}
			}else{
				echo "please, enter a description for this category";
			}
		}else{
			echo "category name exists";
		}
	}else{
		echo "please, enter category title";
	}
}else{
	echo "please, login to create category";
}
}elseif (isset($_POST['gallery_category'])) {
		if (!empty($_POST['title'])) {
			$exist=selectOne('gallery_categories',['title'=>$_POST['title']]);
			if (!$exist) {
				if (!empty($_POST['description'])) {
					unset($_POST['gallery_category']);
					$create=create('gallery_categories', $_POST);
					if ($create) {
						echo "category has been created successfully";
					}
			}else{
				echo "please, enter a description for this category";
			}
		}else{
			echo "category name exists";
		}
	}else{
		echo "please, enter category title";
	}

}else if (isset($_POST['edit-category'])) {
	if (!empty($_POST['title'])) {
		$exist=selectOne('categories',['title'=>$_POST['title'],'description'=>$_POST['description']]);
		if (!$exist) {
			if (!empty($_POST['description'])) {
				$create=update('categories',$_POST['edit-category'],['title'=>$_POST['title'],'description'=>$_POST['description']]);
				if ($create) {
					echo "category has been updated successfully";
				}
		}else{
			echo "please, enter a description for this category";
		}
	}else{
		echo "You have made no changes";
	}
}else{
	echo "please, enter category title";
}
}elseif (isset($_POST['login'])) {
	unset($_POST['login']);
	$user=selectOne('users',['username'=>$_POST['name']]);
	if($user && password_verify($_POST['password'],$user['password'])){
		$_SESSION['username']=$_POST['name'];
		if ($_SESSION['username']) {
			echo 'ok';
		}
		
	}else{
		echo 'incorrect username and password';
	}
}elseif (isset($_GET['logout'])) {
	unset($_SESSION['username']);
	header('location:login.php');
}else if(isset($_POST['submit'])){ 
	echo upload_image($tableName); 
} 
function upload_image($tableName){ 
	
	$uploadTo="uploads/"; 
	$allowedImageType=array( 'jpg', 'png', 'jpeg', 'gif'); 
	$imageName=array_filter($_FILES['image_gallery'][ 'name']); 
	$imageTempName=$_FILES[ "image_gallery"][ "tmp_name"]; 
	$tableName=trim($tableName); 
	if(empty($imageName)){
		$error="Please Select Images.." ;
		return $error;
	}else if(empty($tableName)){
		$error="You must declare table name";
		return $error;
	}else{
		$error=$savedImageBasename='';
		
		foreach($imageName as $index=>$file){
			$imageBasename = basename($imageName[$index]);
			$imagePath = $uploadTo.$imageBasename;
			$imageType = pathinfo($imagePath, PATHINFO_EXTENSION); if(in_array($imageType,$allowedImageType)){ // Upload image to server 
				if(move_uploaded_file($imageTempName[$index],$imagePath)){
// Store image into database table 
                    $sub_category=selectOne('gallery_categories',['title'=>$_POST['category']]);
					$savedImageBasename .= "('".$_POST['category']."',"."'".$sub_category['sub_category']."',"."'".$imageBasename."'),";
					}else{
						$error = 'File Not uploaded ! try again';
						}
						}else{
							$error .= $_FILES['file_name']['name'][$index].'- file extensions not allowed<br> ';
						 }
						 }
						 save_image($savedImageBasename, $tableName); 
						 } return $error;
						 } // File upload configuration
						 function save_image($savedImageBasename, $tableName){ 
						 	global $conn;
							
							 if(!empty($savedImageBasename)) { $value = trim($savedImageBasename, ',');
						 	$saveImage="INSERT INTO ".$tableName." (category,sub_category,image_name) VALUES".$value;
						 $exec= $conn->query($saveImage);
						 	
							 if($exec){
						 		echo "Images are uploaded successfully";
						 	}else{
						 		echo "Error: " . $saveImage. "<br>" . $conn->error;
						 	}
						 }
						} 
 ?>