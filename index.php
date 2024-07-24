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
      
      .styled-table {
    margin-left: auto;
    margin-right: auto;
    border-collapse: collapse;

    font-size: 0.9em;
    font-family: sans-serif;
    width: 1110px;
    height: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: center;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table th{
  background-color: #009879;
  color: white;
  text-align: center;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f2f2f2;
    text-align: center;
}

.styled-table tbody tr:nth-of-type(odd) {
    background-color: #ffffff;
    text-align: center;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr:hover {
    font-weight: bold;
    color: #009879;
}

    </style>

    <!-- Bootstrap CSS -->    
 
    <!--external css-->
    <link rel="stylesheet" href="conto.css">
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
             
<br><br>

<!-- tempat tabel grafik di render -->
              
<!--end tabel grafik-->

<h1 style="font-weight: bold;font-size: 31px;text-align: center;text-decoration: underline;">DATA PENERIMAAN JAMINAN KESEHATAN MASYARAKAT</h1>

<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
   <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">

    <div class="well"><div id="container2" style="width: 1110px; height: 400px; margin: 0 auto"></div></div>
                           
                      </section>
                  </div>
                </div><br>
  </div>

  <div class="mySlides fade">

<div class="col-lg-12">
      <table class="styled-table">
       <tbody>
          <tr>
             <th><i class="arrow_down_alt"></i> No</th>
             <th><i class="arrow_down_alt"></i> Alternatif</th>
             <th><i class="arrow_down_alt"></i> Nilai</th>   
          </tr>
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

                  </div>
                           
                      </section>
                  </div>
                </div><br>
  </div>


<!--   <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat laudantium rerum provident nam labore error ratione. Iusto excepturi veritatis sequi animi tenetur natus, sint sapiente dicta, ipsam, facere enim quo.
Quisquam, doloribus? Aliquam non id mollitia voluptatibus beatae voluptate totam illo, repellat adipisci! Perferendis sint totam, cupiditate, in dolorum eum, non corporis id quo, cumque veniam nihil ullam tempora laboriosam.
Tempora iusto modi, dicta vero, eos omnis repellat ullam quas eveniet aliquam accusantium. Facere saepe aspernatur provident quas quae, deserunt animi praesentium quisquam. Commodi minima, natus nostrum sequi, aut accusamus?
Itaque vitae ab repudiandae quis, et officia placeat deserunt vel voluptates at minus iusto libero eaque, mollitia recusandae quisquam veritatis natus? Perferendis, ipsam laboriosam eaque voluptatum beatae magni. Autem, reprehenderit!
Veniam rem nam possimus officiis officia temporibus repudiandae reiciendis quos, aliquam, beatae delectus, eos corrupti soluta ducimus. Labore nemo aperiam nisi necessitatibus quam possimus iste sapiente, incidunt reprehenderit amet, laudantium!
Explicabo consequatur quisquam unde consectetur! Fuga blanditiis, nesciunt beatae provident odio, asperiores porro dolor! Placeat in delectus debitis rerum autem et hic numquam sit consequatur animi sapiente, quo enim, incidunt.
Culpa magni accusamus aspernatur laborum nostrum provident non velit molestias. Unde delectus mollitia tenetur commodi earum expedita veritatis quis dolor reiciendis nostrum vitae suscipit illum natus aliquid, vel quam voluptatibus.
Consectetur expedita reprehenderit delectus facilis pariatur a? Explicabo animi accusantium doloribus ipsam, unde tempora. Sit placeat nam excepturi dolore reiciendis natus quas ratione minus deleniti cum! Tempora est aperiam facilis!
    <div class="text">Caption Three</div>
  </div> -->




  

  <!-- Next and previous buttons -->
<!--   <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
 -->
<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
</div>





<script>
  

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}



</script>




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
  var chart;
  var chart1; // globally available
  $(document).ready(function() {
        chart = new Highcharts.Chart({
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


chart = new Highcharts.Chart({
           chart: {
              renderTo: 'container3',
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
                        name: '<?php echo $row3['nilai_akhir'] ?>',
                        data: [<?php echo $row3['nama'] ?>]
                    },
                    <?php } ?>
              ]
        });



     });  







     </script>


  </body>
</html>
