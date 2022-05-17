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
}elseif (isset($_REQUEST['Manakla']) ===true){
    session_destroy();
    header("Location: recipe1.php?Manakla");
}elseif (isset($_REQUEST['Ulang-ulang']) ===true){
    session_destroy();
    header("Location: recipe2.php?Ulang-ulang");
}elseif (isset($_REQUEST['Kari-kari']) ===true){
    session_destroy();
    header("Location: recipe3.php?Kari-kari");
}elseif (isset($_REQUEST['Bibingkang-kanin']) ===true){
    session_destroy();
    header("Location: recipe4.php?Bibingkang-kanin");
}elseif (isset($_REQUEST['Saludsod']) ===true){
    session_destroy();
    header("Location: recipe5.php?Saludsod");
}elseif (isset($_REQUEST['Laing']) ===true){
    session_destroy();
    header("Location: recipe6.php?Laing");
}elseif (isset($_REQUEST['Kalamay-dampa']) ===true){
    session_destroy();
    header("Location: recipe7.php?Kalamay-dampa");
}elseif (isset($_REQUEST['Adobo-sa-Gata']) ===true){
    session_destroy();
    header("Location: recipe8.php?Adobo-sa-Gata");
}elseif (isset($_REQUEST['Tininta-suman']) ===true){
    session_destroy();
    header("Location: recipe9.php?Tininta-suman");
}elseif (isset($_REQUEST['Bibingkang-pinahiran']) ===true){
    session_destroy();
    header("Location: recipe10.php?Bibingkang-pinahiran");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Recipe</title>
      
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


<div class="count">
    <img src="images/manakla.jpg">

<p>Manakla is the local Marinduque word for crayfish, and it’s a variety of crayfish especially popular in Marinduque, and is regularly used as a protein for every type of recipe you can think of...</p>

<form method="post">
 <a href="?Manakla"><input type="button" value="View Recipe" name="button"></a>
 </form>

    <h4>Ulang-ulang</h4>


    <img src="images/ulang-ulang.jpg">

<p>Ulang-ulang is one of the top must-try native dishes in Marinduque. It’s a seafood dish made of crab meat from a native variety of crab in Marinduque called kagang...</p>

<form action="">
 <a href="?Ulang-ulang"><input type="button" value="View Recipe" name="button"></a>
 </form>

    <h4>Kari-kari</h4>


    <img src="images/kari-kari.jpg">

<p>In Marinduque, kare-kare, or as they call it Kari-Kari, is a cross between bopis and dinuguan. It’s like bopis with pork blood and a dried version of dinuguan...</p>

<form action="">
 <a href="?Kari-kari"><input type="button" value="View Recipe" name="button"><a/>
 </form>

    <h4>Saludsod</h4>


    <img src="images/saludsod.jpg">

<p>Saludsod is Marinduque’s native version of pancakes. It’s a popular local delicacy that visitors absolutely must try when in Marinduque as they’ll never find this anywhere else in the Philippines...</p>

<form action="">
<a href=?Saludsod><input type="button" value="View Recipe" name="button"></a>
 </form>

    <h4>Laing</h4>


    <img src="images/laing.jpg">

<p>There are loads of laing recipes authentic to the different regions of the Philippines. In Marinduque, they have their own native laing recipe or what they also call pinaso na gabi...</p>

<form action="">
 <a href="?Laing"><input type="button" value="View Recipe" name="button"></a>
 </form>\

    <h4>Bibingkang Kanin</h4>


    <img src="images/bibingkang-kanin.jpg">

<p>This is the third native Marinduque bibingka on this list. Bibingkang Kanin, just like bibingkang lalaki and bibingkang pinahiran, is a unique version of the popular kakanin, bibingka, originated in the...</p>

<form action="">
  <a href="?Bibingkang-kanin"><input type="button" value="View Recipe" name="button"></a>
 </form>

    <h4>Kalamay-dampa</h4>


    <img src="images/kalamay-dampa.jpg">

<p>Kalamay-dampa is the popular Marinduque variety of the more known kalamay-hati. Kalamay is the general term for this typical recipe of both the variety of kalamay-dampa and kalamay-hati...</p>

<form action="">
 <a href="?Kalamay-dampa"><input type="button" value="View Recipe" name="button"></a>
 </form>

    <h4>Adobo sa Gata</h4>


    <img src="images/adobo-sa-gata.jpg">

<p> Adobo is the Philippines’ unofficial national dish, but adobo sa gata is Marinduque’s version of adobo that they call their own. Native chicken is used then marinated and reduced in...</p>

<form action="">
 <a href="?Adobo-sa-Gata"><input type="button" value="View Recipe" name="button"></a>
 </form>

    <h4>Tininta Suman</h4>


    <img src="images/tininta suman.jpg">

<p> Suman is usually made up of glutinous rice cooked in coconut milk and wrapped in banana leaves or palm leaf strips. These sticky native rice delicacies are often eaten with sugar or latik. In Marinduque...</p>

<form action="">
 <a href="?Tininta-suman"><input type="button" value="View Recipe" name="button"></a>
 </form>

    <h4>Bibingkang Pinahiran</h4>


    <img src="images/bibingkang-pinahiran.jpg">

<p> Bibingkang Pinahiran uses typical bibingka ingredients like glutinous rice, coconut milk, and sugar. What makes it stand out from other versions of bibingka is the thick spread of a syrup layer on top...</p>

<form action="">
 <a href="?Bibingkang-pinahiran"><input type="button" value="View Recipe" name="button"></a>
 </form>
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