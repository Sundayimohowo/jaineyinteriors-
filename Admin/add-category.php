<?php include 'header.php'; 
if (isset($_GET['delete_category'])) {
	$category=selectOne('categories',['id'=>$_GET['delete_category']]);
	if ($category) {
		$delete=delete('categories',$_GET['delete_category']);
		if ($delete) {
		header('location:categories.php');
		}
	}
}else {
?>
<div class='content'>
<?php include 'sidebar.php'; ?>

<div class='the-content'>
<h4>Add New Category</h4>
<form class="content-body" id='myForm'>
<input type="hidden" name='create_category' value='create_category' />
<input type="hidden" name='user_id' value='1' />
<div class="username-wrapper">
<h4>Title:</h4>
<input name='title' placeholder=" Enter Category Title: "/>
</div> 
<div class="username-wrapper">
    <h4>Category Description</h4>
    <textarea name='description' cols="100" rows="10"></textarea>
    </div>
<div class='alert-msg' style='color:red;margin-top: 15px;'></div>
<div class="add-user-wrapper">
    <button class='add-category'>Add Category</button>
</div> 
</form>
</div>
</div>
</div>
<script type="text/javascript">
        $(document).ready(function() {
            var form = $('#myForm'); // contact form
            var add_category=$('.add-category'); // submit button
            var alert = $('.alert-msg'); // alert div for show alert message

            // form submit event
            form.on('submit', function(e) {
                e.preventDefault(); // prevent default form submit

                $.ajax({
                    url: 'adminData.php', // form action url
                    type: 'POST', // form submit method get/post
                    dataType: 'html', // request type html/json/xml
                    data: form.serialize(), // serialize form data
                    beforeSend: function() {
                        alert.fadeOut();
                        add_category.html('creating..'); // change submit button text
                    },
                    success: function(data) {
                        alert.html(data).fadeIn(); // fade in response data
                        add_category.html('add user');
                        // form.trigger('reset'); // reset form
                    },
                    error: function(e) {
                        console.log(e)
                    }
                });
                 
            });
        });
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
<?php 
}
?>