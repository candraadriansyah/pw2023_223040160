<?php
require('functions.php');

$title = ' from tambah data';

// insert data jika tombol tambah di klik
if(isset($_POST['tambah'])) {
    // cek jika data berhsil di tambah

if(tambah($_POST) >0) {
echo "<script>
      alert('data berhasil di tambahkan');
      document.location.href = 'index.php';       
</script>";
}

}

require('views/tambah.view.php');
