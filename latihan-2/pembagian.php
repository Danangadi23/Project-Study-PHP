<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalkulator</title>
</head>

<body>
  <h1>Kalkulator Pembagian</h1>
  <form action="" method="get">
    <ul>
      <li>
        <label for="number1">Angka 1 : </label>
        <input type="number" name="number1" id="number1" autofocus autocomplete="off">
      </li><br>
      <li>
        <label for="number2">Angka 2 : </label>
        <input type="number" name="number2" id="number2" autofocus autocomplete="off">
      </li><br>
      <button type="submit" name="submit">Hitung</button>
    </ul>
  </form>
  <h3>Hasil dari Perkalian <?= $_GET["number1"]; ?> dan <?= $_GET["number2"]; ?> adalah
    <?= $_GET["number1"] / $_GET["number2"]; ?>
  </h3>
  <h2><a href="index.html">Kembali</a></h2>
</body>

</html>