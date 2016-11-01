<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    
    <title>Login</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/stylesheet.css">
    
    <style>
    .below_menu_container {
      padding-top: 100px;
    }
    </style>
</head>

<body>
  <?php include '../resources/navigation.php'; ?>

  <section>
    <div class="container">
      <div class="below_menu_container">
        <h2> Login</h2>
        <form class="form-horizontal">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Remember me
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <a class="btn btn-danger" href="menu_and_pricing.php" role="button">Login</a>
              
            </div>
          </div>
        </form>
        <div class="alert alert-info">
          <strong>Info</strong> Please Login to place orders!
        </div>
      </div>
    </div>
  </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<?php include '../resources/footer.php'; ?>
</body>
</html>