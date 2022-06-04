<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Feet to Meter Converter in PHP</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
      <div class="card-header bg">
        <h1>Feet to Meter Converter in PHP</h1>
      </div>
          <div class="card-body">
          <form method="post">
            <input type="text" name="measurement" class="form-control" placeholder="Input number in feet"><br/>
            <input type="submit" name="submit" class="btn btn-primary" value="Convert">
          </form><br>
          <?php
          if(isset($_POST['submit'])){
            $measureinfeet = $_POST['measurement'];
            echo "<h4>".$measureinfeet." feet is equal to ". $measureinfeet*0.3048."M </h4>";
          }
          ?>
          </div>
      </div>
    </div>
  </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>