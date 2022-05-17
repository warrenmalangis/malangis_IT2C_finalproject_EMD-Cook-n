<?php
//start the session
SESSION_START();


if (isset($_REQUEST['Homepage']) ===true){
    session_destroy();
    header("Location: index.php?Homepage");
    }
elseif (isset($_REQUEST['About']) ===true){
    session_destroy();
    header("Location: about us.php?About");
}
elseif (isset($_REQUEST['Start']) ===true){
    session_destroy();
    header("Location: start here.php?Start");
}elseif (isset($_REQUEST['Recipe']) ===true){
    session_destroy();
    header("Location: recipies.php?Recipe");
}
// if the button is clicked
if(isset($_REQUEST['submit_button']) === true){
    session_destroy();
    header("Location: index.php?Homepage");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Contact</title>
      
        <link href="css/style.css" rel="stylesheet" />
    </head>

<div class="header">
   <a> <img src="images/logo.png" height="40" width="200" alt=""></a>
<div class="header-right">

<a href="?Homepage">Home</a>
<a href="?Recipe">Recipies</a>
<a href="?Start">Start Here</a>
<a href="?About">About Us</a>
<a class="active" href="contact us.php">Contact Us</a>

</div>
</div>

<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>For questions, advertising and sponsorship inquiries, food, restaurant review and travel invitations, festival coverage, comments and suggestions, please fill out the form below or you may send an email to emdcookn(at)gmail(dot)com.</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="images/street-view.jpg" style="width:100%">
    </div>
<div class="column">
      <form method="post" href="?Recipe">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name.."required>
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email here." required>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit" name="submit_button"></input>
      </form>
    </div>
  </div>
</div>

    

<div class="footer">

  <p>Copyright &copy; 2022. Warren N. Malangis</p>

        <a href="#"><img src="images/icons/facebook.png"></a>
        <a href="#"><img src="images/icons/twitter.png"></a>
        <a href="#"><img src="images/icons/youtube.png"></a>
        <a href="#"><img src="images/icons/rss.png"></a>
</div>
</div>
</html>