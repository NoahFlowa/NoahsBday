<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@900&display=swap" rel="stylesheet"> 
    <title>Noahs Birthday!</title>
    <script src="https://cdn.jsdelivr.net/npm/confetti-js@0.0.18/dist/index.min.js"></script>
    <style>
        *{
            font-family: 'Nunito Sans', sans-serif;
            font-weight: 900;
        }
    </style>
  </head>
  <body>

    <div class="text-center">
        <?php

        // Get current time from server

        $countdown = 


        // Get the day and month
        //$currentDay = Date("d");
        //$currentMonth = Date("m");

         $currentDay = "5";
         $currentMonth = "6";

        // If current day and month != June 5, dont display confetti and birthday message
        if ($currentDay != "5" && $currentMonth != "6") {
            echo "<h1 class='display-1 mt-5'>IT IS NOT NOAH'S BIRTHDAY</h1>";
        } else {
            echo "<h1 class='display-1 mt-5'>IT IS NOAH'S BIRTHDAY</h1>";
            echo "<canvas id='my-canvas'></canvas>" ;
        }


        
        ?>
    </div>
    <script>
        var confettiElement = document.getElementById('my-canvas');
        var confettiSettings = { target: confettiElement, max: 100, props: ['square', 'triangle', 'line', 'circle'], colors: [[165,104,246],[230,61,135],[0,199,228],[253,214,126]], clock: 25};
        var confetti = new ConfettiGenerator(confettiSettings);
        confetti.render();
    </script>
    <!-- Confetti-JS CDN -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/confetti-js@0.0.18/dist/index.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
  </body>
</html>
