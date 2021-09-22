<?php require( 'image-gallery-script.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<meta name="description" content="About Jainey Interiors entails all you need to stay in-the-know about what we offer and where we are headed.">
<meta name="keywords" content="Jainey interiors,interior decoration, interior design company, interior design website, interior design services.">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="shortcut icon" href="images/fav.png">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head></head>
<body>
<?php include 'header.php'; ?>
<div class='about-us-wrapper'>
<style>
    .about-us-wrapper{
        width:90%;
        margin:auto;
        margin-top: 40px;
    }
    @media (max-width:768px){
        .content-wrapper .column{
            width:45%;
            height:299px;
        }
    }
    @media (max-width:500px){
        .content-wrapper .column{
            width:100%;
        }
        .content-wrapper .row{
            width:100%;
        }
        .modal {
            width:95%;
            height:90%;
        }
    }
</style>
<div class="content-wrapper">
    <!--======image gallery ========-->

    <br>

    <div class="row">

      <?php if(!empty($fetchImage)) {
        $sn=1; 
        foreach ($fetchImage as $img) { ?>
      <div class="column" data-aos="fade-up"
     data-aos-anchor-placement="center-bottom">
        <img src="Admin/uploads/<?php
echo $img['image_name']; 
?>
" style="width:100%" onclick="openModal(); currentSlide(

<?php

echo $sn; 

?>

)" class="hover-shadow cursor">

      </div>

      <?php $sn++;
    } }else{
        echo "No Image is saved in database"; } ?>

    </div>

    <!--======image gallery ========-->

    <div id="galleryModal" class="modal">

  <span class="close cursor" onclick="closeModal()">×</span>

  <!--======image gallery modal========-->

  <div class="modal-content">

    <?php if(!empty($fetchImage)) { $sn=1;
        foreach ($fetchImage as $key =>$img) { ?>

    <div class="gallerySlides">

      <div class="numbertext"><?php echo $key+1; ?> </div>

      <img src="Admin/uploads/

<?php

echo $img['image_name']; 

?>

" style="width:100%">

    </div>

    <?php $sn++;} }else{ echo "No Image is saved in database"; } ?>

    <!--======image gallery model========-->

    <a class="prev" onclick="plusSlides(-1)">❮</a>

    <a class="next" onclick="plusSlides(1)">❯</a>

    <div class="caption-container">

      <p id="caption"></p>

    </div>

  </div>
</div>
</div>
</div>
<!-- Footer section -->
<?php include 'footer.php'; ?>
<script type="text/javascript" src="gallery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>

      <style>
body {
    box-sizing: border-box;
    margin:0px;
    padding: 0px;
    overflow-x: hidden;
    }
.row > .column {
    margin: .5%;
    height: 300px;
}
.row:after {
    content: "";
    display: table;
    clear:both;
}
.column {
    float: left;
    width: 24%;
}
.modal {
    display: none;
    position:fixed;
    z-index: 1;
    padding-top: 70px;
    left: 0;
    top: 50px;
    width: 100%;
    height: 80%;
    overflow: auto;
    background-color: #363333ab;
} 
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    width: 90%;
    height:80%;
    max-width: 90%;
}
.close {
    color: white;
    position: absolute;
    top: 30px;
    right: 25px;
    font-size:35px;
    font-weight: bold;
}
.gallerySlides {
    display: none;
    height:120%;
}
.gallerySlides img{
   width:100%;
   height:100%;
}
.cursor {
    cursor:pointer;
} 
.prev,.next { 
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding:16px;
    margin-top: -50px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    transition:0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select:none;
    background: #00000066;
}
.prev{
    left:0;
}
.next {
    right: 0;
    border-radius: 3px 0 0 3px;
}
.numbertext {
    color: #fff;
    font-size: 20px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
    font-weight: bold;
}
.column img{
    max-height: 100%;
    width:100%;
    height: 100%;
    border: 1px solid #d9d9d9;
}

.caption-container { 
    text-align:center;
    background-color: black;
    padding: 2px 16px;
    color: white;
}
img.hover-shadow
{
    transition: 0.3s;
}
.hover-shadow:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0,0, 0.2), 0 6px 20px 0 rgba(0, 0,0,0.19);
}
      </style>