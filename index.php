<?php
session_start();

$_SESSION["alreadyLoaded"] = false;
//$_SESSION["highScore"] = 0;
//$_SESSION["lastScore"] = 0;
?>

<!DOCTYPE html>

<html>
   <head>
      <meta charset = "utf-8">
      <title>Animated Yoshi Game</title>
      <link rel="stylesheet" type="text/css" href="yoshi_game.css" />
   </head>
   <body>

      <div class="bg">
         <h1>Yoshi Game</h1>

         <p class="info">Enter your name or handle: </p>
      
         <form method = "post" action = "game.php" >

            <div class="info"><label>Name:</label> 
               <input type = "text" name = "name" required></div>

               <p class="whiteWords">Avoid the falling rocks and collect the stars. Move Yoshi with the arrow keys.</p>
               <p class="whiteWords">Remember to save your high score when game over!</p>
            <!-- create a submit button -->
            <p><button type="submit">Start Game!</button></p>
         </form>

         <p class="whiteWords">This site was tested using Google Chrome</p>
      </div>
   </body>
</html>