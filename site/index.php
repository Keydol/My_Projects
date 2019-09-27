<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Анкета </title>
	<meta name="description" content="Анкета відвідувача консульства">
	<meta name="keyworld" content="консульство, анкета консульства, анкета">
	<link rel="stylesheet" type="text/css" href="style.css">
  <?php
    require_once "functions/functions.php";
    $personal1 = getPersonalInform1(0);
    $addressandphone = getAddressAndPhone(0);
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
  <h1>Анкета</h1>
  <form id="data" action="auth.php">
    <h2> Особисті дані </h2>
    <p> 
      Прізвище: <input type="text" name="asurname" required> 
    </p>
    <p> 
      Ім'я: <input type="text" name="aname" required> 
    </p>
    <p>
      Стать:<br>
       <input type="radio" name="asex" value="М" required>М<br>
       <input type="radio" name="asex" value="Ж">Ж
    </p>
    <p>
      Сімейний стан: <br>
        <input type="radio" name="afamily" value="одружений/заміжня" required>одружений/заміжня<br>
        <input type="radio" name="afamily" value="цивільний шлюб">цивільний шлюб<br>
        <input type="radio" name="afamily" value="одностатевий шлюб">одностатевий шлюб<br> 
        <input type="radio" name="afamily" value="неодружений/незаміжня">неодружений/незаміжня<br>
        <input type="radio" name="afamily" value="вдова/вдівець">вдова/вдівець<br>
        <input type="radio" name="afamily" value="розлучений/розлучена">розлучений/розлучена<br>
        <input type="radio" name="afamily" value="проживаєте окремо, але офіційно не розлучені">проживаєте окремо, але офіційно не розлучені<br>
        <input type="radio" name="afamily" value="інше">інше
    </p>
    <p>
      Дата народження: <input type="text" name="adatebirth" required>
    </p>
    <p>
      Місто народженя: <input type="text" name="acitybirth" required>
    </p>
    <p>
      Країна народження: <input type="text" name="acountrybirth" required> </p>
    <p>
      Громадянство: <input type="text" name="anationality" required>
    </p>
    <p>
      Ідентифікаційнй код: <input type="text" name="aidcode" required>
    </p>
    <p>
      Номер паспорта: <input type="text" name="numberpassport" required>
    </p>
    <p>
      Дата видачі паспорта: <input type="text" name="datapassport" required>
    </p>

    <h2>Адреса та телефонна інформація</h2>
   <p>
    Адреса проживання: <input type="text" name="aaddress" required>
   </p>
   <p>
    Індекс міста: <input type="text" name="aindex" required>
   </p>
   <p>
    Основний номер телефону: <input type="text" name="atelephone" required>
   </p>
   <p>
    Електронна адреса: <input type="text" name="aemail" required>
   </p>

    <h2>Travel information</h2>
    <p>
      Країна, в яку відправляєтеся: <input type="text" name="aarrivalcountry" required> 
    </p>
    <p>
     Типи візи:<br>
    <input type="radio" name="aviza" value="Аеропортна" required>Аеропортна<br>
    <input type="radio" name="aviza" value="Транзитна">Транзитна<br>
    <input type="radio" name="aviza" value="Шенген">Шенген<br>
    <input type="radio" name="aviza" value="Національна">Національна<br>
    </p>
    <p>
      Дата прибуття в країну: <input type="text" name="aarrivaldate" required>
    </p>
    <p>
      Місто прибуття: <input type="text" name="aarrivalcity" required> 
    </p>
    <p>
     Вам коли небудь відмовляли у видачі візи?<br>
     <input type="radio" name="arefuse" value="Так" required>Так<br> 
     <input type="radio" name="arefuse" value="Ні">Ні
    </p>

      <input type="submit" value="Відправити">
  </form>

  <hr>
  Авторизація для адміністраторів
  <form action="allpeople.php" method="post">
    <input type="text" placeholder="Enter login" name="alogin" required oninvalid="this.setCustomValidity('Заповніть це поле')" oninput="setCustomValidity('')"> <br>
    <input type="password" placeholder="Enter password" name="apassword" required oninvalid="this.setCustomValidity('Заповніть це поле')" oninput="setCustomValidity('')"> <br>
    <input type="submit" value="Вхід">
  </form>
</div>
</body>
</html>