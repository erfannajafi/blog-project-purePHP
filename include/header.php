<?php
include("./include/config.php");
include("./include/db.php");

$query = "SELECT * FROM categories";
$categories = $db->query($query);
?>








<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Blog WebProg</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand order-md-2" href="index.php">WEBPROG.ir</a>
      <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav order-md-1">
          <?php
          if ($categories->rowCount() > 0) {
            foreach($categories as $category){
          ?>
          <li class="nav-item <?php echo( isset($_GET['category']) && $category['id'] == $_GET['category'] ) ? "active" : ""; ?> ">
            <a class="nav-link" href="index.php?category=<?php echo $category['id'] ?>"> <?php echo  $category['title'] ?></a>
          </li>
          <?php
            }
          } 
          ?>

        </ul>
      </div>
    </div>
  </nav>