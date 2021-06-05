<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Daftar
      <small>Diagnosa Domba</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-list"></i> Daftar</a></li>
      <li class="active">Daftar</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container">
      <div class="row">
        <div class="info-box">
            <!-- Apply any bg-* class to to the icon to color it -->
            <span class="info-box-icon bg-aqua"><i class="fa fa-mouse-pointer"></i></span>
            <div class="info-box-content">
              <h4>Pilihlah salah satu penyakit berikut ini :</h4>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
        <div>
          <?php foreach ($penyakit as $p) {?>

            <a class="btn btn-block btn-social btn-linkedin" href="pertanyaan/<?php echo $p->id_penyakit; ?>">
              <i class="fa fa-chevron-right"></i> <?php echo $p->nama_penyakit; ?>
            </a>

          <?php } ?>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </section>

</div>
