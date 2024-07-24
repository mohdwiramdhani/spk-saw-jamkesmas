<?php 
include 'koneksi.php';
$id_alternatif = $_GET['id_alternatif'];
$sql = "DELETE FROM tb_penilaian WHERE id_alternatif='$id_alternatif'";
$hasil = $conn->query($sql);
echo "<script>
         window.location.href='penilaian.php';
         alert('berhasil di hapus !'); 
         </script>";
?>
