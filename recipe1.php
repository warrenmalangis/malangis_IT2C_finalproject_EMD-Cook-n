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
        <title>Manakla Recipe</title>
      
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

    <h4>Manakla</h4>

<div class="cout">
    <img src="images/manakla.jpg">
    <h3> January 8, 2013    |    by: Dolly Dy-Zulueta</h3>



<?php

echo "<p>Marinduque cuisine is a haven for seafood lovers. Manakla is the local Marinduque word for crayfish, and it’s a variety of crayfish especially popular in Marinduque, and is regularly used as a protein for every type of recipe you can think of. In seaside bars and restaurants, manakla is popularly cooked in pulutan recipes or beer/alcohol snacks.</p>";

echo "<p>No matter which recipe manakla is used, the results are always something that visitors will order seconds for.</p>";

?>
<br>
<br>
    <div class="contain">
<br>
<br>

<h3>Ingredients:</h3>

<ol class="ing">

    <?php

  echo "<li>1 kg. manakla (crayfish)</li>";
  echo "<li>½ cup Sprite</li>";
  echo "<li>4 cloves garlic, chopped</li>";
  echo "<li>salt and pepper to taste</li>";
  echo "<li>3 tbsps. cooking oil</li>";

    ?>

</ol>
<br>
<br>
<h3>Procedure</h3>

<ol class="proc">

    <?php

  echo "<li>Wash live manakla to remove dirt and impurities, especially from their singular claws.</li>";
  echo "<li>Put washed manakla in a wok with Sprite, garlic, salt and pepper, and cook over medium heat until dry.</li>";
  echo "<li>When dry, add cooking oil, toss for a while over heat, and then turn off heat.</li>";
  echo "<li> To enjoy, remove the head of the cooked manakla, discard the black part on top of the head, peel off shell, and pull off the thick black vein from the body.</li>";
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