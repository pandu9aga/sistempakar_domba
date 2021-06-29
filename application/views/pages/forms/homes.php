<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Home
      <small>Diagnosa Domba</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
      <li class="active">Home</li>
    </ol>
  </section>


    <!-- Main content -->
    <section class="content">
      <div class="container">
      <div class="jawaban">
          <br>
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
                    <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/sheep_doctor.jpg" alt="Sheep Expert" style="width:100%;">
                    <div class="carousel-caption">
                      <h3>Doktor Hewan</h3>
                    </div>
                  </div>

                  <div class="item">
                    <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/sheep.jpg" alt="Sheep" style="width:100%;">
                    <div class="carousel-caption">
                      <h3>Domba</h3>
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
              <img src="<?php echo base_url(); ?>assets/img/doctor.png" alt="doctor" class="media-object" style="width:60px">
            </div>
            <div class="media-body">
              <h3 class="media-heading">Diagnosa Domba</h3>
              <p>Sistem Pakar Diagnosa Penyakit Domba menggunakan Metode Backward Chaining berbasis WEB merupakan suatu sistem yang mendiagnosa penyakit melalui indikasi penyakit lalu muncul gejala yang dialami oleh Domba.
                Dengan menggunakan sistem ini, peternak domba lebih gampang mengetahui penyakit yang dialami oleh hewan peliharannya tanpa harus menemui seorang Dokter dan Rumah Sakit</p>
            </div>
          <br>
          </div>
      </div>
      </div>
    </section>




  <script type="text/javascript">

  $('#click').on("click",function(){
    console.log('ok');


  });
  </script>
  <!-- /.content -->
</div>
