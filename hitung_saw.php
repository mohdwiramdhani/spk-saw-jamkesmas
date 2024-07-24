<?php
include_once 'proses.php';
include_once 'includes/nilai.inc.php';
$pro3 = new Nilai($db);
$stmt3 = $pro3->readAll();
include_once 'includes/alternatif.inc.php';
$pro1 = new Alternatif($db);
$stmt1 = $pro1->readAll();
$stmt4 = $pro1->readAll();
include_once 'includes/kriteria.inc.php';
$pro2 = new Kriteria($db);
$stmt2 = $pro2->readAll();
?>

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

<style>
  thead{
background-color: #383434;
  }
  .table th{
    color: #fcfcfc;
  }
</style>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
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

       <!--sidebar start-->
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
          <h3 class="page-header"><i class="icon_datareport"></i> HITUNG SAW</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
            <li><i class="icon_datareport"></i>Hitung SAW</li>               
          </ol>
        </div>
      </div>            

<!--start table-->


  <div class="row">
<!-- Advanced Table -->

<!-- tempat tabel grafik di render -->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">

    <div class="well"><div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div></div>
                           
                      </section>
                  </div>
                </div><br>
<!--end tabel grafik-->

<!--start table 1 [MATRIKS X]-->                                   
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
        <header class="panel-heading">
          <b><h3 style="line-height: 2;text-align: center;font-weight: bold;">MATRIKS X</h3></b>
        </header>
        <table class="table table-striped table-advance table-hover">
         <thead>
            <tr>
               <th><i class="arrow_down_alt"></i> No</th>
               <th><i class="arrow_down_alt"></i> Alternatif</th>
               <th><i class="arrow_down_alt"></i> Sumber Penerangan</th>
               <th><i class="arrow_down_alt"></i> Jenis Lantai</th>
               <th><i class="arrow_down_alt"></i> Jenis Dinding</th>
               <th><i class="arrow_down_alt"></i> Jumlah Anggota Keluarga</th>
               <th><i class="arrow_down_alt"></i> Luas Tanah</th>
               <th><i class="arrow_down_alt"></i> Jenis Bahan Bakar Memasak</th>
            </tr>
          </thead>
<?php
$b = 0;
$sql = "SELECT*FROM tb_penilaian ORDER BY id_alternatif ASC";
$hasil = $conn->query($sql);
if($hasil->num_rows > 0){
while ($row = $hasil->fetch_row()) {
?>
            <tr>
               <td align="center"><?php echo $b = $b + 1; ?></td>
               <td><?=$row[1] ?></td>
               <td align="center"><?=$row[2]?></td>
               <td align="center"><?=$row[3]?></td>
               <td align="center"><?=$row[4]?></td>
               <td align="center"><?=$row[5]?></td>
               <td align="center"><?=$row[6]?></td>
               <td align="center"><?=$row[7]?></td>
            </tr> 
<?php }} ?>
         </tbody>
      </table>
                      </section>
                  </div>
                </div> <br>
<!--end table 1-->


<!--start table 2 [MATRIKS TERNORMALISASI SAW]-->                                   
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
    <header class="panel-heading">
      
          <b><h3 style="line-height: 2;text-align: center;font-weight: bold;">MATRIKS TERNORMALISASI SAW</h3></b>
    </header>
    <table class="table table-striped table-advance table-hover">
     <tbody>
      <thead>
        <tr>
           <th><i class="arrow_down_alt"></i> No</th>
           <th><i class="arrow_down_alt"></i> Alternatif</th>
           <th><i class="arrow_down_alt"></i> Sumber Penerangan</th>
           <th><i class="arrow_down_alt"></i> Jenis Lantai</th>
           <th><i class="arrow_down_alt"></i> Jenis Dinding</th>
           <th><i class="arrow_down_alt"></i> Jumlah Anggota Keluarga</th>
           <th><i class="arrow_down_alt"></i> Luas Tanah</th>
           <th><i class="arrow_down_alt"></i> Jenis Bahan Bakar Memasak</th>   
        </tr>
        </thead>
<?php
$b = 0;
$C1='';$C2='';$C3='';$C4='';$C5='';$C6='';$C7='';
  

  // RUMUS METODE SAW

  //Biaya
  $sql = "SELECT*FROM tb_penilaian ORDER BY luas ASC";
  $hasil=$conn->query($sql);
  $row = $hasil->fetch_row();
  $C5=$row[6]; 

  //Keuntungan
  $sql = "SELECT*FROM tb_penilaian ORDER BY sumber DESC";
  $hasil=$conn->query($sql);
  $row = $hasil->fetch_row();
  $C1=$row[2];

  $sql = "SELECT*FROM tb_penilaian ORDER BY lantai DESC";
  $hasil=$conn->query($sql);
  $row = $hasil->fetch_row();
  $C2=$row[3]; 

  $sql = "SELECT*FROM tb_penilaian ORDER BY dinding DESC";
  $hasil=$conn->query($sql);
  $row = $hasil->fetch_row();
  $C3=$row[4]; 

  $sql = "SELECT*FROM tb_penilaian ORDER BY jak DESC";
  $hasil=$conn->query($sql);
  $row = $hasil->fetch_row();
  $C4=$row[5];

  $sql = "SELECT*FROM tb_penilaian ORDER BY bahan DESC";
  $hasil=$conn->query($sql);
  $row = $hasil->fetch_row();
  $C6=$row[7];


$sql = "SELECT*FROM tb_penilaian";
$hasil = $conn->query($sql);
if($hasil->num_rows > 0){
  while ($row = $hasil->fetch_row()) {
?>
    <tr>
       <td align="center"><?php echo $b = $b + 1; ?></td>
       <td><?=$row[1] ?></td>
       <td align="center"><?=round($row[2]/$C1,2)  ?></td>
       <td align="center"><?=round($row[3]/$C2,2) ?></td>
       <td align="center"><?=round($row[4]/$C3,2) ?></td>
       <td align="center"><?=round($row[5]/$C4,2) ?></td>
       <td align="center"><?=round($C5/$row[6],2) ?></td>
       <td align="center"><?=round($row[7]/$C6,2) ?></td>
    </tr> 
<?php }} ?>
                           </tbody>
                        </table>
                      </section>
                  </div>
                </div><br>
<!--end table 2-->



<!--start table 3 [HITUNG SAW]--> 
              <div class="row">
                  <div class="col-sm-6">
                      <section class="panel">
     <header class="panel-heading">
      <b><h3 style="line-height: 2;text-align: center;font-weight: bold;">HITUNG SAW</h3></b>
    </header>
    <table class="table table-striped table-advance table-hover">
     <tbody>
      <thead>
        <tr>
           <th><i class="arrow_down_alt"></i> No</th>
           <th><i class="arrow_down_alt"></i> Alternatif</th>
           <th><i class="arrow_down_alt"></i> Nilai</th>   
        </tr>
        </thead>
<?php
$b = 0;
$B1='';$B2='';$B3='';$B4='';$B5='';$B6='';
$nilai='';
$nama=''; $x=0;
  
  $sql = "SELECT*FROM tb_kriteriasaw";
  $hasil=$conn->query($sql);
  if($hasil->num_rows > 0){
    $row = $hasil->fetch_row();
    $B1=$row[1];$B2=$row[2];$B3=$row[3];$B4=$row[4];$B5=$row[5];$B6=$row[6];
  }
  
  $sql = "truncate table tb_ranking";
  $hasil=$conn->query($sql);

  $sql = "SELECT*FROM tb_penilaian";
  $hasil = $conn->query($sql);
  if($hasil->num_rows > 0){
  while ($row = $hasil->fetch_row()) {
    $nilai = round((($row[2]/$C1)*$B1)+
      (($row[3]/$C2)*$B2)+
      (($row[4]/$C3)*$B3)+
      (($row[5]/$C4)*$B4)+
      (($C5/$row[6])*$B5)+
      (($row[7]/$C6)*$B6),3 );
    $nama = $row[1];
    $sql1 = "INSERT INTO tb_ranking(nama,nilai_akhir) values ('".$nama."','".$nilai."')";
    $hasil1=$conn->query($sql1);
  }}
  $sql = "SELECT*FROM tb_ranking";
  $hasil = $conn->query($sql);
  if($hasil->num_rows > 0){
    while ($row = $hasil->fetch_row()) {
  ?>
                                <tr>
                                   <td>&nbsp&nbsp <?php echo $b = $b + 1; ?></td>
                                   <td><?=$row[1] ?></td>
                                   <td><?=$row[2] ?></td>
                                </tr> 
  <?php }} ?>
                           </tbody>
                          </table>
                      </section>
                  </div>
<!--end table 3-->

<!--start table 4 [RANKING SAW]--> 
                  <div class="col-sm-6">
                      <section class="panel">
      <header class="panel-heading">

                  <b><h3 style="line-height: 2;text-align: center;font-weight: bold;">PERANKINGAN</h3></b>
      </header>
      <table class="table table-striped table-advance table-hover">
       <tbody>
        <thead>
          <tr>
             <th><i class="arrow_down_alt"></i> No</th>
             <th><i class="arrow_down_alt"></i> Alternatif</th>
             <th><i class="arrow_down_alt"></i> Nilai</th>   
          </tr>
          </thead>
<?php
$b = 0;
$sql = "SELECT*FROM tb_ranking ORDER BY nilai_akhir DESC";
$hasil = $conn->query($sql);
if($hasil->num_rows > 0){
while ($row = $hasil->fetch_row()) {
?>
          <tr>
             <td>&nbsp&nbsp <?php echo $b = $b + 1; ?></td>
             <td><?=$row[1] ?></td>
             <td><?=$row[2] ?></td>
          </tr> 
<?php }} ?>
       </tbody>
      </table>
                      </section>

                  </div>

              </div>

<!--end table 4-->

  </div>              
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


  <!-- SCRIPT UNTUK TAMPILKAN TABEL GRAFIK RANKING -->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  <script src="js/highcharts.js"></script>
  <script src="js/exporting.js"></script>
  <script>
  var chart1; // globally available
  $(document).ready(function() {
        chart1 = new Highcharts.Chart({
           chart: {
              renderTo: 'container2',
              type: 'column'
              // type bar
           },  
           title: {
              text: 'Grafik Ranking Penerimaan Jamkesmas '
           },
           xAxis: {
              categories: ['Alternatif']
           },
           yAxis: {
              title: {
                 text: 'Jumlah Nilai'
              }
           },
                series:            
              [
              <?php
              while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)){
                    ?>
                   //data yang diambil dari database dimasukan ke variable nama dan data
                   //
                    {
                        name: '<?php echo $row3['nama'] ?>',
                        data: [<?php echo $row3['nilai_akhir'] ?>]
                    },
                    <?php } ?>
              ]
        });
     });  
     </script>


  </body>
</html>
