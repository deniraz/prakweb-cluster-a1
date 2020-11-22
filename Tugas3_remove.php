<?php
        $key = $_GET['keyhapus'];
        $koneksi = mysqli_connect("localhost","root","","data_mhs_web");
        $hasil = mysqli_query($koneksi, "DELETE FROM mahasiswa where nrp = '$key'");

        mysqli_query($koneksi,$hasil);
        echo '<script type="text/javascript">alert("Data Berhasil Dihapus!");</script>'; 
   ?>