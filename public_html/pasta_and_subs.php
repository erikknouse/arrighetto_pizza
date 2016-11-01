<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    
    <title>Pasta and Subs</title>
    
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
        <h2>Pasta and Subs</h2>
        <br>
        <div class="mycolor col-xs-6">
          <p> Our pasta and subs our the greatest in all of New Jersey! Our pasta is made with hand made noodles and our homemade sauce made with our family's secret recipe, using the finest tomatoes in town. </p>
        </div>
        <div class="mycolor col-xs-6">
          <p> Each pasta dish includes one of our specialty sandwiches. Made with real meat from and our fresh artisan breads, our sandwiches are packed with protein and carbs! Choose from either a traditional sub-style sandwich, or a stromboli.</p>
        </div>
        <br>
        <div class="mycolor col-xs-12 col-lg-4">
                    <a href="menu_and_pricing.php">
          <img src="img/content/pasta.png" alt="Pasta" style="width: 300px; height: 250px;" class="centered-image"> 
          <div class="caption"> The classic spaghetti and meatballs. </div>
                    </a>
        </div>
        <div class="mycolor col-xs-12 col-lg-4">
                                <a href="menu_and_pricing.php">
          <img src="img/content/sub-sandwich.png" alt="sandwich" class="centered-image">
           <div class="caption"> Pepperoni, mozzarella, salami, and romaine between two halves of a fresh submarine bread. One example of our classic submarine sandwiches.
        </div>
            </a>
        </div>
        <div class="mycolor col-xs-12 col-lg-4">
                    <a href="menu_and_pricing.php">
          <img src="img/content/stromboli.png" alt="stromboli" class="centered-image">

          <div class="caption"> Pepperoni, mozzarella, and salami rolled up in our fresh pizza dough.  One of our classic strombolis. </div> 
                    </a>
        </div>
      </div>
    </div>
  </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
<?php include '../resources/footer.php'; ?>
</body>
</html>