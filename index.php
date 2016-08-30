<?php include "scripts/php/background.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP Weather</title>

  <meta charset="utf-8"/>
  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>

  <link rel="icon" type="image/ico" href="images/favicon.ico">
  <link rel="stylesheet" href="css/style.css">

  <!-- BOOTSTRAP & JQUERY -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <!-- FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Bungee+Hairline|Open+Sans|Tulpen+One" rel="stylesheet">

  <style>
    #content { background-image: url("images/backgrounds/<?php echo $selectedbg; ?>"); }
  </style>
</head>

<body>

  <div class="container" id="content">
    <div class="row top-margin">
      <section id="weather-info">
        <?php include "scripts/php/scraper.php" ?>

        <form method="get" autocomplete="off">
          <input type="text" id="temp-location" name="location" value="<?php echo $location . ", " . $country; ?>"/>
        </form>
      </section>
    </div>
  </div>

  <!-- JAVASCRIPT -->
  <script type="text/javascript" src="scripts/js/page.js"></script>

</body>
</html>
