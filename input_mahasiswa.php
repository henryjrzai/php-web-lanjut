<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Data Mahasiswa</title>
  <link rel="stylesheet" href="style/input_mahasiswa.css">
</head>
<body>
  <section class="input-data">
    <form method="get" action="">
      <table>
        <tr>
          <td colspan=3 align="center" style="font-weight: bold;">Data Mahasiswa</td>
        </tr>
        <tr>
          <td>NPM</td>
          <td>:</td>
          <td><input type="text" name="txtnpm" size="10"></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><input type="text" name="txtnama" size="40"></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td>
            <input type="radio" name="rdojenkel" value="L" id="">Laki-Laki
            <input type="radio" name="rdojenkel" value="P" id="">Perempuan
          </td>
        </tr>
        <tr>
          <td>Agama</td>
          <td>:</td>
          <td>
            <select name="sltagama" id="">
              <option value="K">Katolik</option>
              <option value="P">Protestan</option>
              <option value="I">Islam</option>
              <option value="H">Hindu</option>
              <option value="B">Buddha</option>
              <option value="K">Konghucu</option>
              <option value="A">Aliran Kepercayaan</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><input type="text" name="txtalamat" size="60" id=""></td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td>:</td>
          <td><input type="date" name="dttgllahir" id=""></td>
        </tr>
        <tr>
          <td colspan="3" align="center">
            <input type="reset" value="Batal">
            <input type="submit" value="Simpan">
          </td>
        </tr>
      </table>
    </form>
  </section>
</body>
</html>