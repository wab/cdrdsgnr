<?php

  $protocol = 'https://';
  $domain = 'cedar-architect.com/';
  $tail = '/support/home';

  if ( isset($_GET["lg"]) ) {
    $language = $_GET["lg"];
  } else {
    $language = 'en';
  }

  if ( isset($_GET["plan"]) && ( $_GET["plan"] == 'pro' || $_GET["plan"] == 'ultimate') )  {
    $support = 'support-' . $_GET["plan"];
  } else {
    $support = 'support';
  }
  $url = $protocol . $support . '.' . $domain . $language . $tail;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Iframe</title>
</head>
<body>
  <iframe src="<?php echo $url ?>" frameborder="0" width="100%" height="800px"></iframe>
</body>
</html>
