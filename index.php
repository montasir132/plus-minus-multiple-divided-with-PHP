<?php
$number3 = null;

if(isset($_POST['addition'])){

  $number1= $_POST['1st_number'];
  $number2= $_POST['2nd_number'];
  $number3= $number2 + $number1;

}elseif(isset($_POST['subtraction'])){

  $number1= $_POST['1st_number'];
  $number2= $_POST['2nd_number'];
  $number3= $number1 - $number2;

}elseif(isset($_POST['multiply'])){

  $number1= $_POST['1st_number'];
  $number2= $_POST['2nd_number'];
  $number3= $number1 * $number2;

}elseif(isset($_POST['divide'])){
  $number1= $_POST['1st_number'];
  $number2= $_POST['2nd_number'];
  $number3= $number1 / $number2;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="3 days">
    <meta name="author" content="MD.Montasir Alam">
    <meta name="copyright" content="Copyright @2024 Aspire. All Rights Reserved.">
    <meta name="robots" content="index, follow">
    <title>small-project</title>
    <!--css links-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-10">
          <!-- form start  -->
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="needs-validation" novalidate>
            <div class="mb-3 mt-3">
              <label for="1st_number" class="form-label">1st Number</label>
              <input type="number" class="form-control 1st_number" id="1st_number" name="1st_number" placeholder="Enter your first number" required>
            </div>
            <div class="mb-3">
              <label for="2nd_number" class="form-label">2nd Number</label>
              <input type="number" class="form-control 2nd_number" id="2nd_number" name="2nd_number" placeholder="Enter your secend number" required>
            </div>
            <button type="submit" class="btn btn-success" name="addition">(+)addition</button>
            <button type="submit" class="btn btn-danger" name="subtraction">(-)subtraction</button>
            <button type="submit" class="btn btn-warning" name="multiply">(*)multiply</button>
            <button type="submit" class="btn btn-primary" name="divide">(/)divide</button>
            <script>
              
            </script>                                            
          </form>
          <!-- form end  -->
        </div>
      </div>
    </div>
    <div class="container mt-4">
      <?php 
      echo "<H1>"."Result=".$number3."</H1>";
      ?>
    </div>
    <!--js links-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/scrip.js"></script>
  </body>
</html>