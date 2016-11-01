<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    
    <title>Arrighetto's Pizzeria</title>
    
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
          <img class="centered-image" src="img/content/pizza.png" alt="logo" style="width:300px;height:300px;">
          <p> Arighetto's Pizza: Favorite of hard-working New Jerseyans for decades, serving and supporting the community since 1956.  Home of amazing pizza, pasta, sandwiches, and more.  Come in today to try our Italian cuisine made with only the freshest of local ingredients.</p>
          <div class="alert alert-info">
          <strong>This Week's Special:</strong>
          <br>
          <a href="menu_and_pricing.php">Pepperoni Bacon Mozzarella Stromboli</a>
          </div>

        </div>
    </div>
  </section>

<?php include '../resources/footer.php'; ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>