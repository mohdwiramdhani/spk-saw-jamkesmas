<!DOCTYPE html>  
<html lang="en"> 
<?php 
include 'koneksi.php';
?>  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>SPK PENERIMAAN JAMKESMAS</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">

    <!-- buat ba edit tema -->
    <link href="css/ane.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

  <body style="background-image: url(img/bgbg.png);">
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.php" class="logo">SPK PENERIMAAN JAMKESMAS <span class="lite">(METODE SAW)</span></a>
            <!--logo end-->


            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    

                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <aside>
          <div id="sidebar"  class="nav-collapse ">
               <!-- sidebar menu start-->
              <ul class="sidebar-menu">


                  <li>                     
                      <a class="" href="index.php">
                          <i class="icon_house"></i>
                          <span>Beranda</span>
                      </a>
                  </li>


                  <li>                     
                      <a class="" href="alternatif.php">
                          <i class="icon_document_alt"></i>
                          <span>Alternatif</span>
                      </a>
                  </li>

                  <li>      
                      <a class="" href="penilaian.php">
                          <i class="icon_genius"></i>
                          <span>Penilaian</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="bobot.php">
                          <i class="icon_piechart"></i>
                          <span>Bobot</span>
                      </a>
                  </li>

                  

                  <li>                     
                      <a class="" href="hitung_saw.php">
                          <i class="icon_datareport"></i>
                          <span>Hitung SAW</span>
                      </a>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> DATA ALTERNATIF</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_document_alt"></i>Alternatif</li> 						  	
					</ol>
				</div>
			</div>    

<!--START SCRIPT INSERT-->            
<?php 
if (isset($_POST['simpan'])) {
  $id_alternatif=$_POST['id_alternatif'];
  $nama=$_POST['nama'];
  
  if (($id_alternatif=="")or($nama=="")) {
    echo "<script>
    alert('masih ada data yang kosong !');
    </script>";
  }else{
  $sql = "SELECT*FROM tb_alternatif WHERE id_alternatif='$id_alternatif'";
  $hasil=$conn->query($sql);
  if ($hasil->num_rows>0) {
  $row = $hasil->fetch_row();
    echo "<script>
    alert('id $id_alternatif sudah ada !');
    </script>";
  }else{
    $sql = "INSERT INTO tb_alternatif(id_alternatif,nama)
    values ('".$id_alternatif."','".$nama."')";
    $hasil=$conn->query($sql);
    echo "<script>
    alert('berhasil di inputkan !');
    </script>";
  }}}
 ?>       
<!-- END SCRIPT INSERT-->  

<!--start inputan-->

<section class="panel">
  <header class="panel-heading"><b><h4 style="line-height: 2;text-align: left;">Tambah Alternatif</h4></b>
  </header>
  <div class="panel-body">
      <div class="form">
          <form class="form-validate form-horizontal " id="register_form" method="post" action="">
            <div class="add">
                <div class="form-group">
                  <label class="control-label col-lg-2">ID</label>
                  <div class="col-lg-2">
                      <input autofocus class=" form-control" name="id_alternatif" type="text" />
                  </div><br><br>
                  <label class="control-label col-lg-2">Nama</label>
                  <div class="col-lg-4">
                      <input class=" form-control" name="nama" type="text" /> 
                  </div>

                  <br><br>
                  

                  
                  <div class="col-lg-offset-2 col-lg-3">
                      <button class="btn btn-primary" type="submit" id="simpan" name="simpan"><i class="icon_drive"></i> Simpan</button>
                      <br><br><br>
                  </div>
      </div>
  </div>
 </section>
  <br><br><br>
<!--end inputan-->  

<!-- Advanced Table -->
<!--start table-->
<div style="overflow: hidden;float: right;clear: both;">

<form action="" method="post">
  
  <input style="border-color: #007aff;" type="text" name="keyword" size="25" placeholder="Masukan keyword..." autocomplete="off">
  <button style="background-color: #007aff; color: white;" type="submit" name="cari">Cari</button>

</form>
</div>
</div>
<!-- end pencarian -->              
<br><br>
<div class="well">                                  
  <div class="row">
      <div class="col-lg-12"> 
          <section class="panel">
              <!-- <header class="panel-heading"><b><h4 style="line-height: 2;text-align: center;">DATA ALTERNATIF</h4></b>
              </header> -->

<!-- pencarian -->
              <table style="text-align: center" class="table table-striped table-advance table-hover">
               <tbody>
      <tr>
         <th style="text-align: center"><i class="arrow_down_alt"></i> No</th>
         <th style="text-align: center"><i class="icon_id-2_alt"></i> ID</th>
         <th style="text-align: center"><i class="icon_id-2_alt"></i> Nama</th>
         <th style="text-align: center"><i class="icon_cogs"></i> Action</th>
      </tr>
<?php

$b = 0;
$sql = "SELECT*FROM tb_alternatif ORDER BY id_alternatif ASC";

//pencarian
if(isset($_POST["cari"])){
  $anu = $_POST['keyword'];
  $sql = "SELECT*FROM tb_alternatif WHERE nama LIKE '%$anu%'";
}
//end pencarian

$hasil = $conn->query($sql);
if($hasil->num_rows > 0){
while ($row = $hasil->fetch_row()) {
?>
    <tr>
       <td><?php echo $b = $b + 1; ?></td>
       <td><?=$row[0] ?></td>
       <td><?=$row[1] ?></td>
       <td>
        <div class="btn-group">
            <a class="btn btn-success" href="alt_ubah.php?id_alternatif=<?=$row[0]?>"><i class="icon_pencil-edit_alt"></i></a>
            <a class="btn btn-danger" href="alt_hapus.php?id_alternatif=<?=$row[0]?>"><i class="icon_close_alt2"></i></a>
        </div>
        </td>
    </tr> 
<?php }} ?>
               </tbody>
            </table>
          </section>
      </div>
  </div>
  </div>
                      </form>
                  </div>
              </div>
          </section>
      </div>
  </div>  
</div> 
<!--end table-->
                       
<br><br>


          </section>
          <div class="text-right">
          <div class="credits">
                <!-- 
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
                <!-- <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
            </div>
        </div>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
	<script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="js/xcharts.min.js"></script>
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/gdp-data.js"></script>	
	<script src="js/morris.min.js"></script>
	<script src="js/sparklines.js"></script>	
	<script src="js/charts.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});

  </script>



  </body>
</html>
