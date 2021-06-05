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

  <!-- Main content -->
  <section class="content">
    <div class="container">
    <div class="jawaban">
        <div class="row">
          <div class="jawab">
            <?php
            if ($jawaban == $rule) {
            ?>
            <div class="info-box">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon bg-blue"><i class="fa fa-star"></i></span>
                <div class="info-box-content">
                  <h4>Hasil diagnosa :</h4>
                  Domba kemungkinan <mark>terkena</mark> penyakit <b><?php
                  foreach ($penyakit as $key) {
                    echo $key->nama_penyakit;
                  }
                  ?></b>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->

            <a href="<?php echo base_url(); ?>cetak/<?php echo $id_jawaban; ?>">
              <button type="button" class="btn btn-info" name="button">Cetak</button>
            </a>
            <br>
            <?php
            } else {
            ?>
            <div class="info-box">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon bg-yellow"><i class="fa fa-warning"></i></span>
                <div class="info-box-content">
                  <h4>Hasil diagnosa :</h4>
                  <span class="progress-description">
                    Domba sepertinya <mark>tidak terkena</mark> penyakit <b><?php
                    foreach ($penyakit as $key) {
                      echo $key->nama_penyakit;
                    }
                    ?></b>
                  </span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->

            <h4>Anda bisa mencoba kembali dengan penyakit yang lain <a href="<?php echo base_url(); ?>konsultasi">konsultasi</a>.</h4>
            <br>
            <?php
            }?>

            <?php
            if ($jawaban == $rule) {
            ?>
            <br>
            <div class="box box-info collapsed-box">
              <div class="box-header with-border" data-widget="collapse">
                <h3 class="box-title">Penjelasan</h3>
              </div>
              <div class="box-body">
                <?php echo $key->penjelasan; ?>
              </div>
            </div>
            <div class="box box-info collapsed-box">
              <div class="box-header with-border" data-widget="collapse">
                <h3 class="box-title">Gejala</h3>
              </div>
              <div class="box-body">
                <?php echo $key->gejala; ?>
              </div>
            </div>
            <div class="box box-info collapsed-box">
              <div class="box-header with-border" data-widget="collapse">
                <h3 class="box-title">Penanganan</h3>
              </div>
              <div class="box-body">
                <?php echo $key->penanganan; ?>
              </div>
            </div>

            <?php
            }
            ?>

            <h3 class="page-header">Jawaban:</h3>
            <?php
            $no=0;
            foreach ($pertanyaan as $p) {
            if ($exjawaban[$no]==$exrule[$no]) {
            ?>
            <div class="box box-solid box-success">
              <div class="box-header with-border">
                <h3 class="box-title"><?php echo $p->pertanyaan; ?></h3>
              </div>
              <div class="box-body">
                  <div class="radio">
                    <label>
                      <input type="radio" id="options<?php echo $no;  ?>Radios1" name="jwb<?php echo $no;  ?>" checked>
                      <?php if ($exjawaban[$no]=="Y") {
                        echo "Ya";
                      }else {
                        echo "Tidak";
                      } ?>
                    </label>
                  </div>
              </div>
            </div><!-- /.box -->
            <?php
            }else {
            ?>
            <div class="box box-solid box-danger">
              <div class="box-header with-border">
                <h3 class="box-title"><?php echo $p->pertanyaan; ?></h3>
              </div>
              <div class="box-body">
                  <div class="radio">
                    <label>
                      <input type="radio" id="options<?php echo $no;  ?>Radios1" name="jwb<?php echo $no;  ?>" checked>
                      <?php if ($exjawaban[$no]=="Y") {
                        echo "Ya";
                      }else {
                        echo "Tidak";
                      } ?>
                    </label>
                  </div>
              </div>
            </div><!-- /.box -->
            <?php
            }
            $no++;
            }
            ?>

            <a href="<?php echo base_url(); ?>konsultasi">
              <button type="button" class="btn btn-danger" name="button">Kembali</button>
            </a>
          </div>
        </div>
    </div>
    </div>
  </section>
  <!-- /.content -->
</div>
