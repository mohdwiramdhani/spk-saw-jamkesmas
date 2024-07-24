<?php  
include 'koneksi.php';
$no = $_GET['id']; 
$sql = "DELETE FROM tb_kriteriasaw WHERE no='$no'";
$hasil = $conn->query($sql);
echo "<script>
         window.location.href='bobot.php';
         alert('berhasil di hapus !'); 
         </script>";
?>
