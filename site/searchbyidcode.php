<!DOCTYPE html>
<html lang="ua">
<link rel="stylesheet" type="text/css" href="style.css">
<head>
  <meta charset="UTF-8">
  <title>Пошук за id кодом</title>
  <meta name="description" content="Анкета відвідувача консульства">
  <meta name="keyworld" content="консульство, анкета консульства, анкета">
  <?php
    require_once "functions/functions.php";
    $personal1 = getPersonalInform1(0);
    $addressandphone = getAddressAndPhone(0);
    $dateanketa = getAnketaDate(0);
    $personal2 = searchByIdcode($_POST["idcode"]);
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
  echo'<h3>Пошук за ідентифікаційним кодом: '.$_POST["idcode"].' </h3>';
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
    for($i = 0; $i < count($personal2); $i++)  {
      
      for($j = 0; $j < count($personal1); $j++)
       if($personal2[$i]["id_p"] == $personal1[$j]["id"])
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
      if($personal2[$i]["id_p"] == $addressandphone[$j]["id_p"])
        echo '
        <td>'.$addressandphone[$j]["Phone_number"].'</td>';

     echo '
    <td>'.$personal2[$i]["Identification_number"].'</td>';

    for($j = 0; $j < count($dateanketa); $j++)
      if($personal2[$i]["id_p"] == $dateanketa[$j]["id_p"])
        echo '
        <td>'.$dateanketa[$j]["Anketadate"].'</td>';

    echo '<td><a href="people.php?id='.$personal2[$i]["id_p"].'" style="color:blue;">Детальніше</a></td>
      </tr>';
  }
  ?> 
    </table>
  </div>
 </div>
</body>
</html>