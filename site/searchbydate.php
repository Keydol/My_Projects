<!DOCTYPE html>
<html lang="ua">
<link rel="stylesheet" type="text/css" href="style.css">
<head>
  <meta charset="UTF-8">
  <title>Пошук за датою</title>
  <meta name="description" content="Анкета відвідувача консульства">
  <meta name="keyworld" content="консульство, анкета консульства, анкета">
  <?php
    require_once "functions/functions.php";
    $personal1 = getPersonalInform1(0);
    $addressandphone = getAddressAndPhone(0);
    $personal2 = getPersonalInform2(0);
    $dateanketa = searchByDate($_POST["adate"]);
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
  echo'<h3>Пошук за датою: '.$_POST["adate"].' </h3>';
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
    for($i = 0; $i < count($dateanketa); $i++)  {
      
      for($j = 0; $j < count($personal1); $j++)
       if($dateanketa[$i]["id_p"] == $personal1[$j]["id"])
         echo '
          <tr>
            <td>'.$personal1[$j]["id"].'</td>
            <td>'.$personal1[$j]["Surnames"].'</td>
            <td>'.$personal1[$j]["Given_names"].'</td>
            <td>'.$personal1[$j]["Sex"].'</td>
            <td>'.$personal1[$j]["Marital_status"].'</td>
            <td>'.$personal1[$j]["Date_of_birth"].'</td>
            <td>'.$personal1[$j]["Country_of_birth"].'</td>
            <td>'.$personal1[$j]["City_of_birth"].'</td>';

    for($j = 0; $j < count($addressandphone); $j++)
      if($dateanketa[$i]["id_p"] == $addressandphone[$j]["id_p"])
        echo '
        <td>'.$addressandphone[$j]["Phone_number"].'</td>';

    for($j = 0; $j < count($personal2); $j++)
      if($dateanketa[$i]["id_p"] == $personal2[$j]["id_p"])
        echo '
        <td>'.$personal2[$i]["Identification_number"].'</td>';

    echo '<td>'.$dateanketa[$i]["Anketadate"].'</td>';

    echo '<td><a href="people.php?id='.$dateanketa[$i]["id_p"].'" style="color:blue;">Детальніше</a></td>
      </tr>';
  }
  ?>    
    </table>
  </div>
 </div>
</body>
</html>