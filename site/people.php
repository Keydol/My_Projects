<!DOCTYPE html>
<html lang="ua">
<link rel="stylesheet" type="text/css" href="style.css">
<head>
  <meta charset="UTF-8">
  <title>Детальніше</title>
  <meta name="description" content="Анкета відвідувача консульства">
  <meta name="keyworld" content="консульство, анкета консульства, анкета">
  <?php
    require_once "functions/functions.php";
    $personal1 = getPersonalInform1($_GET["id"]);
    $personal2 = getPersonalInform2($_GET["id"]);
    $addressandphone = getAddressAndPhone($_GET["id"]);
    $travelinf = getTravelInformation($_GET["id"]);
    $dateanketa = getAnketaDate($_GET["id"]);
  ?>

  <script>
    function printInfo(ele) {
    var openWindow = window.open("", "title", "attributes");
    openWindow.document.write(ele.previousSibling.innerHTML);
    openWindow.document.close();
    openWindow.focus();
    openWindow.print();
    openWindow.close();
}
  </script>
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
 <div id="forprint">
  <?php
    echo '
      Прізвище: '.$personal1["Surnames"].' <br>
      Ім\'я: '.$personal1["Given_names"].' <br>
      Стать: '.$personal1["Sex"].' <br>
      Сімейний статус: '.$personal1["Marital_status"].' <br>
      Дата народження: '.$personal1["Date_of_birth"].' <br>
      Місце народження: '.$personal1["City_of_birth"].' <br>
      Країна народження: '.$personal1["Country_of_birth"].' <br>
      <br>
      Національність: '.$personal2["Nationality"].' <br>
      Ідентифікаційний номер: '.$personal2["Identification_number"].' <br>
      Номер паспорта: '.$personal2["Document_number"].' <br>
      Дата видачі паспорта: '.$personal2["Issuance_date"].' <br>
      <br>
      Адреса проживання: '.$addressandphone["Street_address"].' <br>
      Індекс місця проживання: '.$addressandphone["ZIP_code"].' <br>
      Номер телефону: '.$addressandphone["Phone_number"].' <br>
      Електронна почта: '.$addressandphone["Email_address"].' <br>
      <br>
      Країна прибуття: '.$travelinf["arrival_country"].' <br>
      Тип візи: '.$travelinf["type_of_visa"].' <br>
      Дата прибуття: '.$travelinf["date_of_arrival"].' <br>
      Місце прибуття: '.$travelinf["arrival_city"].' <br>
      Чи відмовляли уже у візі: '.$travelinf["refused_a_visa"].' <br>
      <br>
      Дата заповнення анкети: '.$dateanketa["Anketadate"].' <br>
    '
  ?>
</div><a href="#" onclick="printInfo(this)" style="color:blue;">Друк анкети</a>


  </div>
 </div>
</body>
</html>