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
        <title>Kalamay Dampa Recipe</title>
      
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
    <img src="images/kalamay-dampa.jpg">

    <h3>Kalamay Dampa</h3>

    <?php

echo "<p>Kalamay-dampa is the popular Marinduque variety of the more known kalamay-hati. Kalamay is the general term for this typical recipe of both the variety of kalamay-dampa and kalamay-hati. Kalamay is made up of ground glutinous rice, coconut milk, and brown sugar. It’s popularly served in a coconut shell or in slices on banana leaves.</p>";

echo "<p>Kalamay-hati is a viscous version of kalamay where the glutinous rice is ungrounded. Kalamay-dampa is just like kalamay-hati, except ube is used in the recipe, giving it a rich purple color and ube flavor.</p>";

    ?>

<br>
<br>
<div class="contain">
<br>
<br>

<h3>Ingredients:</h3>

<ol class="ing">

  <li>2 cups glutinous rice flour</li>
  <li>2 cups equivalent of palm sugar, roughly 9-10 small pieces (the final colour of Kalamay will depend on this, I used the Thai palm sugar which is lighter in colour)</li>
  <li>4 cups coconut milk/li>
  <li>banana leaf</li>

</ol>
<br>
<br>
<h3>Procedure</h3>

<ol class="proc">

    <?php

  echo "<li>In a non-stick pan or wok add 4 cups of coconut milk and palm sugar, leave it there without heat until it breaks up and dissolved.</li>";
  echo "<li>Once dissolved add glutinous rice flour and mix well until free of lumps.</li>";
  echo "<li>Turn heat on and simmer while continuously mixing.  This would be the hard part, continue mixing for 45 minutes.  On the 15th minute the mixture will become really thick and harder to mix but don’t stop and continue mixing, it will be tougher to mix as you are nearing the 45 minute mark. In the 45th minute, if you want a thicker consistency continue until the 60th minute otherwise stop.  Consistency should be something like mochi but more stiff.</li>";
  echo "<li>Grease banana leaf with the oil from latik then line it in a round shallow pan, this would fit the 8 – 9 in round pan.</li>";
  echo "<li>Pour mixture on the pan then top with latik; let it cool then serve hot or cold.</li>";

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