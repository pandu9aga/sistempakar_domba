<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Pertanyaan
      <small>Diagnosa Domba</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-list"></i> Pertanyaan</a></li>
      <li class="active">Pertanyaan</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <style>
        .right img {
          transform: scale(1.20);
          filter: brightness(50%);
          transition: opacity 0.4s, transform 0.4s;
        }

        .right img:hover {
          transform: scale(1.03);
          filter: brightness(85%);
        }
        .carousel .item {
          height: 230px;
        }

        .item img {
            position: absolute;
            top: 0;
            left: 0;
            min-height: 230px;
        }
        </style>

        <div class="right">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/expert_system.jpg" alt="Expert System" style="width:100%;">
              <div class="carousel-caption">
                <h3>Sistem Pakar</h3>
              </div>
            </div>

            <div class="item">
              <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/sheep.jpg" alt="Sheep" style="width:100%;">
              <div class="carousel-caption">
                <h3>Domba</h3>
              </div>
            </div>

            <div class="item">
              <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/sheep_doctor.jpg" alt="Sheep Expert" style="width:100%;">
              <div class="carousel-caption">
                <h3>Doktor Hewan</h3>
              </div>
            </div>
          </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <hr>
    <!-- Left-aligned media object -->
    <div class="media">
      <div class="media-left">
        <img src="<?php echo base_url(); ?>assets/img/logo_50x50.jpg" alt="doctor" class="media-object" style="width:60px">
      </div>
      <div class="media-body">
        <h3 class="media-heading">Sheep Expert System</h3>
        <p>Sistem Pakar Diagnosa Penyakit Domba menggunakan Metode Backward Chaining berbasis WEB merupakan suatu sistem yang mendiagnosa penyakit melalui indikasi penyakit lalu muncul gejala yang dialami oleh Domba.
          Dengan menggunakan sistem ini, peternak domba lebih gampang mengetahui penyakit yang dialami oleh hewan peliharannya tanpa harus menemui seorang Dokter dan Rumah Sakit</p>
      </div>
    <br>
    </div>

    <!-- Left-aligned media object -->
    <div class="media">
      <div class="media-left">
        <img src="<?php echo base_url(); ?>assets/img/doctor.png" alt="doctor" class="media-object" style="width:60px">
      </div>
      <div class="media-body">
        <h3 class="media-heading">Diagnosa Domba</h3>
        <p>Daftar pertanyaan ini disusun oleh seorang ahli berpengalaman dibidang penyakit domba yaitu drh. Pandu Tokoh Amukti.
          Seorang dokter hewan yang beralamat di Perumahan Tamansari Indah Jl. Cendana 7 RT 15/06, Tamansari, Bondowoso.
          Saat ini bekerja sebagai dokter hewan di Puskesmas Hewan Tamanan, Bondowoso.</p>
      </div>
    <hr>
    </div>

    <br>

    <div class="container">
    <div class="jawaban">
        <div class="row">
          <div class="jawab">
            <div class="info-box">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon bg-green"><i class="fa fa-check"></i></span>
                <div class="info-box-content">
                  <h4>Jawablah pertanyaan berikut ini :</h4>
                  <span class="progress-description">
                    Untuk mendiagnosis penyakit domba
                  </span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->

            <script>
            function pencet(click_question,click_value,click_code) {
              var nama_question = click_question;
              var nama_value = click_value;
              var nama_code = click_code;

              var label = document.createElement("label");
              var t = document.createTextNode(nama_question);
              label.appendChild(t);

              var input = document.createElement("input");
              input.setAttribute("type", "text");
              input.setAttribute("name", "inp["+nama_code+"]");
              input.setAttribute("value", nama_value);
              input.setAttribute("readonly", true);

              var br = document.createElement("br");

              var contain = document.createElement("div");
              contain.appendChild(label);
              contain.appendChild(br);
              contain.appendChild(input);

              document.getElementById("hasil-jawaban").appendChild(contain);
            }
            </script>

            <form name="form_pertanyaan" action="<?php echo base_url('Konsultasi_control/cek_diagnosa'); ?>" method="post">

            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalmayor1" data-backdrop="static" data-keyboard="false">
              Mulai Pertanyaan
            </button>

            <hr>

            <?php
            $no = 1;
            foreach ($pertanyaan as $p) {
              $code = $p->kode;
              $excode = explode("G",$code);

              if ($p->mayor=="Y") {
              ?>

              <div class="modal modal-default fade" id="modalmayor<?php echo $p->id_penyakit; ?>">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title"><?php echo $p->pertanyaan; ?></h4>
                    </div>

                    <?php
                    foreach ($penyakit as $pykt) {
                      $id_terakhir = $pykt->id_penyakit;
                    }
                    $nextcode = $p->id_penyakit+1;
                    if ($nextcode>$id_terakhir) {
                      $nextmodal = "#modalakhir";
                    }else {
                      $nextmodal = "#modalmayor".$nextcode;
                    }
                    ?>

                    <div class="modal-body">
                      <div class="center-block well">
                        <div class="text-center">
                          <button type="button" class="btn btn-success btn-block" data-dismiss="modal" id="jwbnmayory<?php echo $no; ?>" name="jwbn<?php echo $no; ?>" onclick="pencet('<?php echo $p->pertanyaan; ?>','Ya','<?php echo $code; ?>')" data-toggle="modal" data-target="#modalminor<?php echo $p->id_penyakit; ?>-soal<?php echo $excode[1]+1; ?>" data-backdrop="static" data-keyboard="false">Ya</button>
                          <br>
                          <button type="button" class="btn btn-danger btn-block" data-dismiss="modal" id="jwbnmayort<?php echo $no; ?>" name="jwbn<?php echo $no; ?>" onclick="pencet('<?php echo $p->pertanyaan; ?>','Tidak','<?php echo $code; ?>')" data-toggle="modal" data-target="<?php echo $nextmodal; ?>" data-backdrop="static" data-keyboard="false">Tidak</button>
                        </div>
                      </div>
                    </div>

                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>

              <?php
              }else {
                foreach ($pertanyaan as $key) {
                  if ($key->id_penyakit==$p->id_penyakit) {
                    $end = $key->kode;
                    $ends = explode("G",$end);
                    $endsoal = $ends[1];
                  }
                }

                if ($excode[1]!=$endsoal) {
                ?>

                <div class="modal modal-default fade" id="modalminor<?php echo $p->id_penyakit; ?>-soal<?php echo $excode[1]; ?>">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title"><?php echo $p->pertanyaan; ?></h4>
                      </div>

                      <div class="modal-body">
                        <div class="center-block well">
                          <div class="text-center">
                            <button type="button" class="btn btn-success btn-block" data-dismiss="modal" id="jwbnminory<?php echo $excode[1]; ?>" name="jwbn<?php echo $no; ?>" onclick="pencet('<?php echo $p->pertanyaan; ?>','Ya','<?php echo $code; ?>')" data-toggle="modal" data-target="#modalminor<?php echo $p->id_penyakit; ?>-soal<?php echo $excode[1]+1; ?>" data-backdrop="static" data-keyboard="false">Ya</button>
                            <br>
                            <button type="button" class="btn btn-danger btn-block" data-dismiss="modal" id="jwbnminort<?php echo $excode[1]; ?>" name="jwbn<?php echo $no; ?>" onclick="pencet('<?php echo $p->pertanyaan; ?>','Tidak','<?php echo $code; ?>')" data-toggle="modal" data-target="#modalminor<?php echo $p->id_penyakit; ?>-soal<?php echo $excode[1]+1; ?>" data-backdrop="static" data-keyboard="false">Tidak</button>
                          </div>
                        </div>
                      </div>

                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>

                <?php
                }else {
                ?>

                <div class="modal modal-default fade" id="modalminor<?php echo $p->id_penyakit; ?>-soal<?php echo $excode[1]; ?>">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title"><?php echo $p->pertanyaan; ?></h4>
                      </div>

                      <div class="modal-body">
                        <div class="center-block well">
                          <div class="text-center">
                            <button type="button" class="btn btn-success btn-block" data-dismiss="modal" id="jwbnminory<?php echo $excode[1]; ?>" name="jwbn<?php echo $no; ?>" onclick="pencet('<?php echo $p->pertanyaan; ?>','Ya','<?php echo $code; ?>')" data-toggle="modal" data-target="#modalakhir" data-backdrop="static" data-keyboard="false">Ya</button>
                            <br>
                            <button type="button" class="btn btn-danger btn-block" data-dismiss="modal" id="jwbnminort<?php echo $excode[1]; ?>" name="jwbn<?php echo $no; ?>" onclick="pencet('<?php echo $p->pertanyaan; ?>','Tidak','<?php echo $code; ?>')" data-toggle="modal" data-target="#modalakhir" data-backdrop="static" data-keyboard="false">Tidak</button>
                          </div>
                        </div>
                      </div>

                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>

                <?php
                }
              }

              $no++;
            } ?>

            <div class="modal modal-default fade" id="modalakhir">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Jawaban Anda :</h4>
                  </div>

                  <div class="modal-body" id="hasil-jawaban">

                  </div>

                  <div class="modal-footer">
                    <div class="pertanyaan">
                      <input type="hidden" name="waktu" value="<?php echo date('Y-m-d H:i:s'); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="button">Diagnosis</button>
                    <a href="<?php echo base_url(); ?>konsultasi">
                      <button type="button" class="btn btn-danger" name="button">Ulangi</button>
                    </a>
                  </div>

                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>

            </form>
          </div>
        </div>

    </div>
    </div>
  </section>
  <!-- /.content -->
</div>

<script type="text/javascript">
$(document).ready(function () {

 $('.modal').on("hidden.bs.modal", function (e) { //fire on closing modal box
        if ($('.modal:visible').length) { // check whether parent modal is opend after child modal close
            $('body').addClass('modal-open'); // if open mean length is 1 then add a bootstrap css class to body of the page
        }
    });
});

</script>
