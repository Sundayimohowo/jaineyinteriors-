<?php
include 'header.php'; 
if (isset($_GET['delete_review'])) {
    $review=selectOne('reviews',['id'=>$_GET['delete_review']]);
    if ($review) {
        $delete=delete('reviews',$review['id']);
        header('location:reviews.php');
    }
}elseif (isset($_GET['approve_review'])) {
    $review=selectOne('reviews',['id'=>$_GET['approve_review']]);
    if ($review) {
        $delete=update('reviews',$review['id'],['status'=>1]);
        header('location:reviews.php');
    }
}

if (isset($_GET['edit_category'])) {
	$category=selectOne('categories',['id'=>$_GET['edit_category']]);
}
?>
<div class='content'>
<?php include 'sidebar.php'; ?>

<div class='the-content'>
<h4>Edit Category</h4>
<form class="content-body" id='myForm'>
<input type="hidden" name='edit-category' value='<?php echo $category['id']; ?>' />
<div class="username-wrapper">
<h4>Title:</h4>
<input name='title' placeholder=" Enter Category Title: " value='<?php echo $category['title']; ?>' />
</div> 
<div class="username-wrapper">
    <h4>Category Description</h4>
    <textarea name='description' cols="100" rows="10"><?php echo $category['description']; ?></textarea>
</div>
<div class='alert-msg' style='color:red;margin-top: 15px;'></div>
<div class="add-user-wrapper">
    <button class='add-category'>Update Category</button>
</div> 
</form>
</div>
</div>
</div>
<script type="text/javascript">
        $(document).ready(function() {
            var form = $('#myForm'); // category form
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
                        add_category.html('updating..'); // change submit button text
                    },
                    success: function(data) {
                        alert.html(data).fadeIn(); // fade in response data
                        add_category.html('updated');
                        // form.trigger('reset'); // reset form
                    },
                    error: function(e) {
                        console.log(e)
                    }
                });
                 
            });
        });
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
