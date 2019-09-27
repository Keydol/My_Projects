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
    $personal1 = getPersonalInform1(0);
    $addressandphone = getAddressAndPhone(0);
    $personal2 = getPersonalInform2(0);
    $dateanketa = getAnketaDate(0);
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

  <h3>Відправлення анкети успішне</h3>

 </div>
</div>

</body>
</html>