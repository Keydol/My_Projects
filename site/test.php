<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Підтвердження</title>
	<meta name="description" content="Анкета відвідувача консульства">
	<meta name="keyworld" content="консульство, анкета консульства, анкета">
	<link rel="stylesheet" type="text/css" href="style.css">
  <?php
    require_once "functions/functions.php";
    $atest = countDate("2019-04-07");
  ?>
</head>
<body>
  <div class="header">
      <div class="logo">
        <div class="logotext">
          <h1 style="margin-top: 0px;">
          <a href="index.php">Консульство</a></h1>
         </div>
       </div>
</div>

<div class="main">
 <div>

  <?php
    echo 'count:  '.$atest["COUNT(*)"].' ';
  ?>

 </div>
</div>

</body>
</html>