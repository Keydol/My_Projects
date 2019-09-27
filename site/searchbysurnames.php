<!DOCTYPE html>
<html lang="ua">
<link rel="stylesheet" type="text/css" href="style.css">
<head>
  <meta charset="UTF-8">
  <title>Анкета </title>
  <meta name="description" content="Анкета відвідувача консульства">
  <meta name="keyworld" content="консульство, анкета консульства, анкета">
  <?php
    require_once "functions/functions.php";
    $personal1 = searchBySurnames($_POST["surname"]);
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
  <?php
  echo'<h3>Пошук за прізвищем: '.$_POST["surname"].' </h3>';
  ?>
  <table border="1">
    <tr>
      <th>#</th>
      <th>Прізвище</th>
      <th>Ім'я</th>
      <th>Стать</th>
      <th>Сім. стан</th>
      <th>Дата нар.</th>
      <th>Країна нар.</th>
      <th>Місце нар.</th>
      <th>Номер тел.</th>
      <th>ID код</th>
      <th>Заповн анкети</th>
      <th>Інше</th>
    </tr>

  <?php
    for($i = 0; $i < count($personal1); $i++)  {
      echo '
      <tr>
        <td>'.$personal1[$i]["id"].'</td>
        <td>'.$personal1[$i]["Surnames"].'</td>
        <td>'.$personal1[$i]["Given_names"].'</td>
        <td>'.$personal1[$i]["Sex"].'</td>
        <td>'.$personal1[$i]["Marital_status"].'</td>
        <td>'.$personal1[$i]["Date_of_birth"].'</td>
        <td>'.$personal1[$i]["Country_of_birth"].'</td>
        <td>'.$personal1[$i]["City_of_birth"].'</td>
    ';
    for($j = 0; $j < count($addressandphone); $j++)
      if($personal1[$i]["id"] == $addressandphone[$j]["id_p"])
        echo '
        <td>'.$addressandphone[$j]["Phone_number"].'</td>';

    for($j = 0; $j < count($personal2); $j++)
      if($personal1[$i]["id"] == $personal2[$j]["id_p"])
        echo '
        <td>'.$personal2[$j]["Identification_number"].'</td>';

    for($j = 0; $j < count($dateanketa); $j++)
      if($personal1[$i]["id"] == $dateanketa[$j]["id_p"])
        echo '
        <td>'.$dateanketa[$j]["Anketadate"].'</td>';

    echo '<td><a href="people.php?id='.$personal1[$i]["id"].'" style="color:blue;">Детальніше</a></td>
      </tr>';
  }
  ?>    
    </table>
  </div>
 </div>
</body>
</html>