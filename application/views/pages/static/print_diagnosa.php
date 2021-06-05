<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    foreach ($hasil as $h) {
      $jawaban = $h->jawaban;
      $id_jawaban = $h->id_jawaban;
    }
    $ar_jawab = explode(" ",$jawaban);

    foreach ($penyakit as $p) {
      $ketentuan = $p->ketentuan;
      $exketentuan = explode(" ",$ketentuan);
      if ($exketentuan[0]==$ar_jawab[0]) {
        $golrule = explode(" ",$ketentuan);
        $golpenyakit = $p->nama_penyakit;
        $golidpenyakit = $p->id_penyakit;
        $golpenjelasanpenyakit = $p->penjelasan;
        $golgejalapenyakit = $p->gejala;
        $golpenangananpenyakit = $p->penanganan;
      }
    }
    ?>

    <?php
    if ($golrule==$ar_jawab) {
    ?>
    <h4>Hasil diagnosa :</h4>
    Domba kemungkinan terkena penyakit <b><?php echo $golpenyakit; ?></b>

    <h3>Penjelasan</h3>
    <?php echo $golpenjelasanpenyakit; ?>
    <h3>Gejala</h3>
    <?php echo $golgejalapenyakit; ?>
    <h3>Penanganan</h3>
    <?php echo $golpenangananpenyakit; ?>

    <h4>Pertanyaan yang mengindikasikan penyakit:</h4>
    <?php
    foreach ($pertanyaan as $pert) {
    if ($pert->id_penyakit==$golidpenyakit) {
    ?>
    <li>
    <?php echo $pert->pertanyaan; ?>
    </li>
    <div class="radio">
      <label>
        Ya
      </label>
    </div>
    <br>
    <?php
    }
    }
    }
    ?>

    <script type="text/javascript">
      javascript:window.print()
    </script>

  </body>
</html>
