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
        <title>Kari-kari Recipe</title>
      
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

    <h4>Kari-kari</h4>

<div class="cout">
    <img src="images/kari-kari.jpg">

    <h3> July 03, 2016    |    by: Glenn Deligero</h3>


    <?php

echo "<p>In most parts of Luzon, Kare-kare is popular comfort food made up of oxtail stew with rich peanut butter sauce. This savory stew is very different from Marinduque’s version of kare-kare.</p>";

echo "<p>In Marinduque, kare-kare, or as they call it Kari-Kari, is a cross between bopis and dinuguan. It’s like bopis with pork blood and a dried version of dinuguan.</p>";

echo "<p>Marinduque’s Kari-Kari is made up of the pig’s innards like its heart, small intestines, kidneys, spleen, and blood. It’s also cooked with garlic, onion, and chili peppers.</p>";

    ?>
<br>
<br>
<div class="contain">
<br>
<br>

<h3>Ingredients:</h3>

<ol class="ing">

    <?php

  echo "<li>1 pc. pig's heart</li>";
  echo "<li>1 pc. pig's spleen</li>";
  echo "<li>1 pc. pig's kidney</li>";
  echo "<li>1 pc. pig's small intestine</li>";
  echo "<li>salt to taste</li>";
  echo "<li>2 Tbsps. vegetable oil</li>";
  echo "<li>6-7 cloves garlic, chopped</li>";
  echo "<li>freshly cracked black pepper</li>";
  echo "<li>2 pcs. big onions, chopped</li>";
  echo "<li>2 tsps. soy sauce</li>";
  echo "<li>1 tsp. liquid seasoning</li>";
  echo "<li>dash of monosodium glutamate</li>";
  echo "<li>1 tsp. sugar</li>";
  echo "<li>3 Tbsp. vinegar</li>";
  echo "<li>birds eye chili</li>";
  echo "<li>1 cup fresh pig's blood</li>";

    ?>

</ol>
<br>
<br>
<h3>Procedure</h3>

<ol class="proc">

    <?php

  echo "<li>Wash pig's heart, spleen, kidney and small intestine in salt and water. Rub, then wash off with running water. Repeat one more time.Drain.</li>";
  echo "<li>Put the innards in a casserole with 1 tsp. salt and water to cover. Boil until tender.</li>";
  echo "<li>Drain off boiled innards. Let cool. Rub with salt, wash off, drain and chop.</li>";
  echo "<li>Heat pan. Add vegetable oil. Add garlic and season with freshly cracked black pepper.</li>";
  echo "<li>In pan, heat oil and saute garlic and season with freshly cracked black pepper.</li>";
  echo "<li>Add onions and chopped innards.</li>";
  echo "<li>Season with soy sauce, liquid seasoning, monosodium glutamate, sugar and vinegar.</li>";
  echo "<li>Cover and simmer until almost dry, about 10 minutes.</li>";
  echo "<li>Add bird's eye chill.</li>";
  echo "<li>Add 1 cup pig's blood by straining it in.</li>";

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