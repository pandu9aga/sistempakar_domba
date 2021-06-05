<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    foreach ($hasil as $value) {
      $jawaban = $value->jawaban;
      $id_jawaban = $value->id_jawaban;
    }
    $exjawaban = explode (" ",$jawaban);
    foreach ($penyakit as $keys) {
      $rule = $keys->ketentuan;
    }
    $exrule = explode (" ",$rule);
     ?>

    <?php if ($jawaban == $rule) {
    ?>
    <h2>Hasil Diagnosa</h2><span><?php echo $value->waktu; ?></span><br><br>
    Domba kemungkinan "terkena" penyakit <b><?php
    foreach ($penyakit as $key) {
      echo $key->nama_penyakit;
    }
    ?></b>
    <?php
    }else {
    ?>
    <h2>Hasil Diagnosa</h2><span><?php echo $value->waktu; ?></span><br><br>
    Domba kemungkinan "tidak terkena" penyakit <b><?php
    foreach ($penyakit as $key) {
      echo $key->nama_penyakit;
    }
    ?></b>
    <?php
    } ?>



    <h3>Penjelasan</h3>
    <?php echo $key->penjelasan; ?>
    <h3>Gejala</h3>
    <?php echo $key->gejala; ?>
    <h3>Penanganan</h3>
    <?php echo $key->penanganan; ?>

    <h4>Jawaban:</h4>
    <ul>
    <?php
    $no=0;
    foreach ($pertanyaan as $p) {
    ?>
    <li>
    <?php echo $p->pertanyaan; ?>
    </li>
    <div class="radio">
      <label>
        <?php if ($exjawaban[$no]=="Y") {
          echo "Ya";
        }else {
          echo "Tidak";
        } ?>
      </label>
    </div>
    <br>
    <?php
    $no++;
    }
    ?>
    </ul>

    <script type="text/javascript">
      javascript:window.print()
    </script>

  </body>
</html>
