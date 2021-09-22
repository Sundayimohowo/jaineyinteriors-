<?php
include 'functions.php';
$query="CREATE TABLE IF NOT EXISTS users(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
  username TEXT(16),
  password TEXT(10),
  role TEXT(15),
  created_date DATETIME
  )ENGINE myISAM";
  $result=mysqli_query($conn,$query);
  if ($result){
    $ans='successfully created table users';
    echo "<pre>".$ans ."</pre>";
  }else {
    $ans='An error occurred while creating table users';
    echo "<pre>".$ans ."</pre>";
  }

  $query="CREATE TABLE IF NOT EXISTS gallery(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
    category VARCHAR(60),
    sub_category VARCHAR(60),
    `image_name` varchar(255) DEFAULT NULL
    ) ENGINE myISAM";
   $result=mysqli_query($conn,$query);
   if ($result){
     $ans='successfully created table Gallery';
     echo "<pre>".$ans ."</pre>";
   }else {
     $ans='An error occurred while creating table Gallery';
     echo "<pre>".$ans ."</pre>";
   }
  
  $query="CREATE TABLE IF NOT EXISTS posts(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
  title VARCHAR(150),
  user_id int(11),
  body VARCHAR(4096),
  image text(60),
  category VARCHAR(60),
  status TEXT(15),
  created_date DATETIME
  )ENGINE myISAM";
  $result=mysqli_query($conn,$query);
  if ($result){
    $ans='successfully created table posts';
    echo "<pre>".$ans ."</pre>";
  }else {
    $ans='An error occurred while creating table posts';
    echo "<pre>".$ans ."</pre>";
  }

   $query="CREATE TABLE IF NOT EXISTS categories(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
  user_id int(11),
  title text(50),
  description VARCHAR(60)
  )ENGINE myISAM";
  $result=mysqli_query($conn,$query);
  if ($result){
    $ans='successfully created table categories';
    echo "<pre>".$ans ."</pre>";
  }else {
    $ans='An error occurred while creating table categories';
    echo "<pre>".$ans ."</pre>";
  }
  $query="CREATE TABLE IF NOT EXISTS gallery_categories(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
    title text(50),
    sub_category VARCHAR(60),
    description VARCHAR(60)
    )ENGINE myISAM";
    $result=mysqli_query($conn,$query);
    if ($result){
      $ans='successfully created table gallery_categories';
      echo "<pre>".$ans ."</pre>";
    }else {
      $ans='An error occurred while creating table gallery_categories';
      echo "<pre>".$ans ."</pre>";
    }
  

     $query="CREATE TABLE IF NOT EXISTS reviews(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
  name text(50),
  body VARCHAR(200),
  status tinyint(2)
  )ENGINE myISAM";
  $result=mysqli_query($conn,$query);
  if ($result){
    $ans='successfully created table reviews';
    echo "<pre>".$ans ."</pre>";
  }else {
    $ans='An error occurred while creating table reviews';
    echo "<pre>".$ans ."</pre>";
  }

?>






















