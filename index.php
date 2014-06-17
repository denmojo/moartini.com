<?php
  // set the default timezone to use. Available since PHP 5.1
  date_default_timezone_set('PDT');
  // Prints something like: Monday
  //echo date("l");
  $imagesDir = 'images/';
  
  $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
  
  $randomImage = $images[array_rand($images)];
  
  $nextFridayTimestamp = strtotime("next friday");
  $nextFridayDate = date('j', $nextFridayTimestamp);
  $nextFridayMonth = date('n', $nextFridayTimestamp);
  $nextFridayYear = date('y', $nextFridayTimestamp);
  $todayFridayDate = date('j');
  $todayFridayMonth = date('n');
  ?>
<html>
  <head>
    <title>Countdown to Moartini TIME</title>
    <script src="js/countdown-clock.js" type="text/javascript"></script>
    <style type="text/css">
      <!--
        .style1 {
          font-family: Verdana, Arial, Helvetica, sans-serif;
        }
        .style2 {
          font-family: Verdana, Arial, Helvetica, sans-serif;
          font-size: small;
          color: #FFFFFF;
        }
        .style3 {
          font-family: Verdana, Arial, Helvetica, sans-serif;
          font-size: 1.4em;
          color: #FFFFFF;
        }
        .style4 {
          font-family: Verdana, Arial, Helvetica, sans-serif;
          margin-left:100px;
          margin-right:50px;
        }
         
        -->
    </style>
  </head>
  <body bgcolor="#FFFFFF" onload="">
    <script type="text/javascript">
      var updateTitle = function() {
        var timeLeft = document.getElementById("countdown").innerText;
        document.title = timeLeft;
      }
      setInterval(updateTitle, 1000);
    </script>
    <div class="style4">
      <p>
      <h1>Is it MARTINI TIME YET?</h1>
      </p>
    </div>
    <div class="style4">
      <p>Countdown Friday 4pm (a.k.a. martini o'clock):</p>
      <table border="0" bgcolor="#00611C">
        <tr>
          <?php switch(date('N')) {
            case 1:
            case 2:
            case 3:
            case 4: ?>
          <td align="center">
            <script type="text/javascript">countdown_clock(<?php echo $nextFridayYear ?>, <?php echo $nextFridayMonth ?>, <?php echo $nextFridayDate ?>, 16, 00, 1);</script>
          </td>
          <?php break;
            case 5: ?>
          <td align="center">
            <script type="text/javascript">countdown_clock(<?php echo $nextFridayYear ?>, <?php echo $todayFridayMonth ?>, <?php echo $todayFridayDate ?>, 16, 00, 1);</script>
          </td>
          <?php break;
            case 6:
            case 7: ?>
          <td class="style3">It's the weekend, Y U NO DRANKING MOAR MARTINIS??</td>
          <?php break; }?>
        </tr>
      </table>
      <br>
    </div>
    <div>
      <p class="style4"><a href="/"><img border="0" src="<?php echo $randomImage ?>" title="Moartini image" alt="moartini.com, a domain of Dennis Mojado" /></a><br/>
    </div>
  </body>
</html>