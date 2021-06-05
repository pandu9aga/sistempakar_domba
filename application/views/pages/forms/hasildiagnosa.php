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
            if ($ar_jawab[0]!="G0") {
            ?>
            <?php
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

            <h4>Pertanyaan yang mengindikasikan penyakit:</h4>
            <?php
            foreach ($pertanyaan as $pert) {
            if ($pert->id_penyakit==$golidpenyakit) {
            ?>
            <div class="box box-solid box-success">
              <div class="box-header with-border">
                <h3 class="box-title"><?php echo $pert->pertanyaan; ?></h3>
              </div>
              <div class="box-body">
                Ya
              </div>
            </div><!-- /.box -->
            <?php
            }
            }
            }else {
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
            }
            ?>
            <?php
            }else {
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
