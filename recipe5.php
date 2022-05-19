<?php
//start the session
SESSION_START();


if (isset($_REQUEST['About']) ===true){
    session_destroy();
    header("Location: about us.php?About");
    }
elseif (isset($_REQUEST['Contact']) ===true){
    session_destroy();
    header("Location: contact.php?Contact");
}
elseif (isset($_REQUEST['Homepage']) ===true){
    session_destroy();
    header("Location: index.php?Homepage");
}elseif (isset($_REQUEST['Start']) ===true){
    session_destroy();
    header("Location: start here.php?Start");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Saludsod Recipe</title>
      
        <link href="css/style.css" rel="stylesheet" />
    </head>

<div class="header">
   <a> <img src="images/logo.png" height="40" width="200" alt=""></a>
<div class="header-right">

<a href="?Homepage">Home</a>
<a class="active" href="recipies.php">Recipes</a>
<a href="?Start">Start Here</a>
<a href="?About">About Us</a>
<a href="?Contact">Contact Us</a>

</div>
</div>
<br>
<br>

    <h4>Saludsod</h4>

<div class="cout">
    <img src="images/saludsod.jpg">

    <h3> May 23, 2019    |    by:Idol sa Kusina</h3>


    <?php

echo "<p> Saludsod is Marinduque’s native version of pancakes. It’s a popular local delicacy that visitors absolutely must try when in Marinduque as they’ll never find this anywhere else in the Philippines. This local pancake is made with a special batter using native ingredients, including arrowroot powder, coconut milk, flour, and sugar.</p>";

echo "<p>The batter is then cooked on a hot pan just like a typical pancake. But saludsod is sweeter in flavor and has a creamy/buttery texture.</p>";

    ?>
<br>
<br>

<div class="contain">
<br>
<br>

<h3>Ingredients:</h3>

<ol class="ing">

    <?php

  echo "<li>2 pcs Arrow Root (Peeled & Grated)</li>";
  echo "<li>1 Cup Flour</li>";
  echo "<li>2 Cups Coconut Milk</li>";
  echo "<li>3 Tbsp Sugar</li>"

    ?>

</ol>
<br>
<br>
<h3>Procedure</h3>

<ol class="proc">

    <?php

  echo "<li>Squeeze excess juices from arrow root.  Let the juice sit for 10 minutes then discard liquid but carfully save the starch that has settled in the bottom.</li>";
  echo "<li>Add this on a bowl together with grated arrow root.</li>";
  echo "<li>Add in flour, coconut milk and sugar.</li>";
  echo "<li>Heat pan then spoon ¼ cup mixture.  Cook for 3 minutes or until golden brown then flip and cook until golden brown.  Serve.</li>";

    ?>

</ol>
</div>
</div>
<div class="foot">

  <p>Copyright &copy; 2022. Warren N. Malangis</p>

        <a href="#"><img src="images/icons/facebook.png"></a>
        <a href="#"><img src="images/icons/twitter.png"></a>
        <a href="#"><img src="images/icons/youtube.png"></a>
        <a href="#"><img src="images/icons/rss.png"></a>
</div>
</div>
</html>