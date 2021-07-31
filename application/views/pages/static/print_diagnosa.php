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
    $golrule = null;

    foreach ($rule as $r) {
      $ketentuan = $r->kode_gejala;
      $exketentuan = explode(" ",$ketentuan);
      if ($exketentuan==$ar_jawab) {
        $golrule = explode(" ",$ketentuan);
        foreach ($penyakit as $p) {
          if ($r->kode_penyakit==$p->kode_penyakit) {
            $golpenyakit = $p->nama_penyakit;
            $golidpenyakit = $p->id_penyakit;
            $golpenjelasanpenyakit = $p->penjelasan;
            $golgejalapenyakit = $p->gejala;
            $golpenangananpenyakit = $p->penanganan;
          }
        }
      }
    }
    //echo $golrule."<br>";
    //echo $ar_jawab[0];


    if ($jawaban=="") {
    ?>
      <h2>Hasil diagnosa :</h2>
      Hasil diagnosa domba tidak diketahui
      <br>
      <h4>Anda bisa mencoba diagnosa kembali</h4>
      <br>
    <?php
    }else {
      if ($golrule==$ar_jawab) {
      ?>
      <h2>Hasil diagnosa :</h2>
      Domba kemungkinan terkena penyakit <b><?php echo $golpenyakit; ?></b>
      <br>
      <h3>Penjelasan</h3>
      <?php echo $golpenjelasanpenyakit; ?>
      <h3>Gejala</h3>
      <?php echo $golgejalapenyakit; ?>
      <h3>Penanganan</h3>
      <?php echo $golpenangananpenyakit; ?>
      <?php
      }else {
          foreach ($rule as $ru) {
            $ketentuan = $ru->kode_gejala;
            $exketentuan = explode(" ",$ketentuan);
            //echo $ketentuan."<br>";
            //$similarity = levenshtein($ketentuan,$jawaban);
            $intersect = array_intersect($exketentuan,$ar_jawab);
            $similarity = count($intersect);
            $rule_similarity[$ru->kode_rule] = $arrayName = array('nilai' => $similarity, 'kode' => $ru->kode_rule);
          }
          //var_dump($rule_similarity);
          //echo "<br>";
          $most_similar = (max($rule_similarity));
          //echo $most_similar['kode'];
          foreach ($rule as $rul) {
            if ($most_similar['kode'] == $rul->kode_rule) {
              $most_similar_penyakit = $rul->kode_penyakit;
            }
          }
          foreach ($penyakit as $p) {
            if ($p->kode_penyakit == $most_similar_penyakit) {
              $golpenyakit = $p->nama_penyakit;
              $golidpenyakit = $p->id_penyakit;
              $golpenjelasanpenyakit = $p->penjelasan;
              $golgejalapenyakit = $p->gejala;
              $golpenangananpenyakit = $p->penanganan;
            }
          }
          ?>
          <h2>Hasil diagnosa :</h2>
          Domba kemungkinan terkena penyakit <b><?php echo $golpenyakit; ?></b>
          <br>
          <h3>Penjelasan</h3>
          <?php echo $golpenjelasanpenyakit; ?>
          <h3>Gejala</h3>
          <?php echo $golgejalapenyakit; ?>
          <h3>Penanganan</h3>
          <?php echo $golpenangananpenyakit; ?>
          <?php
        }
      }
      ?>

    <script type="text/javascript">
      javascript:window.print()
    </script>

  </body>
</html>
