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
        <title>Laing Recipe</title>
      
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

<div class="cout">
    <img src="images/laing.jpg">

    <h3>Laing</h3>

    <?php

echo "<p>There are loads of laing recipes authentic to the different regions of the Philippines. In Marinduque, they have their own native laing recipe or what they also call pinaso na gabi. Marinduque’s delicious native laing recipe uses both gabi (also known as taro) leaves and roots. These ingredients are cooked with coconut milk.</p>";

echo "<p>To give the dish tastier flavors, shrimp paste or bagoong is also mixed in the dish. For an added highlight, dried fish or dilis is sprinkled on top.</p>";

    ?>
<br>
<br>
<div class="contain">
<br>
<br>

<h3>Ingredients:</h3>

<ol class="ing">

  <li>3.5 oz taro leaves dried</li>
  <li>6 cups coconut milk</li>
  <li>2 cups coconut cream</li>
  <li>1/2 cup shrimp paste bagoong</li>
  <li>1/2 lb. pork shoulder thinly sliced</li>
  <li>5 to 7 pieces red chilies</li>
  <li>1 piece onion sliced</li>
  <li>1/2 cup sliced ginger</li>
  <li>1/2 cup sliced ginger</li>

</ol>
<br>
<br>
<h3>Procedure</h3>

<ol class="proc">

    <?php

  echo "<li>Combine the coconut milk, pork, shrimp paste, ginger, onion, and garlic in a cooking pot. Heat the pot and let boil.</li>";
  echo "<li>Once the mixture starts to boil, gently stir to mix the ingredients. Cover the pot and simmer for 15 to 20 minutes. Make sure to stir once in a while to prevent the ingredients from sticking on the bottom of the cooking pot.</li>";
  echo "<li>Add the dried taro leaves. Do not stir. Let it stay until the leaves absorb the coconut milk. This takes about 20 to 30 minutes. You can gently push the leaves down so that it can absorb more coconut milk.</li>";
  echo "<li>Once the leaves absorb the coconut milk, stir the leaves and then continue to cook for to 10 minutes.</li>";
  echo "<li>Pour the coconut cream into the cooking pot. Add the red chilies. Stir. Cook for 10 to 12 minutes.</li>";
  echo "<li>Transfer to a serving plate. Serve.</li>";
  echo "<li>Share and enjoy!</li>";

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