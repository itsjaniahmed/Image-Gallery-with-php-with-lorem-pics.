<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
</head>
<style>
  body {
    background: rgb(250, 250, 250);
  }

  .gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: auto;

  }

  img {
    margin: 10px;
    width: auto;
    box-shadow: 10px 10px 15px 4px rgba(0, 0, 0, 0.06);
  }
</style>

<body>
  <h1>gallery</h1>
  <div class="gallery"> 

  <?php 
    for ($i=1; $i < 21 ; $i++) { 
      $imge="https://picsum.photos/400?random=".strval($i);
  ?>

  <img src=<?php echo($imge) ?>>

  <?php
}
  ?>
  

  </div>







</body>

</html>