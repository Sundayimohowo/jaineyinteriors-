
<!DOCTYPE html>
<html>
<head>
	<title>Interior Design</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="wrapper">
	<div class="Header-wrapper">
	<div class="header">
		<header>
			<a href='../index.php' style='color:#fff'><h5><i class="fas fa-home"></i><span class='headertext'>Jainy Interiors<span></h5></a>
            
        </header>
</div>
<div>

<div class='content'>

<div class='the-content'>
<form class="content-body" id='myForm'>
    <input name='login' value='login' type='hidden' />
    <h2>Admin Login</h2>
<div class="username-wrapper">
<h4>Username:</h4>
<input name='name' placeholder=" Enter Category Title: "  />
</div> 
<div class="username-wrapper">
    <h4>password:</h4>
    <input type='text' name='password'/>
</div>
<div class='alert-msg' style='color:red;margin-top: 15px;'></div>
<div class="add-user-wrapper">
    <button class='login'>Login</button>
</div> 
</form>
</div>
</div>
</div>
<script type="text/javascript">
        $(document).ready(function() {
            var form = $('#myForm'); // category form
            var add_category=$('.login'); // submit button
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
                        add_category.html('looging in..'); // change submit button text
                    },
                    success: function(data) {
                        alert.html(data).fadeIn(); // fade in response data
                        add_category.html('logged In');
                        if (data=='ok') {
                            window.location='dashboard.php';
                    }
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
</html>
