<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input in PHP</title>
</head>

<body>
  <h1>Say Hello</h1>
  <form action="" method="post">
    <ul>
      <li>
        <label for="nama">Nama Kamu :</label>
        <input type="text" name="nama" id="nama" required autocomplete="off" autofocus>
      </li><br>
      <li>
        <label for="usia">Usia Kamu :</label>
        <input type="text" name="usia" id="usia" required autocomplete="off" autofocus>
      </li><br>
      <li>
        <label for="cita-cita">Cita-cita Kamu :</label>
        <input type="text" name="cita-cita" id="cita-cita" required autocomplete="off" autofocus>
      </li><br>
      <li>
        <label for="motivasi">Motivasi Kamu :</label>
        <input type="text" name="motivasi" id="motivasi" required autocomplete="off" autofocus>
      </li><br>
      <button type="submit" name="submit">Kirim</button>
    </ul>
  </form>

  <p>
    Halo, Nama saya adalah <?php echo $_POST["nama"]; ?>.<br> Saat ini saya berusia <?php echo $_POST["usia"]; ?>
    tahun.<br>
    Saya memiliki cita-cita sebagai <?php echo $_POST["cita-cita"]; ?>.<br> Motivasi hidup saya
    <?php echo $_POST["motivasi"]; ?>.<br>
    Terimakasih.
  </p>
</body>

</html>