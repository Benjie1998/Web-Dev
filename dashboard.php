<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name= "viewport" content = "width=device-width, initial-scale=1.0">


    <link href="./css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="./js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <title>Document</title>
    <?php
          include "connect.php";
          $sql = "SELECT * FROM products";
          $result = $conn -> query($sql);
    ?>
</head>
<body>


<div class = "container pt-5">
  <div class = "row">

  <?php foreach($result as $row)
  {
  ?>
    <div class = "col pt-3">
    <div class="card" style="width: 18rem;">
        <img src="<?php echo "./img/" . $row["prod_img"]; ?>" class="card-img-top" alt="...">
  <div class="card-body">
      <h5 class="card-title"><?php echo $row ["prod_name"]; ?></h5>
      <h4 class="card-text"><?php echo $row ["prod_price"]; ?></h4>
      <p class="card-text"><?php echo $row ["prod_desc"]; ?></p>
      <a href="#" class="btn btn-primary">Add to cart</a>
  </div>
</div>
    </div>
<?php
}
?>
  </div>
</div>
</body>
</html>