<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class='the-content'>
    
<h4>Add New User</h4>
<form class="content-body" id='myForm'>
	<input name='add_user' type='hidden' value='add_user' />
<div class="username-wrapper">
<h4>Enter New User's Username:</h4>
<input name='username' placeholder=" Username "/>
</div>
<div class="username-wrapper">
<h4>Enter New User's password:</h4>
<input name='password' type='password' placeholder=" Password "/>
</div>
<div class="username-wrapper">
    <h4>Enter New User's Role:</h4>
    <select name="role" class="user-role">
        <option value="Editor">Editor</option>
        <option value="Administrator">Administrator</option>
    </select>
</div>   
<div class='alert-msg' style='color:red;margin-top: 15px;'></div>
<div class="add-user-wrapper">
    <button class='add-user'>Add user</button>
</div> 
</form>
</div>
</div>
</div>
<script type="text/javascript">
        $(document).ready(function() {
            var form = $('#myForm'); // contact form
            var registerBtn=$('.add-user'); // submit button
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
                        registerBtn.html('creating..'); // change submit button text
                    },
                    success: function(data) {
                        alert.html(data).fadeIn(); // fade in response data
                        registerBtn.html('add user');
                        // form.trigger('reset'); // reset form
                    },
                    error: function(e) {
                        console.log(e)
                    }
                });
                 
            });
        });
        </script>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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