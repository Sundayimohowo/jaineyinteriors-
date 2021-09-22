<?php include 'header.php'; 

?>
<div class='content'>
<?php include 'sidebar.php'; ?>

<div class='the-content'>
<h4>Add New Category</h4>
<form class="content-body" id='myForm'>
<input type="hidden" name='gallery_category' value='gallery_category' />
<div class="username-wrapper">
<h4>Title:</h4>
<input name='title' placeholder=" Enter Category Title: "/>
</div> 
<div class="username-wrapper">
    <h4>category</h4>
    <select name="sub_category" class="user-role">
        <option value="furnitures">furnitures</option>
        <option value="3D_designs">3D Designs</option>
        <option value="gift_items">Gift Items</option>
        <option value="interior_decor">Interior Decor</option>
    </select>
</div>
<div class="username-wrapper">
    <h4>Description</h4>
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
                        add_category.html('added');
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
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</html>
