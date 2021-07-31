<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Hasil
      <small>Diagnosa Domba</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-list"></i> Hasil</a></li>
      <li class="active">Hasil</li>
    </ol>
  </section>

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
  ?>

  <!-- Main content -->
  <section class="content">
    <div class="container">
    <div class="jawaban">
        <div class="row">
          <div class="jawab">

            <?php
            if ($jawaban=="") {
            ?>
              <div class="info-box">
                  <!-- Apply any bg-* class to to the icon to color it -->
                  <span class="info-box-icon bg-yellow"><i class="fa fa-question-circle"></i></span>
                  <div class="info-box-content">
                    <h4>Hasil diagnosa :</h4>
                    Hasil diagnosa domba <mark style="background: #e9dbc9;">tidak diketahui</mark>
                  </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
              <br>
              <h4>Anda bisa mencoba diagnosa kembali -> <a href="<?php echo base_url(); ?>konsultasi">konsultasi</a>.</h4>
              <br>
            <?php
            }else {
              if ($golrule==$ar_jawab) {
              ?>
              <div class="info-box">
                  <!-- Apply any bg-* class to to the icon to color it -->
                  <span class="info-box-icon bg-yellow"><i class="fa fa-warning"></i></span>
                  <div class="info-box-content">
                    <h4>Hasil diagnosa :</h4>
                    Domba kemungkinan <mark style="background: #e9dbc9;">terkena</mark> penyakit <b><?php echo $golpenyakit; ?></b>
                  </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->

              <a href="<?php echo base_url(); ?>cetak/<?php echo $id_jawaban; ?>">
                <button type="button" class="btn btn-info" name="button">Cetak</button>
              </a>
              <br>

              <br>
              <div class="box box-info collapsed-box">
                <div class="box-header with-border" data-widget="collapse">
                  <h3 class="box-title">Penjelasan</h3><button type="button" class="btn btn-box-tool"><i class="fa fa-angle-down"></i></button>
                </div>
                <div class="box-body">
                  <?php echo $golpenjelasanpenyakit; ?>
                </div>
              </div>
              <div class="box box-info collapsed-box">
                <div class="box-header with-border" data-widget="collapse">
                  <h3 class="box-title">Gejala</h3><button type="button" class="btn btn-box-tool"><i class="fa fa-angle-down"></i></button>
                </div>
                <div class="box-body">
                  <?php echo $golgejalapenyakit; ?>
                </div>
              </div>
              <div class="box box-info collapsed-box">
                <div class="box-header with-border" data-widget="collapse">
                  <h3 class="box-title">Penanganan</h3><button type="button" class="btn btn-box-tool"><i class="fa fa-angle-down"></i></button>
                </div>
                <div class="box-body">
                  <?php echo $golpenangananpenyakit; ?>
                </div>
              </div>

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
                  <div class="info-box">
                      <!-- Apply any bg-* class to to the icon to color it -->
                      <span class="info-box-icon bg-yellow"><i class="fa fa-warning"></i></span>
                      <div class="info-box-content">
                        <h4>Hasil diagnosa :</h4>
                        Domba kemungkinan <mark style="background: #e9dbc9;">terkena</mark> penyakit <b><?php echo $golpenyakit; ?></b>
                      </div><!-- /.info-box-content -->
                  </div><!-- /.info-box -->

                  <a href="<?php echo base_url(); ?>cetak/<?php echo $id_jawaban; ?>">
                    <button type="button" class="btn btn-info" name="button">Cetak</button>
                  </a>
                  <br>

                  <br>
                  <div class="box box-info collapsed-box">
                    <div class="box-header with-border" data-widget="collapse">
                      <h3 class="box-title">Penjelasan</h3><button type="button" class="btn btn-box-tool"><i class="fa fa-angle-down"></i></button>
                    </div>
                    <div class="box-body">
                      <?php echo $golpenjelasanpenyakit; ?>
                    </div>
                  </div>
                  <div class="box box-info collapsed-box">
                    <div class="box-header with-border" data-widget="collapse">
                      <h3 class="box-title">Gejala</h3><button type="button" class="btn btn-box-tool"><i class="fa fa-angle-down"></i></button>
                    </div>
                    <div class="box-body">
                      <?php echo $golgejalapenyakit; ?>
                    </div>
                  </div>
                  <div class="box box-info collapsed-box">
                    <div class="box-header with-border" data-widget="collapse">
                      <h3 class="box-title">Penanganan</h3><button type="button" class="btn btn-box-tool"><i class="fa fa-angle-down"></i></button>
                    </div>
                    <div class="box-body">
                      <?php echo $golpenangananpenyakit; ?>
                    </div>
                  </div>
                  <?php
                }
              }
              ?>

            <a href="<?php echo base_url(); ?>home">
              <button type="button" class="btn btn-danger" name="button">Kembali</button>
            </a>
          </div>
        </div>
    </div>
    </div>
  </section>
  <!-- /.content -->
</div>
