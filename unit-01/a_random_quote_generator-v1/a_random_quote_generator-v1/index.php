<?php include('inc/functions.php'); ?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta http-equiv="refresh" content="20"/>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body backgroundcolor="<?php echo PrintRandomColor(); ?>">
  <div class="container">
    <div id="quote-box">
     <?php echo printQuote(); ?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>
