<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
    if(isset($_POST['hasil'])){
      $nil1 = $_POST['n1'];
  		$nil2 = $_POST['n2'];
  		$operasi = $_POST['pil'];
      if ($operasi == '+')
      {
        $hasil = $nil1+$nil2;
      }
      else if ($operasi == '-')
      {
        $hasil = $nil1-$nil2;
      }
      else if ($operasi == '/')
      {
				$hasil = $nil1/$nil2;
      }
      else if ($operasi == '*')
      {
        $hasil = $nil1*$nil2;
      }
    }
    ?>
    <div class="Kalkulator">
      <h1 class="header">Kalkulator</h1>
      <form action="Kode.php" method="post">
        <div class="nilai">
          <label>Nilai 1</label>
          <input type="text" name="n1" value="0">
        </div>
        <div class="nilai">
          <label>Nilai 2</label>
          <input type="text" name="n2" value="0">
        </div>
        <div>
          <button type="submit" name="hasil" class="tombol">hasil</button>
          <select class="pilihan" name="pil">
            <option value="+">Tambah</option>
            <option value="-">Kurang</option>
            <option value="/">Bagi</option>
            <option value="*">Kali</option>
          </select>
        </div>
        <div class="nilai">
          <?php  if (isset($_POST['hasil'])) {?>
            <label>Hasil</label>
            <input type="text" name="n3" value="<?php echo $hasil ?>">
          <?php } else { ?>
            <label>Hasil</label>
            <input type="text" name="n3" value="0">
          <?php } ?>
        </div>
      </div>
    </form>
  </div>
</body>
</html>
